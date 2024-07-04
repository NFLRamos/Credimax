<?php
/**
 * Template Name: Intermediaçao credito
 *
 * Template for displaying a page just with the header and footer area and a "naked" content area in between.
 * Good for landingpages and other types of pages where you want to add a lot of custom markup.
 *
 * @package mxu
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$image = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'full' ); ?>
<div style="background-color: #fbfbfb;">
<div class="container-fluid headerPages" style="background-image: linear-gradient(90deg,#131413 50%, #cd98331c), url(<?php echo $image ;?>);"> 
	<div class="row">
		<div class="container container-xxl">
			<div class="row">
				<div class="col-12">
					<div class="w-75 py-3" style="color: rgba(251,251,251,.6); font-size: 12px;">
						<?php
						$content = get_post_meta($post->ID,'subheaderText', true);
						//var_dump($content);
						echo  apply_filters( 'meta_content', wp_kses_post( $content ) );
						//the_field('subheaderText'); ?>
					</div>
                    <h1><?php the_title(); ?></h1>
				</div>
			</div>
		</div>

	</div>
    

</div>
<div class="container container-xxl contactos-butao">
	<div class="row pt-5">
		<div class="col-12 pt-5">
		<?php while ( have_posts() ) :
				the_post(); 
				the_content();

			endwhile;
			?>
		</div>
	</div>
</div>
</div>
<?php
include __DIR__ . "/../theme-parts/artigos.php";
include __DIR__ . "/../theme-parts/nl.php";
get_footer();