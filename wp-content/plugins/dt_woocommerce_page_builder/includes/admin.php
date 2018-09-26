<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

class DTWPB_Admin{
	
	private $text_domain;
	private $version;
	private $title;
	private $options;
	
	public function __construct( $text_domain, $version ){
		$this->title = __( 'WooCommerce Page Builder', $text_domain );
		$this->text_domain = $text_domain;
		
		add_action ('admin_init', array(&$this,'init'));
		add_action ('admin_enqueue_scripts',array(&$this,'enqueue_styles'));
		add_action ('admin_enqueue_scripts',array(&$this,'enqueue_scripts'));
		add_action ('admin_menu', array(&$this,'addMenuPage') );
		add_filter( 'admin_footer_text', array( $this, 'admin_footer_text' ), 1 );
		
		// Product, checkout page meta data
		add_action('add_meta_boxes', array(&$this, 'add_meta_boxes'));
		add_action('save_post', array(&$this, 'save_product_meta_data'), 1, 2 );
		
		// Product category custom single product page
		add_action('product_cat_add_form_fields', array(&$this, 'add_category_fields'));
		add_action('product_cat_edit_form_fields', array(&$this, 'edit_category_fields'), 10, 2);
		add_action('created_term', array(&$this, 'save_category_fields'), 10, 3);
		add_action('edit_term', array(&$this, 'save_category_fields'), 10, 3);
		
	}
	
	public function init(){
		register_setting('dtwpb_settings', 'dtwpb_settings');
	}
	
	public function enqueue_styles(){
		wp_enqueue_style('dtwpb-admin', DT_WOO_PAGE_BUILDER_URL . 'assets/css/admin.css');
		wp_enqueue_style('bootstrap-tabs', DT_WOO_PAGE_BUILDER_URL .'assets/css/bootstrap-tabs.css');
	}
	
	public function enqueue_scripts(){
		wp_enqueue_style( 'wp-color-picker');
		wp_enqueue_script( 'wp-color-picker');
		wp_enqueue_script('bootstrap-tab', DT_WOO_PAGE_BUILDER_URL.'assets/js/bootstrap-tab.js');
		wp_register_script( 'dtwpb-admin',DT_WOO_PAGE_BUILDER_URL. 'assets/js/admin.js', array('jquery'),DT_WOO_PAGE_BUILDER_VERSION,false);
		wp_enqueue_script( 'dtwpb-admin' );
		wp_enqueue_style('jquery-chosen', DT_WOO_PAGE_BUILDER_URL. 'assets/css/chosen/chosen.css');
		wp_enqueue_script( 'jquery-chosen', DT_WOO_PAGE_BUILDER_URL . '/assets/js/chosen/chosen.jquery.js', array( 'jquery' ), '1.1.0', true );
	}
	
	public function addMenuPage() {
		add_submenu_page( 'woocommerce', $this->title, $this->title, 'manage_options', 'dtwpb_settings', array( $this, 'MenuPageRender' ) );
	}
	
