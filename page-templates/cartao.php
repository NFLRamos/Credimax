<?php
/**
 * Template Name: Cartões Base
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
<div class="container-fluid headerPages-cartao bgCC"> 
	<div class="row">
		<div class="container container-xxl margem-esq">
			<div class="row">
				<div class="col-md-5">
					<div class="w-100 py-3">
						<span class="upTitle"><?php _e('Créditos') ?></span>
					</div>
					<h1><?php the_title(); ?></h1>
					<div class="w-100 py-3 text-white">
						<?php
						
						$content = get_post_meta($post->ID,'subheaderText', true);
						//var_dump($content);
						echo  apply_filters( 'meta_content', wp_kses_post( $content ) );
						//the_field('subheaderText'); ?>
					</div>
				</div>
                <div class="col-md-7 pt-5 alin-cartao">
                    <img class="cc-margem-top" src="<?php echo $image ;?>">
                </div>
			</div>
		</div>
	</div>
</div>
<div class="container container-xxl">
	<div class="row ">
		<div class="col-12 ">
		<?php while ( have_posts() ) :
				the_post(); 
				the_content();

			endwhile;
			?>
		</div>
	</div>
</div>
<?php
include __DIR__ . "/../theme-parts/artigos.php";
include __DIR__ . "/../theme-parts/nl.php";
get_footer();
