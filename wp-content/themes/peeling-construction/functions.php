<?php
/**
 * peeling-construction.az functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package peeling-construction.az
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function peeling_setup() {


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
			'menu-1' => esc_html__( 'Primary', 'peeling' ),
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
			'peeling_custom_background_args',
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
add_action( 'after_setup_theme', 'peeling_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function peeling_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'peeling_content_width', 640 );
}
add_action( 'after_setup_theme', 'peeling_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */

function create_posttype() {
    register_post_type('projects',
        array(
            'labels' => array(
                'name' => __('PROJECTS', 'Landing'),
                'singular_name' => __('PROJECT', 'Landing')
            ),
            'public' => true,
            'has_archive' => true,
            'publicly_queryable' => true,
            'rewrite' => array('slug' => 'projects'),
            'show_in_rest' => true,
            'supports' => array('title', 'editor', 'thumbnail'),
        )
    );
    register_post_type('project_types',
        array(
            'labels' => array(
                'name' => __('PROJECT TYPES', 'Landing'),
                'singular_name' => __('PROJECT TYPE', 'Landing')
            ),
            'public' => true,
            'has_archive' => true,
            'publicly_queryable' => true,
            'rewrite' => array('slug' => 'project_types'),
            'show_in_rest' => true,
            'supports' => array('title', 'editor', 'thumbnail'),
        )
    );
}
add_action('init', 'create_posttype');

function projects_template($template) {
    if (is_singular('projects')) {
        return get_template_directory() . '/single-project.php';
    }
    return $template;
}
add_filter('template_include', 'projects_template');

add_action('init', function() {
    add_post_type_support('projects', 'thumbnail');
    add_post_type_support('project_types', 'thumbnail');
});

add_action('pll_init', function () {
    if (function_exists('pll_register_post_type')) {
        pll_register_post_type('projects');
        pll_register_post_type('project_types');
    }
});


add_action('init', function () {
    $strings = include get_template_directory() . '/lang-strings.php';

    foreach ($strings as $key => $value) {
        pll_register_string($key, $value, 'Landing');
    }
});

function t($key, $replacements = []) {
    static $strings = null;

    if ($strings === null) {
        $strings = include get_template_directory() . '/lang-strings.php';
    }

    if (!isset($strings[$key])) {
        return "[[$key]]"; // для отладки
    }

    $translated = pll__($strings[$key]);

    if (!empty($replacements)) {
        foreach ($replacements as $placeholder => $value) {
            $translated = str_replace($placeholder, $value, $translated);
        }
    }

    return $translated;
}


function peeling_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'peeling' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'peeling' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'peeling_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function peeling_scripts() {
	wp_enqueue_style( 'peeling-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'peeling-style', 'rtl', 'replace' );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'peeling_scripts' );



