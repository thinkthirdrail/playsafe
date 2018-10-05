<?php
/**
 * playsafe functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package playsafe
 */

if ( ! function_exists( 'playsafe_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function playsafe_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on playsafe, use a find and replace
		 * to change 'playsafe' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'playsafe', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary' => esc_html__( 'Primary', 'playsafe' ),
			'support' => esc_html__( 'Support', 'playsafe' ),
			'software' => esc_html__( 'Software', 'playsafe' ),
		) );



		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		// add_theme_support( 'custom-background', apply_filters( 'playsafe_custom_background_args', array(
		// 	'default-color' => 'ffffff',
		// 	'default-image' => '',
		// ) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'playsafe_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function playsafe_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'playsafe_content_width', 640 );
}
add_action( 'after_setup_theme', 'playsafe_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function playsafe_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'playsafe' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'playsafe' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
        'name' => __( 'WooCom Archive', 'playsafe' ),
        'id' => 'woo-arch-sidebar',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'playsafe_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function playsafe_scripts() {
	wp_enqueue_style( 'playsafe-style', get_template_directory_uri() . '/assets/css/style.css' );

	wp_enqueue_style( 'playsafe-aos', get_template_directory_uri() . '/assets/css/aos.css' );

	//wp_enqueue_script( 'playsafe-jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), '3.3.1', false );

	wp_enqueue_script( 'playsafe-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '4.1.0', false );

	wp_enqueue_script( 'playsafe-popper', get_template_directory_uri() . '/assets/js/popper.min.js', array(), '1.0.0', false );

	wp_enqueue_script( 'playsafe-slick', get_template_directory_uri() . '/assets/js/slick.min.js', array(), '1.0.0', false );

	wp_enqueue_script( 'playsafe-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '20151215', false );

	wp_enqueue_script( 'playsafe-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20151215', false );

	wp_enqueue_script( 'playsafe-aos', get_template_directory_uri() . '/assets/js/aos.min.js', array(), '2.1.1', false );

	wp_enqueue_script( 'playsafe-scrollify ', get_template_directory_uri() . '/assets/js/jquery.scrollify.js', array(), '1.0.19', false );

	wp_enqueue_script( 'playsafe-script', get_template_directory_uri() . '/assets/js/script.min.js', array(), '1.0.0', false );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'playsafe_scripts' );

if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {
   wp_deregister_script('jquery');
   wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js", false, null);
   wp_enqueue_script('jquery');
}

/**
 * Implement the Custom Header feature.
 */
// require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';


/**
 * Register Custom Navigation Walker
 */
require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

/**
 *
 */
function playsafe_featured_image() {
	if ( is_singular() ) {
		$id = get_queried_object_id ();
		if ( has_post_thumbnail( $id ) ) {
			$image = wp_get_attachment_image_src( get_post_thumbnail_id( $id ), 'full' );
			$url = $image[0];
		} else {
			$url = '';
		}
	}else {
		$url = '';
	}
	return $url;
}

/**
 * Google Maps API
 */
function my_acf_init() {

	acf_update_setting('google_api_key', 'AIzaSyAVIQwewUKl6-o2PLxDmMLtiVxQLquPJm0');
}

add_action('acf/init', 'my_acf_init');



/**
 * Hardware Products Custom post Type
 */
function hardware_function() {

	$labels = array(
		'name'                  => 'Hardware Products',
		'singular_name'         => 'Hardware Product',
		'menu_name'             => 'Hardware',
		'name_admin_bar'        => 'Hardware',
		'archives'              => 'Product Archives',
		'attributes'            => 'Product Attributes',
		'parent_item_colon'     => 'Parent Product:',
		'all_items'             => 'All Products',
		'add_new_item'          => 'Add New Product',
		'add_new'               => 'Add New',
		'new_item'              => 'New Product',
		'edit_item'             => 'Edit Product',
		'update_item'           => 'Update Product',
		'view_item'             => 'View Product',
		'view_items'            => 'View Products',
		'search_items'          => 'Search Product',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into item',
		'uploaded_to_this_item' => 'Uploaded to this item',
		'items_list'            => 'Items list',
		'items_list_navigation' => 'Items list navigation',
		'filter_items_list'     => 'Filter items list',
	);
	$args = array(
		'label'                 => 'Hardware Product',
		'description'           => 'Hardware Products from Paysafe Systems',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-products',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'hardware', $args );

}
add_action( 'init', 'hardware_function', 0 );

/**
 * Hardware Category Taxonomy
 */
 // Register Custom Taxonomy
 function hardware_taxonomy() {

 	$labels = array(
 		'name'                       => _x( 'Hardware Categories', 'Taxonomy General Name', 'text_domain' ),
 		'singular_name'              => _x( 'Hardware Category', 'Taxonomy Singular Name', 'text_domain' ),
 		'menu_name'                  => __( 'Hardware Category', 'text_domain' ),
 		'all_items'                  => __( 'All Categories', 'text_domain' ),
 		'parent_item'                => __( 'Parent Category', 'text_domain' ),
 		'parent_item_colon'          => __( 'Parent Category:', 'text_domain' ),
 		'new_item_name'              => __( 'New Category Name', 'text_domain' ),
 		'add_new_item'               => __( 'Add New Category', 'text_domain' ),
 		'edit_item'                  => __( 'Edit Category', 'text_domain' ),
 		'update_item'                => __( 'Update Category', 'text_domain' ),
 		'view_item'                  => __( 'View Category', 'text_domain' ),
 		'separate_items_with_commas' => __( 'Separate categories with commas', 'text_domain' ),
 		'add_or_remove_items'        => __( 'Add or remove Categories', 'text_domain' ),
 		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
 		'popular_items'              => __( 'Popular Categories', 'text_domain' ),
 		'search_items'               => __( 'Search Categories', 'text_domain' ),
 		'not_found'                  => __( 'Not Found', 'text_domain' ),
 		'no_terms'                   => __( 'No categories', 'text_domain' ),
 		'items_list'                 => __( 'Categories list', 'text_domain' ),
 		'items_list_navigation'      => __( 'Categories list navigation', 'text_domain' ),
 	);
 	$args = array(
 		'labels'                     => $labels,
 		'hierarchical'               => true,
 		'public'                     => true,
 		'show_ui'                    => true,
 		'show_admin_column'          => true,
 		'show_in_nav_menus'          => true,
 		'show_tagcloud'              => true,
 	);
 	register_taxonomy( 'hardware_category', array( 'hardware' ), $args );

 }
 add_action( 'init', 'hardware_taxonomy', 0 );



//Remove title hook and add in a new one with the product categories added
remove_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10 );
add_action( 'woocommerce_shop_loop_item_title', 'VS_woo_loop_product_title', 10 );

function VS_woo_loop_product_title() {
    echo '<h3 class="the-shoptitle">' . get_the_title() . '</h3>';
    $terms = get_the_terms( $post->ID, 'product_cat' );
    if ( $terms && ! is_wp_error( $terms ) ) :
    //only displayed if the product has at least one category
        $cat_links = array();
        foreach ( $terms as $term ) {
            $cat_links[] = $term->name;
        }
        $on_cat = join( " ", $cat_links );
        ?>
        <div class="cat-label-group">
            <?php echo $on_cat; ?>
        </div>
    <?php endif;
}



/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}
