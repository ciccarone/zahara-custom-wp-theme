<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$bootstrap_version = get_theme_mod( 'understrap_bootstrap_version', 'bootstrap4' );
$navbar_type       = get_theme_mod( 'understrap_navbar_type', 'collapse' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
	<a name="start"></a>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">
  <?php if ($top_bar_notification = get_field('top_bar_notification', 'option')): ?>
    <div class="top-bar">
      <?php echo $top_bar_notification ?>
    </div>
  <?php endif; ?>

  <div class="header header__size--<?php echo get_field('header_size') ?>" style="background-image: url('<?php echo get_field('header_image')['url'] ?>')">
    <div class="header__brand">

      <div class="header__nav">
        <?php get_template_part( 'global-templates/navbar', $navbar_type . '-' . $bootstrap_version ); ?>

      </div>
    </div>
    <div class="header__cta">
      <div class="header__cta__inner">
        <?php echo get_field('header_overlay_content') ? get_field('header_overlay_content') : '<span class="just-the-title">'.get_the_title().'</span>' ?>

      </div>
    </div>
  </div>
