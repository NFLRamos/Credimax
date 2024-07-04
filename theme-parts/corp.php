<div class="container-fluid mt-top bg-corp pt-5">
    <div class="row">


        <div class="container container-xxl pt-5 holderService">
            <div class="row">
                <div class="col-12 pb-5">
                    <h2 class="text-center"><?php _e('Empresas')?></h2>
                    <div class="w-100 bigText ">
                        <h3 class="text-center"><?php echo  get_option( 'options_TitleCorp' ); ?></h3>
                        <p><?php echo  get_option( 'options_subtitleCorp' ); ?></p>
                    </div>
                </div>
                <?php 
                $rep = get_option( 'options_servicesCorp' );
                for( $i = 0; $i < $rep; $i++ ) { ?>
                    <div class="col-6 col-md-4 serviceBox mb-5">
                        <img src="<?php echo wp_get_attachment_url(get_option( 'options_servicesCorp_'.$i.'_iconService' )); ?>">
                        <?php echo get_option( 'options_servicesCorp_'.$i.'_serviceContent' ); ?>
                    </div>
                <?php }
                ?>
                <div class="w-100 mt-5 pb-5 text-center">
                <a style="padding-bottom:10px; font-weight:500;" class="btn btn-light mt-3 px-4" title="Ver mais detalhes serviços empresas" href="<?php bloginfo('url'); ?>/para-empresas/">
                            <?php _e('Obter mais informação'); ?> <span style="font-size: 25px; padding-left: 10px; color: black">→</span>  
                        </a>
                </div>
            </div>
        </div>

    </div>
</div>