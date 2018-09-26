<?php
/*
Plugin Name: DT WooCommerce Page Builder
Plugin URI: http://dawnthemes.com/
Description: is the ideal Visual Composer add-on to effortlessly layout for WooCommerce and more.
Version: 3.3.3
Author: DawnThemes 
Author URI: http://dawnthemes.com/
Copyright @2017 by DawnThemes
License: License GNU General Public License version 2 or later
Text-domain: dt_woocommerce_page_builder
WC tested up to: 3.4.2
*/

// don't load directly
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

/**
 * Current DT WooCommerce Page Builder
 */
if ( ! defined( 'DT_WOO_PAGE_BUILDER_VERSION' ) ) {
	/**
	 *
	 */
	define( 'DT_WOO_PAGE_BUILDER_VERSION', '3.3.3' );
}

if ( ! defined( 'DT_WOO_PAGE_BUILDER_URL' ) )
	define( 'DT_WOO_PAGE_BUILDER_URL' , plugin_dir_url(__FILE__));

if ( ! defined( 'DT_WOO_PAGE_BUILDER_DIR' ) )
	define( 'DT_WOO_PAGE_BUILDER_DIR' , plugin_dir_path(__FILE__));

require_once DT_WOO_PAGE_BUILDER_DIR . 'includes/functions.php';


// Post type templates
include_once ( DT_WOO_PAGE_BUILDER_DIR . 'includes/post-type-product-tpl.php' );
include_once ( DT_WOO_PAGE_BUILDER_DIR . 'includes/post-type-cat-tpl.php' );
include_once ( DT_WOO_PAGE_BUILDER_DIR . 'includes/class-woo-extra-account-fields.php' );
include_once ( DT_WOO_PAGE_BUILDER_DIR . 'includes/class-woo-extra-account-fields-public.php' );

/*
 * Check is active require plugin
 */
if( ! function_exists('dtwpb_is_active') ){
	function dtwpb_is_active(){
		$active_plugins = (array) get_option( 'active_plugins' , array() );
		
		if( is_multisite() )
			$active_plugins = array_merge($active_plugins, get_site_option( 'active_sitewide_plugins', array() ) );
		
		return in_array( 'woocommerce/woocommerce.php', $active_plugins ) || array_key_exists( 'woocommerce/woocommerce.php', $active_plugins );
	}
}

global $dtwpb_product_page, $dtwpb_product_cat_custom_page, $dtwpb_edit_account_page;

class DTWPB_Manager{
	
	private $text_domain;
	
	//direct_checkout
	public $tmpCart = null;
	public $originCart = null;
	public $is_direct_checkout = false;
	
	public function __construct(){
		$this->text_domain = 'dt_woocommerce_page_builder';
		
		add_action('init', array(&$this, 'init'));
		add_action( 'after_setup_theme', array( &$this, 'include_template_functions' ), 11 );
	}
	
	public function init(){
		load_plugin_textdomain( 'dt_woocommerce_page_builder' , false, basename(DT_WOO_PAGE_BUILDER_DIR) . '/languages');
		
		// require woocommerce
		if( !dtwpb_is_active() ){
			add_action('admin_notices', array(&$this, 'woocommerce_notice'));
			return;
		}

		// require vc
		if(!defined('WPB_VC_VERSION')){
			add_action('admin_notices', array(&$this, 'showVcVersionNotice'));
			return;
		}
		
		require_once DT_WOO_PAGE_BUILDER_DIR .'includes/vc-class.php';
		
		if(is_admin()){
			include_once DT_WOO_PAGE_BUILDER_DIR . 'includes/admin.php';
			new DTWPB_Admin( $this->text_domain, DT_WOO_PAGE_BUILDER_VERSION );
		}else{
			add_action('wp_enqueue_scripts', array(&$this, 'enqueue_styles'));
			add_action('wp_enqueue_scripts',array(&$this,'enqueue_scripts'));
			
			//check - get tab id
			add_action('dtwpb_account_orders_in_tab', array($this,'dtwpb_account_orders_in_tab'),10,1);
			add_action('dtwpb_wc_get_endpoint_url', array($this, 'dtwpb_wc_get_endpoint_url'), 10, 1);
			add_action('dtwpb_woocommerce_account_view_order_backorder', array(&$this,'dtwpb_woocommerce_account_view_order_backorder'),10,1);
			
			// custom product page - can be overriden to yourtheme/woocommerce-page-builder-templates/content-single-product.php.
			add_filter('wc_get_template_part', array(&$this,'wc_get_template_part'),50,3);
			
			//Direct checkout - Allow you to implement direct checkout (skip cart page)
			add_action( 'template_redirect', array( $this, 'my_page_template_redirect'), 1, 0 );
			
			add_action('dtwpb_woocommerce_before_shop_loop', 'wc_print_notices');
			
			/*
			 * Filter wc_get_template - can be overriden to yourtheme
			 * - yourtheme/woocommerce-page-builder-templates/cart
			 * - yourtheme/woocommerce-page-builder-templates/checkout
			 * - yourtheme/woocommerce-page-builder-templates/myaccount
			 */ 
			add_filter('wc_get_template', array(&$this, 'filter_wc_get_template'), 99, 5);
			
			// Fixing WordPress 404 Custom Post Type Archive Pagination Issues with Posts Per Page
			add_action( 'pre_get_posts', array(&$this, 'custom_posts_per_page') );
		}

		add_filter( 'the_content', array(&$this, 'remove_dtwpb_woocommerce_actions'), 10 );
		
		add_filter( 'body_class', array(&$this, 'dtwpb_body_classes') );
	}

