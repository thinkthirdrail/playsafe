<?php
/*
 * Contain all shortcodes for WooCommerce page builder
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit(); // Exit if accessed directly
}

$show_hide_values = array( 
	esc_html__( 'Show', 'dt_woocommerce_page_builder' ) => 'show', 
	esc_html__( 'Hide', 'dt_woocommerce_page_builder' ) => 'hide' );
$order_by_values = array( 
	'', 
	esc_html__( 'Date', 'dt_woocommerce_page_builder' ) => 'date', 
	esc_html__( 'ID', 'dt_woocommerce_page_builder' ) => 'ID', 
	esc_html__( 'Author', 'dt_woocommerce_page_builder' ) => 'author', 
	esc_html__( 'Title', 'dt_woocommerce_page_builder' ) => 'title', 
	esc_html__( 'Modified', 'dt_woocommerce_page_builder' ) => 'modified', 
	esc_html__( 'Random', 'dt_woocommerce_page_builder' ) => 'rand', 
	esc_html__( 'Comment count', 'dt_woocommerce_page_builder' ) => 'comment_count', 
	esc_html__( 'Menu order', 'dt_woocommerce_page_builder' ) => 'menu_order' );

$order_way_values = array( 
	'', 
	esc_html__( 'Descending', 'dt_woocommerce_page_builder' ) => 'DESC', 
	esc_html__( 'Ascending', 'dt_woocommerce_page_builder' ) => 'ASC' );

/*
 * ////////////////////////////
 *
 * Product category custom page
 *
 * ////////////////////////////
 */
vc_map( 
	array( 
		"name" => __( "Category Thumbnail", 'dt_woocommerce_page_builder' ), 
		"base" => "dtwpb_product_category_thumbnail", 
		"category" => __( "Product Category Page", 'dt_woocommerce_page_builder' ), 
		"icon" => "dt-vc-icon-dt_woo", 
		'description' => '', 
		"params" => array( 
			array( 
				"type" => "textfield", 
				"heading" => __( "Extra class name", 'dt_woocommerce_page_builder' ), 
				"param_name" => "el_class", 
				'value' => '', 
				"description" => __( 
					"If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", 
					'dt_woocommerce_page_builder' ) ), 
			array( 
				'type' => 'css_editor', 
				'heading' => esc_html__( 'Css', 'dt_woocommerce_page_builder' ), 
				'param_name' => 'css', 
				'group' => esc_html__( 'Design options', 'dt_woocommerce_page_builder' ) ) ) ) );
vc_map( 
	array( 
		"name" => __( "Products Header", 'dt_woocommerce_page_builder' ), 
		"base" => "dtwpb_product_category_header", 
		"category" => __( "Product Category Page", 'dt_woocommerce_page_builder' ), 
		"icon" => "dt-vc-icon-dt_woo", 
		'description' => '', 
		"params" => array( 
			array( 
				"type" => "textfield", 
				"heading" => __( "Extra class name", 'dt_woocommerce_page_builder' ), 
				"param_name" => "el_class", 
				'value' => '', 
				"description" => __( 
					"If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", 
					'dt_woocommerce_page_builder' ) ), 
			array( 
				'type' => 'css_editor', 
				'heading' => esc_html__( 'Css', 'dt_woocommerce_page_builder' ), 
				'param_name' => 'css', 
				'group' => esc_html__( 'Design options', 'dt_woocommerce_page_builder' ) ) ) ) );
vc_map( 
	array( 
		"name" => __( "Products Header Title", 'dt_woocommerce_page_builder' ), 
		"base" => "dtwpb_product_category_header_title", 
		"category" => __( "Product Category Page", 'dt_woocommerce_page_builder' ), 
		"icon" => "dt-vc-icon-dt_woo", 
		'description' => '', 
		"params" => array( 
			array( 
				"type" => "textfield", 
				"heading" => __( "Extra class name", 'dt_woocommerce_page_builder' ), 
				"param_name" => "el_class", 
				'value' => '', 
				"description" => __( 
					"If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", 
					'dt_woocommerce_page_builder' ) ), 
			array( 
				'type' => 'css_editor', 
				'heading' => esc_html__( 'Css', 'dt_woocommerce_page_builder' ), 
				'param_name' => 'css', 
				'group' => esc_html__( 'Design options', 'dt_woocommerce_page_builder' ) ) ) ) );