	public function MenuPageRender(){
		
		?>
				<div class="wrap dtwpb_settings-panel dt_pg_tabs">
					<div id="icon-options-general" class="icon32">
						<br>
					</div>
					<form method="post" action="options.php" id="tnpg_form" name="tnpg_form">
						<?php settings_fields('dtwpb_settings')?>
						<p>
							<button type="submit" id="submit-dtwpb-form" class="button button-primary "><?php esc_html_e('SAVE CHANGES','dt_woocommerce_page_builder');?></button>
						</p>
						<!-- Tabs Options -->
						<div class="dtwpb-tabs-wrap">
							<!-- Nav tabs -->
							<ul class="nav nav-tabs" id="dtwpb-tabs"> 
								<li><a href="#dtwpb-general" data-toggle="tab"><?php esc_html_e('General','dt_woocommerce_page_builder');?></a></li>
								<li><a href="#dtwpb-product" data-toggle="tab"><?php esc_html_e('Product Page','dt_woocommerce_page_builder');?></a></li>
								<li><a href="#dtwpb-category" data-toggle="tab"><?php esc_html_e('Category Page','dt_woocommerce_page_builder');?></a></li>
								<li><a href="#dtwpb-checkout" data-toggle="tab"><?php esc_html_e('Checkout','dt_woocommerce_page_builder');?></a></li>
								<li><a href="#dtwpb-accounts" data-toggle="tab"><?php esc_html_e('Accounts','dt_woocommerce_page_builder');?></a></li>
								
								<li class="pl-link-service"><a href="https://codecanyon.net/item/woocommerce-page-builder/15534462/support" target="_blank"><?php esc_html_e('Support','dt_woocommerce_page_builder');?></a></li>
							</ul>
							
							<!-- Tab panes -->
							<div class="tab-content">
								<!-- wpplOptions tab -->
								<div class="tab-pane fade" id="dtwpb-general">
									<div>
										<p>We would like to thank you for purchasing <strong>WooCommerce Page Builder</strong>! We are very pleased you have chosen <strong>WooCommerce Page Builder </strong>for your website, you will not be disappointed!<br/>Before getting started, be sure to always refer:</strong>
                        				</p>
                        				<ul class="dtwpb_features">
                        					<li><a href="http://doc.dawnthemes.com/woocommerce-page-builder/" target="blank"><?php esc_html_e('Online Documentation','dt_woocommerce_page_builder');?></a></li>
                        					<li><a href="https://www.youtube.com/watch?v=HIJ0-u67Aeo&list=PL_HbKbJsShUhl9s6GyBPRvZ6glDBpq6k4" target="blank"><?php esc_html_e('Video Tutorials','dt_woocommerce_page_builder');?></a></li>
                        				</ul>
									</div>
								</div>
								
								<div class="tab-pane fade" id="dtwpb-product">
									<table class="form-table">
										<tbody>
											<?php $dtwpb_product_tpl_type_page = dtwpb_get_option('dtwpb_product_tpl_type_page', 'dtwpb_product_tpl');?>
											<tr valign="top">
												<th scope="row"><label for="dtwpb_product_tpl_type_page"><?php esc_html_e('Template Type', $this->text_domain) ?></label></th>
												<td>
												<select name="dtwpb_settings[dtwpb_product_tpl_type_page]">
													<option value="dtwpb_product_tpl" <?php selected( $dtwpb_product_tpl_type_page, 'dtwpb_product_tpl', true )?> ><?php esc_html_e('Product Custom Template', $this->text_domain); ?></option>
													<option value="page" <?php selected( $dtwpb_product_tpl_type_page, 'page', true )?>><?php esc_html_e('Page Custom Template', $this->text_domain); ?></option>
												</select>
												<p class="description"><?php esc_html_e('Enable Custom Product Template for Pages. By default Product Custom Template is available for posttype dtwpb_product_tpl only. (Hit SAVE CHANGES top apply)', $this->text_domain); ?></p>
												</td>
											</tr>
											<tr valign="top">
												<th scope="row"><label for="dtwpb_single_product_page_df"><?php esc_html_e('Product Template Default', $this->text_domain) ?></label></th>
												<td>
												<?php 
												$product_tpl =  ($dtwpb_product_tpl_type_page == 'page') ? 'page' : 'dtwpb_product_tpl';
												
												$products_tpl = get_posts(array('post_type'=> $product_tpl, 'post_status'=> 'publish,private', 'suppress_filters' => false, 'posts_per_page'=>-1));
												echo '<select name="dtwpb_settings[dtwpb_single_product_page_df]" id="dtwpb_single_product_page_df" class="" data-placeholder="'.__( 'Select a product template&hellip;','dt_woocommerce_page_builder').'">';
												echo '<option value = "" >'. __( '-- None (Use theme layout) --','dt_woocommerce_page_builder') . '</option>';
												foreach ($products_tpl as $p_tpl) {
													echo '<option value="'. $p_tpl->ID .'" '. selected( dtwpb_get_option('dtwpb_single_product_page_df', ''), $p_tpl->ID, false ) .'>'. $p_tpl->post_title. '</option>';
												}
												echo '</select>';
												
												?>
												<p class="description"><?php esc_html_e('Select Product Template for all Products.', $this->text_domain); echo sprintf( __( ' %sCreate new%s product template.', 'dt_woocommerce_page_builder' ), '<a href="' . esc_url( admin_url( 'post-new.php?post_type='.$product_tpl ) ) . '" target="_blank">', '</a>' ); ?></p>
												</td>					
											</tr>
											
										</tbody>
									</table>
								</div>
								
								<div class="tab-pane fade" id="dtwpb-category">
									<table class="form-table">
										<tbody>
											<?php $dtwpb_cat_tpl_type_page = dtwpb_get_option('dtwpb_cat_tpl_type_page', 'dtwpb_cat_tpl');?>
											<tr valign="top">
												<th scope="row"><label for="dtwpb_cat_tpl_type_page"><?php esc_html_e('Template Type', $this->text_domain) ?></label></th>
												<td>
												<select name="dtwpb_settings[dtwpb_cat_tpl_type_page]">
													<option value="dtwpb_cat_tpl" <?php selected( $dtwpb_cat_tpl_type_page, 'dtwpb_cat_tpl', true )?> ><?php esc_html_e('Product Category Custom Template', $this->text_domain); ?></option>
													<option value="page" <?php selected( $dtwpb_cat_tpl_type_page, 'page', true )?>><?php esc_html_e('Page Custom Template', $this->text_domain); ?></option>
												</select>
												<p class="description"><?php esc_html_e('Enable Custom Category Template for Pages. By default Category Template is available for posttype dtwpb_product_tpl only. (Hit SAVE CHANGES top apply)', $this->text_domain); ?></p>
												</td>
											</tr>
											<tr valign="top">
												<th scope="row"><label for="dtwpb_product_cat_custom_page_id"><?php esc_html_e('Category Template Default', $this->text_domain) ?></label></th>
												<td>
												<?php 
												$product_cat_tpl = ($dtwpb_cat_tpl_type_page == 'page') ? 'page' : 'dtwpb_cat_tpl';
												
												$cat_tpl = get_posts(array('post_type'=> $product_cat_tpl, 'post_status'=> 'publish,private', 'suppress_filters' => false, 'posts_per_page'=>-1));
												echo '<select name="dtwpb_settings[dtwpb_product_cat_custom_page_id]" id="dtwpb_product_cat_custom_page_id" class="" data-placeholder="'.__( 'Select a category template&hellip;','dt_woocommerce_page_builder').'">';
												echo '<option value = "" >'. __( '-- None (Use theme layout) --','dt_woocommerce_page_builder') . '</option>';
												foreach ($cat_tpl as $c_tpl) {
													echo '<option value="'. $c_tpl->ID .'" '. selected( dtwpb_get_option('dtwpb_product_cat_custom_page_id', ''), $c_tpl->ID, false ) .'>'. $c_tpl->post_title. '</option>';
												}
												echo '</select>';
												
												?>
												<p class="description"><?php _e('Select Category Template Or you can go to setting <strong>Category Custom Page</strong> option for each category.', $this->text_domain); echo sprintf( __( ' %sCreate new%s category template.', 'dt_woocommerce_page_builder' ), '<a href="' . esc_url( admin_url( 'post-new.php?post_type='.$product_cat_tpl ) ) . '" target="_blank">', '</a>' ); ?></p>
												</td>							
											</tr>
											
										</tbody>
									</table>
								</div>
								
								<div class="tab-pane fade" id="dtwpb-checkout">
									<table class="form-table">
										<tbody>
											<tr valign="top">
												<th scope="row"><label for="dtwpb_cart_page_id"><?php esc_html_e('Cart Page Template', $this->text_domain) ?></label></th>
												<td>
												<?php
												$cart_page_id = dtwpb_get_option('dtwpb_cart_page_id', '');
												$cart_page_args = array(
													'post_status'	=> 'publish',
													'name'			=> 'dtwpb_settings[dtwpb_cart_page_id]',
													'show_option_none' => esc_html__('None', 'dt_woocommerce_page_builder'),
													'echo'			=> false,
													'selected'		=> absint($cart_page_id),
													'default'		=> '',
												);
												echo str_replace(' id=', " data-placeholder='" . __( 'Select a page&hellip;', 'dt_woocommerce_page_builder') .  "' class='' id=", wp_dropdown_pages( $cart_page_args ) );
												
												?>
												<p class="description"><?php esc_html_e('Select Cart page custom template. Remove the [woocommerce_cart] shortcode standard default when use the custom shortcodes of WooCommerce Page Builder'); ?></p>
												</td>					
											</tr>
											<tr valign="top">
												<th scope="row"><label for="dtwpb_checkout_page_id"><?php esc_html_e('Checkout Page Template', $this->text_domain) ?></label></th>
												<td>
												<?php
												$checkout_page_id = dtwpb_get_option('dtwpb_checkout_page_id', '');
												$checkout_page_args = array(
													'post_status'	=> 'publish',
													'name'			=> 'dtwpb_settings[dtwpb_checkout_page_id]',
													'show_option_none' => esc_html__('None', 'dt_woocommerce_page_builder'),
													'echo'			=> false,
													'selected'		=> absint($checkout_page_id),
													'default'		=> '',
												);
												echo str_replace(' id=', " data-placeholder='" . __( 'Select a page&hellip;', 'dt_woocommerce_page_builder') .  "' class='' id=", wp_dropdown_pages( $checkout_page_args ) );
												
												?>
												<p class="description"><?php esc_html_e('Select Checkout page custom template. Remove the [woocommerce_checkout] shortcode standard default when use the custom shortcodes of WooCommerce Page Builder'); ?></p>
												</td>					
											</tr>
											
										</tbody>
									</table>
								</div>
								
								<div class="tab-pane fade" id="dtwpb-accounts">
									<table class="form-table">
										<tbody>
											<tr valign="top">
												<th scope="row"><label for="dtwpb_woocommerce_myaccount_before_login_page_id"><?php esc_html_e('My Account Before Login Page Template', $this->text_domain) ?></label></th>
												<td>
												<?php
												$myaccount_login_page_id = dtwpb_get_option('dtwpb_woocommerce_myaccount_before_login_page_id', '');
												$myaccount_login_page_args = array(
													'post_status'	=> 'publish',
													'name'			=> 'dtwpb_settings[dtwpb_woocommerce_myaccount_before_login_page_id]',
													'show_option_none' => esc_html__('None', 'dt_woocommerce_page_builder'),
													'echo'			=> false,
													'selected'		=> absint($myaccount_login_page_id),
													'default'		=> '',
												);
												echo str_replace(' id=', " data-placeholder='" . __( 'Select a page&hellip;', 'dt_woocommerce_page_builder') .  "' class='' id=", wp_dropdown_pages( $myaccount_login_page_args ) );
												
												?>
												<p class="description"><?php esc_html_e('Custom page before user login. Go to build a custom MyAccount Before login page, use the elements in the "Woo MyAccount Before Login". You can also add the steps/description how to create an account for this custom page.'); ?></p>
												</td>					
											</tr>
											
											<tr valign="top">
												<th scope="row"><label for="dtwpb_myaccount_page_id"><?php esc_html_e('My Account Page Template', $this->text_domain) ?></label></th>
												<td>
												<?php
												$myaccount_page_id = dtwpb_get_option('dtwpb_myaccount_page_id', '');
												$myaccount_page_args = array(
													'post_status'	=> 'publish',
													'name'			=> 'dtwpb_settings[dtwpb_myaccount_page_id]',
													'show_option_none' => esc_html__('None', 'dt_woocommerce_page_builder'),
													'echo'			=> false,
													'selected'		=> absint($myaccount_page_id),
													'default'		=> '',
												);
												echo str_replace(' id=', " data-placeholder='" . __( 'Select a page&hellip;', 'dt_woocommerce_page_builder') .  "' class='wc-enhanced-select' id=", wp_dropdown_pages( $myaccount_page_args ) );
												
												?>
												<p class="description"><?php esc_html_e('Select My Account page custom template. Remove the [woocommerce_my_account] shortcode standard default when use the custom shortcodes of WooCommerce Page Builder'); ?></p>
												</td>					
											</tr>
											
											<tr valign="top">
												<th scope="row"><label for="dtwpb_set_edit_account_page_id"><?php esc_html_e('Account Details Template', $this->text_domain) ?></label></th>
												<td>
													<?php 
													$product_edit_account_tpl = 'dtwooaccountdetails';
													
													$accdetails_tpl = get_posts(array('post_type'=> $product_edit_account_tpl, 'post_status'=> 'publish,private', 'suppress_filters' => false, 'posts_per_page'=>-1));
													echo '<select name="dtwpb_settings[dtwpb_set_edit_account_page_id]" id="dtwpb_set_edit_account_page_id" class="" data-placeholder="'.__( 'Select Account Details template&hellip;','dt_woocommerce_page_builder').'">';
													echo '<option value = "" >'. __( '-- None (Use theme layout) --','dt_woocommerce_page_builder') . '</option>';
													foreach ($accdetails_tpl as $ac_tpl) {
														echo '<option value="'. $ac_tpl->ID .'" '. selected( dtwpb_get_option('dtwpb_set_edit_account_page_id', ''), $ac_tpl->ID, false ) .'>'. $ac_tpl->post_title. '</option>';
													}
													echo '</select>';
													
													?>
													<p class="description"><?php _e('Select Account Details Template.', $this->text_domain); echo sprintf( __( ' %sCreate new%s Account Details template.', 'dt_woocommerce_page_builder' ), '<a href="' . esc_url( admin_url( 'post-new.php?post_type=dtwooaccountdetails' ) ) . '" target="_blank">', '</a>' ); ?></p>
												</td>					
											</tr>
											
										</tbody>
									</table>
								</div>
								
								
							</div> 
							
						</div> <!-- //Tab options -->
					</form>
				</div>		
				
				<script type="text/javascript">
					jQuery(document).ready(function($){
						$('#dtwpb-tabs a:first').tab('show');
						
					});
				</script>
			<?php
			dtwpb_update_options();
		}
	