	public function remove_dtwpb_woocommerce_actions($content){
		if( 'page' !== get_post_type()){
        	remove_filter('the_content', 'dtwpb_woocommerce_before_custom_myaccount_page');
        	remove_filter('the_content', 'dtwpb_the_checkout_page_content');
	    }
	    return $content;
	}
	
	public function include_template_functions(){
		if( class_exists( 'WooCommerce' ) ):
			include_once( 'includes/dt-template-functions.php' );
			include_once( 'includes/dt-template-hooks.php' );
		endif;
	}
	
	/**
	 * 
	 * @param array $output
	 * @param WPBakeryShortCode $shortcode
	 * @param array $atts
	 * @return string
	 */
	function dtwpb_account_orders_in_tab($tab_id){
		global $dtwbp_my_account_current_order_id;
		if(empty($dtwbp_my_account_current_order_id))
			$dtwbp_my_account_current_order_id = $tab_id;
		add_filter('woocommerce_my_account_my_orders_actions', array($this,'woocommerce_my_account_my_orders_actions'),10,2);
	}
	function woocommerce_my_account_my_orders_actions($actions, $order){
		global $dtwbp_my_account_current_order_id;
		$new_actions = array();
		foreach ($actions as $key=>$action){
			// remove duplicate tab id
			$action['url'] = str_replace('#'.$dtwbp_my_account_current_order_id['tab_id'], '', $action['url']);
			$action['url']=$action['url'].'#'.$dtwbp_my_account_current_order_id['tab_id'];
			$new_actions[$key]=$action;
		}
		return $new_actions;
	}
	
	function dtwpb_wc_get_endpoint_url($tab_id){
		global $dtwpb_wc_get_endpoint_url_tab_id;
		if( empty($dtwpb_wc_get_endpoint_url_tab_id) )
			$dtwpb_wc_get_endpoint_url_tab_id = $tab_id;
		
		add_filter('woocommerce_get_endpoint_url', array($this,'dtwpb_woocommerce_get_endpoint_url'), 10,4);
	}
	
	function dtwpb_woocommerce_get_endpoint_url($url, $endpoint, $value, $permalink){
		global $dtwpb_wc_get_endpoint_url_tab_id;
		$url = $url . '#'.$dtwpb_wc_get_endpoint_url_tab_id['tab_id'];
		return $url;
	}
	
	public function dtwpb_woocommerce_account_view_order_backorder($myaccount_url){
		?>
		<h2><a href="<?php echo esc_url($myaccount_url);?>" title="<?php echo apply_filters('woocommerce_account_view_order_backorder', esc_html__('Back to Order list', 'dt_woocommerce_page_builder'));?>"><?php echo apply_filters('woocommerce_account_view_order_backorder', esc_html__('Back to Order list', 'dt_woocommerce_page_builder'));?></a></h2>
		<?php
	}
	
	public function woocommerce_notice(){
		$plugin  = get_plugin_data(__FILE__);
		echo '
		  <div class="updated">
		    <p>' . sprintf(__('<strong>%s</strong> requires <strong><a href="http://www.woothemes.com/woocommerce/" target="_blank">WooCommerce</a></strong> plugin to be installed and activated on your site.', 'dt_woocommerce_page_builder'), $plugin['Name']) . '</p>
		  </div>';
	}
	
