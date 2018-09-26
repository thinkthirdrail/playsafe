<?php
/**
 * DT WooCommerce Page Builder Template functions
 *
 * Functions for the templating system.
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

function dtwpb_vc_before_init(){
	if (function_exists('vc_set_default_editor_post_types')) {
		vc_set_default_editor_post_types(array('page', 'post', 'dtwpb_product_tpl', 'dtwpb_cat_tpl', 'dtwooaccountdetails'));
	}
}

function dtwpb_vc_after_init(){
	if (function_exists('vc_set_default_editor_post_types')) {
		vc_set_default_editor_post_types(array('page', 'post', 'dtwpb_product_tpl', 'dtwpb_cat_tpl', 'dtwooaccountdetails'));
	}
	
	global $pagenow; 
	if ('post.php' == $pagenow ){
		$post_type = isset($_GET['post']) ? get_post_type($_GET['post']) : '';
		
		
		if( $post_type !== 'page' && $post_type !== 'dtwpb_product_tpl' && $post_type !== 'dtwpb_cat_tpl' && $post_type !== 'dtwooaccountdetails' ){
			vc_remove_element('dtwpb_single_product_image');
			vc_remove_element('dtwpb_single_product_title');
			vc_remove_element('dtwpb_single_product_rating');
			vc_remove_element('dtwpb_single_product_price');
			vc_remove_element('dtwpb_single_product_excerpt');
			vc_remove_element('dtwpb_single_product_add_to_cart');
			vc_remove_element('dtwpb_single_product_direct_checkout');
			vc_remove_element('dtwpb_single_product_continue_shopping_button');
			vc_remove_element('dtwpb_single_product_meta');
			vc_remove_element('dtwpb_single_product_share');
			vc_remove_element('dtwpb_single_product_tabs');
			vc_remove_element('dtwpb_single_product_additional_information');
			vc_remove_element('dtwpb_single_product_description');
			vc_remove_element('dtwpb_single_product_reviews');
			vc_remove_element('dtwpb_single_product_related_products');
			vc_remove_element('dtwpb_single_product_upsells');
			vc_remove_element('dtwpb_yith_wcwl_add_to_wishlist');
			vc_remove_element('dtwpb_yith_woocompare_compare_button_in_product_page');
			vc_remove_element('dtwpb_gzd_template_single_price_unit');
			vc_remove_element('dtwpb_gzd_template_single_legal_info');
			vc_remove_element('dtwpb_gzd_template_single_delivery_time_info');
			vc_remove_element('dtwpb_woocommerce_auction_bid');
			vc_remove_element('dtwpb_woocommerce_auction_pay');
				
			vc_remove_element('dtwpb_product_category_header');
			vc_remove_element('dtwpb_product_category_header_title');
			vc_remove_element('dtwpb_product_category_archive_description');
			vc_remove_element('dtwpb_woocommerce_shop_loop');
			vc_remove_element('dtwpb_woocommerce_sidebar');
			
			vc_remove_element('dtwpb_cart_table');
			vc_remove_element('dtwpb_cart_totals');
			vc_remove_element('dtwpb_cross_sell');
			
			vc_remove_element('dtwpb_checkout_before_customer_details');
			vc_remove_element('dtwpb_form_billing');
			vc_remove_element('dtwpb_form_shipping');
			vc_remove_element('dtwpb_checkout_after_customer_details');
			vc_remove_element('dtwpb_checkout_order_review');
			
			vc_remove_element('dtwpb_woocommerce_myaccount_form_login');
			vc_remove_element('dtwpb_woocommerce_myaccount_form_register');
			
			vc_remove_element('dtwpb_woocommerce_myaccount_dashboard');
			vc_remove_element('dtwpb_woocommerce_myaccount_orders');
			vc_remove_element('dtwpb_woocommerce_myaccount_downloads');
			vc_remove_element('dtwpb_woocommerce_myaccount_addresses');
			vc_remove_element('dtwpb_woocommerce_myaccount_edit_account');
			vc_remove_element('dtwpb_woocommerce_myaccount_payment_methods');
			vc_remove_element('dtwpb_woocommerce_myaccount_add_payment_method');
			vc_remove_element('dtwpb_woocommerce_myaccount_extra_endpoint');
			vc_remove_element('dtwpb_woocommerce_myaccount_logout');
			
			vc_remove_element('dtwpb_account_first_name');
			vc_remove_element('dtwpb_account_last_name');
			vc_remove_element('dtwpb_account_email');
			vc_remove_element('dtwpb_account_password');
			vc_remove_element('dtwpb_account_extra_fields');
		}
			
		if( $post_type == 'dtwpb_product_tpl' ){
			vc_remove_element('dtwpb_product_category_header');
			vc_remove_element('dtwpb_product_category_header_title');
			vc_remove_element('dtwpb_product_category_archive_description');
			vc_remove_element('dtwpb_woocommerce_shop_loop');
			vc_remove_element('dtwpb_woocommerce_sidebar');
			
			vc_remove_element('dtwpb_cart_table');
			vc_remove_element('dtwpb_cart_totals');
			vc_remove_element('dtwpb_cross_sell');
				
			vc_remove_element('dtwpb_checkout_before_customer_details');
			vc_remove_element('dtwpb_form_billing');
			vc_remove_element('dtwpb_form_shipping');
			vc_remove_element('dtwpb_checkout_after_customer_details');
			vc_remove_element('dtwpb_checkout_order_review');
				
			vc_remove_element('dtwpb_woocommerce_myaccount_form_login');
			vc_remove_element('dtwpb_woocommerce_myaccount_form_register');
				
			vc_remove_element('dtwpb_woocommerce_myaccount_dashboard');
			vc_remove_element('dtwpb_woocommerce_myaccount_orders');
			vc_remove_element('dtwpb_woocommerce_myaccount_downloads');
			vc_remove_element('dtwpb_woocommerce_myaccount_addresses');
			vc_remove_element('dtwpb_woocommerce_myaccount_edit_account');
			vc_remove_element('dtwpb_woocommerce_myaccount_payment_methods');
			vc_remove_element('dtwpb_woocommerce_myaccount_add_payment_method');
			vc_remove_element('dtwpb_woocommerce_myaccount_extra_endpoint');
			vc_remove_element('dtwpb_woocommerce_myaccount_logout');
			
			vc_remove_element('dtwpb_account_first_name');
			vc_remove_element('dtwpb_account_last_name');
			vc_remove_element('dtwpb_account_email');
			vc_remove_element('dtwpb_account_password');
			vc_remove_element('dtwpb_account_extra_fields');
			
		}elseif ( $post_type == 'dtwpb_cat_tpl' ){
			vc_remove_element('dtwpb_single_product_image');
			vc_remove_element('dtwpb_single_product_title');
			vc_remove_element('dtwpb_single_product_rating');
			vc_remove_element('dtwpb_single_product_price');
			vc_remove_element('dtwpb_single_product_excerpt');
			vc_remove_element('dtwpb_single_product_add_to_cart');
			vc_remove_element('dtwpb_single_product_direct_checkout');
			vc_remove_element('dtwpb_single_product_continue_shopping_button');
			vc_remove_element('dtwpb_single_product_meta');
			vc_remove_element('dtwpb_single_product_share');
			vc_remove_element('dtwpb_single_product_tabs');
			vc_remove_element('dtwpb_single_product_additional_information');
			vc_remove_element('dtwpb_single_product_description');
			vc_remove_element('dtwpb_single_product_reviews');
			vc_remove_element('dtwpb_single_product_related_products');
			vc_remove_element('dtwpb_single_product_upsells');
			vc_remove_element('dtwpb_yith_wcwl_add_to_wishlist');
			vc_remove_element('dtwpb_yith_woocompare_compare_button_in_product_page');
			vc_remove_element('dtwpb_gzd_template_single_price_unit');
			vc_remove_element('dtwpb_gzd_template_single_legal_info');
			vc_remove_element('dtwpb_gzd_template_single_delivery_time_info');
			vc_remove_element('dtwpb_woocommerce_auction_bid');
			vc_remove_element('dtwpb_woocommerce_auction_pay');
			
			vc_remove_element('dtwpb_cart_table');
			vc_remove_element('dtwpb_cart_totals');
			vc_remove_element('dtwpb_cross_sell');
			
			vc_remove_element('dtwpb_checkout_before_customer_details');
			vc_remove_element('dtwpb_form_billing');
			vc_remove_element('dtwpb_form_shipping');
			vc_remove_element('dtwpb_checkout_after_customer_details');
			vc_remove_element('dtwpb_checkout_order_review');
			
			vc_remove_element('dtwpb_woocommerce_myaccount_form_login');
			vc_remove_element('dtwpb_woocommerce_myaccount_form_register');
			
			vc_remove_element('dtwpb_woocommerce_myaccount_dashboard');
			vc_remove_element('dtwpb_woocommerce_myaccount_orders');
			vc_remove_element('dtwpb_woocommerce_myaccount_downloads');
			vc_remove_element('dtwpb_woocommerce_myaccount_addresses');
			vc_remove_element('dtwpb_woocommerce_myaccount_edit_account');
			vc_remove_element('dtwpb_woocommerce_myaccount_payment_methods');
			vc_remove_element('dtwpb_woocommerce_myaccount_add_payment_method');
			vc_remove_element('dtwpb_woocommerce_myaccount_extra_endpoint');
			vc_remove_element('dtwpb_woocommerce_myaccount_logout');
			
			vc_remove_element('dtwpb_account_first_name');
			vc_remove_element('dtwpb_account_last_name');
			vc_remove_element('dtwpb_account_email');
			vc_remove_element('dtwpb_account_password');
			vc_remove_element('dtwpb_account_extra_fields');
			
		}elseif ( $post_type == 'page' ){
			
			$dtwpb_product_tpl_type_page = dtwpb_get_option('dtwpb_product_tpl_type_page', 'dtwpb_product_tpl');

			if( $dtwpb_product_tpl_type_page == 'dtwpb_product_tpl' ){
				vc_remove_element('dtwpb_single_product_image');
				vc_remove_element('dtwpb_single_product_title');
				vc_remove_element('dtwpb_single_product_rating');
				vc_remove_element('dtwpb_single_product_price');
				vc_remove_element('dtwpb_single_product_excerpt');
				vc_remove_element('dtwpb_single_product_add_to_cart');
				vc_remove_element('dtwpb_single_product_direct_checkout');
				vc_remove_element('dtwpb_single_product_continue_shopping_button');
				vc_remove_element('dtwpb_single_product_meta');
				vc_remove_element('dtwpb_single_product_share');
				vc_remove_element('dtwpb_single_product_tabs');
				vc_remove_element('dtwpb_single_product_additional_information');
				vc_remove_element('dtwpb_single_product_description');
				vc_remove_element('dtwpb_single_product_reviews');
				vc_remove_element('dtwpb_single_product_related_products');
				vc_remove_element('dtwpb_single_product_upsells');
				vc_remove_element('dtwpb_yith_wcwl_add_to_wishlist');
				vc_remove_element('dtwpb_yith_woocompare_compare_button_in_product_page');
				vc_remove_element('dtwpb_gzd_template_single_price_unit');
				vc_remove_element('dtwpb_gzd_template_single_legal_info');
				vc_remove_element('dtwpb_gzd_template_single_delivery_time_info');
				vc_remove_element('dtwpb_woocommerce_auction_bid');
				vc_remove_element('dtwpb_woocommerce_auction_pay');
			}

			$dtwpb_cat_tpl_type_page = dtwpb_get_option('dtwpb_cat_tpl_type_page', 'dtwpb_cat_tpl');
			if( $dtwpb_cat_tpl_type_page == 'dtwpb_cat_tpl' ){
				vc_remove_element('dtwpb_product_category_header');
				vc_remove_element('dtwpb_product_category_header_title');
				vc_remove_element('dtwpb_product_category_archive_description');
				vc_remove_element('dtwpb_woocommerce_shop_loop');
				vc_remove_element('dtwpb_woocommerce_sidebar');
			}
			
			vc_remove_element('dtwpb_account_first_name');
			vc_remove_element('dtwpb_account_last_name');
			vc_remove_element('dtwpb_account_email');
			vc_remove_element('dtwpb_account_password');
			vc_remove_element('dtwpb_account_extra_fields');
			
		}elseif ( $post_type == 'dtwooaccountdetails' ){
			vc_remove_element('dtwpb_single_product_image');
			vc_remove_element('dtwpb_single_product_title');
			vc_remove_element('dtwpb_single_product_rating');
			vc_remove_element('dtwpb_single_product_price');
			vc_remove_element('dtwpb_single_product_excerpt');
			vc_remove_element('dtwpb_single_product_add_to_cart');
			vc_remove_element('dtwpb_single_product_direct_checkout');
			vc_remove_element('dtwpb_single_product_continue_shopping_button');
			vc_remove_element('dtwpb_single_product_meta');
			vc_remove_element('dtwpb_single_product_share');
			vc_remove_element('dtwpb_single_product_tabs');
			vc_remove_element('dtwpb_single_product_additional_information');
			vc_remove_element('dtwpb_single_product_description');
			vc_remove_element('dtwpb_single_product_reviews');
			vc_remove_element('dtwpb_single_product_related_products');
			vc_remove_element('dtwpb_single_product_upsells');
			vc_remove_element('dtwpb_yith_wcwl_add_to_wishlist');
			vc_remove_element('dtwpb_yith_woocompare_compare_button_in_product_page');
			vc_remove_element('dtwpb_gzd_template_single_price_unit');
			vc_remove_element('dtwpb_gzd_template_single_legal_info');
			vc_remove_element('dtwpb_gzd_template_single_delivery_time_info');
			vc_remove_element('dtwpb_woocommerce_auction_bid');
			vc_remove_element('dtwpb_woocommerce_auction_pay');
			
			vc_remove_element('dtwpb_product_category_header');
			vc_remove_element('dtwpb_product_category_header_title');
			vc_remove_element('dtwpb_product_category_archive_description');
			vc_remove_element('dtwpb_woocommerce_shop_loop');
			vc_remove_element('dtwpb_woocommerce_sidebar');
				
			vc_remove_element('dtwpb_cart_table');
			vc_remove_element('dtwpb_cart_totals');
			vc_remove_element('dtwpb_cross_sell');
				
			vc_remove_element('dtwpb_checkout_before_customer_details');
			vc_remove_element('dtwpb_form_billing');
			vc_remove_element('dtwpb_form_shipping');
			vc_remove_element('dtwpb_checkout_after_customer_details');
			vc_remove_element('dtwpb_checkout_order_review');
				
			vc_remove_element('dtwpb_woocommerce_myaccount_form_login');
			vc_remove_element('dtwpb_woocommerce_myaccount_form_register');
				
			vc_remove_element('dtwpb_woocommerce_myaccount_dashboard');
			vc_remove_element('dtwpb_woocommerce_myaccount_orders');
			vc_remove_element('dtwpb_woocommerce_myaccount_downloads');
			vc_remove_element('dtwpb_woocommerce_myaccount_addresses');
			vc_remove_element('dtwpb_woocommerce_myaccount_edit_account');
			vc_remove_element('dtwpb_woocommerce_myaccount_payment_methods');
			vc_remove_element('dtwpb_woocommerce_myaccount_add_payment_method');
			vc_remove_element('dtwpb_woocommerce_myaccount_extra_endpoint');
			vc_remove_element('dtwpb_woocommerce_myaccount_logout');
		}
	}
}

function dtwpb_before_checkout_form(){
	// Show non-cart errors
	wc_print_notices();
	
	// Check cart has contents
	if ( WC()->cart->is_empty() ) {
		return;
	}
	
	// Check cart contents for errors
	do_action( 'woocommerce_check_cart_items' );
	
	// Calc totals
	WC()->cart->calculate_totals();
	
	// Get checkout object
	$checkout = WC()->checkout();
	
	if ( empty( $_POST ) && wc_notice_count( 'error' ) > 0 ) {
	
		wc_get_template( 'checkout/cart-errors.php', array( 'checkout' => $checkout ) );
	
	}else{
		
		$non_js_checkout = ! empty( $_POST['woocommerce_checkout_update_totals'] ) ? true : false;
		
		if ( wc_notice_count( 'error' ) == 0 && $non_js_checkout )
			wc_add_notice( __( 'The order totals have been updated. Please confirm your order by pressing the Place Order button at the bottom of the page.', 'dt_woocommerce_page_builder' ) );
		
			wc_get_template( 'checkout/before-form-checkout.php', array( 'checkout' => $checkout, 'woocommerce-page-builder-custom-templates' => 1 ), DT_WOO_PAGE_BUILDER_DIR . 'woocommerce-page-builder-templates/', DT_WOO_PAGE_BUILDER_DIR . 'woocommerce-page-builder-templates/' );
	}
}

function dtwpb_after_checkout_form(){
	$checkout = WC()->checkout();
	wc_get_template( 'checkout/after-form-checkout.php', array( 'checkout' => $checkout, 'woocommerce-page-builder-custom-templates' => 1 ), DT_WOO_PAGE_BUILDER_DIR . 'woocommerce-page-builder-templates/', DT_WOO_PAGE_BUILDER_DIR . 'woocommerce-page-builder-templates/' );
}

function dtwpb_filter_checkout_page(){
	if( is_checkout() && dtwpb_get_option('dtwpb_checkout_page_id', '') != '' ){
		add_filter( 'the_content', 'dtwpb_the_checkout_page_content' );
	}
}
add_action( 'template_redirect', 'dtwpb_filter_checkout_page' );

function dtwpb_the_checkout_page_content($content){
	global $wp,$post;
	if(!isset($wp->query_vars['order-pay']) && !isset( $wp->query_vars['order-received'] )){
		$custom_content = '';
		ob_start();
		?>
		<div class="woocommerce">
		<?php
		do_action('dtwpb_woocommerce_before_checkout_form');
			
		echo $content;
	
		do_action('dtwpb_woocommerce_after_checkout_form');
		?>
		</div>
		<?php
		$custom_content = ob_get_clean();
		// otherwise returns the database content
		return $custom_content;
	}else{
		return '[woocommerce_checkout]';
	}
}

// function woocommerce_thankyou_order_id_custom(){
// 	global $wp;
// 	if(isset( $wp->query_vars['order-received'] ) ){
// 		$thank_you_page_url = get_permalink(192);
// 		$order_id = $wp->query_vars['order-received'];
// 		$thank_you_page_url = add_query_arg(array('order-received'=>$order_id),$thank_you_page_url);
// 		if(isset($_GET['key']))
// 			$thank_you_page_url = add_query_arg(array('key'=>$_GET['key']),$thank_you_page_url);
// 		wp_safe_redirect($thank_you_page_url);
// 		exit;
// 	}
// }
// add_action('woocommerce_thankyou_order_id', 'woocommerce_thankyou_order_id_custom');

/*
 * Custom MyAccount page
 */