vc_map( 
	array( 
		"name" => __( "Products Header Description", 'dt_woocommerce_page_builder' ), 
		"base" => "dtwpb_product_category_archive_description", 
		"category" => __( "Product Category Page", 'dt_woocommerce_page_builder' ), 
		"icon" => "dt-vc-icon-dt_woo", 
		'description' => '', 
		"params" => array( 
			array( 
				"type" => "textfield", 
				"heading" => __( "Extra class name", 'dt_woocommerce_page_builder' ), 
				"param_name" => "el_class", 
				'value' => '', 
				"description" => __( 
					"If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", 
					'dt_woocommerce_page_builder' ) ), 
			array( 
				'type' => 'css_editor', 
				'heading' => esc_html__( 'Css', 'dt_woocommerce_page_builder' ), 
				'param_name' => 'css', 
				'group' => esc_html__( 'Design options', 'dt_woocommerce_page_builder' ) ) ) ) );

vc_map( 
	array( 
		"name" => __( "Products Shop Loop", 'dt_woocommerce_page_builder' ), 
		"base" => "dtwpb_woocommerce_shop_loop", 
		"category" => __( "Product Category Page", 'dt_woocommerce_page_builder' ), 
		"icon" => "dt-vc-icon-dt_woo", 
		'description' => __( "  ", 'dt_woocommerce_page_builder' ), 
		"params" => array( 
			/*array( 
				"type" => "textfield", 
				"heading" => __( "Per page", 'dt_woocommerce_page_builder' ), 
				"param_name" => "per_page", 
				'value' => '12',
				'save_always' => true,
				"description" => __( 
					"How much items per page to show", 
					'dt_woocommerce_page_builder' ) ),*/
			array( 
				"type" => "dropdown", 
				"heading" => __( "Columns", 'dt_woocommerce_page_builder' ), 
				"param_name" => "columns", 
				'value' => array( '1' => '1', '2' => '2', '3' => '3', '4' => '4', '6' => '6' ), 
				'std' => '4', 
				'save_always' => true, 
				"description" => __( "How much columns grid", 'dt_woocommerce_page_builder' ) ),
			/*array( 
				"type" => "dropdown", 
				"heading" => __( "Order by", 'dt_woocommerce_page_builder' ), 
				"param_name" => "orderby", 
				'value' => $order_by_values,
				'save_always' => true,
			),
			array(
				'type' => 'dropdown',
				'heading' => __( 'Sort order', 'dt_woocommerce_page_builder' ),
				'param_name' => 'order',
				'value' => $order_way_values,
				'save_always' => true,
			),
			array(
				'type' => 'dropdown',
				'heading' => __( 'Show Pagination', 'dt_woocommerce_page_builder' ),
				'param_name' => 'show_pagination',
				'value' => $show_hide_values,
			),*/
			array( 
				"type" => "textfield", 
				"heading" => __( "Extra class name", 'dt_woocommerce_page_builder' ), 
				"param_name" => "el_class", 
				'value' => '', 
				"description" => __( 
					"If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", 
					'dt_woocommerce_page_builder' ) ), 
			array( 
				'type' => 'css_editor', 
				'heading' => esc_html__( 'Css', 'dt_woocommerce_page_builder' ), 
				'param_name' => 'css', 
				'group' => esc_html__( 'Design options', 'dt_woocommerce_page_builder' ) ) ) ) );

if ( is_active_sidebar( 'shop' ) ) {
	vc_map( 
		array( 
			"name" => __( "WooCommerce Sidebar", 'dt_woocommerce_page_builder' ), 
			"base" => "dtwpb_woocommerce_sidebar", 
			"category" => __( "Product Category Page", 'dt_woocommerce_page_builder' ), 
			"icon" => "dt-vc-icon-dt_woo", 
			'description' => '', 
			"params" => array( 
				array( 
					"type" => "textfield", 
					"heading" => __( "Extra class name", 'dt_woocommerce_page_builder' ), 
					"param_name" => "el_class", 
					'value' => '', 
					"description" => __( 
						"If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", 
						'dt_woocommerce_page_builder' ) ), 
				array( 
					'type' => 'css_editor', 
					'heading' => esc_html__( 'Css', 'dt_woocommerce_page_builder' ), 
					'param_name' => 'css', 
					'group' => esc_html__( 'Design options', 'dt_woocommerce_page_builder' ) ) ) ) );
}

