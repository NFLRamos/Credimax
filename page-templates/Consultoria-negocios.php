<?php
/**
 * Template Name: Consultoria para Negócios 
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
<div class="container-fluid headerPages2" style="background-image: linear-gradient(82deg, rgba(0,0,0,1) 0%, rgba(2,2,2,0.7959558823529411) 20%, rgba(10,8,4,0.6727065826330532) 40%, rgba(1,1,1,0.5158438375350141) 60%, rgba(205,152,51,0.0760679271708683) 100%), url(<?php echo $image ;?>); background-position: 50% 30%; background-size:cover;"> 
	<div class="row">
		<div class="container container-xxl margem-esq">
			<div class="row">
				<div class="col-12 mt-5">
					<h1><?php the_title(); ?></h1>
					<div class="w-75 py-3  text-white">
						<?php
						$content = get_post_meta($post->ID,'subheaderText', true);
						//var_dump($content);
						echo  apply_filters( 'meta_content', wp_kses_post( $content ) );
						//the_field('subheaderText'); ?>
					</div>
				</div>
			</div>
		</div>

	</div>
    

</div>
<div class="container container-xxl">
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


