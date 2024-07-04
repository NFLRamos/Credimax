<?php

/**
 * Template Name: LeasePlans
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
<div class="leaseplan">
    <div class="container-fluid headerPages-lease mb-5" style="background-image: linear-gradient(90deg,#131413 50%,#212529c9), url(<?php echo $image; ?>);">
        <div class="row">
            <div class="container container-xxl">
                <div class="row">
                    <div class="col-12 mt-5">
                        <div class="w-100 py-3 text-white">
                            <span class="upTitle"><?php _e('Crédito automóvel')?></span>
                            <h1 class="mt-3"><?php _e('LeasePlan')?></h1>
                            <p class="mt-2"><?php _e('A Credimax é especializada na prestação de serviços de intermediação de crédito e consultoria.')?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container container-xxl">
        <div class="row pt-5">
            <?php
            $args = array(
                'post_type' => 'leaseplan',
                'orderby' => 'rand',
                'posts_per_page' => 10,
            );
            $servicos = new WP_Query($args);
            if ($servicos->have_posts()) {
                while ($servicos->have_posts()) {
                    $servicos->the_post();

                    $imagem = get_field("imagem-carro");
                    $info = get_field("info-carro");
            ?>


                    <div class="col-12 col-sm-6 mt-5" style="align-self: center;">
                        <img src="<?php echo $imagem['url'] ?>">
                    </div>

                    <div class="col-12 col-sm-6 mt-5" style="align-self: center;">
                        <h2><?php the_title(); ?></h2>
                        <p class="mt-4 mb-5"><?php echo $info; ?></p>
                        <button data-toggle="modal"  data-target="#exampleModal1-<?php the_ID()?>" href="#exampleModal1-<? the_ID(); ?>" class="btn btn-primary mt-3 py-2 px-4 view-post"><?php _e('Ver todas as soluções')?><span class="seta-dir-branca"></span></button>
                    </div>
            <?php
             include('theme-parts/modal-leasing.php'); 
                }
            }
            wp_reset_postdata(); ?>
        </div>
    </div>
</div>



<?php
include "theme-parts/artigos.php";

include "theme-parts/nl.php";

get_footer();
?>