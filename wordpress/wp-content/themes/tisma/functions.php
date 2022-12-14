<?php
/**
 * Tisma functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Tisma
 */

if ( ! defined( '_S_VERSION' ) ) {
  // Replace the version number of the theme on each release.
  define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'tisma_setup' ) ) :
  /**
   * Sets up theme defaults and registers support for various WordPress features.
   *
   * Note that this function is hooked into the after_setup_theme hook, which
   * runs before the init hook. The init hook is too late for some features, such
   * as indicating support for post thumbnails.
   */
  function tisma_setup() {
    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     * If you're building a theme based on Tisma, use a find and replace
     * to change 'tisma' to the name of your theme in all the template files.
     */
    load_theme_textdomain( 'tisma', get_template_directory() . '/languages' );

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
        'menu-1' => esc_html__( 'Primary', 'tisma' ),
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
        'tisma_custom_background_args',
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
add_action( 'after_setup_theme', 'tisma_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function tisma_content_width() {
  $GLOBALS['content_width'] = apply_filters( 'tisma_content_width', 640 );
}
add_action( 'after_setup_theme', 'tisma_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function tisma_widgets_init() {
  register_sidebar(
    array(
      'name'          => esc_html__( 'Sidebar', 'tisma' ),
      'id'            => 'sidebar-1',
      'description'   => esc_html__( 'Add widgets here.', 'tisma' ),
      'before_widget' => '<section id="%1$s" class="widget %2$s">',
      'after_widget'  => '</section>',
      'before_title'  => '<h2 class="widget-title">',
      'after_title'   => '</h2>',
    )
  );
}
add_action( 'widgets_init', 'tisma_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function tisma_scripts() {
  //here!
  global $get_template_directory_uri;

  wp_enqueue_style( 'tisma-Popup', $get_template_directory_uri.'/public/libs/@fancyapps/ui/fancybox.css' );
  wp_enqueue_style( 'tisma-slider', $get_template_directory_uri.'/public/libs/swiper/swiper.min.css');
  wp_enqueue_style( 'tisma-animate', $get_template_directory_uri.'/public/libs/animate.css/animate.min.css');
  wp_enqueue_style( 'tisma-main', $get_template_directory_uri.'/public/css/main.min.css');
  //wp_enqueue_style( 'tisma-main', $get_template_directory_uri.'/public/css/main.min.css');

  wp_enqueue_script( 'tisma-inputmask', $get_template_directory_uri . '/public/libs/inputmask/inputmask.min.js', array('jquery'), '20200325', true );
  wp_enqueue_script( 'tisma-Popup', $get_template_directory_uri . '/public/libs/@fancyapps/ui/fancybox.umd.js', array('jquery'), '20200325', true );
  wp_enqueue_script( 'tisma-slider', $get_template_directory_uri . '/public/libs/swiper/swiper-bundle.min.js', array('jquery'), '20200325', true );
  wp_enqueue_script( 'tisma-typeit', $get_template_directory_uri . '/public/libs/typed.js/lib/typed.min.js', array('jquery'), '20200325', true );
  wp_enqueue_script( 'tisma-wow', $get_template_directory_uri . '/public/libs/wowjs/wow.min.js', array('jquery'), '20200325', true );

//  wp_enqueue_script( 'tisma-libs', $get_template_directory_uri . '/public/libs.js', array('jquery'), '20200325', true );
  wp_enqueue_script( 'tisma-common', $get_template_directory_uri . '/public/js/common.js', array('jquery'), '20151217', true );

  //
  wp_enqueue_style( 'tisma-style', get_stylesheet_uri(), array(), _S_VERSION );
  wp_style_add_data( 'tisma-style', 'rtl', 'replace' );

//  wp_enqueue_script( 'tisma-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
//
//  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
//    wp_enqueue_script( 'comment-reply' );
//  }
}
add_action( 'wp_enqueue_scripts', 'tisma_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
//require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
//require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/inc/shortcode.php';

if( function_exists('acf_add_options_page') ) {

  acf_add_options_page();

}

add_action( 'wp_enqueue_scripts', 'tisma_scripts' );
$get_template_directory_uri=get_template_directory_uri();

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

//new
//add_image_size( 'mob-vertical', 576,  1000, true );
add_image_size( '380', 380,  530, false);
add_image_size( '600', 600,  510, false);
add_image_size( '270', 270,  240, false);
add_image_size( '190', 190,  190, false);
add_image_size( '373', 373,  530, false);

//try this
function add_additional_class_on_li($classes, $item, $args) {
  if(isset($args->add_li_class)) {
    $classes[] = $args->add_li_class;
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);


// remove_action('wpcf7_init', 'wpcf7_add_form_tag_submit');
// add_action('wpcf7_init', 'twentysixteen_child_cf7_button');
// if (!function_exists('twentysixteen_child_cf7_button')) {
//   function twentysixteen_child_cf7_button() {
//     wpcf7_add_form_tag('submit', 'twentysixteen_child_cf7_button_handler');
//   }
// }
// if (!function_exists('twentysixteen_child_cf7_button_handler')) {
//   function twentysixteen_child_cf7_button_handler($tag) {
//     $tag = new WPCF7_FormTag($tag);
//     $class = wpcf7_form_controls_class($tag->type);
//     $atts = array();
//     $atts['class'] = $tag->get_class_option($class);
//     $atts['class'] .= ' twentysixteen-child-custom-btn';
//     $atts['id'] = $tag->get_id_option();
//     $atts['tabindex'] = $tag->get_option('tabindex', 'int', true);
//     $value = isset($tag->values[0]) ? $tag->values[0] : '';
//     if (empty($value)) {
//       $value = esc_html__('Contact Us', 'twentysixteen');
//     }
//     $atts['type'] = 'submit';
//     $atts = wpcf7_format_atts($atts);
//     $html = sprintf('<button>send</button>', $atts, $value);
//     return $html;
//   }
// }