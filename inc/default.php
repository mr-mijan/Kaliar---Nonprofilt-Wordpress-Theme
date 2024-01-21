<?php
// Theme Functions
function kaliar_after_setup_theme() {

    /*
    * Make theme available for translation.
    * Translations can be filed in the /languages/ directory.
    * If you're building a theme based on kaliar, use a find and replace
    * to change 'kaliar' to the name of your theme in all the template files.
    */
	load_theme_textdomain( 'kaliar', get_template_directory() . '/languages' );

    /*
    * Let WordPress manage the document title.
    * By adding theme support, we declare that this theme does not use a
    * hard-coded <title> tag in the document head, and expect WordPress to
    * provide it for us.
    */
    add_theme_support('title-tag');
    add_theme_support('woocommerce');
    add_theme_support( "wp-block-styles" );
    add_theme_support( "responsive-embeds" );
    add_theme_support( "custom-header");
    add_theme_support( "custom-background");
    add_theme_support( "align-wide" );
    add_theme_support( "register_block_style" );
    add_theme_support( "register_block_pattern" );
    add_editor_style();
    /*
    * Enable support for Post Thumbnails on posts and pages.
    *
    * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
    */
    add_theme_support( 'post-thumbnails', array('post', 'page','event','causes'));


    // This theme uses wp_nav_menu() in one location.
    register_nav_menu( 'Primary_Menu', __('Header', 'kaliar'));
      // This theme uses wp_nav_menu() in one location.
      register_nav_menu( 'Mobile_Menu', __('Mobile Menu', 'kaliar'));

    //add_theme_support('post-formats', array('aside', 'image', 'video', 'quote', 'link', 'gallery', 'audio'));

    /*
    * Switch default core markup for search form, comment form, and comments
    * to output valid HTML5.
    */
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

    /**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
    add_theme_support( 'custom-logo' );

    // Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

    // Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
    
    }
add_action( 'after_setup_theme', 'kaliar_after_setup_theme' );


// CSS JS Enqueue
function kaliar_theme_style(){

    // CSS Enqueue
    wp_enqueue_style( 'theme_style', get_stylesheet_uri() );
    wp_enqueue_style('bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css', array(), '5.3.2', 'all' );
    wp_enqueue_style('meanmenu', get_template_directory_uri().'/assets/css/meanmenu.css', array(), '1.0.0', 'all' );
    wp_enqueue_style('fontawesome', get_template_directory_uri().'/assets/css/all.min.css', array(), '6.0.0', 'all' );
    wp_enqueue_style('swiper', get_template_directory_uri().'/assets/css/swiper-bundle.min.css', array(), '8.3.2', 'all' );
    wp_enqueue_style('magnific-popup', get_template_directory_uri().'/assets/css/magnific-popup.css', array(), '1.1.0', 'all' );
    wp_enqueue_style('animate', get_template_directory_uri().'/assets/css/animate.css', array(), '1.0.0', 'all' );
    wp_enqueue_style('nice-select', get_template_directory_uri().'/assets/css/nice-select.css', array(), '1.0.0', 'all' );
    wp_enqueue_style('style', get_template_directory_uri().'/assets/css/style.css', array(), '1.0.0', 'all' );

    // JS Enqueue
    wp_enqueue_script( 'jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/assets/js/bootstrap.min.js', array(), '5.3.2', 'true' );
    wp_enqueue_script('meanmenu', get_template_directory_uri().'/assets/js/meanmenu.js', array(), '1.0.0', 'true' );
    wp_enqueue_script('swiper', get_template_directory_uri().'/assets/js/swiper-bundle.min.js', array(), '8.3.2', 'true' );
    wp_enqueue_script('counterup', get_template_directory_uri().'/assets/js/jquery.counterup.min.js', array(), '1.0.0', 'true' );
    wp_enqueue_script('wow', get_template_directory_uri().'/assets/js/wow.min.js', array(), '1.3.0', 'true' );
    wp_enqueue_script('magnific-popup', get_template_directory_uri().'/assets/js/magnific-popup.min.js', array(), '1.1.0', 'true' );
    wp_enqueue_script('nice-select', get_template_directory_uri().'/assets/js/nice-select.min.js', array(), '1.0.0', 'true' );
    wp_enqueue_script('isotope', get_template_directory_uri().'/assets/js/isotope.pkgd.min.html', array(), '1.0.0', 'true' );
    wp_enqueue_script('waypoints', get_template_directory_uri().'/assets/js/jquery.waypoints.js', array(), '1.0.0', 'true' );
    wp_enqueue_script('script', get_template_directory_uri().'/assets/js/script.js', array(), '1.0.0', 'true' );
}
add_action('wp_enqueue_scripts', 'kaliar_theme_style');


//Post Excerpt
function kaliar_custom_excerpt_length( $length ) {
    return 25;
}
add_filter( 'excerpt_length', 'kaliar_custom_excerpt_length', 999 );

function kaliar_excerpt_more( $more ) {
    return ' ...';
}
add_filter( 'excerpt_more', 'kaliar_excerpt_more' );
