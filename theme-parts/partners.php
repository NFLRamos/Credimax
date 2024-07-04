<div class="container container-xxl mt-top mb-bot">
<div class="row">
    <div class="col-12">
        <h3 style="color:black; padding-bottom: 15px; font-size:28px;"><?php _e('Parceiros'); ?></h3>
    </div>
</div>
</div>
<div class="container-fluid">
    <div class="row slider_partners">
        <?php $loop = new WP_Query( array('post_type' => 'parceiro','posts_per_page' => -1)); ?>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); 
               $image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'partners' ); 
               //var_dump($image)?>
        <div class="col">
            <img class="partnerLogo" src="<?php echo $image["0"]; ?>" alt="Parceiro Credimax <?php the_title(); ?>" title="Parceiro Credimax <?php the_title(); ?>">
        </div>
        <?php endwhile; wp_reset_query(); ?>
    </div>
</div>
