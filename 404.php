<?php

/**
 * Template Name: error 404
 *
 * Template for displaying a page just with the header and footer area and a "naked" content area in between.
 * Good for landingpages and other types of pages where you want to add a lot of custom markup.
 *
 * @package mxu
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
$image = wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'full'); ?>
<div style="background-color: #fbfbfb;">
	<div class="container-fluid headerPages" style="background-image: linear-gradient(90deg,#131413 50%,#cd98331c), url(<?php echo $image; ?>);">
		<div class="row">
			<div class="container container-xxl">
				<div class="row">
					<div class="col-12" style="padding:50px; text-align:center;">
						<h4 style="color:white !important;"><?php _e('Erro 404')?></h4>
						<p style="font-size: 18px; font-weight: 200; color:white;"><?php _e('OPS, ALGO DEU ERRADO')?></p>
						<div class="w-100 py-3">
							<h2 style="color:white;"><?php _e('Parece que a página que você está à procura não existe.')?></h2>
						</div>
						<a href="<?php bloginfo('url') ?>" class="btn btn-light" style="padding-right: 15px; padding-left: 15px; padding-top: 10px; padding-bottom: 10px;"><?php _e('Voltar à página inicial')?></a>
					</div>
				</div>
			</div>
		</div>


	</div>

	<div class="container container-xxl">
		<div class="row pt-5">
			<div class="col-12 pt-5">
				<?php while (have_posts()) :
					the_post();
					the_content();

				endwhile;
				?>
			</div>
		</div>
	</div>
</div>


<?php
get_footer();
?>





