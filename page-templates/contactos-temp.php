<?php

/**
 * Template Name: Contactos template
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
<div style="background-color: #fbfbfb;" class="tema-contactos">
	<div class="container-fluid headerPages2" style="background-image: linear-gradient(82deg, rgba(0,0,0,1) 0%, rgba(2,2,2,0.7959558823529411) 20%, rgba(10,8,4,0.6727065826330532) 40%, rgba(1,1,1,0.5158438375350141) 60%, rgba(205,152,51,0.0760679271708683) 100%), url(<?php echo $image; ?>); background-position: 50% 55%; background-size:cover;">
		<div class="row">
			<div class="container container-xxl margem-esq">
				<div class="row">
					<div class="col-12">
						<div class="w-75 py-3" style="color: rgba(251,251,251,.6); font-size: 12px;">

						</div>
						<h1><?php the_title(); ?></h1>
					</div>
				</div>
			</div>

		</div>


	</div>



	


</div>
<?php
//include __DIR__ . "/../archive-contato.php";
include __DIR__ . "/../theme-parts/contacto-card.php";
include __DIR__ . "/../theme-parts/modal-team.php";
include __DIR__ . "/../theme-parts/form.php";
include __DIR__ . "/../theme-parts/artigos.php";
include __DIR__ . "/../theme-parts/nl.php";
get_footer();
