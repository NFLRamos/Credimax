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

<div class="container-fluid headerPages2" style="background-image: linear-gradient(82deg, rgba(0,0,0,1) 0%, rgba(2,2,2,0.7959558823529411) 20%, rgba(10,8,4,0.6727065826330532) 40%, rgba(1,1,1,0.5158438375350141) 60%, rgba(205,152,51,0.0760679271708683) 100%), url(<?php echo get_template_directory_uri(); ?>/assets/article.jpeg); background-position: 50% 60%; background-size:cover;">
	<div class="row">
		<div class="container container-xxl margem-esq">
			<div class="row">
				<div class="col-12 mt-5">
					<h1><?php _e('Artigos'); ?></h1>
					<div class="w-75 py-3 text-white">
						<?php _e('Porque o saber não ocupa lugar, consulte todos os nossos artigos!')
						?>
						<?php
						$categories = get_categories(array(
							'orderby' => 'name',
							'order'   => 'ASC'
						));
						?>
						<div class="dropdown artigos">
							<button class="btn btn-outline-light catSelector mt-5 dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<?php
								$category = get_queried_object();
								echo $category->name;
								?>
							</button>
							<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

								<a class="dropdown-item" href="<?php bloginfo('url'); ?>/artigos/"><?php _e('Todas as categorias'); ?></a>

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

			<?php
			if (have_posts()) {
				// Start the Loop.
				while (have_posts()) {
					the_post();
					$image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'medium');
			?>
					<div class="col-md-4 mb-5">
						<a title="<?php the_title(); ?>" href="<?php echo the_permalink() ?>">
							<img class="mb-3 w-100 rounded" src="<?php echo $image[0] ?>">
						</a>
						<span class="dateHome"><?php echo get_the_date('j M Y', $post->ID); ?></span>
						<?php
						$category_detail = get_the_category($post->ID);
						foreach ($category_detail as $cd) {
							$category_link = get_category_link($cd->cat_ID);
							echo '<a href="' . esc_url($category_link) . '" class="pl-3 linkCat">' . $cd->cat_name . '</a>';
						} ?>
						<h3 class="mt-3"><a title="<?php the_title(); ?>" href="<?php echo the_permalink() ?>"><?php the_title(); ?></a></h3>
					</div>
			<?php
				}
			}
			?>


			<div class="col-12">
				<?php mxu_pagination(); ?>
			</div>

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #index-wrapper -->

<?php
include "theme-parts/nl.php";

get_footer();
