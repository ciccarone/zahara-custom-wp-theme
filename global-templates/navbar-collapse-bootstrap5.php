<?php
/**
 * Header Navbar (bootstrap5)
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<nav id="main-nav" class="navbar navbar-expand-md navbar-light" aria-labelledby="main-nav-label">

	<h2 id="main-nav-label" class="screen-reader-text">
		<?php esc_html_e( 'Main Navigation', 'understrap' ); ?>
	</h2>


	<div class="<?php echo esc_attr( $container ); ?>">

		<!-- Your site title as branding in the menu -->
		<?php if ( ! has_custom_logo() ) { ?>

			<?php if ( is_front_page() && is_home() ) : ?>

				<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?>
<svg id="a0e42b39-f4df-46a0-b536-b8e0ae8ee4ee" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 877.8 257.84"><defs><style>.a598c346-8fee-4dc6-b683-5313847cde74{fill:#007674;}.a779d64d-8dcc-45f3-ae2e-243bca9e5d16{fill:#005745;}</style></defs><path class="a598c346-8fee-4dc6-b683-5313847cde74" d="M159.13,65.68c-.78-1.89-7.73-.58-18.71-2.4a104,104,0,0,1-18.81-4.79c-1.7-.62-3.41-1.28-5-2-.82-.37-1.63-.75-2.34-1.15s-1.76-1-2.64-1.46c-3.72-2.08-7.66-4.26-11.93-6.3C91.18,43.42,82,40.33,73,39.91a47.2,47.2,0,0,0-22.76,4.44,33.11,33.11,0,0,0-12.18,9.47c-2.18,3-2.64,5.07-2,5.66,1.53,1.34,7.09-3.47,17.51-5.95a48.4,48.4,0,0,1,18.23-.93,52.89,52.89,0,0,1,8.29,1.91c2-.13,4-.17,6-.12a66.72,66.72,0,0,1,22.27,4.36c1.63.64,3.19,1.32,4.69,2S115.73,62,117,62.58c2.56,1.12,5,2.06,7.23,2.83A71,71,0,0,0,135,68.26c2.6.47,4.17.64,4.34,1.3s-1.25,1.68-4.22,2.35a30.73,30.73,0,0,1-9.94.28A68.13,68.13,0,0,0,140,73a39.51,39.51,0,0,0,14.76-3.33,12.24,12.24,0,0,0,3.53-2.31C159,66.7,159.3,66.12,159.13,65.68Z"/><path class="a598c346-8fee-4dc6-b683-5313847cde74" d="M111.56,68.68c-1.09-.42-2.18-.85-3.34-1.41s-2-1-3-1.46c-3.83-1.92-7.68-3.94-11.57-5.8a96.24,96.24,0,0,0-13.53-5.5c-2,.13-3.9.34-5.78.63A47.78,47.78,0,0,0,63.45,58a29.59,29.59,0,0,0-9.09,5.7,18.26,18.26,0,0,0-5.21,8.45,15.88,15.88,0,0,0,0,8,17.49,17.49,0,0,0,2.26,5.21c1.7,2.54,3.16,3.46,3.68,3.13s.18-2-.3-4.53-1-6.3.69-9.71,5.5-6.42,11.05-8.2a46,46,0,0,1,9.13-1.86,73.26,73.26,0,0,1,30,2.67c1.47.45,2.9.94,4.27,1.44,1.52.55,3,1.09,4.5,1.53a64,64,0,0,0,8.31,2c.88.14,1.73.24,2.56.33-2.39-.38-4.83-.87-7.35-1.52C115.82,70.12,113.72,69.49,111.56,68.68Z"/><path class="a779d64d-8dcc-45f3-ae2e-243bca9e5d16" d="M135.16,71.91c3-.67,4.38-1.76,4.22-2.35s-1.74-.83-4.34-1.3a71,71,0,0,1-10.79-2.85c-2.24-.77-4.67-1.71-7.23-2.83-1.29-.55-2.57-1.16-3.92-1.81s-3.06-1.38-4.69-2a66.72,66.72,0,0,0-22.27-4.36c-2,0-4,0-6,.12A96.24,96.24,0,0,1,93.67,60c3.89,1.86,7.74,3.88,11.57,5.8,1,.5,1.79.92,3,1.46s2.25,1,3.34,1.41c2.16.81,4.26,1.44,6.31,2,2.52.65,5,1.14,7.35,1.52A30.73,30.73,0,0,0,135.16,71.91Z"/><path class="a598c346-8fee-4dc6-b683-5313847cde74" d="M165.38,203.93a42.93,42.93,0,0,0,10.14-2.55c5.92-2.25,10.91-6.06,13.61-10.44a16.17,16.17,0,0,0,2.51-11.46c-.57-2.76-1.74-3.9-2.31-3.72s-.77,1.61-1.34,3.69a17.45,17.45,0,0,1-4.17,7.5c-4.78,5.24-15.71,8.81-27.72,7.92a67.65,67.65,0,0,1-8.82-1.16,55.57,55.57,0,0,1-7.95-2.11c-5.07-1.77-9.71-3.83-13.69-5.45-6.38-2.69-11.08-4.12-13-4,8.92,3.63,17.54,8.59,26.26,12.82C148.11,199.51,157,202.77,165.38,203.93Z"/><path class="a779d64d-8dcc-45f3-ae2e-243bca9e5d16" d="M122.52,192a94.55,94.55,0,0,0,13.64,7.64,50.75,50.75,0,0,0,9.16,3,60.66,60.66,0,0,0,10.18,1.55,50.65,50.65,0,0,0,9.88-.32c-8.36-1.16-17.27-4.42-26.47-8.92-8.72-4.23-17.34-9.19-26.26-12.82-.47,0-.82.14-.92.38C111.2,183.72,115.3,187.12,122.52,192Z"/><path class="a598c346-8fee-4dc6-b683-5313847cde74" d="M43,202.08c0-.33,0,.34,0,0Z"/><path class="a598c346-8fee-4dc6-b683-5313847cde74" d="M208.77,179.6c-1-.23-2.31,2-4.63,5.72s-5.89,8.79-11.61,13a31.85,31.85,0,0,1-10.08,4.89,39.91,39.91,0,0,1-13,1.16c-1.34-.08-2.69-.23-4.06-.42a50.65,50.65,0,0,1-9.88.32,60.66,60.66,0,0,1-10.18-1.55,50.75,50.75,0,0,1-9.16-3A94.55,94.55,0,0,1,122.52,192c-7.22-4.89-11.32-8.29-10.79-9.44.1-.24.45-.35.92-.38-2-.82-4-1.58-6-2.24a60.46,60.46,0,0,0-16.52-3.1,49.25,49.25,0,0,0-9.49.63c5.06-2.95,10.58-6,16.5-9.32,2.73-1.54,5.55-3.14,8.4-4.87s5.84-3.66,8.59-5.53c5.63-3.81,11.48-7.77,17.39-12.06a184.73,184.73,0,0,0,16.75-13.56,100.87,100.87,0,0,0,13.56-15.28,72.06,72.06,0,0,0,8.92-16.4A90.22,90.22,0,0,0,175.13,85a122.63,122.63,0,0,0,2.15-19.14,45.39,45.39,0,0,0,1.63-10.85c0-.72.08-1.39.08-2s-.09-1.23-.14-1.79a26.87,26.87,0,0,0-.38-2.78c-.29-1.5-.68-2.28-1.16-2.3s-1,.7-1.61,2.06c-.3.68-.61,1.52-.93,2.5l-.48,1.59c-.21.56-.44,1.15-.67,1.77A80.93,80.93,0,0,1,164,73.68c-5.14,7.59-12.6,15.71-22.14,23.7s-20.91,16.06-33,24.67-23.78,17.17-33.62,26.14-17.87,18.29-23,27.22l0,0c.58-1.7,1.25-3.48,2-5.31A86.56,86.56,0,0,1,70.28,146c7.43-8.06,17.11-15.57,27.81-22.77s21.4-13.58,30.8-20.07A164.74,164.74,0,0,0,152.54,84a83.66,83.66,0,0,0,12.82-16.13c2.47-4.21,3.32-6.79,3-7-.92-.56-6.25,8.68-19,19.74a205.21,205.21,0,0,1-23.83,17.54c-9.39,6.08-20.16,12.31-31.11,19.66s-21,15.34-28.64,24.15A82.84,82.84,0,0,0,49.9,168.43a57,57,0,0,0-3.41,18.72,52.92,52.92,0,0,0-3,10.83,20.25,20.25,0,0,0-.44,3.77c0,.17,0,.26,0,.33s0,.07,0,.13c.09,1.52.37,2.35.83,2.44A2,2,0,0,0,46,204c1-.66,2.44-2.13,4.57-3.89a61.66,61.66,0,0,1,5.78-4.23,58.2,58.2,0,0,1,7.6-4.22c.73-.32,1.45-.61,2.18-.89a47.91,47.91,0,0,1,23-2.53,57.19,57.19,0,0,1,13.15,3.67c9.21,3.6,19,9.82,30.56,15.51a108.72,108.72,0,0,0,17.88,7,66.58,66.58,0,0,0,18.35,2.65A47.15,47.15,0,0,0,186.17,214a37.78,37.78,0,0,0,23-26.7C210.11,182.53,209.65,179.8,208.77,179.6ZM60.28,180.9c5.63-7.36,13.6-15.16,23.28-23.07s21.15-15.89,33.31-24.51,23.78-17.25,33.52-26.45a115,115,0,0,0,17.25-20,77.32,77.32,0,0,1-12.79,24.87A102.12,102.12,0,0,1,142,125.34c-4.9,4.37-10.32,8.58-16.07,12.76s-11.53,8.17-17.09,12.08c-2.83,2-5.37,3.76-8.11,5.5s-5.39,3.39-8,5c-10.64,6.48-20.36,12.64-27.83,18.78a108.2,108.2,0,0,0-10.25,9.38C56.25,186.34,58.11,183.67,60.28,180.9Z"/><path class="a598c346-8fee-4dc6-b683-5313847cde74" d="M269.52,122.41h23.31a1.73,1.73,0,0,1,1.74,1.74v7.58a1.73,1.73,0,0,1-1.74,1.74h-39a1.79,1.79,0,0,1-1.73-1.74,4.9,4.9,0,0,1,.64-2.83l26.6-48v-.36H256.45a1.8,1.8,0,0,1-1.74-1.74V71.21a1.79,1.79,0,0,1,1.74-1.73h38.21a1.8,1.8,0,0,1,1.74,1.73,4.65,4.65,0,0,1-.83,2.66l-26.05,48.36Z"/><path class="a598c346-8fee-4dc6-b683-5313847cde74" d="M341.18,131.09l28.43-61.52a1.64,1.64,0,0,1,1.55-1h.92a1.55,1.55,0,0,1,1.55,1l28.16,61.52a1.61,1.61,0,0,1-1.55,2.38h-8a2.63,2.63,0,0,1-2.65-1.83l-4.48-9.87H357.82l-4.48,9.87a2.75,2.75,0,0,1-2.65,1.83h-8A1.61,1.61,0,0,1,341.18,131.09Zm39.49-19.47-9.14-20.11h-.27l-9,20.11Z"/><path class="a598c346-8fee-4dc6-b683-5313847cde74" d="M451.87,71.21a1.79,1.79,0,0,1,1.74-1.73h8.5a1.73,1.73,0,0,1,1.74,1.73V95.44h29.8V71.21a1.73,1.73,0,0,1,1.74-1.73h8.41a1.8,1.8,0,0,1,1.74,1.73v60.52a1.8,1.8,0,0,1-1.74,1.74h-8.41a1.73,1.73,0,0,1-1.74-1.74V106.5h-29.8v25.23a1.73,1.73,0,0,1-1.74,1.74h-8.5a1.8,1.8,0,0,1-1.74-1.74Z"/><path class="a598c346-8fee-4dc6-b683-5313847cde74" d="M555.52,131.09,584,69.57a1.64,1.64,0,0,1,1.55-1h.92a1.56,1.56,0,0,1,1.55,1l28.16,61.52a1.62,1.62,0,0,1-1.56,2.38h-8a2.63,2.63,0,0,1-2.65-1.83l-4.48-9.87H572.16l-4.48,9.87a2.73,2.73,0,0,1-2.65,1.83h-7.95A1.62,1.62,0,0,1,555.52,131.09ZM595,111.62l-9.14-20.11h-.28l-9,20.11Z"/><path class="a598c346-8fee-4dc6-b683-5313847cde74" d="M666.22,71.21A1.73,1.73,0,0,1,668,69.48H694.1A19.8,19.8,0,0,1,714,89.13c0,8.41-5.58,15.27-13.53,18.47L713,130.82a1.73,1.73,0,0,1-1.56,2.65h-9.6a1.57,1.57,0,0,1-1.46-.82l-12.16-24.23H678.1v23.31a1.79,1.79,0,0,1-1.73,1.74H668a1.73,1.73,0,0,1-1.74-1.74ZM693.1,98.64a9.32,9.32,0,0,0,9-9.33,9.1,9.1,0,0,0-9-8.86H678.19V98.64Z"/><path class="a598c346-8fee-4dc6-b683-5313847cde74" d="M761,131.09l28.44-61.52a1.64,1.64,0,0,1,1.55-1h.91a1.56,1.56,0,0,1,1.56,1l28.16,61.52a1.62,1.62,0,0,1-1.56,2.38h-7.95a2.63,2.63,0,0,1-2.65-1.83L805,121.77H777.64l-4.48,9.87a2.74,2.74,0,0,1-2.65,1.83h-8A1.62,1.62,0,0,1,761,131.09Zm39.5-19.47-9.14-20.11h-.28l-9,20.11Z"/><path class="a598c346-8fee-4dc6-b683-5313847cde74" d="M374.25,182V171.67c0-5.77,3.18-8.07,9-8.07,5.53,0,8.91,2.11,8.91,8.07v.84a.35.35,0,0,1-.39.34h-5.14a.36.36,0,0,1-.29-.59l.63-.59a3.3,3.3,0,0,0-3.52-2.83H383a3.15,3.15,0,0,0-2.74,1.12,5,5,0,0,0-.73,3v7.73c0,3.43,1.9,4.16,3.47,4.16h.49a3.25,3.25,0,0,0,2.79-1.12,5.37,5.37,0,0,0,.78-3v-.34l-.64-.59a.37.37,0,0,1,.3-.63h5.09a.38.38,0,0,1,.39.39V182c0,5.72-3.08,8.17-8.91,8.17C377.82,190.17,374.25,188,374.25,182Z"/><path class="a598c346-8fee-4dc6-b683-5313847cde74" d="M419.83,189.19l.59-.64,6.31-23.43-.39-.64c-.15-.24,0-.54.34-.54h6.12a.35.35,0,0,1,.29.54l-.44.64L439,188.55l.68.64a.37.37,0,0,1-.29.58h-5.92a.33.33,0,0,1-.19-.58l.58-.59-1.27-4.55h-5.72l-1.23,4.55.59.59a.36.36,0,0,1-.29.58h-5.82A.34.34,0,0,1,419.83,189.19Zm11.5-10-1.67-5.92-1.56,5.92Z"/><path class="a598c346-8fee-4dc6-b683-5313847cde74" d="M468.05,165.17l-.59-.69a.32.32,0,0,1,.25-.54h5.23a.33.33,0,0,1,.35.2l5.47,12.62V165.17l-.58-.69a.32.32,0,0,1,.24-.54h5.87a.32.32,0,0,1,.25.54l-.59.69v23.38l.59.64a.34.34,0,0,1-.25.58h-5.87a.35.35,0,0,1-.24-.58l.39-.44-5.38-12v11.84l.63.64a.37.37,0,0,1-.29.58h-5.82a.35.35,0,0,1-.25-.58l.59-.64Z"/><path class="a598c346-8fee-4dc6-b683-5313847cde74" d="M513,165.17l-.58-.69a.31.31,0,0,1,.24-.54h5.23a.33.33,0,0,1,.35.2l5.48,12.62V165.17l-.59-.69a.32.32,0,0,1,.24-.54h5.88a.32.32,0,0,1,.24.54l-.59.69v23.38l.59.64a.34.34,0,0,1-.24.58h-5.88a.35.35,0,0,1-.24-.58l.39-.44-5.38-12v11.84l.64.64a.38.38,0,0,1-.3.58H512.7a.34.34,0,0,1-.24-.58l.58-.64Z"/><path class="a598c346-8fee-4dc6-b683-5313847cde74" d="M557.45,189.19l.58-.64,6.32-23.43-.4-.64c-.14-.24,0-.54.35-.54h6.11a.36.36,0,0,1,.3.54l-.44.64,6.31,23.43.68.64a.37.37,0,0,1-.29.58h-5.92a.33.33,0,0,1-.2-.58l.59-.59-1.27-4.55h-5.73l-1.22,4.55.59.59a.36.36,0,0,1-.3.58h-5.82A.33.33,0,0,1,557.45,189.19Zm11.49-10-1.66-5.92-1.56,5.92Z"/><path class="a598c346-8fee-4dc6-b683-5313847cde74" d="M605.67,188.55V165.17l-.59-.69a.31.31,0,0,1,.25-.54h6.94c2.11,0,4.31.15,5.78,1.13,1.85,1.17,2.39,3.28,2.39,5.58a8,8,0,0,1-.78,3.81c1.47,1.42,2.1,3.67,2.1,6.85,0,3.38-.68,5.77-2.3,7s-3.67,1.46-5.82,1.46h-8.31a.34.34,0,0,1-.25-.58Zm7.58-16c1.22,0,1.91-.39,1.91-1.76a1.59,1.59,0,0,0-.69-1.47,4.18,4.18,0,0,0-2.05-.29h-1.57v3.52Zm-1,5.24h-1.42v6.8h1.47a4.71,4.71,0,0,0,3-.78,2.9,2.9,0,0,0,1.22-2.65,3.37,3.37,0,0,0-.93-2.49,3.42,3.42,0,0,0-2.4-.88Z"/><path class="a598c346-8fee-4dc6-b683-5313847cde74" d="M650.12,188.55V165.17l-.59-.69a.32.32,0,0,1,.25-.54h5.82c.29,0,.49.35.29.54l-.63.69v23.38l.63.64a.37.37,0,0,1-.29.58h-5.82a.35.35,0,0,1-.25-.58Z"/><path class="a598c346-8fee-4dc6-b683-5313847cde74" d="M683.57,170.94c0-4.89,4.75-7.34,9.3-7.34,3.62,0,6.21,1.86,7.92,5.29.1.14.05.29-.14.39l-4.26,2.79a.32.32,0,0,1-.49-.35l.15-.88a4.69,4.69,0,0,0-3.77-2.1c-.88,0-2.89.34-2.89,1.76,0,1.76,3.38,2.69,5,3.42,3.18,1.42,7.24,3.62,7.24,7.68a9.31,9.31,0,0,1-1.56,5.34q-2.28,3.23-7.19,3.23c-3.62,0-7.73-1.52-9-5.29-.05-.14,0-.24.15-.34l4.4-3.47a.33.33,0,0,1,.54.34l-.15,1.07a4.57,4.57,0,0,0,3.77,2.45c1.32,0,3-.68,3-2.54s-2.59-2.84-4.2-3.43a18.48,18.48,0,0,1-5.38-2.93A6.47,6.47,0,0,1,683.57,170.94Z"/></svg>
        </a></h1>

			<?php else : ?>

				<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url">
<svg id="a0e42b39-f4df-46a0-b536-b8e0ae8ee4ee" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 877.8 257.84"><defs><style>.a598c346-8fee-4dc6-b683-5313847cde74{fill:#007674;}.a779d64d-8dcc-45f3-ae2e-243bca9e5d16{fill:#005745;}</style></defs><path class="a598c346-8fee-4dc6-b683-5313847cde74" d="M159.13,65.68c-.78-1.89-7.73-.58-18.71-2.4a104,104,0,0,1-18.81-4.79c-1.7-.62-3.41-1.28-5-2-.82-.37-1.63-.75-2.34-1.15s-1.76-1-2.64-1.46c-3.72-2.08-7.66-4.26-11.93-6.3C91.18,43.42,82,40.33,73,39.91a47.2,47.2,0,0,0-22.76,4.44,33.11,33.11,0,0,0-12.18,9.47c-2.18,3-2.64,5.07-2,5.66,1.53,1.34,7.09-3.47,17.51-5.95a48.4,48.4,0,0,1,18.23-.93,52.89,52.89,0,0,1,8.29,1.91c2-.13,4-.17,6-.12a66.72,66.72,0,0,1,22.27,4.36c1.63.64,3.19,1.32,4.69,2S115.73,62,117,62.58c2.56,1.12,5,2.06,7.23,2.83A71,71,0,0,0,135,68.26c2.6.47,4.17.64,4.34,1.3s-1.25,1.68-4.22,2.35a30.73,30.73,0,0,1-9.94.28A68.13,68.13,0,0,0,140,73a39.51,39.51,0,0,0,14.76-3.33,12.24,12.24,0,0,0,3.53-2.31C159,66.7,159.3,66.12,159.13,65.68Z"/><path class="a598c346-8fee-4dc6-b683-5313847cde74" d="M111.56,68.68c-1.09-.42-2.18-.85-3.34-1.41s-2-1-3-1.46c-3.83-1.92-7.68-3.94-11.57-5.8a96.24,96.24,0,0,0-13.53-5.5c-2,.13-3.9.34-5.78.63A47.78,47.78,0,0,0,63.45,58a29.59,29.59,0,0,0-9.09,5.7,18.26,18.26,0,0,0-5.21,8.45,15.88,15.88,0,0,0,0,8,17.49,17.49,0,0,0,2.26,5.21c1.7,2.54,3.16,3.46,3.68,3.13s.18-2-.3-4.53-1-6.3.69-9.71,5.5-6.42,11.05-8.2a46,46,0,0,1,9.13-1.86,73.26,73.26,0,0,1,30,2.67c1.47.45,2.9.94,4.27,1.44,1.52.55,3,1.09,4.5,1.53a64,64,0,0,0,8.31,2c.88.14,1.73.24,2.56.33-2.39-.38-4.83-.87-7.35-1.52C115.82,70.12,113.72,69.49,111.56,68.68Z"/><path class="a779d64d-8dcc-45f3-ae2e-243bca9e5d16" d="M135.16,71.91c3-.67,4.38-1.76,4.22-2.35s-1.74-.83-4.34-1.3a71,71,0,0,1-10.79-2.85c-2.24-.77-4.67-1.71-7.23-2.83-1.29-.55-2.57-1.16-3.92-1.81s-3.06-1.38-4.69-2a66.72,66.72,0,0,0-22.27-4.36c-2,0-4,0-6,.12A96.24,96.24,0,0,1,93.67,60c3.89,1.86,7.74,3.88,11.57,5.8,1,.5,1.79.92,3,1.46s2.25,1,3.34,1.41c2.16.81,4.26,1.44,6.31,2,2.52.65,5,1.14,7.35,1.52A30.73,30.73,0,0,0,135.16,71.91Z"/><path class="a598c346-8fee-4dc6-b683-5313847cde74" d="M165.38,203.93a42.93,42.93,0,0,0,10.14-2.55c5.92-2.25,10.91-6.06,13.61-10.44a16.17,16.17,0,0,0,2.51-11.46c-.57-2.76-1.74-3.9-2.31-3.72s-.77,1.61-1.34,3.69a17.45,17.45,0,0,1-4.17,7.5c-4.78,5.24-15.71,8.81-27.72,7.92a67.65,67.65,0,0,1-8.82-1.16,55.57,55.57,0,0,1-7.95-2.11c-5.07-1.77-9.71-3.83-13.69-5.45-6.38-2.69-11.08-4.12-13-4,8.92,3.63,17.54,8.59,26.26,12.82C148.11,199.51,157,202.77,165.38,203.93Z"/><path class="a779d64d-8dcc-45f3-ae2e-243bca9e5d16" d="M122.52,192a94.55,94.55,0,0,0,13.64,7.64,50.75,50.75,0,0,0,9.16,3,60.66,60.66,0,0,0,10.18,1.55,50.65,50.65,0,0,0,9.88-.32c-8.36-1.16-17.27-4.42-26.47-8.92-8.72-4.23-17.34-9.19-26.26-12.82-.47,0-.82.14-.92.38C111.2,183.72,115.3,187.12,122.52,192Z"/><path class="a598c346-8fee-4dc6-b683-5313847cde74" d="M43,202.08c0-.33,0,.34,0,0Z"/><path class="a598c346-8fee-4dc6-b683-5313847cde74" d="M208.77,179.6c-1-.23-2.31,2-4.63,5.72s-5.89,8.79-11.61,13a31.85,31.85,0,0,1-10.08,4.89,39.91,39.91,0,0,1-13,1.16c-1.34-.08-2.69-.23-4.06-.42a50.65,50.65,0,0,1-9.88.32,60.66,60.66,0,0,1-10.18-1.55,50.75,50.75,0,0,1-9.16-3A94.55,94.55,0,0,1,122.52,192c-7.22-4.89-11.32-8.29-10.79-9.44.1-.24.45-.35.92-.38-2-.82-4-1.58-6-2.24a60.46,60.46,0,0,0-16.52-3.1,49.25,49.25,0,0,0-9.49.63c5.06-2.95,10.58-6,16.5-9.32,2.73-1.54,5.55-3.14,8.4-4.87s5.84-3.66,8.59-5.53c5.63-3.81,11.48-7.77,17.39-12.06a184.73,184.73,0,0,0,16.75-13.56,100.87,100.87,0,0,0,13.56-15.28,72.06,72.06,0,0,0,8.92-16.4A90.22,90.22,0,0,0,175.13,85a122.63,122.63,0,0,0,2.15-19.14,45.39,45.39,0,0,0,1.63-10.85c0-.72.08-1.39.08-2s-.09-1.23-.14-1.79a26.87,26.87,0,0,0-.38-2.78c-.29-1.5-.68-2.28-1.16-2.3s-1,.7-1.61,2.06c-.3.68-.61,1.52-.93,2.5l-.48,1.59c-.21.56-.44,1.15-.67,1.77A80.93,80.93,0,0,1,164,73.68c-5.14,7.59-12.6,15.71-22.14,23.7s-20.91,16.06-33,24.67-23.78,17.17-33.62,26.14-17.87,18.29-23,27.22l0,0c.58-1.7,1.25-3.48,2-5.31A86.56,86.56,0,0,1,70.28,146c7.43-8.06,17.11-15.57,27.81-22.77s21.4-13.58,30.8-20.07A164.74,164.74,0,0,0,152.54,84a83.66,83.66,0,0,0,12.82-16.13c2.47-4.21,3.32-6.79,3-7-.92-.56-6.25,8.68-19,19.74a205.21,205.21,0,0,1-23.83,17.54c-9.39,6.08-20.16,12.31-31.11,19.66s-21,15.34-28.64,24.15A82.84,82.84,0,0,0,49.9,168.43a57,57,0,0,0-3.41,18.72,52.92,52.92,0,0,0-3,10.83,20.25,20.25,0,0,0-.44,3.77c0,.17,0,.26,0,.33s0,.07,0,.13c.09,1.52.37,2.35.83,2.44A2,2,0,0,0,46,204c1-.66,2.44-2.13,4.57-3.89a61.66,61.66,0,0,1,5.78-4.23,58.2,58.2,0,0,1,7.6-4.22c.73-.32,1.45-.61,2.18-.89a47.91,47.91,0,0,1,23-2.53,57.19,57.19,0,0,1,13.15,3.67c9.21,3.6,19,9.82,30.56,15.51a108.72,108.72,0,0,0,17.88,7,66.58,66.58,0,0,0,18.35,2.65A47.15,47.15,0,0,0,186.17,214a37.78,37.78,0,0,0,23-26.7C210.11,182.53,209.65,179.8,208.77,179.6ZM60.28,180.9c5.63-7.36,13.6-15.16,23.28-23.07s21.15-15.89,33.31-24.51,23.78-17.25,33.52-26.45a115,115,0,0,0,17.25-20,77.32,77.32,0,0,1-12.79,24.87A102.12,102.12,0,0,1,142,125.34c-4.9,4.37-10.32,8.58-16.07,12.76s-11.53,8.17-17.09,12.08c-2.83,2-5.37,3.76-8.11,5.5s-5.39,3.39-8,5c-10.64,6.48-20.36,12.64-27.83,18.78a108.2,108.2,0,0,0-10.25,9.38C56.25,186.34,58.11,183.67,60.28,180.9Z"/><path class="a598c346-8fee-4dc6-b683-5313847cde74" d="M269.52,122.41h23.31a1.73,1.73,0,0,1,1.74,1.74v7.58a1.73,1.73,0,0,1-1.74,1.74h-39a1.79,1.79,0,0,1-1.73-1.74,4.9,4.9,0,0,1,.64-2.83l26.6-48v-.36H256.45a1.8,1.8,0,0,1-1.74-1.74V71.21a1.79,1.79,0,0,1,1.74-1.73h38.21a1.8,1.8,0,0,1,1.74,1.73,4.65,4.65,0,0,1-.83,2.66l-26.05,48.36Z"/><path class="a598c346-8fee-4dc6-b683-5313847cde74" d="M341.18,131.09l28.43-61.52a1.64,1.64,0,0,1,1.55-1h.92a1.55,1.55,0,0,1,1.55,1l28.16,61.52a1.61,1.61,0,0,1-1.55,2.38h-8a2.63,2.63,0,0,1-2.65-1.83l-4.48-9.87H357.82l-4.48,9.87a2.75,2.75,0,0,1-2.65,1.83h-8A1.61,1.61,0,0,1,341.18,131.09Zm39.49-19.47-9.14-20.11h-.27l-9,20.11Z"/><path class="a598c346-8fee-4dc6-b683-5313847cde74" d="M451.87,71.21a1.79,1.79,0,0,1,1.74-1.73h8.5a1.73,1.73,0,0,1,1.74,1.73V95.44h29.8V71.21a1.73,1.73,0,0,1,1.74-1.73h8.41a1.8,1.8,0,0,1,1.74,1.73v60.52a1.8,1.8,0,0,1-1.74,1.74h-8.41a1.73,1.73,0,0,1-1.74-1.74V106.5h-29.8v25.23a1.73,1.73,0,0,1-1.74,1.74h-8.5a1.8,1.8,0,0,1-1.74-1.74Z"/><path class="a598c346-8fee-4dc6-b683-5313847cde74" d="M555.52,131.09,584,69.57a1.64,1.64,0,0,1,1.55-1h.92a1.56,1.56,0,0,1,1.55,1l28.16,61.52a1.62,1.62,0,0,1-1.56,2.38h-8a2.63,2.63,0,0,1-2.65-1.83l-4.48-9.87H572.16l-4.48,9.87a2.73,2.73,0,0,1-2.65,1.83h-7.95A1.62,1.62,0,0,1,555.52,131.09ZM595,111.62l-9.14-20.11h-.28l-9,20.11Z"/><path class="a598c346-8fee-4dc6-b683-5313847cde74" d="M666.22,71.21A1.73,1.73,0,0,1,668,69.48H694.1A19.8,19.8,0,0,1,714,89.13c0,8.41-5.58,15.27-13.53,18.47L713,130.82a1.73,1.73,0,0,1-1.56,2.65h-9.6a1.57,1.57,0,0,1-1.46-.82l-12.16-24.23H678.1v23.31a1.79,1.79,0,0,1-1.73,1.74H668a1.73,1.73,0,0,1-1.74-1.74ZM693.1,98.64a9.32,9.32,0,0,0,9-9.33,9.1,9.1,0,0,0-9-8.86H678.19V98.64Z"/><path class="a598c346-8fee-4dc6-b683-5313847cde74" d="M761,131.09l28.44-61.52a1.64,1.64,0,0,1,1.55-1h.91a1.56,1.56,0,0,1,1.56,1l28.16,61.52a1.62,1.62,0,0,1-1.56,2.38h-7.95a2.63,2.63,0,0,1-2.65-1.83L805,121.77H777.64l-4.48,9.87a2.74,2.74,0,0,1-2.65,1.83h-8A1.62,1.62,0,0,1,761,131.09Zm39.5-19.47-9.14-20.11h-.28l-9,20.11Z"/><path class="a598c346-8fee-4dc6-b683-5313847cde74" d="M374.25,182V171.67c0-5.77,3.18-8.07,9-8.07,5.53,0,8.91,2.11,8.91,8.07v.84a.35.35,0,0,1-.39.34h-5.14a.36.36,0,0,1-.29-.59l.63-.59a3.3,3.3,0,0,0-3.52-2.83H383a3.15,3.15,0,0,0-2.74,1.12,5,5,0,0,0-.73,3v7.73c0,3.43,1.9,4.16,3.47,4.16h.49a3.25,3.25,0,0,0,2.79-1.12,5.37,5.37,0,0,0,.78-3v-.34l-.64-.59a.37.37,0,0,1,.3-.63h5.09a.38.38,0,0,1,.39.39V182c0,5.72-3.08,8.17-8.91,8.17C377.82,190.17,374.25,188,374.25,182Z"/><path class="a598c346-8fee-4dc6-b683-5313847cde74" d="M419.83,189.19l.59-.64,6.31-23.43-.39-.64c-.15-.24,0-.54.34-.54h6.12a.35.35,0,0,1,.29.54l-.44.64L439,188.55l.68.64a.37.37,0,0,1-.29.58h-5.92a.33.33,0,0,1-.19-.58l.58-.59-1.27-4.55h-5.72l-1.23,4.55.59.59a.36.36,0,0,1-.29.58h-5.82A.34.34,0,0,1,419.83,189.19Zm11.5-10-1.67-5.92-1.56,5.92Z"/><path class="a598c346-8fee-4dc6-b683-5313847cde74" d="M468.05,165.17l-.59-.69a.32.32,0,0,1,.25-.54h5.23a.33.33,0,0,1,.35.2l5.47,12.62V165.17l-.58-.69a.32.32,0,0,1,.24-.54h5.87a.32.32,0,0,1,.25.54l-.59.69v23.38l.59.64a.34.34,0,0,1-.25.58h-5.87a.35.35,0,0,1-.24-.58l.39-.44-5.38-12v11.84l.63.64a.37.37,0,0,1-.29.58h-5.82a.35.35,0,0,1-.25-.58l.59-.64Z"/><path class="a598c346-8fee-4dc6-b683-5313847cde74" d="M513,165.17l-.58-.69a.31.31,0,0,1,.24-.54h5.23a.33.33,0,0,1,.35.2l5.48,12.62V165.17l-.59-.69a.32.32,0,0,1,.24-.54h5.88a.32.32,0,0,1,.24.54l-.59.69v23.38l.59.64a.34.34,0,0,1-.24.58h-5.88a.35.35,0,0,1-.24-.58l.39-.44-5.38-12v11.84l.64.64a.38.38,0,0,1-.3.58H512.7a.34.34,0,0,1-.24-.58l.58-.64Z"/><path class="a598c346-8fee-4dc6-b683-5313847cde74" d="M557.45,189.19l.58-.64,6.32-23.43-.4-.64c-.14-.24,0-.54.35-.54h6.11a.36.36,0,0,1,.3.54l-.44.64,6.31,23.43.68.64a.37.37,0,0,1-.29.58h-5.92a.33.33,0,0,1-.2-.58l.59-.59-1.27-4.55h-5.73l-1.22,4.55.59.59a.36.36,0,0,1-.3.58h-5.82A.33.33,0,0,1,557.45,189.19Zm11.49-10-1.66-5.92-1.56,5.92Z"/><path class="a598c346-8fee-4dc6-b683-5313847cde74" d="M605.67,188.55V165.17l-.59-.69a.31.31,0,0,1,.25-.54h6.94c2.11,0,4.31.15,5.78,1.13,1.85,1.17,2.39,3.28,2.39,5.58a8,8,0,0,1-.78,3.81c1.47,1.42,2.1,3.67,2.1,6.85,0,3.38-.68,5.77-2.3,7s-3.67,1.46-5.82,1.46h-8.31a.34.34,0,0,1-.25-.58Zm7.58-16c1.22,0,1.91-.39,1.91-1.76a1.59,1.59,0,0,0-.69-1.47,4.18,4.18,0,0,0-2.05-.29h-1.57v3.52Zm-1,5.24h-1.42v6.8h1.47a4.71,4.71,0,0,0,3-.78,2.9,2.9,0,0,0,1.22-2.65,3.37,3.37,0,0,0-.93-2.49,3.42,3.42,0,0,0-2.4-.88Z"/><path class="a598c346-8fee-4dc6-b683-5313847cde74" d="M650.12,188.55V165.17l-.59-.69a.32.32,0,0,1,.25-.54h5.82c.29,0,.49.35.29.54l-.63.69v23.38l.63.64a.37.37,0,0,1-.29.58h-5.82a.35.35,0,0,1-.25-.58Z"/><path class="a598c346-8fee-4dc6-b683-5313847cde74" d="M683.57,170.94c0-4.89,4.75-7.34,9.3-7.34,3.62,0,6.21,1.86,7.92,5.29.1.14.05.29-.14.39l-4.26,2.79a.32.32,0,0,1-.49-.35l.15-.88a4.69,4.69,0,0,0-3.77-2.1c-.88,0-2.89.34-2.89,1.76,0,1.76,3.38,2.69,5,3.42,3.18,1.42,7.24,3.62,7.24,7.68a9.31,9.31,0,0,1-1.56,5.34q-2.28,3.23-7.19,3.23c-3.62,0-7.73-1.52-9-5.29-.05-.14,0-.24.15-.34l4.4-3.47a.33.33,0,0,1,.54.34l-.15,1.07a4.57,4.57,0,0,0,3.77,2.45c1.32,0,3-.68,3-2.54s-2.59-2.84-4.2-3.43a18.48,18.48,0,0,1-5.38-2.93A6.47,6.47,0,0,1,683.57,170.94Z"/></svg>

        </a>

			<?php endif; ?>

			<?php
		} else {
      echo '<a href="/"><svg id="a0e42b39-f4df-46a0-b536-b8e0ae8ee4ee" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 877.8 257.84"><defs><style>.a598c346-8fee-4dc6-b683-5313847cde74{fill:#007674;}.a779d64d-8dcc-45f3-ae2e-243bca9e5d16{fill:#005745;}</style></defs><path class="a598c346-8fee-4dc6-b683-5313847cde74" d="M159.13,65.68c-.78-1.89-7.73-.58-18.71-2.4a104,104,0,0,1-18.81-4.79c-1.7-.62-3.41-1.28-5-2-.82-.37-1.63-.75-2.34-1.15s-1.76-1-2.64-1.46c-3.72-2.08-7.66-4.26-11.93-6.3C91.18,43.42,82,40.33,73,39.91a47.2,47.2,0,0,0-22.76,4.44,33.11,33.11,0,0,0-12.18,9.47c-2.18,3-2.64,5.07-2,5.66,1.53,1.34,7.09-3.47,17.51-5.95a48.4,48.4,0,0,1,18.23-.93,52.89,52.89,0,0,1,8.29,1.91c2-.13,4-.17,6-.12a66.72,66.72,0,0,1,22.27,4.36c1.63.64,3.19,1.32,4.69,2S115.73,62,117,62.58c2.56,1.12,5,2.06,7.23,2.83A71,71,0,0,0,135,68.26c2.6.47,4.17.64,4.34,1.3s-1.25,1.68-4.22,2.35a30.73,30.73,0,0,1-9.94.28A68.13,68.13,0,0,0,140,73a39.51,39.51,0,0,0,14.76-3.33,12.24,12.24,0,0,0,3.53-2.31C159,66.7,159.3,66.12,159.13,65.68Z"/><path class="a598c346-8fee-4dc6-b683-5313847cde74" d="M111.56,68.68c-1.09-.42-2.18-.85-3.34-1.41s-2-1-3-1.46c-3.83-1.92-7.68-3.94-11.57-5.8a96.24,96.24,0,0,0-13.53-5.5c-2,.13-3.9.34-5.78.63A47.78,47.78,0,0,0,63.45,58a29.59,29.59,0,0,0-9.09,5.7,18.26,18.26,0,0,0-5.21,8.45,15.88,15.88,0,0,0,0,8,17.49,17.49,0,0,0,2.26,5.21c1.7,2.54,3.16,3.46,3.68,3.13s.18-2-.3-4.53-1-6.3.69-9.71,5.5-6.42,11.05-8.2a46,46,0,0,1,9.13-1.86,73.26,73.26,0,0,1,30,2.67c1.47.45,2.9.94,4.27,1.44,1.52.55,3,1.09,4.5,1.53a64,64,0,0,0,8.31,2c.88.14,1.73.24,2.56.33-2.39-.38-4.83-.87-7.35-1.52C115.82,70.12,113.72,69.49,111.56,68.68Z"/><path class="a779d64d-8dcc-45f3-ae2e-243bca9e5d16" d="M135.16,71.91c3-.67,4.38-1.76,4.22-2.35s-1.74-.83-4.34-1.3a71,71,0,0,1-10.79-2.85c-2.24-.77-4.67-1.71-7.23-2.83-1.29-.55-2.57-1.16-3.92-1.81s-3.06-1.38-4.69-2a66.72,66.72,0,0,0-22.27-4.36c-2,0-4,0-6,.12A96.24,96.24,0,0,1,93.67,60c3.89,1.86,7.74,3.88,11.57,5.8,1,.5,1.79.92,3,1.46s2.25,1,3.34,1.41c2.16.81,4.26,1.44,6.31,2,2.52.65,5,1.14,7.35,1.52A30.73,30.73,0,0,0,135.16,71.91Z"/><path class="a598c346-8fee-4dc6-b683-5313847cde74" d="M165.38,203.93a42.93,42.93,0,0,0,10.14-2.55c5.92-2.25,10.91-6.06,13.61-10.44a16.17,16.17,0,0,0,2.51-11.46c-.57-2.76-1.74-3.9-2.31-3.72s-.77,1.61-1.34,3.69a17.45,17.45,0,0,1-4.17,7.5c-4.78,5.24-15.71,8.81-27.72,7.92a67.65,67.65,0,0,1-8.82-1.16,55.57,55.57,0,0,1-7.95-2.11c-5.07-1.77-9.71-3.83-13.69-5.45-6.38-2.69-11.08-4.12-13-4,8.92,3.63,17.54,8.59,26.26,12.82C148.11,199.51,157,202.77,165.38,203.93Z"/><path class="a779d64d-8dcc-45f3-ae2e-243bca9e5d16" d="M122.52,192a94.55,94.55,0,0,0,13.64,7.64,50.75,50.75,0,0,0,9.16,3,60.66,60.66,0,0,0,10.18,1.55,50.65,50.65,0,0,0,9.88-.32c-8.36-1.16-17.27-4.42-26.47-8.92-8.72-4.23-17.34-9.19-26.26-12.82-.47,0-.82.14-.92.38C111.2,183.72,115.3,187.12,122.52,192Z"/><path class="a598c346-8fee-4dc6-b683-5313847cde74" d="M43,202.08c0-.33,0,.34,0,0Z"/><path class="a598c346-8fee-4dc6-b683-5313847cde74" d="M208.77,179.6c-1-.23-2.31,2-4.63,5.72s-5.89,8.79-11.61,13a31.85,31.85,0,0,1-10.08,4.89,39.91,39.91,0,0,1-13,1.16c-1.34-.08-2.69-.23-4.06-.42a50.65,50.65,0,0,1-9.88.32,60.66,60.66,0,0,1-10.18-1.55,50.75,50.75,0,0,1-9.16-3A94.55,94.55,0,0,1,122.52,192c-7.22-4.89-11.32-8.29-10.79-9.44.1-.24.45-.35.92-.38-2-.82-4-1.58-6-2.24a60.46,60.46,0,0,0-16.52-3.1,49.25,49.25,0,0,0-9.49.63c5.06-2.95,10.58-6,16.5-9.32,2.73-1.54,5.55-3.14,8.4-4.87s5.84-3.66,8.59-5.53c5.63-3.81,11.48-7.77,17.39-12.06a184.73,184.73,0,0,0,16.75-13.56,100.87,100.87,0,0,0,13.56-15.28,72.06,72.06,0,0,0,8.92-16.4A90.22,90.22,0,0,0,175.13,85a122.63,122.63,0,0,0,2.15-19.14,45.39,45.39,0,0,0,1.63-10.85c0-.72.08-1.39.08-2s-.09-1.23-.14-1.79a26.87,26.87,0,0,0-.38-2.78c-.29-1.5-.68-2.28-1.16-2.3s-1,.7-1.61,2.06c-.3.68-.61,1.52-.93,2.5l-.48,1.59c-.21.56-.44,1.15-.67,1.77A80.93,80.93,0,0,1,164,73.68c-5.14,7.59-12.6,15.71-22.14,23.7s-20.91,16.06-33,24.67-23.78,17.17-33.62,26.14-17.87,18.29-23,27.22l0,0c.58-1.7,1.25-3.48,2-5.31A86.56,86.56,0,0,1,70.28,146c7.43-8.06,17.11-15.57,27.81-22.77s21.4-13.58,30.8-20.07A164.74,164.74,0,0,0,152.54,84a83.66,83.66,0,0,0,12.82-16.13c2.47-4.21,3.32-6.79,3-7-.92-.56-6.25,8.68-19,19.74a205.21,205.21,0,0,1-23.83,17.54c-9.39,6.08-20.16,12.31-31.11,19.66s-21,15.34-28.64,24.15A82.84,82.84,0,0,0,49.9,168.43a57,57,0,0,0-3.41,18.72,52.92,52.92,0,0,0-3,10.83,20.25,20.25,0,0,0-.44,3.77c0,.17,0,.26,0,.33s0,.07,0,.13c.09,1.52.37,2.35.83,2.44A2,2,0,0,0,46,204c1-.66,2.44-2.13,4.57-3.89a61.66,61.66,0,0,1,5.78-4.23,58.2,58.2,0,0,1,7.6-4.22c.73-.32,1.45-.61,2.18-.89a47.91,47.91,0,0,1,23-2.53,57.19,57.19,0,0,1,13.15,3.67c9.21,3.6,19,9.82,30.56,15.51a108.72,108.72,0,0,0,17.88,7,66.58,66.58,0,0,0,18.35,2.65A47.15,47.15,0,0,0,186.17,214a37.78,37.78,0,0,0,23-26.7C210.11,182.53,209.65,179.8,208.77,179.6ZM60.28,180.9c5.63-7.36,13.6-15.16,23.28-23.07s21.15-15.89,33.31-24.51,23.78-17.25,33.52-26.45a115,115,0,0,0,17.25-20,77.32,77.32,0,0,1-12.79,24.87A102.12,102.12,0,0,1,142,125.34c-4.9,4.37-10.32,8.58-16.07,12.76s-11.53,8.17-17.09,12.08c-2.83,2-5.37,3.76-8.11,5.5s-5.39,3.39-8,5c-10.64,6.48-20.36,12.64-27.83,18.78a108.2,108.2,0,0,0-10.25,9.38C56.25,186.34,58.11,183.67,60.28,180.9Z"/><path class="a598c346-8fee-4dc6-b683-5313847cde74" d="M269.52,122.41h23.31a1.73,1.73,0,0,1,1.74,1.74v7.58a1.73,1.73,0,0,1-1.74,1.74h-39a1.79,1.79,0,0,1-1.73-1.74,4.9,4.9,0,0,1,.64-2.83l26.6-48v-.36H256.45a1.8,1.8,0,0,1-1.74-1.74V71.21a1.79,1.79,0,0,1,1.74-1.73h38.21a1.8,1.8,0,0,1,1.74,1.73,4.65,4.65,0,0,1-.83,2.66l-26.05,48.36Z"/><path class="a598c346-8fee-4dc6-b683-5313847cde74" d="M341.18,131.09l28.43-61.52a1.64,1.64,0,0,1,1.55-1h.92a1.55,1.55,0,0,1,1.55,1l28.16,61.52a1.61,1.61,0,0,1-1.55,2.38h-8a2.63,2.63,0,0,1-2.65-1.83l-4.48-9.87H357.82l-4.48,9.87a2.75,2.75,0,0,1-2.65,1.83h-8A1.61,1.61,0,0,1,341.18,131.09Zm39.49-19.47-9.14-20.11h-.27l-9,20.11Z"/><path class="a598c346-8fee-4dc6-b683-5313847cde74" d="M451.87,71.21a1.79,1.79,0,0,1,1.74-1.73h8.5a1.73,1.73,0,0,1,1.74,1.73V95.44h29.8V71.21a1.73,1.73,0,0,1,1.74-1.73h8.41a1.8,1.8,0,0,1,1.74,1.73v60.52a1.8,1.8,0,0,1-1.74,1.74h-8.41a1.73,1.73,0,0,1-1.74-1.74V106.5h-29.8v25.23a1.73,1.73,0,0,1-1.74,1.74h-8.5a1.8,1.8,0,0,1-1.74-1.74Z"/><path class="a598c346-8fee-4dc6-b683-5313847cde74" d="M555.52,131.09,584,69.57a1.64,1.64,0,0,1,1.55-1h.92a1.56,1.56,0,0,1,1.55,1l28.16,61.52a1.62,1.62,0,0,1-1.56,2.38h-8a2.63,2.63,0,0,1-2.65-1.83l-4.48-9.87H572.16l-4.48,9.87a2.73,2.73,0,0,1-2.65,1.83h-7.95A1.62,1.62,0,0,1,555.52,131.09ZM595,111.62l-9.14-20.11h-.28l-9,20.11Z"/><path class="a598c346-8fee-4dc6-b683-5313847cde74" d="M666.22,71.21A1.73,1.73,0,0,1,668,69.48H694.1A19.8,19.8,0,0,1,714,89.13c0,8.41-5.58,15.27-13.53,18.47L713,130.82a1.73,1.73,0,0,1-1.56,2.65h-9.6a1.57,1.57,0,0,1-1.46-.82l-12.16-24.23H678.1v23.31a1.79,1.79,0,0,1-1.73,1.74H668a1.73,1.73,0,0,1-1.74-1.74ZM693.1,98.64a9.32,9.32,0,0,0,9-9.33,9.1,9.1,0,0,0-9-8.86H678.19V98.64Z"/><path class="a598c346-8fee-4dc6-b683-5313847cde74" d="M761,131.09l28.44-61.52a1.64,1.64,0,0,1,1.55-1h.91a1.56,1.56,0,0,1,1.56,1l28.16,61.52a1.62,1.62,0,0,1-1.56,2.38h-7.95a2.63,2.63,0,0,1-2.65-1.83L805,121.77H777.64l-4.48,9.87a2.74,2.74,0,0,1-2.65,1.83h-8A1.62,1.62,0,0,1,761,131.09Zm39.5-19.47-9.14-20.11h-.28l-9,20.11Z"/><path class="a598c346-8fee-4dc6-b683-5313847cde74" d="M374.25,182V171.67c0-5.77,3.18-8.07,9-8.07,5.53,0,8.91,2.11,8.91,8.07v.84a.35.35,0,0,1-.39.34h-5.14a.36.36,0,0,1-.29-.59l.63-.59a3.3,3.3,0,0,0-3.52-2.83H383a3.15,3.15,0,0,0-2.74,1.12,5,5,0,0,0-.73,3v7.73c0,3.43,1.9,4.16,3.47,4.16h.49a3.25,3.25,0,0,0,2.79-1.12,5.37,5.37,0,0,0,.78-3v-.34l-.64-.59a.37.37,0,0,1,.3-.63h5.09a.38.38,0,0,1,.39.39V182c0,5.72-3.08,8.17-8.91,8.17C377.82,190.17,374.25,188,374.25,182Z"/><path class="a598c346-8fee-4dc6-b683-5313847cde74" d="M419.83,189.19l.59-.64,6.31-23.43-.39-.64c-.15-.24,0-.54.34-.54h6.12a.35.35,0,0,1,.29.54l-.44.64L439,188.55l.68.64a.37.37,0,0,1-.29.58h-5.92a.33.33,0,0,1-.19-.58l.58-.59-1.27-4.55h-5.72l-1.23,4.55.59.59a.36.36,0,0,1-.29.58h-5.82A.34.34,0,0,1,419.83,189.19Zm11.5-10-1.67-5.92-1.56,5.92Z"/><path class="a598c346-8fee-4dc6-b683-5313847cde74" d="M468.05,165.17l-.59-.69a.32.32,0,0,1,.25-.54h5.23a.33.33,0,0,1,.35.2l5.47,12.62V165.17l-.58-.69a.32.32,0,0,1,.24-.54h5.87a.32.32,0,0,1,.25.54l-.59.69v23.38l.59.64a.34.34,0,0,1-.25.58h-5.87a.35.35,0,0,1-.24-.58l.39-.44-5.38-12v11.84l.63.64a.37.37,0,0,1-.29.58h-5.82a.35.35,0,0,1-.25-.58l.59-.64Z"/><path class="a598c346-8fee-4dc6-b683-5313847cde74" d="M513,165.17l-.58-.69a.31.31,0,0,1,.24-.54h5.23a.33.33,0,0,1,.35.2l5.48,12.62V165.17l-.59-.69a.32.32,0,0,1,.24-.54h5.88a.32.32,0,0,1,.24.54l-.59.69v23.38l.59.64a.34.34,0,0,1-.24.58h-5.88a.35.35,0,0,1-.24-.58l.39-.44-5.38-12v11.84l.64.64a.38.38,0,0,1-.3.58H512.7a.34.34,0,0,1-.24-.58l.58-.64Z"/><path class="a598c346-8fee-4dc6-b683-5313847cde74" d="M557.45,189.19l.58-.64,6.32-23.43-.4-.64c-.14-.24,0-.54.35-.54h6.11a.36.36,0,0,1,.3.54l-.44.64,6.31,23.43.68.64a.37.37,0,0,1-.29.58h-5.92a.33.33,0,0,1-.2-.58l.59-.59-1.27-4.55h-5.73l-1.22,4.55.59.59a.36.36,0,0,1-.3.58h-5.82A.33.33,0,0,1,557.45,189.19Zm11.49-10-1.66-5.92-1.56,5.92Z"/><path class="a598c346-8fee-4dc6-b683-5313847cde74" d="M605.67,188.55V165.17l-.59-.69a.31.31,0,0,1,.25-.54h6.94c2.11,0,4.31.15,5.78,1.13,1.85,1.17,2.39,3.28,2.39,5.58a8,8,0,0,1-.78,3.81c1.47,1.42,2.1,3.67,2.1,6.85,0,3.38-.68,5.77-2.3,7s-3.67,1.46-5.82,1.46h-8.31a.34.34,0,0,1-.25-.58Zm7.58-16c1.22,0,1.91-.39,1.91-1.76a1.59,1.59,0,0,0-.69-1.47,4.18,4.18,0,0,0-2.05-.29h-1.57v3.52Zm-1,5.24h-1.42v6.8h1.47a4.71,4.71,0,0,0,3-.78,2.9,2.9,0,0,0,1.22-2.65,3.37,3.37,0,0,0-.93-2.49,3.42,3.42,0,0,0-2.4-.88Z"/><path class="a598c346-8fee-4dc6-b683-5313847cde74" d="M650.12,188.55V165.17l-.59-.69a.32.32,0,0,1,.25-.54h5.82c.29,0,.49.35.29.54l-.63.69v23.38l.63.64a.37.37,0,0,1-.29.58h-5.82a.35.35,0,0,1-.25-.58Z"/><path class="a598c346-8fee-4dc6-b683-5313847cde74" d="M683.57,170.94c0-4.89,4.75-7.34,9.3-7.34,3.62,0,6.21,1.86,7.92,5.29.1.14.05.29-.14.39l-4.26,2.79a.32.32,0,0,1-.49-.35l.15-.88a4.69,4.69,0,0,0-3.77-2.1c-.88,0-2.89.34-2.89,1.76,0,1.76,3.38,2.69,5,3.42,3.18,1.42,7.24,3.62,7.24,7.68a9.31,9.31,0,0,1-1.56,5.34q-2.28,3.23-7.19,3.23c-3.62,0-7.73-1.52-9-5.29-.05-.14,0-.24.15-.34l4.4-3.47a.33.33,0,0,1,.54.34l-.15,1.07a4.57,4.57,0,0,0,3.77,2.45c1.32,0,3-.68,3-2.54s-2.59-2.84-4.2-3.43a18.48,18.48,0,0,1-5.38-2.93A6.47,6.47,0,0,1,683.57,170.94Z"/></svg></a>';
		}
		?>
		<!-- end custom logo -->

		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
			<span class="navbar-toggler-icon"></span>
		</button>

		<!-- The WordPress Menu goes here -->
		<?php
		wp_nav_menu(
			array(
				'theme_location'  => 'primary',
				'container_class' => 'collapse navbar-collapse',
				'container_id'    => 'navbarNavDropdown',
				'menu_class'      => 'navbar-nav ms-auto',
				'fallback_cb'     => '',
				'menu_id'         => 'main-menu',
				'depth'           => 2,
				'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
			)
		);
		?>

    <div class="socials"><a href="https://www.instagram.com/zahara.life/"><i class="fab fa-instagram" aria-hidden="true"></i></a> <a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></div>
	</div><!-- .container(-fluid) -->

</nav><!-- .site-navigation -->