// Cart page builder
vc_map( 
	array( 
		"name" => __( "Cart Table", 'dt_woocommerce_page_builder' ), 
		"base" => "dtwpb_cart_table", 
		"category" => __( "Woo Cart", 'dt_woocommerce_page_builder' ), 
		"icon" => "dt-vc-icon-dt_woo", 
		"params" => array( 
			array( 
				"type" => "textfield", 
				"heading" => __( "Extra class name", 'dt_woocommerce_page_builder' ), 
				"param_name" => "el_class", 
				'value' => '', 
				"description" => __( 
					"If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", 
					'dt_woocommerce_page_builder' ) ), 
			array( 
				'type' => 'css_editor', 
				'heading' => esc_html__( 'Css', 'dt_woocommerce_page_builder' ), 
				'param_name' => 'css', 
				'group' => esc_html__( 'Design options', 'dt_woocommerce_page_builder' ) ) ) ) );

vc_map( 
	array( 
		"name" => __( "Cart Totals", 'dt_woocommerce_page_builder' ), 
		"base" => "dtwpb_cart_totals", 
		"category" => __( "Woo Cart", 'dt_woocommerce_page_builder' ), 
		"icon" => "dt-vc-icon-dt_woo", 
		"params" => array( 
			array( 
				"type" => "textfield", 
				"heading" => __( "Extra class name", 'dt_woocommerce_page_builder' ), 
				"param_name" => "el_class", 
				'value' => '', 
				"description" => __( 
					"If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", 
					'dt_woocommerce_page_builder' ) ), 
			array( 
				'type' => 'css_editor', 
				'heading' => esc_html__( 'Css', 'dt_woocommerce_page_builder' ), 
				'param_name' => 'css', 
				'group' => esc_html__( 'Design options', 'dt_woocommerce_page_builder' ) ) ) ) );

vc_map( 
	array( 
		"name" => __( "Cross Sells", 'dt_woocommerce_page_builder' ), 
		"base" => "dtwpb_cross_sell", 
		"category" => __( "Woo Cart", 'dt_woocommerce_page_builder' ), 
		"icon" => "dt-vc-icon-dt_woo", 
		"params" => array( 
			array( 
				"type" => "textfield", 
				"heading" => __( "Product Per Page", 'dt_woocommerce_page_builder' ), 
				"param_name" => "posts_per_page", 
				"value" => 4 ), 
			array( 
				"type" => "textfield", 
				"heading" => __( "Columns", 'dt_woocommerce_page_builder' ), 
				"param_name" => "columns", 
				"value" => 4 ), 
			array( 
				"type" => "dropdown", 
				"heading" => __( "Products Ordering", 'dt_woocommerce_page_builder' ), 
				"param_name" => "orderby", 
				'class' => '', 
				"value" => array( 
					__( 'Random', 'dt_woocommerce_page_builder' ) => 'rand', 
					__( 'Publish Date', 'dt_woocommerce_page_builder' ) => 'date', 
					__( 'Modified Date', 'dt_woocommerce_page_builder' ) => 'modified', 
					__( 'Alphabetic', 'dt_woocommerce_page_builder' ) => 'title', 
					__( 'Popularity', 'dt_woocommerce_page_builder' ) => 'popularity', 
					__( 'Rate', 'dt_woocommerce_page_builder' ) => 'rating', 
					__( 'Price', 'dt_woocommerce_page_builder' ) => 'price' ) ), 
			array( 
				"type" => "textfield", 
				"heading" => __( "Extra class name", 'dt_woocommerce_page_builder' ), 
				"param_name" => "el_class", 
				'value' => '', 
				"description" => __( 
					"If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", 
					'dt_woocommerce_page_builder' ) ), 
			array( 
				'type' => 'css_editor', 
				'heading' => esc_html__( 'Css', 'dt_woocommerce_page_builder' ), 
				'param_name' => 'css', 
				'group' => esc_html__( 'Design options', 'dt_woocommerce_page_builder' ) ) ) ) );