		/**
		 * Change the admin footer text on WooCommerce admin pages.
		 *
		 * @since  2.3
		 * @param  string $footer_text
		 * @return string
		 */
		public function admin_footer_text( $footer_text ) {
			if ( ! function_exists( 'dtwpb_get_screen_ids' ) ) {
				return $footer_text;
			}
			$current_screen = get_current_screen();
			$dtwpb_pages       = dtwpb_get_screen_ids();
		
			// Set only WC pages.
			$dtwpb_pages = array_diff( $dtwpb_pages, array( 'profile', 'user-edit' ) );
		
			// Check to make sure we're on a WooCommerce admin page.
			if ( isset( $current_screen->id ) && in_array( $current_screen->id, $dtwpb_pages ) ) {
				// Change the footer text
					$footer_text = sprintf(
						/* translators: 1: WooCommerce 2:: five stars */
						__( 'If you like %1$s please leave us a %2$s rating. A huge thanks in advance!', 'dt_woocommerce_page_builder' ),
						sprintf( '<strong>%s</strong>', esc_html__( 'WooCommerce Page Builder', 'dt_woocommerce_page_builder' ) ),
						'<a href="https://codecanyon.net/item/woocommerce-page-builder/15534462" target="_blank" class="wc-rating-link" data-rated="' . esc_attr__( 'Thanks :)', 'dt_woocommerce_page_builder' ) . '">&#9733;&#9733;&#9733;&#9733;&#9733;</a>'
					);
			}
		
			return $footer_text;
		}
		
