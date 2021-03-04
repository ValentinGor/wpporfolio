<?php
/**
 * wportfolio functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package wportfolio
 */


/**
 * Enable support carbonfields.
 */
add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
    require_once( 'vendor/autoload.php' );
    \Carbon_Fields\Carbon_Fields::boot();
}

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'wportfolio_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function wportfolio_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on wportfolio, use a find and replace
		 * to change 'wportfolio' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'wportfolio', get_template_directory() . '/languages' );

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
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'wportfolio' ),
			)
		);

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

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'wportfolio_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'wportfolio_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wportfolio_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'wportfolio_content_width', 640 );
}
add_action( 'after_setup_theme', 'wportfolio_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function wportfolio_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'wportfolio' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'wportfolio' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'wportfolio_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function wportfolio_scripts() {
    wp_enqueue_style( 'wportfolio-normalize', "https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css", array(), _S_VERSION );
    wp_enqueue_style( 'wportfolio-bootstrap', "https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css", array(), _S_VERSION );
    wp_enqueue_style( 'wportfolio-main-style', get_template_directory_uri() . "/assets/css/style.css", array(), _S_VERSION );


    wp_enqueue_style( 'wportfolio-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'wportfolio-style', 'rtl', 'replace' );

	wp_enqueue_script( 'wportfolio-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

    wp_enqueue_script( 'wportfolio-jquery-js', "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js", array(), _S_VERSION, false );
    wp_enqueue_script( 'wportfolio-popper-js', "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js", array(), _S_VERSION, true );
    wp_enqueue_script( 'wportfolio-bootstrap-js', "https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js", array(), _S_VERSION, true );
    wp_enqueue_script( 'wportfolio-script-js', get_template_directory_uri() . '/assets/js/script.js', array(), _S_VERSION, true );

}
add_action( 'wp_enqueue_scripts', 'wportfolio_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

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
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}

/**
 * Require carbon.php.
 */
require get_template_directory() . '/inc/carbon.php';

/**
 * Разрешить загрузку svg
 */
define('ALLOW_UNFILTERED_UPLOADS', true);

function upload_allow_types($mimes)
{
    // разрешаем новые типы
    $mimes['svg'] = 'image/svg+xml';

    return $mimes;
}

add_filter('upload_mimes', 'upload_allow_types');
add_filter('wp_check_filetype_and_ext', 'upload_allow_types');


add_filter("rsssl_fixer_output", "rsssl_comment_remover", 10, 1);

function rsssl_comment_remover($buffer)
{

//replace the comment with empty string

    $buffer = str_replace('data-rsssl=1', "", $buffer);

    return $buffer;
}
