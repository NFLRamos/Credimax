<div class="container container-xxl mt-5">
    <div class="dropdown text-left">


        <?php
        $args = array(
            'post_type' => 'contato',
            'taxonomy' => 'localidade',
            'orderby' => 'name',
            'order'   => 'ASC'
        );


        ?>


        <button style="padding:15px; border-color: #DBDBDB;" class="btn btn-outline-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">



            <i class="fas fa-map-marker-alt" style="padding-right: 5px;"></i><span style="padding-right:10px;"><?php _e('Todas as agências') ?></span>
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <?php
            $terms = get_terms('localidade');
            foreach ($terms as $term) { ?>
                <a class="dropdown-item" <?php echo $term->slug; ?>><?php echo $term->name; ?></a>
            <?php }
            ?>


        </ul>

    </div>
    <hr>

    <?php



    $qql = new WP_Query($args);


    while ($qql->have_posts()) {
        $qql->the_post();

        $termsArray = get_the_terms($post->ID, 'localidade');

        $termSlug = "";

        foreach ($termsArray as $term) {
            $termSlug .= $term->slug . ' ';
        }

    ?>

        <div class="row">
            <div class="col-12 tema-row-contactos">
                <div class="mt-3 border rounded display-bl-fl" style=" width:auto;">




                    <div class="col-12 col-lg-5 order-lg-1 d-flex" style="padding-top:40px; padding-right: 15px !important; padding-left:15px !important;">
                        <div style="width: 70%; ">
                            <h2 style="font-size:21px; font-weight:700; margin-bottom:2rem;"><?php the_title() ?></h2>
                            <span style="font-size:18px;"><?php echo get_field('morada') ?></span><br>
                            <i class="fas fa-mobile-alt mr-2 mt-3"></i> <span><?php echo get_field('telemovel') ?></span> <br>
                            <i class="fas fa-phone-alt mr-2 mt-1"></i> <span><?php echo get_field('telefone') ?></span> <br>
                            <i class="fas fa-envelope mr-2 mt-1"></i> <span><?php echo get_field('mail') ?> </span>
                        </div>
                        <div style="width:30%; ">
                            <div><a href="<?php echo get_field('face') ?>" target="_blank"><img style="height:24px; float:right;" src="<?php echo get_template_directory_uri() ?>/assets/logo-facebook.svg"></a><br></div>
                            <div style="margin-top:15px;"><a href="<?php echo get_field('insta') ?>" target="_blank"><img style="height:24px; float:right; " src="<?php echo get_template_directory_uri() ?>/assets/logo-instagram.svg"></a><br></div>
                            <div style="margin-top:15px;"><a href="<?php echo get_field('linkdin') ?>" target="_blank"><img style="height:24px; float:right; " src="<?php echo get_template_directory_uri() ?>/assets/logo-linkedin.svg"></a><br></div>
                            <button style="float:right; margin-top: 30px;" class="btn btn-team-modal" data-toggle="modal" data-target="#exampleModal2">Contactar</button>
                        </div>
                    </div>


                    <div class="col-12 col-lg-3 order-lg-0 ">
                        <img class="altura p-dir" src="<?php echo get_template_directory_uri() ?>/assets/aveiro.jpg">
                    </div>

                    <div class="col-12 col-lg-4 order-lg-2 ">
                        <iframe class=" p-erq" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1470.6189483770477!2d-8.648896696197593!3d40.64261118768897!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd2399acd1742187%3A0x4aa578b7f17ce049!2sMAXFINANCE%20Universal!5e0!3m2!1spt-PT!2spt!4v1640607475795!5m2!1spt-PT!2spt" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>




                </div>
            </div>
        </div>
    <?php
    }
    ?>
</div>