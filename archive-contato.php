<?php

defined('ABSPATH') || exit;

get_header();

?>
<div style="background-color: #fbfbfb;" class="tema-contactos">
    <div class="container-fluid headerPages2" style="background-image: linear-gradient(82deg, rgba(0,0,0,1) 0%, rgba(2,2,2,0.7959558823529411) 20%, rgba(10,8,4,0.6727065826330532) 40%, rgba(1,1,1,0.5158438375350141) 60%, rgba(205,152,51,0.0760679271708683) 100%), url(<?php echo get_template_directory_uri(); ?>/assets/contact.jpeg); background-position: 50% 35%; background-size:cover;">
        <div class="row">
            <div class="container container-xxl margem-esq">
                <div class="row">
                    <div class="col-12 mt-5">
                        <div class="w-75 py-3" style="color: rgba(251,251,251,.6); font-size: 12px;">
                        </div>
                        <h1><?php _e('Contactos e Localizações')?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container container-xxl mt-5 tema-row-contactos">
    
    <div class="dropdown text-left">
        <button style="padding:15px; border-color: #DBDBDB;" class="margem-filtro-btn btn btn-outline-dark dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-map-marker-alt" style="padding-right: 5px;"></i><span style="padding-right:10px;"><?php _e('Todas as agências')?></span>
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
            <!--<a class="dropdown-item" href="<?php //bloginfo('url'); ?>/contato/"><?php //_e('Todas as agências'); ?></a>-->

            <?php
            $args = array(
                'post_type' => 'contato',
                'taxonomy' => 'localidade',
                'field' => 'slug',
                'orderby' => 'name',
                'order'   => 'ASC'
            );

            $categories = get_categories($args);

            foreach ($categories as $category) {

            ?>
                <a class="dropdown-item" href="<?php echo esc_url(get_category_link($category->term_id)) ?>"><?php echo $category->name; ?></a>
            <?php
            } ?>
        </div>
    </div>
    <hr>

    <?php

  

    $qql = new WP_Query($args);

    while ($qql->have_posts()) {
        $qql->the_post();
        $image = wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'full');
        $telefone = get_field('telefone');
    ?>

        <div class="row">
            <div class="col-12 tema-row-contactos">
                <div class="mt-3 border rounded display-bl-fl" style=" width:auto;">
                    <div class="col-12 col-lg-5 order-lg-1 d-flex" style="padding-top:35px; padding-bottom:15px; padding-right: 15px !important; padding-left:30px !important;">
                        <div style="width: 70%; ">
                            <h2 style="font-size:21px; font-weight:700; margin-bottom:2rem;"><?php the_title() ?></h2>
                            <span style="font-size:18px;"><?php echo get_field('morada') ?></span><br>
                            <i class="fas fa-mobile-alt mr-2 mt-3"></i> <span><?php echo get_field('telemovel') ?></span> <br>
                            <?php if ($telefone != null) { ?>
                                <i class="fas fa-phone-alt mr-2 mt-1"></i> <span><?php echo get_field('telefone') ?></span> <br>
                            <?php } else { ?>
                                <span class="d-none"></span>
                            <?php } ?>
                            <i class="fas fa-envelope mr-2 mt-1"></i> <span> <?php echo get_field('mail') ?> </span>
                        </div>
                        <div style="width:30%; ">
                            <div><a href="<?php echo get_field('face') ?>" target="_blank"><img style="height:24px; float:right;" src="<?php echo get_template_directory_uri() ?>/assets/logo-facebook.svg"></a><br></div>
                            <div style="margin-top:15px;"><a href="<?php echo get_field('insta') ?>" target="_blank"><img style="height:24px; float:right; " src="<?php echo get_template_directory_uri() ?>/assets/logo-instagram.svg"></a><br></div>
                            <div style="margin-top:15px;"><a href="<?php echo get_field('linkdin') ?>" target="_blank"><img style="height:24px; float:right; " src="<?php echo get_template_directory_uri() ?>/assets/logo-linkedin.svg"></a><br></div>
                            <button style="float:right; margin-top: 30px;" class="btn btn-team-modal" data-toggle="modal" data-target="#exampleModal2-<?php the_ID() ?>" href="#exampleModal2-<? the_ID(); ?>"><?php _e('Contactar')?></button>
                        </div>
                    </div>


                    <div class="col-12 col-lg-3 order-lg-0 altura" style="background-image: url(<?php echo $image; ?>); background-position: 15% 50%; background-size:cover;"></div>

                    <div class="col-12 col-lg-4 order-lg-2 paragrafo-negativo">
                        <?php echo get_field('mapas'); ?>
                    </div>


                </div>
            </div>
        </div>
    <?php
        include('theme-parts/modal-contacto.php');
    }
    ?>
</div>

<?php
include "theme-parts/modal-contacto.php";
include "theme-parts/artigos.php";
include "theme-parts/nl.php";
get_footer();
?>