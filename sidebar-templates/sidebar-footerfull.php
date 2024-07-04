<?php
/**
 * Sidebar setup for footer full
 *
 * @package mxu
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'mxu_container_type' );

?>


	<!-- ******************* The Footer Full-width Widget Area ******************* -->

	<div class="wrapper">

		<div class="container " id="footer-full-content" tabindex="-1">

			<div class="row">
				<div class="col-lg-3 col-6">
					<?php dynamic_sidebar( 'footer_1' ); ?>
				</div>
				<div class="col-lg-3 col-6">
					<?php dynamic_sidebar( 'footer_2' ); ?>
				</div>
				<div class="col-lg-3 col-6">
					<?php dynamic_sidebar( 'footer_3' ); ?>
				</div>
				<div class="col-lg-3 col-6">
					<?php dynamic_sidebar( 'footer_4' ); ?>
				</div>
			</div>
			<div class="mobile-icons-socials">
				<?php echo do_shortcode('[icons]') ?>
			</div>

		</div>

	</div><!-- #wrapper-footer-full -->

	<?php

