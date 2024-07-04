<?php

/**
 * The template for displaying all single faqs
 *
 * @package mxu
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
$container = get_theme_mod('mxu_container_type');
$image = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'full' ); ?>
<div class="container-fluid headerPages2" style="background-image: linear-gradient(82deg, rgba(0,0,0,1) 0%, rgba(2,2,2,0.7959558823529411) 20%, rgba(10,8,4,0.6727065826330532) 40%, rgba(1,1,1,0.5158438375350141) 60%, rgba(205,152,51,0.0760679271708683) 100%), url(<?php echo $image ;?>); background-position: 50% 50%; background-size:cover;"> 
</div>

<div class="wrapper" id="single-wrapper">

	<div class="<?php echo esc_attr($container); ?> container-xxl" id="content" tabindex="-1">

		<div class="row">
        <h1 class="mb-3 mt-3 fw-bold"><?php the_title(); ?></h1>

        <p><?php echo get_field('conteudo'); ?></p>

			<div class="col-12 border-bottom mt-5"></div>
		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #single-wrapper -->

<?php
include "theme-parts/artigos.php";
include "theme-parts/nl.php";
get_footer();
?>