	public function add_meta_boxes(){
		global $post;
		
		add_meta_box('dtwpb-single-product-meta-box', __( 'Product Custom Page', 'dt_woocommerce_page_builder'), array(&$this, 'add_product_meta_box'), 'product', 'side');
		
	}
	
	public function add_product_meta_box(){
		
		$product_id = get_the_ID();
		$page_id	= get_post_meta($product_id, 'dtwpb_single_product_page', true);
		
		$args = array(
			'post_status'	=> 'publish,private',
			'name'			=> 'dtwpb_single_product_page',
			'show_option_none' => esc_html__('None', 'dt_woocommerce_page_builder'),
			'echo'			=> false,
			'selected'		=> absint($page_id),
			'default'		=> '',
		);
		//echo str_replace(' id=', " data-placeholder='" . __( 'Select a page&hellip;', 'dt_woocommerce_page_builder') .  "' class='' id=", wp_dropdown_pages( $args ) );
		
		$dtwpb_product_tpl_type_page = dtwpb_get_option('dtwpb_product_tpl_type_page', 'dtwpb_product_tpl');

		$post_type = ($dtwpb_product_tpl_type_page == 'page') ? 'page' : 'dtwpb_product_tpl';
		$post_type_object = get_post_type_object($post_type);
		$label = $post_type_object->label;
		$selected = absint($page_id);
		$posts = get_posts(array('post_type'=> $post_type, 'post_status'=> 'publish,private', 'suppress_filters' => false, 'posts_per_page'=>-1));
		echo '<select name="dtwpb_single_product_page" id="dtwpb_single_product_page" class="" data-placeholder="'.__( 'Select a template&hellip;','dt_woocommerce_page_builder').'">';
		echo '<option value = "" >'. __( 'Default','dt_woocommerce_page_builder') . '</option>';
		foreach ($posts as $post) {
			echo '<option value="'. $post->ID .'"'. ($selected == $post->ID ? ' selected="selected"' : '') .'>'. $post->post_title. '</option>';
		}
		echo '</select>';
		?>
		<p class="description"><?php echo sprintf( __( 'Select a product template. Default is use in %sProduct Template Default%s setting.', 'dt_woocommerce_page_builder' ), '<a href="' . esc_url( admin_url( 'admin.php?page=dtwpb_settings' ) ) . '" target="_blank">', '</a>' ); ?></p>
	<?php
	}
	
	
	public function save_product_meta_data($post_id,$post){
		if( empty($post_id) || empty($post) )
			return;
		
		// Dont' save meta boxes for revisions or autosaves
		if ( defined( 'DOING_AUTOSAVE' ) || is_int( wp_is_post_revision( $post ) ) || is_int( wp_is_post_autosave( $post ) ) ) {
			return;
		}
		
		// Check the post being saved == the $post_id to prevent triggering this call for other save_post events
		if ( empty( $_POST['post_ID'] ) || $_POST['post_ID'] != $post_id ) {
			return;
		}
		
		// Check user has permission to edit
		if ( ! current_user_can( 'edit_post', $post_id ) ) {
			return;
		}
		
		if(!empty($_POST['dtwpb_single_product_page'])){
			update_post_meta( $post_id, 'dtwpb_single_product_page', absint($_POST['dtwpb_single_product_page']) );
		}else{
			delete_post_meta( $post_id, 'dtwpb_single_product_page');
		}
	}
	
