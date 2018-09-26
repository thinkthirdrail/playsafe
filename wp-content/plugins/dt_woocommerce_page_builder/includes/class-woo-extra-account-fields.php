<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit(); // Exit if accessed directly
}

class DTWPB_Woo_Extra_Account_Fields {

	public function __construct() {
		add_action( 'init', array( &$this, 'register_post_type' ) );
		
		//add_action('woocommerce_register_post', array(&$this, 'dtwpb_woo_validate_extra_register_fields'), 10, 3);
		
		// Save the added data in the edit page
		add_action( 'init', array( &$this, 'dtwpb_woocommerce_edit_account_save' ) );
	}

	public function register_post_type() {
		if ( post_type_exists( 'dtwooaccountdetails' && ! class_exists( 'WooCommerce' ) ) )
			return;
		
		register_post_type( 
			'dtwooaccountdetails', 
			apply_filters( 
				'dtwpb_register_post_type_dtwooaccountdetails',
				array( 
					'labels' => array( 
						'name' => esc_html__( 'Account Details Extra Fields Template', 'dt_woocommerce_page_builder' ), 
						'singular_name' => esc_html__( 'Account Details', 'dt_woocommerce_page_builder' ), 
						'menu_name' => _x( 'Account Details', 'Admin menu name', 'dt_woocommerce_page_builder' ), 
						'add_new' => esc_html__( 'Add New', 'dt_woocommerce_page_builder' ), 
						'add_new_item' => esc_html__( 'Add New', 'dt_woocommerce_page_builder' ), 
						'edit' => esc_html__( 'Edit', 'dt_woocommerce_page_builder' ), 
						'edit_item' => esc_html__( 'Edit', 'dt_woocommerce_page_builder' ), 
						'new_item' => esc_html__( 'New', 'dt_woocommerce_page_builder' ), 
						'view' => esc_html__( 'View', 'dt_woocommerce_page_builder' ), 
						'view_item' => '', 
						'search_items' => esc_html__( 'Search Account Details', 'dt_woocommerce_page_builder' ), 
						'not_found' => esc_html__( 'Not found', 'dt_woocommerce_page_builder' ), 
						'not_found_in_trash' => esc_html__( 
							'No Account Details found in trash', 
							'dt_woocommerce_page_builder' ), 
						'parent' => esc_html__( 'Parent Account Details', 'dt_woocommerce_page_builder' ) ), 
					'public' => true, 
					'show_ui' => true, 
					'map_meta_cap' => true, 
					'publicly_queryable' => true, 
					'hierarchical' => true,  // Hierarchical causes memory issues - WP loads all records!
					'show_in_menu' => 'edit.php?post_type=product', 
					'menu_position' => 55, 
					'menu_icon' => 'dashicons-admin-page', 
					'exclude_from_search' => false, 
					'rewrite' => array( 'slug' => 'dtwooaccountdetails', 'with_front' => false, 'feeds' => true ), 
					'has_archive' => false, 
					'supports' => array( 'title', 'editor', 'author' ) ) ) );
		
		update_option('vc_roles[administrator][post_types][dtwooaccountdetails]', 1);
	}
	
	public function dtwpb_woo_validate_extra_register_fields( $username, $email, $validation_errors ){
		if( isset($POST['dtwpb_extra_fields_name']) ){
			$fields_data = $POST['dtwpb_extra_fields_name'];
			
			foreach ( $fields_data as $field ) {
			
				// if the field is required ignore it and continue
				if ( $field[ 'woocommerce_extra_fields_setting_id_required' ] == 'no' ) {
					continue;
				}
			
				$field_name = 'billing_' . $this->generate_name( $field[ 'woocommerce_extra_fields_setting_id_name' ] );
				if ( isset( $_POST[ $field_name ] ) && empty( $_POST[ $field_name ] ) ) {
					$validation_errors->add( "billing_" . $field_name . "_error", __( "<strong>Error</strong>: " . $field[ 'woocommerce_extra_fields_setting_id_name' ] . " is required!", $this->text_domain ) );
				}
			}
		}
	}
	