// Checkout page builder
vc_map( 
	array( 
		"name" => __( "Checkout Before Customer Details", 'dt_woocommerce_page_builder' ), 
		"base" => "dtwpb_checkout_before_customer_details", 
		"category" => __( "Woo Checkout", 'dt_woocommerce_page_builder' ), 
		"icon" => "dt-vc-icon-dt_woo", 
		"description" => __( "Required. Add before 'Billing Information element'.", 'dt_woocommerce_page_builder' ), 
		"params" => array( 
			array( 
				"type" => "textfield", 
				"heading" => __( "Extra class name", 'dt_woocommerce_page_builder' ), 
				"param_name" => "el_class", 
				'value' => '', 
				"description" => __( 
					"If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", 
					'dt_woocommerce_page_builder' ) ), 
			array( 
				'type' => 'css_editor', 
				'heading' => esc_html__( 'Css', 'dt_woocommerce_page_builder' ), 
				'param_name' => 'css', 
				'group' => esc_html__( 'Design options', 'dt_woocommerce_page_builder' ) ) ) ) );

vc_map( 
	array( 
		"name" => __( "Billing Information", 'dt_woocommerce_page_builder' ), 
		"base" => "dtwpb_form_billing", 
		"category" => __( "Woo Checkout", 'dt_woocommerce_page_builder' ), 
		"icon" => "dt-vc-icon-dt_woo", 
		"params" => array( 
			array( 
				"type" => "textfield", 
				"heading" => __( "Extra class name", 'dt_woocommerce_page_builder' ), 
				"param_name" => "el_class", 
				'value' => '', 
				"description" => __( 
					"If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", 
					'dt_woocommerce_page_builder' ) ), 
			array( 
				'type' => 'css_editor', 
				'heading' => esc_html__( 'Css', 'dt_woocommerce_page_builder' ), 
				'param_name' => 'css', 
				'group' => esc_html__( 'Design options', 'dt_woocommerce_page_builder' ) ) ) ) );

vc_map( 
	array( 
		"name" => __( "Shipping information form", 'dt_woocommerce_page_builder' ), 
		"base" => "dtwpb_form_shipping", 
		"category" => __( "Woo Checkout", 'dt_woocommerce_page_builder' ), 
		"icon" => "dt-vc-icon-dt_woo", 
		"params" => array( 
			array( 
				"type" => "textfield", 
				"heading" => __( "Extra class name", 'dt_woocommerce_page_builder' ), 
				"param_name" => "el_class", 
				'value' => '', 
				"description" => __( 
					"If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", 
					'dt_woocommerce_page_builder' ) ), 
			array( 
				'type' => 'css_editor', 
				'heading' => esc_html__( 'Css', 'dt_woocommerce_page_builder' ), 
				'param_name' => 'css', 
				'group' => esc_html__( 'Design options', 'dt_woocommerce_page_builder' ) ) ) ) );

vc_map( 
	array( 
		"name" => __( "Checkout After Customer Details", 'dt_woocommerce_page_builder' ), 
		"base" => "dtwpb_checkout_after_customer_details", 
		"category" => __( "Woo Checkout", 'dt_woocommerce_page_builder' ), 
		"icon" => "dt-vc-icon-dt_woo", 
		"description" => __( "Required. Add after 'Shipping information form'.", 'dt_woocommerce_page_builder' ), 
		"params" => array( 
			array( 
				"type" => "textfield", 
				"heading" => __( "Extra class name", 'dt_woocommerce_page_builder' ), 
				"param_name" => "el_class", 
				'value' => '', 
				"description" => __( 
					"If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", 
					'dt_woocommerce_page_builder' ) ), 
			array( 
				'type' => 'css_editor', 
				'heading' => esc_html__( 'Css', 'dt_woocommerce_page_builder' ), 
				'param_name' => 'css', 
				'group' => esc_html__( 'Design options', 'dt_woocommerce_page_builder' ) ) ) ) );

vc_map( 
	array( 
		"name" => __( "Order review", 'dt_woocommerce_page_builder' ), 
		"base" => "dtwpb_checkout_order_review", 
		"category" => __( "Woo Checkout", 'dt_woocommerce_page_builder' ), 
		"icon" => "dt-vc-icon-dt_woo", 
		"params" => array( 
			array( 
				"type" => "textfield", 
				"heading" => __( "Extra class name", 'dt_woocommerce_page_builder' ), 
				"param_name" => "el_class", 
				'value' => '', 
				"description" => __( 
					"If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", 
					'dt_woocommerce_page_builder' ) ), 
			array( 
				'type' => 'css_editor', 
				'heading' => esc_html__( 'Css', 'dt_woocommerce_page_builder' ), 
				'param_name' => 'css', 
				'group' => esc_html__( 'Design options', 'dt_woocommerce_page_builder' ) ) ) ) );

