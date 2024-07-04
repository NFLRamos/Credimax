<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package mxu
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();

$container = get_theme_mod('mxu_container_type');
?>

<div class="container-fluid headerPages2" style="background-image: linear-gradient(82deg, rgba(0,0,0,1) 0%, rgba(2,2,2,0.7959558823529411) 20%, rgba(10,8,4,0.6727065826330532) 40%, rgba(1,1,1,0.5158438375350141) 60%, rgba(205,152,51,0.0760679271708683) 100%), url(<?php echo get_template_directory_uri(); ?>/assets/faqs-lindas.jpg); background-position: 50% 60%; background-size:cover;">
    <div class="row">
        <div class="container container-xxl margem-esq">
            <div class="row">
                <div class="col-12 mt-5">
                    <h1><?php _e('FAQ'); ?></h1>
                    <div class="w-75 py-3 text-white">
                        <?php _e('Porque o saber não ocupa lugar, consulte todas as nossas FAQs!')
                        ?>
                        <?php
                        $categories = get_terms(array(
                            'taxonomy' => 'faqs',
                            'orderby' => 'post_date',
                            'order'   => 'ASC',
                        ));
                        ?>
                        <div class="dropdown artigos">
                            <button class="btn btn-outline-light catSelector mt-5 dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php
                                $category = get_queried_object();
                                if (is_archive()) {
                                    if ($category->name == "faq") {
                                        echo '<i class="fas fa-list-ul" aria-hidden="true"></i> ' . __('Categorias');
                                    } else {
                                        echo $category->name;
                                    }
                                } else {
                                    echo '<i class="fas fa-list-ul" aria-hidden="true"></i> Categorias';
                                }
                                ?>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                                <a class="dropdown-item" href="<?php bloginfo('url'); ?>/faq/"><?php _e('Todas as categorias'); ?></a>

                                <?php
                                foreach ($categories as $category) {
                                ?>

                                    <a class="dropdown-item" href="<?php echo esc_url(get_category_link($category->term_id)) ?>"><?php echo $category->name; ?></a>


                                <?php
                                } ?>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="wrapper mt-5" id="index-wrapper">

    <div class="<?php echo esc_attr($container); ?> container-xxl" id="content" tabindex="-1">

        <div class="row">

            <div class="accordion col-12 border-0" id="accordionExample">

                <?php
                $terms = get_terms(array(
                    'taxonomy' => 'faqs'
                ));
                //$i = 0;

                foreach ($terms as $catid) {

                    $args = array(
                        'post_type' => 'faq',
                        'posts_per_page' => '-1',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'faqs',
                                'terms' => $catid->term_id,
                                'field' => 'term_id',
                            )
                        ),
                        'orderby' => '',
                        'order' => 'ASC'
                    );
                    $loop = new WP_Query($args);
                    $i = 1;



                    // Start the loop.
                    while ($loop->have_posts()) {
                        $loop->the_post();

                        $terms = get_the_terms(get_the_ID(), 'faqs');

                        $now = $terms['0']->name;
                        if ($i > 1) {
                            $classM = 'mt-4';
                        } else/*($now != $last)*/ {
                            echo '<h2 class="titulos-faqs mb-4 mb-lg-5 ' . $classM . ' mt-lg-5" id="catID' . $terms['0']->term_id . '">' . $terms['0']->name . '</h2>';
                        }
                        $i++;
                ?>

                        <div class="tema-faqs card border-0">
                            <div class="card-header bg-white border mb-2" id="heading<?php echo get_the_ID(); ?>">
                                <h2 class="mb-0">
                                    <button class="d-block btn btn-link btn-block text-left <?php echo ($i == 0) ? '' : 'collapsed'; ?>" type="button" data-toggle="collapse" data-target="#collapse<?php echo get_the_ID(); ?>" aria-expanded="<?php echo ($i == 0) ? 'true' : 'false'; ?>" aria-controls="collapse<?php echo get_the_ID(); ?>">
                                        <div class="d-none d-lg-block">
                                            <b><?php the_title(); ?></b>
                                            <span class="d-block" style="width:20%; float:right; text-align:right"><i class="fas fa-chevron-down"></i></span>
                                        </div>
                                        <div class="d-block d-lg-none">
                                            <span class="d-block" style="font-size: 17px; font-weight:400;width:90%; line-height:19px; float:left"><?php the_title(); ?></span>
                                            <span class="d-block" style="width:10%; float:right; text-align:right"><i class="fas fa-chevron-down"></i></span>
                                        </div>
                                    </button>
                                </h2>
                            </div>

                            <div id="collapse<?php echo get_the_ID(); ?>" class=" pl-lg-5 collapse <?php echo ($i == 0) ? 'show' : ''; ?>" aria-labelledby="heading<?php echo get_the_ID(); ?>" data-parent="#accordionExample">
                                <div class="card-body">
                                    <?php the_field('conteudo'); ?>
                                </div>
                            </div>
                        </div>

                    <?php
                        $terms = get_the_terms(get_the_ID(), 'faqs');
                        $last = $terms['0']->name;
                        $i++;
                    } ?>


                <?php } //endforeach
                ?>





            </div>
        </div><!-- .row -->

    </div><!-- #content -->

</div><!-- #index-wrapper -->

<?php
include "theme-parts/artigos.php";
include "theme-parts/nl.php";

get_footer();