	public function showVcVersionNotice(){
		$plugin_data = get_plugin_data(__FILE__);
		echo '
		<div class="updated">
          <p>'.sprintf(__('<strong>%s</strong> Compatible with <strong>Visual Composer</strong> plugin. So You can install <strong><a href="http://bit.ly/vcomposer" target="_blank">Visual Composer</a></strong> plugin to be used into Visual Composer page builder.', 'dt_woocommerce_page_builder'), $plugin_data['Name']).'</p>
        </div>';
	}
	
	public function enqueue_styles(){
		wp_enqueue_style('dtwpb', DT_WOO_PAGE_BUILDER_URL .'assets/css/style.css');
	}
	
	public function enqueue_scripts(){
		wp_enqueue_script('dtwpb',DT_WOO_PAGE_BUILDER_URL.'assets/js/script.js',array('jquery'),DT_WOO_PAGE_BUILDER_VERSION,true);
		
	}
	
	public function wc_get_template_part( $template, $slug, $name ){
		global $post, $dtwpb_product_page;
		
		if( $slug === 'content' && $name === 'single-product' ){
			
			$product_template_id = 0;
			
			if( $dtwpb_single_product_page = get_post_meta($post->ID, 'dtwpb_single_product_page', true) ):
				$product_template_id = $dtwpb_single_product_page;
			else:
				$terms = wp_get_post_terms($post->ID, 'product_cat');
				foreach ($terms as $term):
					if( $dtwpb_cat_product_page = get_woocommerce_term_meta( $term->term_id, 'dtwpb_cat_product_page', true ) ):
						$product_template_id = $dtwpb_cat_product_page;
					endif;
				endforeach;
			endif;
			
			// Get setting option
			if( $product_template_id == 0){
				$product_template_id = dtwpb_get_option('dtwpb_single_product_page_df', '');
			}
			
			// Overridden to yourtheme/woocommerce-page-builder-templates/content-single-product.php.
			$file 	= 'content-single-product.php';
			$find[] = 'woocommerce-page-builder-templates/' . $file;
			if( !empty($product_template_id) ){
				if($wpb_custom_css = get_post_meta( $product_template_id, '_wpb_post_custom_css', true )){
					echo '<style type="text/css">'.$wpb_custom_css.'</style>';
				}
				if($wpb_shortcodes_custom_css = get_post_meta( $product_template_id, '_wpb_shortcodes_custom_css', true )){
					echo '<style type="text/css">'.$wpb_shortcodes_custom_css.'</style>';
				}
				$dtwpb_product_page = get_post($product_template_id);
				if($dtwpb_product_page){
					
					self::dtwpb_single_product_remove_actions();
					
					$template       = locate_template( $find );
					if ( ! $template || ( ! empty( $status_options['template_debug_mode'] ) && current_user_can( 'manage_options' ) ) )
						$template = DT_WOO_PAGE_BUILDER_DIR . '/woocommerce-page-builder-templates/' . $file;
			
					return $template;
				}
			}
		}
		
		return $template;
	}
	
	public static function dtwpb_single_product_remove_actions(){
		// If theme Site | A Modern, Sharp eCommerce Theme by Select Themes
		remove_action( 'woocommerce_before_single_product_summary', 'bazaar_qodef_single_product_content_additional_tag_before', 5 );
		remove_action( 'woocommerce_before_single_product_summary', 'bazaar_qodef_single_product_summary_additional_tag_before', 30 );
		// If theme Bridge | Bridge Theme
		remove_action( 'woocommerce_before_single_product_summary', 'qode_single_product_summary_additional_tag_before', 30 );
		remove_action( 'woocommerce_after_single_product_summary', 'qode_single_product_summary_additional_tag_after', 5 );
		// If theme Impreza | 
		remove_action('woocommerce_before_main_content', 'us_woocommerce_before_main_content', 10);
		remove_action('woocommerce_after_main_content', 'us_woocommerce_after_main_content', 20);
	}
	