// My Account page before login builder
vc_map( 
	array( 
		"name" => __( "My Account Login Form", 'dt_woocommerce_page_builder' ), 
		"base" => "dtwpb_woocommerce_myaccount_form_login", 
		"category" => __( "Woo My Account Before Login", 'dt_woocommerce_page_builder' ), 
		"icon" => "dt-vc-icon-dt_woo", 
		"params" => array( 
			array( 
				"type" => "textfield", 
				"heading" => __( "Extra class name", 'dt_woocommerce_page_builder' ), 
				"param_name" => "el_class", 
				'value' => '', 
				"description" => __( 
					"If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", 
					'dt_woocommerce_page_builder' ) ), 
			array( 
				'type' => 'css_editor', 
				'heading' => esc_html__( 'Css', 'dt_woocommerce_page_builder' ), 
				'param_name' => 'css', 
				'group' => esc_html__( 'Design options', 'dt_woocommerce_page_builder' ) ) ) ) );

vc_map( 
	array( 
		"name" => __( "My Account Register Form", 'dt_woocommerce_page_builder' ), 
		"base" => "dtwpb_woocommerce_myaccount_form_register", 
		"category" => __( "Woo My Account Before Login", 'dt_woocommerce_page_builder' ), 
		"icon" => "dt-vc-icon-dt_woo", 
		"params" => array( 
			array( 
				"type" => "textfield", 
				"heading" => __( "Extra class name", 'dt_woocommerce_page_builder' ), 
				"param_name" => "el_class", 
				'value' => '', 
				"description" => __( 
					"If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", 
					'dt_woocommerce_page_builder' ) ), 
			array( 
				'type' => 'css_editor', 
				'heading' => esc_html__( 'Css', 'dt_woocommerce_page_builder' ), 
				'param_name' => 'css', 
				'group' => esc_html__( 'Design options', 'dt_woocommerce_page_builder' ) ) ) ) );

// My Account page builder
vc_map( 
	array( 
		"name" => __( "My Account Dashboard", 'dt_woocommerce_page_builder' ), 
		"base" => "dtwpb_woocommerce_myaccount_dashboard", 
		"category" => __( "Woo My Account", 'dt_woocommerce_page_builder' ), 
		"icon" => "dt-vc-icon-dt_woo", 
		'description' => __( 'Shows account dashboard.', 'dt_woocommerce_page_builder' ), 
		"params" => array( 
			array( 
				'type' => 'textarea_html', 
				'heading' => __( 'Custom My Account Dashboard', 'dt_woocommerce_page_builder' ), 
				'value' => '', 
				'save_always' => true, 
				'param_name' => 'content', 
				'description' => __( 
					'Overridden woocommerce/myaccount/dashboard.php. Leave blank to use the template dashboard.php file', 
					'dt_woocommerce_page_builder' ) ), 
			array( 
				"type" => "textfield", 
				"heading" => __( "Extra class name", 'dt_woocommerce_page_builder' ), 
				"param_name" => "el_class", 
				'value' => '', 
				"description" => __( 
					"If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", 
					'dt_woocommerce_page_builder' ) ), 
			array( 
				'type' => 'css_editor', 
				'heading' => esc_html__( 'Css', 'dt_woocommerce_page_builder' ), 
				'param_name' => 'css', 
				'group' => esc_html__( 'Design options', 'dt_woocommerce_page_builder' ) ) ) ) );