	public function add_category_fields(){
		?>
		<div class="form-field">
			<label for="dtwpb_cat_product_page"><?php _e( 'Product Custom Page', 'dt_woocommerce_page_builder' ); ?></label>
			<?php
			$product_type = dtwpb_get_option('dtwpb_product_tpl_type_page', 'dtwpb_product_tpl');
			$post_type_object = get_post_type_object($product_type);
			$label = $post_type_object->label;
			
			$posts = get_posts(array('post_type'=> $product_type, 'post_status'=> 'publish,private', 'suppress_filters' => false, 'posts_per_page'=>-1));
			echo '<select name="dtwpb_cat_product_page" id="dtwpb_cat_product_page" class="enhanced chosen_select_nostd" data-placeholder="'.__( 'Select a product template&hellip;','dt_woocommerce_page_builder').'">';
			echo '<option value = "" >'. __( 'None','dt_woocommerce_page_builder') . '</option>';
			foreach ($posts as $post) {
				echo '<option value="'. $post->ID .'">'. $post->post_title. '</option>';
			}
			echo '</select>';
			?>
			<p class="description"><?php echo sprintf( __( 'Select a product template or %sCreate new%s template. This template will be applied for all products of the category.', 'dt_woocommerce_page_builder' ), '<a href="' . esc_url( admin_url( 'post-new.php?post_type='.$product_type ) ) . '" target="_blank">', '</a>' ); ?></p>
		</div>
		<div class="form-field term-thumbnail-wrap">
			<label><?php esc_html_e( 'Category Thumbnail', 'dt_woocommerce_page_builder' ); ?></label>
			<div id="dtwpb_product_cat_thumbnail" style="float: left; margin-right: 10px;"><img src="<?php echo esc_url( wc_placeholder_img_src() ); ?>" width="60px" /></div>
			<div style="line-height: 60px;">
				<input type="hidden" id="dtwpb_product_cat_thumbnail_id" name="dtwpb_product_cat_thumbnail_id" />
				<button type="button" class="upload_image_button button"><?php esc_html_e( 'Upload/Add image', 'dt_woocommerce_page_builder' ); ?></button>
				<button type="button" class="remove_image_button button"><?php esc_html_e( 'Remove image', 'dt_woocommerce_page_builder' ); ?></button>
			</div>
			<script type="text/javascript">
		
				// Only show the "remove image" button when needed
				if ( ! jQuery( '#dtwpb_product_cat_thumbnail_id' ).val() ) {
					jQuery( '.remove_image_button' ).hide();
				}
		
				// Uploading files
				var file_frame;
		
				jQuery( document ).on( 'click', '.upload_image_button', function( event ) {
					event.preventDefault();
					// If the media frame already exists, reopen it.
					if ( file_frame ) {
						file_frame.open();
						return;
					}
		
					// Create the media frame.
					file_frame = wp.media.frames.downloadable_file = wp.media({
						title: '<?php esc_html_e( "Choose an image", "dt_woocommerce_page_builder" ); ?>',
						button: {
							text: '<?php esc_html_e( "Use image", "dt_woocommerce_page_builder" ); ?>'
						},
						multiple: false
					});
		
					// When an image is selected, run a callback.
					file_frame.on( 'select', function() {
						var attachment           = file_frame.state().get( 'selection' ).first().toJSON();
						var attachment_thumbnail_url = attachment.url;
		
						jQuery( '#dtwpb_product_cat_thumbnail_id' ).val( attachment.id );
						jQuery( '#dtwpb_product_cat_thumbnail' ).find( 'img' ).attr( 'src', attachment_thumbnail_url );
						jQuery( '.remove_image_button' ).show();
					});
		
					// Finally, open the modal.
					file_frame.open();
				});
		
				jQuery( document ).on( 'click', '.remove_image_button', function() {
					jQuery( '#dtwpb_product_cat_thumbnail' ).find( 'img' ).attr( 'src', '<?php echo esc_js( wc_placeholder_img_src() ); ?>' );
					jQuery( '#dtwpb_product_cat_thumbnail_id' ).val( '' );
					jQuery( '.remove_image_button' ).hide();
					return false;
				});
		
				jQuery( document ).ajaxComplete( function( event, request, options ) {
					if ( request && 4 === request.readyState && 200 === request.status
						&& options.data && 0 <= options.data.indexOf( 'action=add-tag' ) ) {
		
						var res = wpAjax.parseAjaxResponse( request.responseXML, 'ajax-response' );
						if ( ! res || res.errors ) {
							return;
						}
						// Clear Thumbnail fields on submit
						jQuery( '#dtwpb_product_cat_thumbnail' ).find( 'img' ).attr( 'src', '<?php echo esc_js( wc_placeholder_img_src() ); ?>' );
						jQuery( '#dtwpb_product_cat_thumbnail_id' ).val( '' );
						jQuery( '.remove_image_button' ).hide();
						// Clear Display type field on submit
						jQuery( '#display_type' ).val( '' );
						return;
					}
				} );
		
			</script>
			<div class="clear"></div>
		</div> 
		<div class="form-field">
			<label for="dtwpb_product_cat_custom_page"><?php esc_html_e( 'Category Custom Page', 'dt_woocommerce_page_builder' ); ?></label>
			<?php 
			$cat_type = dtwpb_get_option('dtwpb_cat_tpl_type_page', 'dtwpb_cat_tpl');
			$post_type_object = get_post_type_object($cat_type);
			$label = $post_type_object->label;
				
			$posts = get_posts(array('post_type'=> $cat_type, 'post_status'=> 'publish,private', 'suppress_filters' => false, 'posts_per_page'=>-1));
			echo '<select name="dtwpb_product_cat_custom_page" id="dtwpb_product_cat_custom_page" class="enhanced chosen_select_nostd" data-placeholder="'.esc_attr__( 'Select a category template&hellip;','dt_woocommerce_page_builder').'">';
			echo '<option value = "" >'. esc_html__( 'None','dt_woocommerce_page_builder') . '</option>';
			foreach ($posts as $post) {
				echo '<option value="'. $post->ID .'">'. $post->post_title. '</option>';
			}
			echo '</select>';
			?>
			<input type="checkbox" name="dtwpb_product_cat_custom_page_child" value="1">
				<span><?php _e( 'Apply category template for the Child Categories', 'dt_woocommerce_page_builder' ); ?></span>
			<p class="description"><?php echo sprintf( __( 'Select a category template or %sCreate new%s template.', 'dt_woocommerce_page_builder' ), '<a href="' . esc_url( admin_url( 'post-new.php?post_type='.$cat_type ) ) . '" target="_blank">', '</a>' ); ?></p>
		</div>
		<div class="form-field">
			<br/>
		</div>
		<?php
	}
	
