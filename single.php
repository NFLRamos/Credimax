<?php
/**
 * The template for displaying all single posts
 *
 * @package mxu
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'mxu_container_type' );
$image = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'full' ); ?>

<div class="container-fluid headerPages" style="background-image: linear-gradient(90deg, #131413 50%,#cd983324);"> 
	<div class="row">
		<div class="container container-xxl">
			<div class="row">
				<div class="col-12">
					<div class="w-100 py-3">
						<span class="upTitle">
							<?php echo get_the_date( 'j M Y', $post->ID ); ?>
							<?php
							$category_detail=get_the_category($post->ID);
							foreach($category_detail as $cd){
								$category_link = get_category_link($cd->cat_ID);
								echo '<a href="'. esc_url($category_link).'" class="pl-3 linkCat">'.$cd->cat_name.'</a>';
							} ?>
						</span>
					</div>
					<h1><?php the_title(); ?></h1>
					<div class="w-75 py-3 text-white">
						<?php the_excerpt(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid" style="height:70vh; background-image: url('<?php echo $image; ?>'); background-size:cover; background-position: 50% 60%;">

</div>
<div class="wrapper mt-5" id="single-wrapper">

	<div class="<?php echo esc_attr( $container ); ?> container" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check -->

			<main class="site-main col-12" id="main">

				<?php
				while ( have_posts() ) {
					the_post();
					the_content();
				}
				?>

			</main><!-- #main -->

			<!-- Do the right sidebar check -->
	

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #single-wrapper -->

<?php
include "theme-parts/nl.php";

get_footer();
?>