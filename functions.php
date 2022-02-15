<?php
/**
 * Understrap Child Theme functions and definitions
 *
 * @package UnderstrapChild
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;



/**
 * Removes the parent themes stylesheet and scripts from inc/enqueue.php
 */
function understrap_remove_scripts() {
	wp_dequeue_style( 'understrap-styles' );
	wp_deregister_style( 'understrap-styles' );

	wp_dequeue_script( 'understrap-scripts' );
	wp_deregister_script( 'understrap-scripts' );
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );



/**
 * Enqueue our stylesheet and javascript file
 */
function theme_enqueue_styles() {

	// Get the theme data.
	$the_theme = wp_get_theme();

	$suffix = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';
	// Grab asset urls.
	$theme_styles  = "/css/child-theme{$suffix}.css";
	$theme_scripts = "/js/child-theme{$suffix}.js";

	wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . $theme_styles, array(), $the_theme->get( 'Version' ) );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . $theme_scripts, array(), $the_theme->get( 'Version' ), true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	wp_enqueue_script( 'fontawesome-script', 'https://kit.fontawesome.com/cff905c27f.js', $the_theme->get( 'Version' ), true );
	wp_enqueue_script( 'slick-script', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js', $the_theme->get( 'Version' ), true );
	wp_enqueue_style( 'slick-style', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css', array(), $the_theme->get( 'Version' ) );
	wp_enqueue_style( 'slick-theme', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css', array(), $the_theme->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );



/**
 * Load the child theme's text domain
 */
function add_child_theme_textdomain() {
	load_child_theme_textdomain( 'understrap-child', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'add_child_theme_textdomain' );



/**
 * Overrides the theme_mod to default to Bootstrap 5
 *
 * This function uses the `theme_mod_{$name}` hook and
 * can be duplicated to override other theme settings.
 *
 * @param string $current_mod The current value of the theme_mod.
 * @return string
 */
function understrap_default_bootstrap_version( $current_mod ) {
	return 'bootstrap5';
}
add_filter( 'theme_mod_understrap_bootstrap_version', 'understrap_default_bootstrap_version', 20 );



/**
 * Loads javascript for showing customizer warning dialog.
 */
function understrap_child_customize_controls_js() {
	wp_enqueue_script(
		'understrap_child_customizer',
		get_stylesheet_directory_uri() . '/js/customizer-controls.js',
		array( 'customize-preview' ),
		'20130508',
		true
	);
}
add_action( 'customize_controls_enqueue_scripts', 'understrap_child_customize_controls_js' );



if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title'     => 'Zahara Settings',
        'menu_title'    => 'Zahara Settings',
        'menu_slug'     => 'global-settings',
    ));

}


function category_carousel()
{
  $args = array(
      'post_type' => 'product_types',
      'post_status' => 'publish',
      'posts_per_page' => -1,
      'orderby' => 'title',
      'order' => 'ASC',
  );

  $loop = new WP_Query( $args );

	$ret = '<div class="edge py-5"><div class="slider slider--product-type">';
  while ( $loop->have_posts() ) : $loop->the_post();
		$ret .= '<a href="'.get_field('product_type_url').'">';
			$ret .= '<img src="'.get_the_post_thumbnail_url().'" alt="Cannabis '.get_the_title().'">';
			$ret .= get_the_title();
		$ret .= '</a>';
  endwhile;
	$ret .= '</div></div>';

	return $ret;
  wp_reset_postdata();
}

add_shortcode('category_carousel', 'category_carousel');

function brand_carousel()
{
  $args = array(
      'post_type' => 'brands',
      'post_status' => 'publish',
      'posts_per_page' => -1,
      'orderby' => 'title',
      'order' => 'ASC',
  );

  $loop = new WP_Query( $args );

	$ret = '<div class="edge py-5"><div class="slider slider--brands">';
  while ( $loop->have_posts() ) : $loop->the_post();
		$ret .= '<div>';
			$ret .= '<img src="'.get_the_post_thumbnail_url().'" alt="Cannabis '.get_the_title().'">';
		$ret .= '</div>';
  endwhile;
	$ret .= '</div></div>';

	return $ret;
  wp_reset_postdata();
}

add_shortcode('brand_carousel', 'brand_carousel');

function store_location()
{
	return get_field('store_address', 'option');
}

add_shortcode('store_location', 'store_location');

function store_phone()
{
	return get_field('store_phone', 'option');
}

add_shortcode('store_phone', 'store_phone');

function store_hours()
{
	return get_field('store_hours', 'option');
}

add_shortcode('store_hours', 'store_hours');

function google_map_link()
{
	return get_field('google_map_link', 'option');
}

add_shortcode('google_map_link', 'google_map_link');




function bubbles( $atts, $content = null )
{

	$a = shortcode_atts( array(
    'type' => 'about',
  ), $atts );
  global $post;

  $args = array(
      'post_type' => 'bubbles',
      'post_status' => 'publish',
      'posts_per_page' => -1,
      'orderby' => 'title',
      'order' => 'ASC',
	    'tax_query' => array(
	        array (
	            'taxonomy' => 'bubble_page',
	            'field' => 'slug',
	            'terms' => $a['type'],
	        )
	    ),
  );

  $loop = new WP_Query( $args );

	$ret = '<div class="edge py-5 bubble__container">';
  while ( $loop->have_posts() ) : $loop->the_post();
		if ($bubble_url = get_field('bubble_url')) {
			$ret .= '<a href="'.get_field('bubble_url').'" class="bubble bubble__color--'.get_field('text_color').'">';
		} else {
			$ret .= '<div class="bubble bubble__color--'.get_field('text_color').'">';
		}
			$ret .= '<div class="bubble__inner"><img src="'.get_the_post_thumbnail_url().'" alt="Cannabis '.get_the_title().'"></div>';
			$ret .= '<h5>'.get_the_title().'</h5>';
			if (get_the_content()) {
				$ret .= get_the_content();
			}
		if ($bubble_url = get_field('bubble_url')) {
			$ret .= '</a>';
		} else {
			$ret .= '</div>';
		}
  endwhile;
	$ret .= '</div>';

	return $ret;
  wp_reset_postdata();
}

add_shortcode('bubbles', 'bubbles');
