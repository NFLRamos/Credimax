<?php

function faqs_show($atts)
{

  shortcode_atts(array(
    'id' => '',
  ), $atts);

  ob_start(); ?>


  <div class="tema-faqs">
    <div class="container container-xxl mt-top">
      <div class="row">
        <div class="col-12 col-sm-6 pl-0">
          <img class="img-linda" style="object-position: 46% 50%;" src="<?php echo get_template_directory_uri() ?>/assets/faq.jpg">
        </div>
        <div class="col-12 col-sm-6 ">
          <h2 class="smallTitle"><?php _e('FAQ') ?></h2>
          <h2 class="font-weight-bold"><?php _e('Ainda com dúvidas') ?></h2>
          <p class="mt-3"><?php _e('Consulte as questões frequentes que apresentamos em seguida, de modo a que possa satisfazer todas as suas dúvidas. Estamos aqui para esclarecer estas e muitas outras que possam surgir, por isso não hesite em contactar-nos.') ?></p>
          <?php

          $args = array(
            'post_type' => 'faq',
            'posts_per_page' => -1,
            'tax_query' => array(
              array(
                'taxonomy' => 'faqs',
                'terms' => $atts['id'], //categoria ID
              )
            )

          );

          $qql = new WP_Query($args);

          if ($qql->have_posts()) {
            while ($qql->have_posts()) {
              $qql->the_post();
          ?>

              
            <button type="button" class="accordion-butao "><?php the_title(); ?></button>
            <div class="accordion-content">
              <p style="padding:20px;">
                <?php echo get_field('conteudo')  ?>
              </p>
            </div>
       

          <?php
            }
          } else {
            echo "sem faqs";
          }

          wp_reset_postdata();
          ?>
        </div>

      </div>
    </div>



  </div>

<?php $content = ob_get_clean();

  return $content;
}

add_shortcode('faqs', 'faqs_show');  // shortcode: [faqs]

?>