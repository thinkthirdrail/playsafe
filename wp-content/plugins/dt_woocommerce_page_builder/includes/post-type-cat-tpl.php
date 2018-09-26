<?php 
// Don't load directly
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

if ( ! class_exists( 'dtwpb_posttype_cat_tpl' ) ) {

	class dtwpb_posttype_cat_tpl {

		public function __construct() {
			add_action( 'init', array( &$this, 'register_post_type' ) );
		}

		public function register_post_type() {
			if ( post_type_exists( 'dtwpb_cat_tpl' ) && !class_exists('WooCommerce') )
				return;
			
			register_post_type( 
				'dtwpb_cat_tpl', 
				apply_filters( 
					'dtwpb_register_post_type_cat_tpl', 
					array( 
						'labels' => array( 
							'name' => esc_html__( 'Category Templates', 'dt_woocommerce_page_builder' ), 
							'singular_name' => esc_html__( 'Category Template', 'dt_woocommerce_page_builder' ), 
							'menu_name' => _x( 'Category Templates', 'Admin menu name', 'dt_woocommerce_page_builder' ), 
							'add_new' => esc_html__( 'Add New Category Templates', 'dt_woocommerce_page_builder' ), 
							'add_new_item' => esc_html__( 'Add New', 'dt_woocommerce_page_builder' ), 
							'edit' => esc_html__( 'Edit', 'dt_woocommerce_page_builder' ), 
							'edit_item' => esc_html__( 'Edit Product Template', 'dt_woocommerce_page_builder' ), 
							'new_item' => esc_html__( 'New', 'dt_woocommerce_page_builder' ), 
							'view' => esc_html__( 'View', 'dt_woocommerce_page_builder' ), 
							'view_item' => esc_html__( 'View', 'dt_woocommerce_page_builder' ), 
							'search_items' => esc_html__( 'Search Product Templates', 'dt_woocommerce_page_builder' ), 
							'not_found' => esc_html__( 'No Templates found', 'dt_woocommerce_page_builder' ), 
							'not_found_in_trash' => esc_html__( 'No Templates found in trash', 'dt_woocommerce_page_builder' ), 
							'parent' => esc_html__( 'Parent Template', 'dt_woocommerce_page_builder' ) ), 
						'public' => true,
						'show_ui' => true, 
						'map_meta_cap' => true, 
						'publicly_queryable' => true, 
						'hierarchical' => true,  // Hierarchical causes memory issues - WP loads all records!
						'show_in_menu' => 'edit.php?post_type=product',
						'menu_position' => 56,
						'menu_icon' => 'dashicons-admin-page',
						'exclude_from_search' => false, 
						'rewrite'   => array( 'slug' => 'dtwpb_cat_tpl', 'with_front' => false, 'feeds' => true ) ,
						'has_archive' => false, 
						'supports' => array( 'title', 'editor', 'author' ) ) ) );
			
		}
		
	}
	new dtwpb_posttype_cat_tpl();
}