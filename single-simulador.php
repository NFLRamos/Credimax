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


<?php
while (have_posts()) {
    the_post();

?>
    <div class="container-fluid header-blue-lindo" style="background-image: linear-gradient(90deg,#212529 50%,#cd983324);">
        <div class="row">
            <div class="container container-xxl">
                <div class="row">
                    <div class="col-9 titulo-header-page">
                        <?php echo the_title(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bloco-simulador"><?php echo get_field('simu') ?></div>
            </div>
        </div>
    </div>

   


    <?php }
            ?>
    

    <?php
    include "theme-parts/artigos.php";

    include "theme-parts/nl.php";

    get_footer();
    ?>