function dtwpb_filter_custom_myaccount_page(){
	if( is_account_page()){
		add_filter( 'the_content', 'dtwpb_woocommerce_before_custom_myaccount_page');
	}
}
add_action('template_redirect', 'dtwpb_filter_custom_myaccount_page');


function dtwpb_woocommerce_before_custom_myaccount_page($content){
	global $wp;
	
	$custom_content = '';
	// Check cart class is loaded or abort
	if ( is_null( WC()->cart ) ) {
		return $content;
	}
	
	if ( ! is_user_logged_in() ) {
		$dtwpb_woocommerce_myaccount_before_login_page_id = dtwpb_get_option('dtwpb_woocommerce_myaccount_before_login_page_id', '');
		
		$woocommerce_myaccount_page_id = get_option('woocommerce_myaccount_page_id');
		
		
		if ( isset( $wp->query_vars['lost-password'] ) ) {
			return '[woocommerce_my_account]';
		}elseif($woocommerce_myaccount_page_id !== $dtwpb_woocommerce_myaccount_before_login_page_id && $dtwpb_woocommerce_myaccount_before_login_page_id){
			
			// Start output buffer since the html may need discarding for BW compatibility
			ob_start();
			
			?>
			<div class="woocommerce dtwpb-woocommerce-myaccount-before-login-page">
				<?php
				
				$all_notices  = WC()->session->get( 'wc_notices', array() );
				$notice_types = apply_filters( 'woocommerce_notice_types', array( 'error', 'success', 'notice' ) );
				
				foreach ( $notice_types as $notice_type ) {
					if ( wc_notice_count( $notice_type ) > 0 ) {
						wc_get_template( "notices/{$notice_type}.php", array(
							'messages' => array_filter( $all_notices[ $notice_type ] ),
						) );
					}
				}
				
				do_action( 'woocommerce_before_customer_login_form' ); ?>
				<div id="customer_login">
				<?php

				$before_login_page = get_post($dtwpb_woocommerce_myaccount_before_login_page_id);
				
				if($wpb_custom_css = get_post_meta( $dtwpb_woocommerce_myaccount_before_login_page_id, '_wpb_post_custom_css', true )){
					echo '<style type="text/css">'.$wpb_custom_css.'</style>';
				}
				if($wpb_shortcodes_custom_css = get_post_meta( $dtwpb_woocommerce_myaccount_before_login_page_id, '_wpb_shortcodes_custom_css', true )){
					echo '<style type="text/css">'.$wpb_shortcodes_custom_css.'</style>';
				}

				$custom_content = $before_login_page->post_content;
				
				echo $custom_content;

				?>
				</div>
				<?php do_action( 'woocommerce_after_customer_login_form' ); ?>
			</div>
			<?php
			
			$content = ob_get_clean();
			
			return $content;
		}else{
			return $content;
		}
		return $content;
	}elseif( dtwpb_get_option('dtwpb_myaccount_page_id', '') ){
		// Start output buffer since the html may need discarding for BW compatibility
		ob_start();
		?>
		<div class="woocommerce dtwpb_myaccount_page">
		<?php
		// Collect notices before output
// 		$notices = wc_get_notices();
// 		wc_set_notices( $notices );
// 		wc_print_notices();
		
		echo $content;
		?>
		</div>
		<?php
		return ob_get_clean();
	}else{
		return '[woocommerce_my_account]';
	}
}