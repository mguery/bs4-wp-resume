<?php
/**
 * Resume Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Resume_Theme
 */

if ( ! function_exists( 'resumetheme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function resumetheme_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Resume Theme, use a find and replace
		 * to change 'resumetheme' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'resumetheme', get_template_directory() . '/languages' );

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
			'primary' => esc_html__( 'Primary', 'resumetheme' ),
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
		add_theme_support( 'custom-background', apply_filters( 'resumetheme_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

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
add_action( 'after_setup_theme', 'resumetheme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function resumetheme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'resumetheme_content_width', 640 );
}
add_action( 'after_setup_theme', 'resumetheme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function resumetheme_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'resumetheme' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'resumetheme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'resumetheme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function resumetheme_scripts() {
	// styles
	wp_enqueue_style( 'resumetheme-style', get_stylesheet_uri() );
	wp_enqueue_style( 'bootstrap-css', get_theme_file_uri( '/assets/vendor/bootstrap/css/bootstrap.min.css' ));
	wp_enqueue_style( 'resumetheme-css', get_theme_file_uri( '/assets/css/resume.min.css' ));

	// fonts and icons
	wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Saira+Extra+Condensed:100,200,300,400,500,600,700,800,900|https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/vendor/font-awesome/css/font-awesome.min.css', array(), '4.7.0' );
	wp_enqueue_style( 'devicons', get_template_directory_uri() . '/assets/vendor/devicons/css/devicons.min.css', array(), '1.8.0' );
	wp_enqueue_style( 'simple-line-icons', get_template_directory_uri() . '/assets/vendor/simple-line-icons/css/simple-line-icons.css', array() );

	// scripts
	wp_enqueue_script( 'resumetheme-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	wp_enqueue_script( 'resumetheme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'bootstrap-bundle-js', get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', array(), '4.0.0', true);
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.min.js', array(), '4.0.0', true);
	wp_enqueue_script( 'jquery-easing', get_template_directory_uri() . '/assets/vendor/jquery-easing/jquery.easing.min.js', array('jquery', 'jquery-effects-core', 'jquery-ui-core'), '1.4.1', true);
	wp_enqueue_script( 'resumetheme-js', get_template_directory_uri() . '/assets/js/resume.min.js', array(), '1.0.0', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'resumetheme_scripts' );


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

