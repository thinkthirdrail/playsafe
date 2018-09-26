<?php

// Single product page builder
vc_map( 
	array( 
		"name" => esc_html__( "Single Product Image", 'dt_woocommerce_page_builder' ), 
		"base" => "dtwpb_single_product_image", 
		"category" => esc_html__( "Woo Single product", 'dt_woocommerce_page_builder' ), 
		"icon" => "dt-vc-icon-dt_woo", 
		"params" => array( 
			array( 
				"type" => "textfield", 
				"heading" => esc_html__( "Extra class name", 'dt_woocommerce_page_builder' ), 
				"param_name" => "el_class", 
				'value' => '', 
				"description" => esc_html__( 
					"If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", 
					'dt_woocommerce_page_builder' ) ), 
			array( 
				'type' => 'css_editor', 
				'heading' => esc_html__( 'Css', 'dt_woocommerce_page_builder' ), 
				'param_name' => 'css', 
				'group' => esc_html__( 'Design options', 'dt_woocommerce_page_builder' ) ) ) ) );

vc_map( 
	array( 
		"name" => __( "Single Product Title", 'dt_woocommerce_page_builder' ), 
		"base" => "dtwpb_single_product_title", 
		"category" => __( "Woo Single product", 'dt_woocommerce_page_builder' ), 
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
		"name" => __( "Single Product Rating", 'dt_woocommerce_page_builder' ), 
		"base" => "dtwpb_single_product_rating", 
		"category" => __( "Woo Single product", 'dt_woocommerce_page_builder' ), 
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
		"name" => __( "Single Product Price", 'dt_woocommerce_page_builder' ), 
		"base" => "dtwpb_single_product_price", 
		"category" => __( "Woo Single product", 'dt_woocommerce_page_builder' ), 
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
		"name" => __( "Single Product Excerpt", 'dt_woocommerce_page_builder' ), 
		"base" => "dtwpb_single_product_excerpt", 
		"category" => __( "Woo Single product", 'dt_woocommerce_page_builder' ), 
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
		"name" => __( "Single Product Add To Cart", 'dt_woocommerce_page_builder' ), 
		"base" => "dtwpb_single_product_add_to_cart", 
		"category" => __( "Woo Single product", 'dt_woocommerce_page_builder' ), 
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
		"name" => __( "Single Product Direct Checkout", 'dt_woocommerce_page_builder' ), 
		"base" => "dtwpb_single_product_direct_checkout", 
		"category" => __( "Woo Single product", 'dt_woocommerce_page_builder' ), 
		"icon" => "dt-vc-icon-dt_woo", 
		"params" => array( 
			array( 
				"type" => "textfield", 
				"heading" => __( "Direct Checkout Text", 'dt_woocommerce_page_builder' ), 
				"param_name" => "direct_checkout_text", 
				'value' => '', 
				'std' => __( "Direct Checkout", 'dt_woocommerce_page_builder' ), 
				"description" => __( 
					"Allow you to implement direct checkout without affecting the existing cart", 
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
		"name" => __( "Single Product Continue Shopping", 'dt_woocommerce_page_builder' ), 
		"base" => "dtwpb_single_product_continue_shopping_button", 
		"category" => __( "Woo Single product", 'dt_woocommerce_page_builder' ), 
		"icon" => "dt-vc-icon-dt_woo", 
		"params" => array( 
			array( 
				"type" => "textfield", 
				"heading" => __( "Continue Shopping button text", 'dt_woocommerce_page_builder' ), 
				"param_name" => "continue_shopping_text", 
				'value' => '', 
				'std' => __( "Continue Shopping", 'dt_woocommerce_page_builder' ), 
				"description" => __( "Add Continue Shopping Button", 'dt_woocommerce_page_builder' ) ), 
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
		"name" => __( "Single Product Meta", 'dt_woocommerce_page_builder' ), 
		"base" => "dtwpb_single_product_meta", 
		"category" => __( "Woo Single product", 'dt_woocommerce_page_builder' ), 
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
		"name" => __( "Single Product Share", 'dt_woocommerce_page_builder' ), 
		"base" => "dtwpb_single_product_share", 
		"category" => __( "Woo Single product", 'dt_woocommerce_page_builder' ), 
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
		"name" => __( "Single Product Tabs", 'dt_woocommerce_page_builder' ), 
		"base" => "dtwpb_single_product_tabs", 
		"category" => __( "Woo Single product", 'dt_woocommerce_page_builder' ), 
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
		"name" => __( "Single Product Additional Information", 'dt_woocommerce_page_builder' ), 
		"base" => "dtwpb_single_product_additional_information", 
		"category" => __( "Woo Single product", 'dt_woocommerce_page_builder' ), 
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
		"name" => __( "Single Product Description", 'dt_woocommerce_page_builder' ), 
		"base" => "dtwpb_single_product_description", 
		"category" => __( "Woo Single product", 'dt_woocommerce_page_builder' ), 
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
		"name" => __( "Single Product Reviews", 'dt_woocommerce_page_builder' ), 
		"base" => "dtwpb_single_product_reviews", 
		"category" => __( "Woo Single product", 'dt_woocommerce_page_builder' ), 
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
		"name" => __( "Single Product Related Products", 'dt_woocommerce_page_builder' ), 
		"base" => "dtwpb_single_product_related_products", 
		"category" => __( "Woo Single product", 'dt_woocommerce_page_builder' ), 
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
				"type" => "dropdown", 
				"heading" => __( "Products order", 'dt_woocommerce_page_builder' ), 
				"param_name" => "order", 
				'class' => '', 
				"value" => array( 
					__( 'desc', 'dt_woocommerce_page_builder' ) => 'desc', 
					__( 'asc', 'dt_woocommerce_page_builder' ) => 'asc' ) ), 
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
		"name" => __( "Single Product up-sells", 'dt_woocommerce_page_builder' ), 
		"base" => "dtwpb_single_product_upsells", 
		"category" => __( "Woo Single product", 'dt_woocommerce_page_builder' ), 
		"icon" => "dt-vc-icon-dt_woo", 
		"params" => array( 
			array( 
				"type" => "textfield", 
				"heading" => __( "Product Per Page", 'dt_woocommerce_page_builder' ), 
				"param_name" => "posts_per_page", 
				"value" => - 1 ), 
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
				"type" => "dropdown", 
				"heading" => __( "Products order", 'dt_woocommerce_page_builder' ), 
				"param_name" => "order", 
				'class' => '', 
				"value" => array( 
					__( 'desc', 'dt_woocommerce_page_builder' ) => 'desc', 
					__( 'asc', 'dt_woocommerce_page_builder' ) => 'asc' ) ), 
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
 * Support YITH WooCommerce Wishlist plugin
 */
if ( defined( 'YITH_WCWL' ) ) {
	if ( get_option( 'yith_wcwl_button_position' ) == 'shortcode' ) {
	}
	vc_map( 
		array( 
			"name" => __( "YITH WooCommerce Wishlist Single Add To Wishlist", 'dt_woocommerce_page_builder' ), 
			"base" => "dtwpb_yith_wcwl_add_to_wishlist", 
			"category" => __( "Woo Single product", 'dt_woocommerce_page_builder' ), 
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
}

/*
 * Support YITH WooCommerce Compare plugin
 */
if ( defined( 'YITH_WOOCOMPARE' ) ) {
	if ( get_option( 'yith_woocompare_compare_button_in_product_page' ) == 'yes' )
		vc_map( 
			array( 
				"name" => __( "YITH WooCommerce Compare Single Add Compare Link", 'dt_woocommerce_page_builder' ), 
				"base" => "dtwpb_yith_woocompare_compare_button_in_product_page", 
				"category" => __( "Woo Single product", 'dt_woocommerce_page_builder' ), 
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
}

/*
 * Support WooCommerce_Germanized plugin
 */
if ( class_exists( 'WooCommerce_Germanized' ) ) {
	if ( get_option( 'woocommerce_gzd_display_product_detail_unit_price' ) == 'yes' )
		vc_map( 
			array( 
				"name" => __( "WooCommerce Germanized Single Price Unit", 'dt_woocommerce_page_builder' ), 
				"base" => "dtwpb_gzd_template_single_price_unit", 
				"category" => __( "Woo Single product", 'dt_woocommerce_page_builder' ), 
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
	
	if ( get_option( 'woocommerce_gzd_display_product_detail_tax_info' ) == 'yes' ||
		 get_option( 'woocommerce_gzd_display_product_detail_shipping_costs' ) == 'yes' )
		vc_map( 
			array( 
				"name" => __( "WooCommerce Germanized Single Legal Info", 'dt_woocommerce_page_builder' ), 
				"base" => "dtwpb_gzd_template_single_legal_info", 
				"category" => __( "Woo Single product", 'dt_woocommerce_page_builder' ), 
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
	
	if ( get_option( 'woocommerce_gzd_display_product_detail_delivery_time' ) == 'yes' )
		vc_map( 
			array( 
				"name" => __( "WooCommerce Germanized Single Delivery Time Info", 'dt_woocommerce_page_builder' ), 
				"base" => "dtwpb_gzd_template_single_delivery_time_info", 
				"category" => __( "Woo Single product", 'dt_woocommerce_page_builder' ), 
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
}

/*
 * Support WooCommerce Simple Auction plugin
 */
if ( class_exists( 'WooCommerce_simple_auction' ) ) {
		
		vc_map( 
			array( 
				"name" => __( "WooCommerce Simple Auction Bid", 'dt_woocommerce_page_builder' ), 
				"base" => "dtwpb_woocommerce_auction_bid",
				"category" => __( "Woo Single product", 'dt_woocommerce_page_builder' ), 
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
				"name" => __( "WooCommerce Simple Auction Pay", 'dt_woocommerce_page_builder' ), 
				"base" => "dtwpb_woocommerce_auction_pay",
				"category" => __( "Woo Single product", 'dt_woocommerce_page_builder' ), 
				"description" => __( "Display when the user logged in and have won the auction", 'dt_woocommerce_page_builder' ), 
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
		
}
