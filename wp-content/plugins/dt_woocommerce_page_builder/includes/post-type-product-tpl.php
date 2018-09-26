<?php 
// Don't load directly
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

if ( ! class_exists( 'dtwpb_posttype_product_tpl' ) ) {

	class dtwpb_posttype_product_tpl {

		public function __construct() {
// 			add_action( 'init', array( &$this, 'init' ) );
			add_action( 'init', array( &$this, 'register_post_type' ) );
		}
		
		public function init(){
			
		}

		public function register_post_type() { 
			if ( post_type_exists( 'dtwpb_product_tpl' && !class_exists('WooCommerce') ) )
				return;
			
			register_post_type( 
				'dtwpb_product_tpl', 
				apply_filters( 
					'dtwpb_register_post_type_product_tpl', 
					array( 
						'labels' => array( 
							'name' => esc_html__( 'Product Templates', 'dt_woocommerce_page_builder' ), 
							'singular_name' => esc_html__( 'Product Template', 'dt_woocommerce_page_builder' ), 
							'menu_name' => _x( 'Product Templates', 'Admin menu name', 'dt_woocommerce_page_builder' ), 
							'add_new' => esc_html__( 'Add New Product Template', 'dt_woocommerce_page_builder' ), 
							'add_new_item' => esc_html__( 'Add New Product Template', 'dt_woocommerce_page_builder' ), 
							'edit' => esc_html__( 'Edit', 'dt_woocommerce_page_builder' ), 
							'edit_item' => esc_html__( 'Edit Product Template', 'dt_woocommerce_page_builder' ), 
							'new_item' => esc_html__( 'New Product Template', 'dt_woocommerce_page_builder' ), 
							'view' => esc_html__( 'View Product Template', 'dt_woocommerce_page_builder' ), 
							'view_item' => esc_html__( 'View Product Template', 'dt_woocommerce_page_builder' ), 
							'search_items' => esc_html__( 'Search Product Templates', 'dt_woocommerce_page_builder' ), 
							'not_found' => esc_html__( 'No Product Templates found', 'dt_woocommerce_page_builder' ), 
							'not_found_in_trash' => esc_html__( 'No Product Templates found in trash', 'dt_woocommerce_page_builder' ), 
							'parent' => esc_html__( 'Parent Product Template', 'dt_woocommerce_page_builder' ) ), 
						'public' => true,
						'show_ui' => true, 
						'map_meta_cap' => true, 
						'publicly_queryable' => true, 
						'hierarchical' => true,  // Hierarchical causes memory issues - WP loads all records!
						'show_in_menu' => 'edit.php?post_type=product',
						'menu_position' => 55, 
						'menu_icon' => 'dashicons-admin-page', 
						'exclude_from_search' => false, 
						'rewrite'   => array( 'slug' => 'dtwpb_product_tpl', 'with_front' => false, 'feeds' => true ) ,
						'has_archive' => false, 
						'supports' => array( 'title', 'editor', 'author' ) ) ) );
			
		}
		
	}
	new dtwpb_posttype_product_tpl();
}