	public function my_page_template_redirect()
	{
		global $woocommerce, $post;
		
		$uri = $_SERVER['REQUEST_URI'];
		$postID = isset( $post ) ? $post->ID : '';
		$product_id = isset($_REQUEST['product_id']) ? $_REQUEST['product_id'] : $postID; 
		
		$checkout_url = wc_get_checkout_url();
		$pos = strpos($checkout_url, "/", strlen("https://"));
		$checkout_uri = substr($checkout_url, $pos, (strlen($checkout_url) - $pos));
		
		// check checkout page
		if ($checkout_uri == substr($uri, 0, strlen($checkout_uri))) { 

			$order_received_url = wc_get_endpoint_url( 'order-received', "", get_permalink( wc_get_page_id( 'checkout' ) ) );
			$pos = strpos($order_received_url, "/", strlen("https://"));
			$order_received_uri = substr($order_received_url, $pos, (strlen($order_received_url) - $pos));
			
			if ($order_received_uri == substr($uri, 0, strlen($order_received_uri))) return;
						
			$product_id = isset($_REQUEST['product_id']) ? $_REQUEST['product_id'] : '';
			$variation_id       = empty( $_REQUEST['variation_id'] ) ? '' : absint( wp_unslash( $_REQUEST['variation_id'] ) ); //die($variation_id);
			if( !empty($variation_id) ) $product_id = $variation_id;
			$quantity = isset($_REQUEST['dtwpb_quantity']) ? $_REQUEST['dtwpb_quantity'] : '';

			// product_id quantity PASS
			if ($product_id == "" || $quantity == "") return;

			if (sizeof( $woocommerce->cart->get_cart() ) == 0) {
				//.
				$woocommerce->cart->add_to_cart((int)$product_id, (int)$quantity);
			} else {
				// Direct Checkout.
				$originCart = $woocommerce->cart;
			
				$_SESSION["direct_checkout_origin_cart"] = serialize($originCart);
					
				$tmpCart = new WC_Cart();
					
				$tmpCart->add_to_cart((int)$product_id, (int)$quantity);
			
				$woocommerce->cart = $tmpCart;
				$woocommerce->cart->calculate_totals();
			
				$_SESSION["direct_checkout_tmp_cart"] = serialize($tmpCart);
				$_SESSION["is_direct_checkout"] = "true";
			}
		} else {
			// checkout
			$is_direct_checkout = isset($_SESSION["is_direct_checkout"]) ? $_SESSION["is_direct_checkout"] : "";
			if ($is_direct_checkout == "true") {
				$_originCart = isset($_SESSION["direct_checkout_origin_cart"]) ? $_SESSION["direct_checkout_origin_cart"] : "";
				$originCart = unserialize($_originCart);
				
				$woocommerce->cart = $originCart;
				$woocommerce->cart->calculate_totals();
					
				$_SESSION["is_direct_checkout"] = "";
				$_SESSION["direct_checkout_origin_cart"] = "";
				$_SESSION["direct_checkout_tmp_cart"] = "";
			}
		}
	}
	
