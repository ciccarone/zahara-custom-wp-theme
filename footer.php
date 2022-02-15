<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper footer-wrapper" id="wrapper-footer">
	<a href="#start" class="back2top"><i class="fas fa-arrow-up"></i></a>


	<div class="<?php echo esc_attr( $container ); ?> g-0">

		<div class="row">

			<div class="col-md-12">
        <div class="site-footer__cta">
              <div class="site-footer__cta__inner">
                <p><strong>shop online &amp; pick up in store</strong> <a href="/shop" class="btn outline light">order now</a></p>

              </div>
            </div>
				<footer class="site-footer col-inner" id="colophon">

					<div class="site-info">


            <svg id="f211ad49-a3f6-4409-8ce7-81fd74f7f058" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 792 612"><defs><style>.e414806f-b83d-4a25-9653-9895b610dfea{fill:#fff;}</style></defs><path class="e414806f-b83d-4a25-9653-9895b610dfea" d="M119.08,414.6h24.13a1.8,1.8,0,0,1,1.8,1.8v7.85a1.8,1.8,0,0,1-1.8,1.8h-40.4a1.87,1.87,0,0,1-1.8-1.8,5,5,0,0,1,.67-2.93l27.53-49.67v-.38H105.55a1.86,1.86,0,0,1-1.79-1.79v-7.86a1.86,1.86,0,0,1,1.79-1.79H145.1a1.86,1.86,0,0,1,1.8,1.79,4.84,4.84,0,0,1-.85,2.75l-27,50Z"/><path class="e414806f-b83d-4a25-9653-9895b610dfea" d="M193.24,423.59l29.42-63.67a1.71,1.71,0,0,1,1.61-1h.95a1.62,1.62,0,0,1,1.61,1L256,423.59a1.67,1.67,0,0,1-1.6,2.46h-8.23a2.73,2.73,0,0,1-2.75-1.89l-4.64-10.22H210.46l-4.64,10.22a2.86,2.86,0,0,1-2.74,1.89h-8.23A1.67,1.67,0,0,1,193.24,423.59Zm40.87-20.15-9.46-20.82h-.29l-9.27,20.82Z"/><path class="e414806f-b83d-4a25-9653-9895b610dfea" d="M307.79,361.62a1.86,1.86,0,0,1,1.8-1.79h8.8a1.79,1.79,0,0,1,1.79,1.79v25.07H351V361.62a1.79,1.79,0,0,1,1.79-1.79h8.71a1.86,1.86,0,0,1,1.79,1.79v62.63a1.86,1.86,0,0,1-1.79,1.8h-8.71a1.79,1.79,0,0,1-1.79-1.8V398.14H320.18v26.11a1.79,1.79,0,0,1-1.79,1.8h-8.8a1.86,1.86,0,0,1-1.8-1.8Z"/><path class="e414806f-b83d-4a25-9653-9895b610dfea" d="M415.06,423.59l29.42-63.67a1.7,1.7,0,0,1,1.61-1H447a1.6,1.6,0,0,1,1.61,1l29.14,63.67a1.67,1.67,0,0,1-1.61,2.46h-8.23c-1.42,0-2.08-.57-2.74-1.89l-4.64-10.22H432.27l-4.63,10.22a2.86,2.86,0,0,1-2.75,1.89h-8.23A1.67,1.67,0,0,1,415.06,423.59Zm40.87-20.15-9.46-20.82h-.29l-9.27,20.82Z"/><path class="e414806f-b83d-4a25-9653-9895b610dfea" d="M529.61,361.62a1.79,1.79,0,0,1,1.79-1.79h27.06a20.5,20.5,0,0,1,20.63,20.34c0,8.7-5.78,15.79-14,19.11l13,24a1.79,1.79,0,0,1-1.61,2.74H566.5a1.61,1.61,0,0,1-1.51-.85l-12.58-25.07H541.9v24.12a1.86,1.86,0,0,1-1.79,1.8H531.4a1.79,1.79,0,0,1-1.79-1.8ZM557.42,390a9.65,9.65,0,0,0,9.37-9.66,9.42,9.42,0,0,0-9.37-9.17H542V390Z"/><path class="e414806f-b83d-4a25-9653-9895b610dfea" d="M627.7,423.59l29.42-63.67a1.7,1.7,0,0,1,1.61-1h.94a1.6,1.6,0,0,1,1.61,1l29.14,63.67a1.67,1.67,0,0,1-1.61,2.46h-8.23c-1.42,0-2.08-.57-2.74-1.89l-4.64-10.22H644.91l-4.63,10.22a2.86,2.86,0,0,1-2.75,1.89H629.3A1.67,1.67,0,0,1,627.7,423.59Zm40.87-20.15-9.47-20.82h-.28l-9.27,20.82Z"/><path class="e414806f-b83d-4a25-9653-9895b610dfea" d="M320.59,143a53.3,53.3,0,0,1,19.93-1,56.27,56.27,0,0,1,9.06,2.09q-3.22.21-6.32.69a51.93,51.93,0,0,0-11.92,3.14,32.62,32.62,0,0,0-9.94,6.23,20,20,0,0,0-5.69,9.24,17.35,17.35,0,0,0-.06,8.8,18.79,18.79,0,0,0,2.47,5.69c1.86,2.79,3.46,3.78,4,3.42s.2-2.12-.32-4.94-1-6.89.75-10.62,6-7,12.08-9a50.7,50.7,0,0,1,10-2,79.82,79.82,0,0,1,11.26-.53,80.75,80.75,0,0,1,21.49,3.46c1.61.49,3.17,1,4.67,1.57,1.66.6,3.32,1.19,4.92,1.67a70.46,70.46,0,0,0,9.08,2.14c1,.15,1.89.27,2.8.37a76.08,76.08,0,0,0,16.16.93,43.45,43.45,0,0,0,16.13-3.64,13.77,13.77,0,0,0,3.87-2.53c.79-.77,1.09-1.4.91-1.89-.86-2.06-8.46-.62-20.45-2.62a113.37,113.37,0,0,1-20.57-5.23c-1.85-.68-3.72-1.4-5.51-2.22-.89-.41-1.77-.82-2.55-1.26s-1.93-1.07-2.89-1.6c-4.07-2.26-8.36-4.64-13-6.88-9.26-4.52-19.36-7.89-29.14-8.35A51.57,51.57,0,0,0,316.9,133a36.13,36.13,0,0,0-13.32,10.35c-2.38,3.24-2.88,5.54-2.13,6.18C303.13,151,309.2,145.7,320.59,143Z"/><path class="e414806f-b83d-4a25-9653-9895b610dfea" d="M309,305.35c0-.35,0,.38,0,0Z"/><path class="e414806f-b83d-4a25-9653-9895b610dfea" d="M490.56,289.23c1.07-5.25.58-8.23-.39-8.45s-2.52,2.23-5.06,6.26-6.44,9.6-12.69,14.18a34.57,34.57,0,0,1-11,5.34,43.26,43.26,0,0,1-14.22,1.27c-1.46-.08-2.94-.24-4.43-.45a46.5,46.5,0,0,0,11.08-2.79c6.47-2.46,11.92-6.63,14.87-11.42a17.67,17.67,0,0,0,2.75-12.52c-.62-3-1.91-4.27-2.53-4.06s-.84,1.75-1.46,4a19.17,19.17,0,0,1-4.56,8.2c-5.22,5.73-17.17,9.62-30.3,8.66A73.14,73.14,0,0,1,423,296.2a59.6,59.6,0,0,1-8.69-2.31c-5.54-1.93-10.62-4.18-15-5.95-7-2.94-12.11-4.5-14.2-4.33-2.18-.89-4.37-1.73-6.59-2.44a65.69,65.69,0,0,0-18.06-3.4,54.16,54.16,0,0,0-10.37.69c5.53-3.22,11.57-6.58,18-10.19,3-1.68,6.06-3.42,9.18-5.31s6.38-4,9.39-6c6.15-4.16,12.54-8.5,19-13.19A202,202,0,0,0,424,228.91a110.79,110.79,0,0,0,14.83-16.71,79.14,79.14,0,0,0,9.75-17.92,98.4,98.4,0,0,0,4.81-16.85,134.08,134.08,0,0,0,2.35-20.92,49.07,49.07,0,0,0,1.78-11.86c0-.79.09-1.52.09-2.21l-.15-1.95c-.11-1.21-.25-2.23-.41-3.05-.33-1.63-.75-2.48-1.27-2.51s-1.12.76-1.77,2.25c-.32.75-.66,1.66-1,2.74-.16.54-.34,1.12-.53,1.74l-.73,1.93A89.12,89.12,0,0,1,441.28,165c-5.61,8.29-13.77,17.16-24.2,25.9s-22.86,17.55-36.12,27-26,18.77-36.74,28.57-19.53,20-25.19,29.75v0c.63-1.87,1.36-3.81,2.22-5.81A94.75,94.75,0,0,1,338.8,244.1c8.13-8.81,18.7-17,30.39-24.88s23.4-14.85,33.68-21.94a181.36,181.36,0,0,0,25.84-21,92.6,92.6,0,0,0,14-17.64c2.69-4.59,3.62-7.42,3.24-7.63-1-.61-6.83,9.5-20.72,21.58a224.79,224.79,0,0,1-26,19.16c-10.28,6.66-22,13.47-34,21.5s-22.9,16.76-31.3,26.4a90.5,90.5,0,0,0-17.36,28.89A62.43,62.43,0,0,0,312.8,289a57.66,57.66,0,0,0-3.29,11.84A21.75,21.75,0,0,0,309,305c0,.18,0,.29,0,.36a.92.92,0,0,0,0,.15c.09,1.66.4,2.56.91,2.66a2.14,2.14,0,0,0,2.37-.68c1.06-.72,2.66-2.33,5-4.24a65.33,65.33,0,0,1,6.32-4.63,62.31,62.31,0,0,1,8.31-4.61c.79-.35,1.59-.67,2.38-1a52.51,52.51,0,0,1,25.15-2.76,62.94,62.94,0,0,1,14.37,4c10.07,3.94,20.71,10.73,33.4,17a118.38,118.38,0,0,0,19.54,7.63,72.63,72.63,0,0,0,20.06,2.9,51.42,51.42,0,0,0,18.64-3.34,41.21,41.21,0,0,0,25.1-29.18Zm-157.64-8.59a118.75,118.75,0,0,0-11.2,10.25c1.75-2.74,3.78-5.66,6.15-8.69,6.16-8,14.86-16.56,25.45-25.21s23.12-17.37,36.4-26.8,26-18.85,36.64-28.9a126.21,126.21,0,0,0,18.86-21.89c-2.82,8.72-6.92,18.3-14,27.18a112.09,112.09,0,0,1-14,14.9c-5.35,4.77-11.28,9.37-17.56,14s-12.6,8.92-18.68,13.2c-3.09,2.18-5.87,4.11-8.86,6s-5.9,3.7-8.79,5.48C351.71,267.19,341.09,273.92,332.92,280.64Z"/><path class="e414806f-b83d-4a25-9653-9895b610dfea" d="M227.47,476.26V465.58c0-6,3.29-8.35,9.31-8.35,5.72,0,9.22,2.18,9.22,8.35v.86a.37.37,0,0,1-.41.36h-5.32a.37.37,0,0,1-.3-.61l.66-.61a3.42,3.42,0,0,0-3.65-2.93h-.5a3.25,3.25,0,0,0-2.84,1.16,5.2,5.2,0,0,0-.76,3.14v8c0,3.54,2,4.3,3.6,4.3h.5a3.35,3.35,0,0,0,2.89-1.16,5.49,5.49,0,0,0,.81-3.14v-.36L240,474a.39.39,0,0,1,.3-.66h5.27a.4.4,0,0,1,.41.4v2.53c0,5.93-3.19,8.46-9.22,8.46C231.16,484.72,227.47,482.49,227.47,476.26Z"/><path class="e414806f-b83d-4a25-9653-9895b610dfea" d="M274.63,483.71l.61-.66,6.53-24.25-.4-.66c-.16-.25-.05-.56.35-.56h6.33a.37.37,0,0,1,.3.56l-.45.66,6.53,24.25.71.66a.39.39,0,0,1-.31.6h-6.12a.34.34,0,0,1-.21-.6l.61-.61-1.31-4.71h-5.93l-1.26,4.71.6.61a.37.37,0,0,1-.3.6h-6A.35.35,0,0,1,274.63,483.71Zm11.9-10.33-1.72-6.13-1.62,6.13Z"/><path class="e414806f-b83d-4a25-9653-9895b610dfea" d="M324.53,458.85l-.6-.71a.32.32,0,0,1,.25-.56h5.42a.33.33,0,0,1,.35.21l5.67,13.06v-12l-.61-.71a.33.33,0,0,1,.26-.56h6.07a.33.33,0,0,1,.25.56l-.6.71v24.2l.6.66a.35.35,0,0,1-.25.6h-6.07a.36.36,0,0,1-.26-.6l.41-.46-5.57-12.45v12.25l.66.66a.39.39,0,0,1-.31.6h-6a.35.35,0,0,1-.25-.6l.6-.66Z"/><path class="e414806f-b83d-4a25-9653-9895b610dfea" d="M371.09,458.85l-.6-.71a.32.32,0,0,1,.25-.56h5.42a.33.33,0,0,1,.35.21l5.67,13.06v-12l-.61-.71a.33.33,0,0,1,.26-.56h6.07a.33.33,0,0,1,.25.56l-.6.71v24.2l.6.66a.35.35,0,0,1-.25.6h-6.07a.36.36,0,0,1-.26-.6l.41-.46-5.57-12.45v12.25l.66.66a.39.39,0,0,1-.31.6h-6a.35.35,0,0,1-.25-.6l.6-.66Z"/><path class="e414806f-b83d-4a25-9653-9895b610dfea" d="M417.05,483.71l.6-.66,6.53-24.25-.4-.66c-.15-.25,0-.56.35-.56h6.33a.36.36,0,0,1,.3.56l-.45.66,6.53,24.25.71.66a.39.39,0,0,1-.3.6h-6.13a.34.34,0,0,1-.2-.6l.6-.61-1.31-4.71h-5.93L423,483.1l.61.61a.37.37,0,0,1-.31.6h-6A.34.34,0,0,1,417.05,483.71Zm11.89-10.33-1.72-6.13-1.62,6.13Z"/><path class="e414806f-b83d-4a25-9653-9895b610dfea" d="M467,483.05v-24.2l-.61-.71c-.2-.25-.1-.56.25-.56h7.19c2.18,0,4.45.16,6,1.17,1.93,1.21,2.49,3.39,2.49,5.77a8.27,8.27,0,0,1-.82,4c1.52,1.47,2.18,3.8,2.18,7.09,0,3.49-.71,6-2.38,7.24s-3.8,1.51-6,1.51h-8.61a.34.34,0,0,1-.25-.6Zm7.84-16.51c1.27,0,2-.4,2-1.82a1.64,1.64,0,0,0-.71-1.52,4.37,4.37,0,0,0-2.13-.3h-1.62v3.64Zm-1,5.42h-1.47v7h1.52a4.78,4.78,0,0,0,3.09-.81,3,3,0,0,0,1.26-2.74,3.51,3.51,0,0,0-1-2.58,3.58,3.58,0,0,0-2.48-.91Z"/><path class="e414806f-b83d-4a25-9653-9895b610dfea" d="M513,483.05v-24.2l-.61-.71a.32.32,0,0,1,.25-.56h6c.3,0,.51.36.3.56l-.66.71v24.2l.66.66a.39.39,0,0,1-.3.6h-6a.36.36,0,0,1-.25-.6Z"/><path class="e414806f-b83d-4a25-9653-9895b610dfea" d="M547.56,464.82c0-5.06,4.92-7.59,9.62-7.59,3.75,0,6.43,1.92,8.2,5.47.11.15.06.3-.15.4l-4.4,2.89a.33.33,0,0,1-.51-.36l.15-.91a4.83,4.83,0,0,0-3.89-2.17c-.92,0-3,.35-3,1.82,0,1.82,3.49,2.78,5.21,3.54,3.29,1.47,7.5,3.75,7.5,7.95a9.72,9.72,0,0,1-1.62,5.52q-2.35,3.35-7.45,3.34c-3.74,0-8-1.57-9.26-5.47-.05-.15,0-.25.15-.35l4.56-3.6a.34.34,0,0,1,.55.36l-.15,1.11a4.72,4.72,0,0,0,3.9,2.53c1.37,0,3.14-.71,3.14-2.63s-2.68-2.94-4.35-3.54a19.2,19.2,0,0,1-5.57-3A6.72,6.72,0,0,1,547.56,464.82Z"/></svg>

            <p>
              <?php echo do_shortcode('[store_location]') ?>
            </p>

            <?php
            wp_nav_menu( array(
                'theme_location' => 'footer-nav',
                'container_class' => 'custom-menu-class' ) );
            ?>

            <?php
              if ($social_networks = get_field('social_networks', 'option')) {
                $ret = '<div class="socials">';
                foreach ($social_networks as $key => $value) {
                  $ret .= '<a href="'.$value['profile_url'].'">';
                    $ret .= '<i class="'.$value['social_network'].'"></i>';
                  $ret .= '</a>';
                }
                $ret .= '</div>';
                echo $ret;
              }
            ?>

            <div class="edge small">
              <?php echo get_field('footer_copyright', 'option') ?>
            </div>


					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->
<a class="order-now" href="/shop">
  ORDER NOW
</a>
<?php wp_footer(); ?>

</body>

</html>