	public function edit_category_fields( $term, $taxonomy ) {
		$dtwpb_cat_product_page = get_woocommerce_term_meta( $term->term_id, 'dtwpb_cat_product_page', true );
		$dtwpb_product_cat_custom_page = get_woocommerce_term_meta( $term->term_id, 'dtwpb_product_cat_custom_page', true );
		$dtwpb_product_cat_custom_page_child = get_woocommerce_term_meta( $term->term_id, 'dtwpb_product_cat_custom_page_child', true );

		$thumbnail_id 	= absint( get_woocommerce_term_meta( $term->term_id, 'dtwpb_product_cat_thumbnail_id', true) ) ? get_woocommerce_term_meta( $term->term_id, 'dtwpb_product_cat_thumbnail_id', true) : '';
			
		if ( $thumbnail_id ) {
			$image = wp_get_attachment_url( $thumbnail_id );
		} else {
			$image = wc_placeholder_img_src();
		}
		?>
		<tr class="form-field">
			<th scope="row" valign="top"><label><?php _e( 'Product Custom Page', 'dt_woocommerce_page_builder' ); ?></label></th>
			<td>
				<?php
				$product_type = dtwpb_get_option('dtwpb_product_tpl_type_page', 'dtwpb_product_tpl');
				$post_type_object = get_post_type_object($product_type);
				$label = $post_type_object->label;
				$selected = absint($dtwpb_cat_product_page);
				$posts = get_posts(array('post_type'=> $product_type, 'post_status'=> 'publish,private', 'suppress_filters' => false, 'posts_per_page'=>-1));
				echo '<select name="dtwpb_cat_product_page" id="dtwpb_cat_product_page" class="enhanced chosen_select_nostd" data-placeholder="'.__( 'Select a product template&hellip;','dt_woocommerce_page_builder').'">';
				echo '<option value = "" >'. __( 'None','dt_woocommerce_page_builder') . '</option>';
				foreach ($posts as $post) {
					echo '<option value="'. $post->ID .'"'. ($selected == $post->ID ? ' selected="selected"' : '') .'>'. $post->post_title. '</option>';
				}
				echo '</select>';
				?>
				<p class="description"><?php echo sprintf( __( 'Select a product template or %sCreate new%s template. This template will be applied for all products of the category.', 'dt_woocommerce_page_builder' ), '<a href="' . esc_url( admin_url( 'post-new.php?post_type='.$product_type ) ) . '" target="_blank">', '</a>' ); ?></p>
				
			</td>
		</tr>
		<tr class="form-field">
			<th scope="row" valign="top"><label><?php esc_html_e( 'Category Thumbnail', 'dt_woocommerce_page_builder' ); ?></label></th>
			<td>
				<div id="dtwpb_product_cat_thumbnail" style="float: left; margin-right: 10px;"><img src="<?php echo esc_url( $image ); ?>" width="60px" /></div>
				<div style="line-height: 60px;">
					<input type="hidden" id="dtwpb_product_cat_thumbnail_id" name="dtwpb_product_cat_thumbnail_id" value="<?php echo $thumbnail_id; ?>" />
					<button type="button" class="upload_image_button button"><?php esc_html_e( 'Upload/Add image', 'dt_woocommerce_page_builder' ); ?></button>
					<button type="button" class="remove_image_button button"><?php esc_html_e( 'Remove image', 'dt_woocommerce_page_builder' ); ?></button>
				</div>
				<script type="text/javascript">
	
					// Only show the "remove image" button when needed
					if ( '0' === jQuery( '#dtwpb_product_cat_thumbnail_id' ).val() ) {
						jQuery( '.remove_image_button' ).hide();
					}
	
					// Uploading files
					var file_frame;
	
					jQuery( document ).on( 'click', '.upload_image_button', function( event ) {
	
						event.preventDefault();
	
						// If the media frame already exists, reopen it.
						if ( file_frame ) {
							file_frame.open();
							return;
						}
	
						// Create the media frame.
						file_frame = wp.media.frames.downloadable_file = wp.media({
							title: '<?php esc_html_e( "Choose an image", "dt_woocommerce_page_builder" ); ?>',
							button: {
								text: '<?php esc_html_e( "Use image", "dt_woocommerce_page_builder" ); ?>'
							},
							multiple: false
						});
	
						// When an image is selected, run a callback.
						file_frame.on( 'select', function() {
							var attachment           = file_frame.state().get( 'selection' ).first().toJSON();
							var attachment_thumbnail_url = attachment.url;
	
							jQuery( '#dtwpb_product_cat_thumbnail_id' ).val( attachment.id );
							jQuery( '#dtwpb_product_cat_thumbnail' ).find( 'img' ).attr( 'src', attachment_thumbnail_url );
							jQuery( '.remove_image_button' ).show();
						});
	
						// Finally, open the modal.
						file_frame.open();
					});
	
					jQuery( document ).on( 'click', '.remove_image_button', function() {
						jQuery( '#dtwpb_product_cat_thumbnail' ).find( 'img' ).attr( 'src', '<?php echo esc_js( wc_placeholder_img_src() ); ?>' );
						jQuery( '#dtwpb_product_cat_thumbnail_id' ).val( '' );
						jQuery( '.remove_image_button' ).hide();
						return false;
					});
				</script>
				<div class="clear"></div>
			</td>
		</tr>
		<tr class="form-field">
			<th scope="row" valign="top"><label><?php _e( 'Category Custom Page', 'dt_woocommerce_page_builder' ); ?></label></th>
			<td>
				<?php 
				$cat_type = dtwpb_get_option('dtwpb_cat_tpl_type_page', 'dtwpb_cat_tpl');
				$post_type_object = get_post_type_object($cat_type);
				$label = $post_type_object->label;
				$selected = absint($dtwpb_product_cat_custom_page);
				$posts = get_posts(array('post_type'=> $cat_type, 'post_status'=> 'publish,private', 'suppress_filters' => false, 'posts_per_page'=>-1));
				echo '<select name="dtwpb_product_cat_custom_page" id="dtwpb_product_cat_custom_page" class="enhanced chosen_select_nostd" data-placeholder="'.__( 'Select a category template&hellip;','dt_woocommerce_page_builder').'">';
				echo '<option value = "" >'. __( 'None','dt_woocommerce_page_builder') . '</option>';
				foreach ($posts as $post) {
					echo '<option value="'. $post->ID .'"'. ($selected == $post->ID ? ' selected="selected"' : '') .'>'. $post->post_title. '</option>';
				}
				echo '</select>';
				?>
				<p class="description"><?php echo sprintf( __( 'Select a category template or %sCreate new%s template.', 'dt_woocommerce_page_builder' ), '<a href="' . esc_url( admin_url( 'post-new.php?post_type='.$cat_type ) ) . '" target="_blank">', '</a>' ); ?></p>
			</td>
			
			
		</tr>
		<tr class="form-field">
			<th scope="row" valign="top"></th>
			<td>
				<input type="checkbox" name="dtwpb_product_cat_custom_page_child" value="1" <?php checked($dtwpb_product_cat_custom_page_child, 1, true); ?>>
				<span><?php _e( 'Apply category template for the Child Categories', 'dt_woocommerce_page_builder' ); ?></span>
			</td>
		</tr>
		<?php
	}
	
