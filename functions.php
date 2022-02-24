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


function zahara_footer_nav() {
  register_nav_menu('footer-nav',__( 'Footer Nav' ));
}
add_action( 'init', 'zahara_footer_nav' );

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
	wp_enqueue_style( 'animate-style', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css', array(), $the_theme->get( 'Version' ) );
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

function terpenes()
{
	$taxonomy = 'effects';
	$taxonomy_terms = get_terms( $taxonomy, array(
	    'hide_empty' => 0,
	) );

	$ret = '<div class="terpene__effects">';
	foreach ($taxonomy_terms as $effect) {
		$ret .= '<a class="terpene__effects__button active" href="#" id="'.$effect->term_id.'">'.$effect->name.'</a>';
	}
	$ret .= '</div>';


	$ret .= '<div class="terpene__icons">';
	$args = array(
      'post_type' => 'terpenes',
      'post_status' => 'publish',
      'posts_per_page' => -1,
      'orderby' => 'title',
      'order' => 'ASC',
  );
	$loop = new WP_Query( $args );
	while ( $loop->have_posts() ) : $loop->the_post();
		$effects = wp_get_post_terms( get_the_ID(), array( 'effects' ) );
		$ret .= '<a class="terpene__icons__icon" href="#" data-screens="'.get_the_ID().'" data-effect="'.$effects[0]->term_id.'"><img src="'.get_field('terpene_icon')['url'].'" />'.get_the_title().'</a>';
	endwhile;
	$ret .= '</div>';


	$ret .= '<a name="screens-anchor"></a><div class="terpene__screens">';
	$args = array(
      'post_type' => 'terpenes',
      'post_status' => 'publish',
      'posts_per_page' => -1,
      'orderby' => 'title',
      'order' => 'ASC',
  );
	$loop = new WP_Query( $args );
	while ( $loop->have_posts() ) : $loop->the_post();
		$ret .= '<div class="terpene__screens__screen" style="display: none" data-screen="'.get_the_ID().'">';
			$ret .= '<div class="screen__title">';
				$ret .= '<div class="screen__icon"><img src="'.get_field('terpene_icon')['url'].'" />'.get_the_title().'</div>';
			$ret .= '</div>';
			$ret .= '<div class="screen__info" style="background-image: url('.get_the_post_thumbnail_url().')">';
				$ret .= '<div class="screen__data">';
					$ret .= '<h3>aroma:</h3>';
					$ret .= '<h2>'.get_field('terpene_aroma').'</h2>';
				$ret .= '</div>';
				$ret .= '<div class="screen__block">';
					if ($help = get_field('terpene_known_to_help_with')) {
						$ret .= "KNOWN TO HELP WITH<br />";
						$ret .= $help;
					}
					if ($help = get_field('terpene_believed_to_promote')) {
						$ret .= "BELIEVED TO PROMOTE<br />";
						$ret .= $help;
					}
					if ($help = get_field('turpene_may_offer')) {
						$ret .= "MAY OFFER<br />";
						$ret .= $help;
					}
				$ret .= '</div>';
			$ret .= '</div>';
		$ret .= '</div>';
	endwhile;
	$ret .= '</div>';

	return $ret;


}

add_shortcode('terpenes', 'terpenes');

function ways_to_consume()
{
	$args = array(
      'post_type' => 'ways_to_consume',
      'post_status' => 'publish',
      'posts_per_page' => -1,
      'orderby' => 'title',
      'order' => 'ASC',
  );
	$loop = new WP_Query( $args );

	$ret = '<div class="full-slider">';
	while ( $loop->have_posts() ) : $loop->the_post();
		$ret .= '<div class="full-slider__item" style="background-image: url('.get_the_post_thumbnail_url().')">';
			$ret .= '<div class="full-slider__inner">';
				$ret .= '<div class="full-slider__title">';
					$ret .= '<h4>WAYS TO CONSUME</h4>';
				$ret .= '</div>';
				$ret .= '<div class="full-slider__info">';
					$ret .= '<h5>'.get_the_title().'</h5>';
					$ret .= get_the_content();
				$ret .= '</div>';
			$ret .= '</div>';
		$ret .= '</div>';
	endwhile;
	$ret .= '</div>';

	return $ret;
}

add_shortcode('ways_to_consume', 'ways_to_consume');


function careers_cta()
{
	$ret = '<div class="container careers-cta">';
		$ret .= '<div class="row">';
			$ret .= '<div class="col-md-6">';
				$ret .= '<h3>View Our Positions</h3>';
			$ret .= '</div>';
			$ret .= '<div class="col-md-3">';
				$ret .= '<a href="#"><img src="/wp-content/uploads/2022/02/linkedin.png" /></a>';
			$ret .= '</div>';
			$ret .= '<div class="col-md-3">';
				$ret .= '<a href="#"><img src="/wp-content/uploads/2022/02/indeed.png" /></a>';
			$ret .= '</div>';
		$ret .= '</div>';
	$ret .= '</div>';
	return $ret;
}

add_shortcode('careers_cta', 'careers_cta');


function careers()
{
	$ret = '<div class="page-contained">';
		$args = array(
	      'post_type' => 'jobs',
	      'post_status' => 'publish',
	      'posts_per_page' => -1,
	      'orderby' => 'title',
	      'order' => 'ASC',
	  );
		$loop = new WP_Query( $args );

		$ret .= '<div class="role">';
			while ( $loop->have_posts() ) : $loop->the_post();
			$ret .= '<div class="role__title">';
				$ret .= '<div class="role__icon">';
					$ret .= '<img src="'.get_field('job_icon')['url'].'" / >';
				$ret .= '</div>';
				$ret .= '<div class="role__word">';
					$ret .= '<h4>'.get_the_title().'</h4>';
				$ret .= '</div>';
			$ret .= '</div>';

			$ret .= '<div class="role__summary">';
				$ret .= '<p>Job Summary:<br /></p>';
				$ret .= get_field('job_summary');
			$ret .= '</div>';

			$ret .= '<div class="role__more">';
			$ret .= '<div class="role__responsibilities" data-res="'.get_the_ID().'" style="display: none">';
				$ret .= '<p>Job Responsibilities:<br /></p>';
				$ret .= get_field('job_responsibilities');

				if (get_field('job_linkedin_url') || get_field('job_indeed_url')) {
					$ret .= '<h4>YOU CAN ALSO APPLY AT</h4>';
					if ($li = get_field('job_linkedin_url')) {
						$ret .= '<a href="'.get_field('job_linkedin_url').'"><img src="/wp-content/uploads/2022/02/Linked-In-Green.png" /></a>';
					}
					if ($li = get_field('job_indeed_url')) {
						$ret .= '<a href="'.get_field('job_indeed_url').'"><img src="/wp-content/uploads/2022/02/Indeed-Green.png" /></a>';
					}
				}
			$ret .= '</div>';
			$ret .= '<div class="role__button">';
				$ret .= '<a href="#" class="btn dark outline" id="'.get_the_ID().'">Read More</a>';
			$ret .= '</div>';

			$ret .= '</div>';


			 get_the_title();
			endwhile;
		$ret .= '</div>';
	$ret .= '</div>';
	return $ret;
}

add_shortcode('careers', 'careers');