	public function dtwpb_woocommerce_edit_account_save(){
		
		if ( 'POST' !== strtoupper( $_SERVER[ 'REQUEST_METHOD' ] ) ) {
			return;
		}
		
		if ( empty( $_POST[ 'action' ] ) || ( 'save_account_details' !== $_POST[ 'action' ] ) || empty( $_POST[ '_wpnonce' ] ) ) {
			return;
		}
		
		wp_verify_nonce( $_POST[ '_wpnonce' ], 'woocommerce-save_account_details' );
		
		// Custom fields
		if ( ! empty( $_POST[ '_wp_http_referer' ] ) ) {
			$fields = $_POST;
			$customer_id = get_current_user_id();
			foreach ( $fields as $key => $field ) {
				if ( isset( $field ) ) {
					
						if ( $key == 'email_2' || $key == '_wpnonce' || $key == '_wp_http_referer' || $key == 'register' ) {
							continue;
						}
		
						update_user_meta( $customer_id, $key, sanitize_text_field( $field ) );
				}
			}
		}
		
		
		$update = TRUE;
		$errors = new WP_Error();
		$user   = new stdClass();
		
		$user->ID     = (int) get_current_user_id();
		$current_user = get_user_by( 'id', $user->ID );
		
		if ( $user->ID <= 0 ) {
			return;
		}
		
		$account_first_name = ! empty( $_POST[ 'account_first_name' ] ) ?
		wc_clean( $_POST[ 'account_first_name' ] ) :
		'';
		$account_last_name  = ! empty( $_POST[ 'account_last_name' ] ) ?
		wc_clean( $_POST[ 'account_last_name' ] ) :
		'';
		$account_email      = ! empty( $_POST[ 'account_email' ] ) ?
		sanitize_email( $_POST[ 'account_email' ] ) :
		'';
		$pass1              = ! empty( $_POST[ 'password_1' ] ) ?
		$_POST[ 'password_1' ] :
		'';
		$pass2              = ! empty( $_POST[ 'password_2' ] ) ?
		$_POST[ 'password_2' ] :
		'';
		
		$user->first_name   = $account_first_name;
		$user->last_name    = $account_last_name;
		$user->user_email   = $account_email;
		$user->display_name = $user->first_name;
		
		if ( $pass1 ) {
			$user->user_pass = $pass1;
		}
		
		if ( empty( $account_first_name ) || empty( $account_last_name ) ) {
			wc_add_notice( __( 'Please enter your name.', 'dt_woocommerce_page_builder' ), 'error' );
		}
		
		if ( empty( $account_email ) || ! is_email( $account_email ) ) {
			wc_add_notice( __( 'Please provide a valid email address.', 'dt_woocommerce_page_builder' ), 'error' );
		} elseif ( email_exists( $account_email ) && $account_email !== $current_user->user_email ) {
			wc_add_notice( __( 'This email address is already registered.', 'dt_woocommerce_page_builder' ), 'error' );
		}
		
		if ( ! empty( $pass1 ) && empty( $pass2 ) ) {
			wc_add_notice( __( 'Please re-enter your password.', 'dt_woocommerce_page_builder' ), 'error' );
		} elseif ( ! empty( $pass1 ) && $pass1 !== $pass2 ) {
			wc_add_notice( __( 'Passwords do not match.', 'dt_woocommerce_page_builder' ), 'error' );
		}
		
		// Allow plugins to return their own errors.
		do_action_ref_array( 'user_profile_update_errors', array( &$errors, $update, &$user ) );
		
		if ( $errors->get_error_messages() ) {
			foreach ( $errors->get_error_messages() as $error ) {
				wc_add_notice( $error, 'error' );
			}
		}
		
		if ( wc_notice_count( 'error' ) == 0 ) {
		
			wp_update_user( $user );
		
			wc_add_notice( __( 'Account details changed successfully.', 'dt_woocommerce_page_builder' ) );
		
			do_action( 'woocommerce_save_account_details', $user->ID );
		
			wp_safe_redirect( get_permalink( wc_get_page_id( 'myaccount' ) ) );
			exit;
		}
		
		
	}
}

new DTWPB_Woo_Extra_Account_Fields();