	public function save_category_fields( $term_id, $tt_id, $taxonomy ) {
	
		if(!empty($_POST['dtwpb_cat_product_page'])){
			update_woocommerce_term_meta( $term_id, 'dtwpb_cat_product_page', absint( $_POST['dtwpb_cat_product_page'] ) );
		}else{
			delete_woocommerce_term_meta($term_id,  'dtwpb_cat_product_page');
		}

		if ( isset( $_POST[sanitize_key('dtwpb_product_cat_thumbnail_id')] ) ) {
			update_woocommerce_term_meta( $term_id, 'dtwpb_product_cat_thumbnail_id', absint( $_POST['dtwpb_product_cat_thumbnail_id'] ) );
		}
		
		if(!empty($_POST['dtwpb_product_cat_custom_page'])){
			update_woocommerce_term_meta( $term_id, 'dtwpb_product_cat_custom_page', absint( $_POST['dtwpb_product_cat_custom_page'] ) );
		}else{
			delete_woocommerce_term_meta($term_id,  'dtwpb_product_cat_custom_page');
		}

		if(!empty($_POST['dtwpb_product_cat_custom_page_child'])){
			update_woocommerce_term_meta( $term_id, 'dtwpb_product_cat_custom_page_child', absint( $_POST['dtwpb_product_cat_custom_page_child'] ) );
		}else{
			delete_woocommerce_term_meta($term_id,  'dtwpb_product_cat_custom_page_child');
		}
	}
	
	// End Class
}