vc_map( 
	array( 
		"name" => __( "My Account Orders", 'dt_woocommerce_page_builder' ), 
		"base" => "dtwpb_woocommerce_myaccount_orders", 
		"category" => __( "Woo My Account", 'dt_woocommerce_page_builder' ), 
		"icon" => "dt-vc-icon-dt_woo", 
		'description' => __( 'Shows orders on the account page.', 'dt_woocommerce_page_builder' ), 
		"params" => array( 
			array( 
				"type" => "textfield", 
				"heading" => __( "Extra class name", 'dt_woocommerce_page_builder' ), 
				"param_name" => "el_class", 
				'value' => '', 
				"description" => __( 
					"If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", 
					'dt_woocommerce_page_builder' ) ), 
			array( 
				'type' => 'css_editor', 
				'heading' => esc_html__( 'Css', 'dt_woocommerce_page_builder' ), 
				'param_name' => 'css', 
				'group' => esc_html__( 'Design options', 'dt_woocommerce_page_builder' ) ) ) ) );

vc_map( 
	array( 
		"name" => __( "My Account Downloads", 'dt_woocommerce_page_builder' ), 
		"base" => "dtwpb_woocommerce_myaccount_downloads", 
		"category" => __( "Woo My Account", 'dt_woocommerce_page_builder' ), 
		"icon" => "dt-vc-icon-dt_woo", 
		'description' => __( 'Shows orders on the account page.', 'dt_woocommerce_page_builder' ), 
		"params" => array( 
			array( 
				"type" => "textfield", 
				"heading" => __( "Extra class name", 'dt_woocommerce_page_builder' ), 
				"param_name" => "el_class", 
				'value' => '', 
				"description" => __( 
					"If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", 
					'dt_woocommerce_page_builder' ) ), 
			array( 
				'type' => 'css_editor', 
				'heading' => esc_html__( 'Css', 'dt_woocommerce_page_builder' ), 
				'param_name' => 'css', 
				'group' => esc_html__( 'Design options', 'dt_woocommerce_page_builder' ) ) ) ) );

vc_map( 
	array( 
		"name" => __( "My Account Addresses", 'dt_woocommerce_page_builder' ), 
		"base" => "dtwpb_woocommerce_myaccount_addresses", 
		"category" => __( "Woo My Account", 'dt_woocommerce_page_builder' ), 
		"icon" => "dt-vc-icon-dt_woo", 
		'description' => __( 'My Addresses.', 'dt_woocommerce_page_builder' ), 
		"params" => array (
		/*array(
			'type' => 'textarea_html',
			'heading' => __( 'Custom My Account Addresses Description', 'dt_woocommerce_page_builder' ),
			'value' => '',
			'save_always' => true,
			'param_name' => 'content',
			'description' => __( 'filter woocommerce_my_account_my_address_description', 'dt_woocommerce_page_builder' ),
		),*/
		array( 
				"type" => "textfield", 
				"heading" => __( "Extra class name", 'dt_woocommerce_page_builder' ), 
				"param_name" => "el_class", 
				'value' => '', 
				"description" => __( 
					"If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", 
					'dt_woocommerce_page_builder' ) ), 
			array( 
				'type' => 'css_editor', 
				'heading' => esc_html__( 'Css', 'dt_woocommerce_page_builder' ), 
				'param_name' => 'css', 
				'group' => esc_html__( 'Design options', 'dt_woocommerce_page_builder' ) ) ) ) );

vc_map( 
	array( 
		"name" => __( "My Account Details", 'dt_woocommerce_page_builder' ), 
		"base" => "dtwpb_woocommerce_myaccount_edit_account", 
		"category" => __( "Woo My Account", 'dt_woocommerce_page_builder' ), 
		"icon" => "dt-vc-icon-dt_woo", 
		'description' => __( 'Edit account form.', 'dt_woocommerce_page_builder' ), 
		"params" => array( 
			array( 
				"type" => "textfield", 
				"heading" => __( "Extra class name", 'dt_woocommerce_page_builder' ), 
				"param_name" => "el_class", 
				'value' => '', 
				"description" => __( 
					"If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", 
					'dt_woocommerce_page_builder' ) ), 
			array( 
				'type' => 'css_editor', 
				'heading' => esc_html__( 'Css', 'dt_woocommerce_page_builder' ), 
				'param_name' => 'css', 
				'group' => esc_html__( 'Design options', 'dt_woocommerce_page_builder' ) ) ) ) );