	public function filter_wc_get_template($located, $template_name, $args, $template_path, $default_path){
		// Custom Product category
		global $wp_query, $dtwpb_product_cat_custom_page, $dtwpb_edit_account_page;
		
		if( is_product_category() && $template_name == 'archive-product.php'){
			$product_cat_custom_page_id = 0;
			
			$term_id = $wp_query->get_queried_object()->term_id;
			$product_cat_custom_page_id = get_woocommerce_term_meta($term_id, 'dtwpb_product_cat_custom_page', true);
			
			// Has parrent
			$parent = $wp_query->get_queried_object()->parent;
			if( empty($product_cat_custom_page_id) && ($parent &&  get_woocommerce_term_meta($parent, 'dtwpb_product_cat_custom_page_child', true)) ){
				$product_cat_custom_page_id = get_woocommerce_term_meta($parent, 'dtwpb_product_cat_custom_page', true);
			}
			
			// Get setting option Category Template Default
			if( empty($product_cat_custom_page_id) ){
				$product_cat_custom_page_id = dtwpb_get_option('dtwpb_product_cat_custom_page_id', '');
			}
			
			if( empty($product_cat_custom_page_id) ){
				return $located;
			}elseif ( !empty($product_cat_custom_page_id) ){
				// Overridden to yourtheme/woocommerce-page-builder-templates/archive-product.php.
				$file 	= 'archive-product.php';
				$find[] = 'woocommerce-page-builder-templates/' . $file;
				
				if( ($wpb_custom_css = get_post_meta( $product_cat_custom_page_id, '_wpb_post_custom_css', true )) ){
					echo '<style type="text/css">'.$wpb_custom_css.'</style>';
				}
				if($wpb_shortcodes_custom_css = get_post_meta( $product_cat_custom_page_id, '_wpb_shortcodes_custom_css', true )){
					echo '<style type="text/css">'.$wpb_shortcodes_custom_css.'</style>';
				}
				
				$dtwpb_product_cat_custom_page = get_post($product_cat_custom_page_id); 
				if($dtwpb_product_cat_custom_page){
					
					$located       = locate_template( $find );
					if ( ! $located || ( ! empty( $status_options['template_debug_mode'] ) && current_user_can( 'manage_options' ) ) )
						$located = DT_WOO_PAGE_BUILDER_DIR . '/woocommerce-page-builder-templates/' . $file;
						
					return $located;
				}
				
				
			}
		}elseif( isset($args['woocommerce-page-builder-custom-templates']) ){
			
			switch ($template_name){
				case 'cart/cart.php'; case 'cart/cart-empty.php'; case 'checkout/before-form-checkout.php'; case 'checkout/after-form-checkout.php'; case 'myaccount/form-login.php'; case 'myaccount/form-register.php':
					
					$find[] = 'woocommerce-page-builder-templates/' . $template_name;
					$located       = locate_template( $find );
					if ( ! $located || ( ! empty( $status_options['template_debug_mode'] ) && current_user_can( 'manage_options' ) ) )
						$located = DT_WOO_PAGE_BUILDER_DIR . '/woocommerce-page-builder-templates/' . $template_name;
						
					return $located; 
					break;
					
				default:
					return $located;
					break;
			}
		}elseif ( is_account_page() && $template_name == 'myaccount/form-edit-account.php' ){
			
			$dtwpb_set_edit_account_page_id = dtwpb_get_option('dtwpb_set_edit_account_page_id', '');
			if( !empty($dtwpb_set_edit_account_page_id) ){
				// Overridden to yourtheme/woocommerce-page-builder-templates/myaccount/form-edit-account.php - since ver 3.1.1
				$file 	= 'form-edit-account.php';
				$find[] = 'woocommerce-page-builder-templates/myaccount/' . $file;
				
				if( ($wpb_custom_css = get_post_meta( $dtwpb_set_edit_account_page_id, '_wpb_post_custom_css', true )) ){
					echo '<style type="text/css">'.$wpb_custom_css.'</style>';
				}
				if($wpb_shortcodes_custom_css = get_post_meta( $dtwpb_set_edit_account_page_id, '_wpb_shortcodes_custom_css', true )){
					echo '<style type="text/css">'.$wpb_shortcodes_custom_css.'</style>';
				}
				
				$dtwpb_edit_account_page = get_post($dtwpb_set_edit_account_page_id);
				if($dtwpb_edit_account_page){
					$located       = locate_template( $find );
					if ( ! $located || ( ! empty( $status_options['template_debug_mode'] ) && current_user_can( 'manage_options' ) ) )
						$located = DT_WOO_PAGE_BUILDER_DIR . '/woocommerce-page-builder-templates/myaccount/' . $file;
					
					return $located;
				}
			}
			
			return $located;
		}
		return $located;
	}
	
	/**
	 * Wordpress has a known bug with the posts_per_page value and overriding it using
	 * query_posts. The result is that although the number of allowed posts_per_page
	 * is abided by on the first page, subsequent pages give a 404 error and act as if
	 * there are no more custom post type posts to show and thus gives a 404 error.
	 *
	 * This fix is a nicer alternative to setting the blog pages show at most value in the
	 * WP Admin reading options screen to a low value like 1.
	 *
	 */
	public function custom_posts_per_page( $query ){
		global $wp_query;
		
		$term = $wp_query->get_queried_object();
		$term_id = ($term && !empty($term->term_id)) ? $term->term_id : 0;
		$product_cat_custom_page_id = get_woocommerce_term_meta($term_id, 'dtwpb_product_cat_custom_page', true);
		
		if ( !empty($product_cat_custom_page_id) && $query->is_archive('product_cat') ) {
			set_query_var('posts_per_page', apply_filters('dtwpb_custom_posts_per_page', get_option('posts_per_page')));
		}
	}
	
	public function dtwpb_body_classes( $classes ){
		global $dtwpb_product_cat_custom_page;
	
		if($dtwpb_product_cat_custom_page){
			$classes[] = 'dawnthemes-custom-woocommerce-product-category';
		}
	
		return $classes;
	}
	
}


new DTWPB_Manager();