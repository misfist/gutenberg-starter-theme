<?php
/**
 * Setup Functions
 *
 * @package gutenberg-starter-theme
 */

 
if ( ! function_exists( 'gutenberg_starter_theme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function gutenberg_starter_theme_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on gutenberg-starter-theme, use a find and replace
		 * to change 'gutenberg-starter-theme' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'gutenberg-starter-theme', get_template_directory() . '/languages' );

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
				'menu-1' => __( 'Primary', 'gutenberg-starter-theme' ),
				'footer' => __( 'Footer Menu', 'gutenberg-starter-theme' ),
				'social' => __( 'Social Links Menu', 'gutenberg-starter-theme' ),
			)
		);

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

		// // Set up the WordPress core custom background feature.
		// add_theme_support( 'custom-background', apply_filters( '_s_custom_background_args', array(
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
        
        // Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style-editor.css' );

		// Add custom editor font sizes.
		add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name'      => __( 'Small', 'gutenberg-starter-theme' ),
					'shortName' => __( 'S', 'gutenberg-starter-theme' ),
					'size'      => 19.5,
					'slug'      => 'small',
				),
				array(
					'name'      => __( 'Normal', 'gutenberg-starter-theme' ),
					'shortName' => __( 'M', 'gutenberg-starter-theme' ),
					'size'      => 22,
					'slug'      => 'normal',
				),
				array(
					'name'      => __( 'Large', 'gutenberg-starter-theme' ),
					'shortName' => __( 'L', 'gutenberg-starter-theme' ),
					'size'      => 36.5,
					'slug'      => 'large',
				),
				array(
					'name'      => __( 'Huge', 'gutenberg-starter-theme' ),
					'shortName' => __( 'XL', 'gutenberg-starter-theme' ),
					'size'      => 49.5,
					'slug'      => 'huge',
				),
			)
		);

		// Editor color palette.
		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => __( 'Primary', 'gutenberg-starter-theme' ),
					'slug'  => 'primary',
					'color' => '',
				),
				array(
					'name'  => __( 'Secondary', 'gutenberg-starter-theme' ),
					'slug'  => 'secondary',
					'color' => '',
				),
				array(
					'name'  => __( 'Dark Gray', 'gutenberg-starter-theme' ),
					'slug'  => 'dark-gray',
					'color' => '#111',
				),
				array(
					'name'  => __( 'Light Gray', 'gutenberg-starter-theme' ),
					'slug'  => 'light-gray',
					'color' => '#767676',
				),
				array(
					'name'  => __( 'White', 'gutenberg-starter-theme' ),
					'slug'  => 'white',
					'color' => '#FFF',
				),
			)
        );
        
        // Disable custom colors.
        add_theme_support( 'disable-custom-colors' );

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );
	}
endif;
add_action( 'after_setup_theme', 'gutenberg_starter_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function gutenberg_starter_theme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'gutenberg_starter_theme_content_width', 1180 );
}
add_action( 'after_setup_theme', 'gutenberg_starter_theme_content_width', 0 );