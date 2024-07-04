<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package mxu
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$container = get_theme_mod('mxu_container_type');


?>
<!-- MODAL header Login 
	- Descomentar * // * pra ativar menu Login abaixo -
	-->

	<?php include "theme-parts/modal-login.php";?>


<?php get_template_part('sidebar-templates/sidebar', 'footerfull'); ?>



<div class="wrapper" id="wrapper-footer">

	
	 
	
	<button class="top-btn">
		<i class="las la-arrow-circle-up" ></i>
	</button>



	<div class="border-top <?php echo esc_attr($container); ?> ">
		<div class="row">
			<div class="col-9">
				<nav class="navbar navbar-expand-md navbar-light" style="padding-left:0px;">
					<?php
					wp_nav_menu(
						array(
							'theme_location'  => 'footernav',
							'container_class' => 'collapse navbar-collapse',
							'container_id'    => 'footerNav',
							'menu_class'      => 'navbar-nav',
							'fallback_cb'     => '',
							'menu_id'         => 'footer-menu',
							'depth'           => 1,
							'walker'          => new mxu_WP_Bootstrap_Navwalker(),
						)
					);
					?>
				</nav>

				<div class="w-100 ">
				<?php mxu_site_info();
				?></div>
				
			</div>

			<div class="col-12 col-md-3 d-flex align-items-center show-contagio">
				<div class="w-100 mobile-icons-socials-bot">
				<?php //mxu_site_info();
				echo do_shortcode('[icons]');
				?></div>
			</div>
			
		</div>
	</div>
	<div class="<?php echo esc_attr($container); ?> container-xxl">
	
		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">

					<div class="site-info">

						<?php //mxu_site_info(); ?>

					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div>
			<!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>
<script src="https://kit.fontawesome.com/e38ca9f1fe.js" crossorigin="anonymous"></script>
</body>

</html>