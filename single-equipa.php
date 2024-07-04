<?php

/**
 * The template for displaying all single posts
 *
 * @package mxu
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
$container = get_theme_mod('mxu_container_type'); ?>
<div class="container-fluid headerPages2" style="background-image: linear-gradient(90deg, #131413 40%, #cd98332e 100%);">
	<div class="row">
		<div class="container container-xxl">
			<div class="row">
				<div class="col-12">

				</div>
			</div>
		</div>
	</div>
</div>

</div>
<div class="wrapper" id="single-wrapper">

	<div class="<?php echo esc_attr($container); ?> container-xxl" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check -->


			<?php
			while (have_posts()) {
				the_post();
				$image = wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'full'); ?>
				<div class="col-md-5 text-center">
					<img class="profilePic" src="<?php echo $image; ?>">
					<span class="single-stru"><?php echo get_field('dep') ?></span>
				</div>
				<div class="col-md-7 teamProfile pt-4 links-single lin-lindo">
					<h1><?php the_title(); ?></h1>
					<p style="font-size:18px; color:black; margin-top: 30px;">E-mail: &nbsp;<a href="mailto:<?php echo get_field('e-mail'); ?>"><?php echo get_field('e-mail'); ?></a></p>
					<p style="font-size:18px;">Tel: &nbsp;<a href="tel:<?php echo get_field('telemovel'); ?>"><?php echo get_field('telemovel'); ?></a></p>
					<div class="w-100" style="font-size:18px;">
						Media: &nbsp; &nbsp;
						<a href="<?php echo get_field('facebook'); ?>" target="_blank" class="mr-4" ><img alt="facebook " title="facebook " src="<?php echo get_template_directory_uri(); ?>/assets/logo-facebook.svg"></a>
						<a href="<?php echo get_field('instagram'); ?>" target="_blank" class="mr-4" ><img alt="instagram " title="instagram " src="<?php echo get_template_directory_uri(); ?>/assets/logo-instagram.svg"></a>
						<a href="<?php echo get_field('linkdin'); ?>" target="_blank" ><img alt="linkedin " 				title="linkedin " src="<?php echo get_template_directory_uri(); ?>/assets/logo-linkedin.svg"></a><br>
					</div>
					<!--<button style="margin-top:30px" class="btn btn-team-modal" data-toggle="modal" data-target="#exampleModal2">Vamos Conversar</button>-->
				</div>
			<?php }
			?>


			<!-- Do the right sidebar check -->

			<div class="col-12 border-bottom mt-5"></div>
		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #single-wrapper -->

<?php
include "theme-parts/artigos.php";
include "theme-parts/nl.php";
include "theme-parts/modal-team.php";
get_footer();
?>