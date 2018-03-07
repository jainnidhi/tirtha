<?php
/**
 * tirtha functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Tirtha
 */

if ( ! function_exists( 'tirtha_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function tirtha_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on tirtha, use a find and replace
	 * to change 'tirtha' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'tirtha', get_template_directory() . '/languages' );

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
		'primary' => esc_html__( 'Primary', 'tirtha' ),
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

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'tirtha_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	add_theme_support( 'custom-logo' );
}
endif;
add_action( 'after_setup_theme', 'tirtha_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function tirtha_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'tirtha_content_width', 640 );
}
add_action( 'after_setup_theme', 'tirtha_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function tirtha_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'tirtha' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'tirtha_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function tirtha_scripts() {
	wp_enqueue_style( 'tirtha-style', get_stylesheet_uri() );

    $fonts_url='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300';
           if(!empty($fonts_url)){
            wp_enqueue_style('tirtha-fonts',esc_url_raw($fonts_url),array(),null);
    }

    wp_enqueue_style('fontawesome', get_template_directory_uri() . '/css/font-awesome.css', array());

	// wp_enqueue_script( 'tirtha-navigation', get_template_directory_uri() . '/js/navigation.js', array(), rand(), true );

	wp_enqueue_script( 'tirtha-responsive', get_template_directory_uri() . '/js/jquery.slicknav.js', array('jquery'), rand(), true );

	wp_enqueue_script( 'tirtha-custom', get_template_directory_uri() . '/js/custom.js', array('jquery'), rand(), false );

	wp_enqueue_script( 'tirtha-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'tirtha_scripts' );

/**
 * Implement the Custom Logo feature.
 */
require get_template_directory() . '/inc/custom-logo.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

add_editor_style('/style.css');
