<?php



/**
 * peruviptravel functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package peruviptravel
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function peruviptravel_setup()
{
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on peruviptravel, use a find and replace
		* to change 'peruviptravel' to the name of your theme in all the template files.
		*/
	load_theme_textdomain('peruviptravel', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support('title-tag');
	add_image_size('imgtour', 350, 350, true);
	add_image_size('imgdestination', 380, 300, true);
	add_image_size('smallt', 100, 100, true);
	add_image_size('destiny', 180, 200, true);
	add_image_size('blogs', 270, 160, true);
	add_image_size('category', 280, 208, true);
	add_image_size('slider', 1900, 450, true);


	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support('post-thumbnails');



	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__('Primary', 'peruviptravel'),
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
			'peruviptravel_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

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
add_action('after_setup_theme', 'peruviptravel_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function peruviptravel_content_width()
{
	$GLOBALS['content_width'] = apply_filters('peruviptravel_content_width', 640);
}
add_action('after_setup_theme', 'peruviptravel_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function peruviptravel_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'peruviptravel'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'peruviptravel'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'peruviptravel_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function peruviptravel_scripts()
{
	wp_enqueue_style('peruviptravel-style', get_stylesheet_uri(), array(), 1.0);

	wp_enqueue_style('peruviptravel-css', get_stylesheet_directory_uri() . '/css/theme.css', array(), 1.0);

	wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), '11.0.0');

	wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), '11.0.0', true);

	wp_enqueue_script('peruviptravel-js', get_template_directory_uri() . '/js/app.js', array('swiper-js'), _S_VERSION, true);

	wp_enqueue_script('peruviptravel-nav', get_template_directory_uri() . '/js/nav.js', array(), _S_VERSION, true);
}
add_action('wp_enqueue_scripts', 'peruviptravel_scripts');

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
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}



function register_acf_block_types()
{


	acf_register_block_type(array(
		'name'              => 'Gallery Tour',
		'title'             => __('GalleryTour'),
		'description'       => __('Gallery Tour.'),
		'render_template'   => 'template-parts/block/galleryt.php',
		'category'          => 'formatting',
		'icon'              => 'admin-generic',
		'keywords'          => array('gallerys', 'gallery'),
	));


	// acf_register_block_type(array(
	// 	'name'              => 'card',
	// 	'title'             => __('card'),
	// 	'description'       => __('A custom card block.'),
	// 	'render_template'   => 'template-parts/block/card.php',
	// 	'category'          => 'formatting',
	// 	'icon'              => 'admin-generic',
	// 	'keywords'          => array( 'card', 'habitacion' ),
	//  ));

	//  acf_register_block_type(array(
	// 	'name'              => 'servicios',
	// 	'title'             => __('servicios'),
	// 	'description'       => __('A custom servicios block.'),
	// 	'render_template'   => 'template-parts/block/servicios.php',
	// 	'category'          => 'formatting',
	// 	'icon'              => 'admin-generic',
	// 	'keywords'          => array( 'servicios', 'habitacion' ),
	//  ));



}

// Check if function exists and hook into setup.
if (function_exists('acf_register_block_type')) {
	add_action('acf/init', 'register_acf_block_types');
}




if (function_exists('acf_add_options_page')) {

	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
}


function wpdocs_custom_excerpt_length($length)
{
	return 30;
}
add_filter('excerpt_length', 'wpdocs_custom_excerpt_length', 999);


function upload_svg_files( $allowed ) {
    if ( !current_user_can( 'manage_options' ) )
        return $allowed;
    $allowed['svg'] = 'image/svg+xml';
    return $allowed;
}
add_filter( 'upload_mimes', 'upload_svg_files');

add_filter('wpcf7_autop_or_not', '__return_false');

// Bloquear copia de contenido en WordPress
function bloquear_copia_contenido() {
    ?>
    <script type="text/javascript">
        // Bloquear clic derecho
        document.addEventListener('contextmenu', function(e) {
            e.preventDefault();
        });

        // Bloquear selección de texto
        document.addEventListener('selectstart', function(e) {
            e.preventDefault();
        });

        // Bloquear copiar con teclado (CTRL+C / CMD+C)
        document.addEventListener('keydown', function(e) {
            if ((e.ctrlKey && e.key === 'c') || (e.metaKey && e.key === 'c')) {
                e.preventDefault();
            }
        });
    </script>
    <style>
        /* Evitar selección por CSS */
        body {
            -webkit-user-select: none; /* Chrome, Safari */
            -moz-user-select: none;    /* Firefox */
            -ms-user-select: none;     /* IE/Edge */
            user-select: none;         /* Estándar */
        }
    </style>
    <?php
}
add_action('wp_head', 'bloquear_copia_contenido');

