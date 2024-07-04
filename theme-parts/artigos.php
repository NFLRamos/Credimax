<div class="container container-xxl mt-top mb-5 ">
    <div class="row">
        <div class="col-12 col-sm-6">
            <h2 class="font-weight-bold"><?php _e('Artigos recentes'); ?></h2>
        </div>
        <div class="col-12 col-sm-6">
        <section class="artigos-lindos"><a href="<?php bloginfo('url'); ?>/artigos/" style="color: black;"><?php _e('Ver todos os artigos') ?><span class="seta-linda">→</span></a></section>
        </div>
    </div>
    <div class="row mt-5">
        <?php
        $args = array(
            'post_type' => 'post',
            'parceiro',
            'posts_per_page' => 3
        );
        $query = new WP_Query($args);
        while ($query->have_posts()) {
            $query->the_post();
            $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'medium');

        ?>
            <div class="col-md-4 ">
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
                <h3 class="mt-3" style="color:black;"><a title="<?php the_title(); ?>" href="<?php echo the_permalink() ?>"><?php the_title(); ?></a></h3>
            </div>
        <?php } ?>
    </div>
</div>