vc_map( 
	array( 
		"name" => __( "My Account Payment methods", 'dt_woocommerce_page_builder' ), 
		"base" => "dtwpb_woocommerce_myaccount_payment_methods", 
		"category" => __( "Woo My Account", 'dt_woocommerce_page_builder' ), 
		"icon" => "dt-vc-icon-dt_woo", 
		'description' => __( 'Edit account form.', 'dt_woocommerce_page_builder' ), 
		"params" => array( 
			array( 
				"type" => "textfield", 
				"heading" => __( "Extra class name", 'dt_woocommerce_page_builder' ), 
				"param_name" => "el_class", 
				'value' => '', 
				"description" => __( 
					"If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", 
					'dt_woocommerce_page_builder' ) ), 
			array( 
				'type' => 'css_editor', 
				'heading' => esc_html__( 'Css', 'dt_woocommerce_page_builder' ), 
				'param_name' => 'css', 
				'group' => esc_html__( 'Design options', 'dt_woocommerce_page_builder' ) ) ) ) );
/*
 * vc_map(
 * array(
 * "name" => __( "My Account Add Payment method", 'dt_woocommerce_page_builder' ),
 * "base" => "dtwpb_woocommerce_myaccount_add_payment_method",
 * "category" => __( "Woo My Account", 'dt_woocommerce_page_builder' ),
 * "icon" => "dt-vc-icon-dt_woo",
 * 'description' => __( 'Edit account form.', 'dt_woocommerce_page_builder' ),
 * "params" => array(
 * array(
 * "type" => "textfield",
 * "heading" => __( "Extra class name", 'dt_woocommerce_page_builder' ),
 * "param_name" => "el_class",
 * 'value' => '',
 * "description" => __(
 * "If you wish to style particular content element differently, then use this field to add a class name and then refer
 * to it in your css file.",
 * 'dt_woocommerce_page_builder' ) ),
 * array(
 * 'type' => 'css_editor',
 * 'heading' => esc_html__( 'Css', 'dt_woocommerce_page_builder' ),
 * 'param_name' => 'css',
 * 'group' => esc_html__( 'Design options', 'dt_woocommerce_page_builder' ) ) ) ) );
 */
vc_map( 
	array( 
		"name" => __( "My Account Extra Endpoint", 'dt_woocommerce_page_builder' ), 
		"base" => "dtwpb_woocommerce_myaccount_extra_endpoint", 
		"category" => __( "Woo My Account", 'dt_woocommerce_page_builder' ), 
		"icon" => "dt-vc-icon-dt_woo", 
		'description' => '', 
		"params" => array( 
			array( 
				"type" => "textfield", 
				"heading" => __( "Extra Key endpoint", 'dt_woocommerce_page_builder' ), 
				"param_name" => "extra_key", 
				'value' => 'bookings',
				"description" => __( "Enter extra key for Account endpoint. eg: 'extra-key' for 'woocommerce_account_extra-key_endpoint', 'bookings' for 'woocommerce_account_bookings_endpoint'.", 'dt_woocommerce_page_builder' ) ), 
			array( 
				"type" => "textfield", 
				"heading" => __( "Extra class name", 'dt_woocommerce_page_builder' ), 
				"param_name" => "el_class", 
				'value' => '', 
				"description" => __( 
					"If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", 
					'dt_woocommerce_page_builder' ) ), 
			array( 
				'type' => 'css_editor', 
				'heading' => esc_html__( 'Css', 'dt_woocommerce_page_builder' ), 
				'param_name' => 'css', 
				'group' => esc_html__( 'Design options', 'dt_woocommerce_page_builder' ) ) ) ) );
vc_map( 
	array( 
		"name" => __( "My Account Logout", 'dt_woocommerce_page_builder' ), 
		"base" => "dtwpb_woocommerce_myaccount_logout", 
		"category" => __( "Woo My Account", 'dt_woocommerce_page_builder' ), 
		"icon" => "dt-vc-icon-dt_woo", 
		'description' => '', 
		"params" => array( 
			array( 
				"type" => "textfield", 
				"heading" => __( "Extra class name", 'dt_woocommerce_page_builder' ), 
				"param_name" => "el_class", 
				'value' => '', 
				"description" => __( 
					"If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", 
					'dt_woocommerce_page_builder' ) ), 
			array( 
				'type' => 'css_editor', 
				'heading' => esc_html__( 'Css', 'dt_woocommerce_page_builder' ), 
				'param_name' => 'css', 
				'group' => esc_html__( 'Design options', 'dt_woocommerce_page_builder' ) ) ) ) );