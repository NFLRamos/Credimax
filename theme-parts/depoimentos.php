<div class="container-fluid  seta-bg-front">
    <div class="row">
        <div class="container mt-top mb-bot container-xxl">
            <div class="row">

                <div class="col-12 col-sm-6 col-lg-3 display-cartoes" style="text-align: -webkit-center;">

                <div class="card shadow" style="width: 17rem; background-color:white; margin-bottom:40px; height:auto; border-radius: 5px;">
                        <div class="card-body">
                            <h5 class="card-titulo card-texto"><img class="card-icon" src="<?php echo get_template_directory_uri() . "/assets/credi-auto.svg" ?>"><span style="padding-left:15px; font-weight:600;"><?php _e('221 M€') ?></span></h5>
                            <div style=" width:100%; text-align:left; padding-top:15px; padding-left:15px;padding-right:15px; font-size: 14px;">
                                <p><?php _e('Crédito Automóvel concedido em Portugal em 11/2021') ?><br><span style="font-style:italic; font-size:12px !important;"><?php _e('(segundo dados do BdP)') ?></span></p>
                            </div>
                        </div>
                    </div>

                    <div class="card shadow" style="width: 17rem; background-color:white; margin-bottom:40px; height:auto; border-radius: 5px;">
                        <div class="card-body">
                            <h5 class="card-titulo card-texto"><img class="card-icon" src="<?php echo get_template_directory_uri() . "/assets/credi-consi.svg" ?>"><span style="padding-left:15px; font-weight:600;"><?php _e('0,83%') ?></span></h5>
                            <div style="  width:100%; text-align:left; padding-top:15px; padding-left:15px;padding-right:15px; font-size: 14px; ">
                                <p><?php _e('Taxa de juro media do crédito habitação em 11/2021') ?><br><span style="font-style:italic; font-size:12px;"><?php _e('(segundo dados do BdP)') ?></span></p>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="col-12 col-sm-3 col-lg-3 display-cartoes" style="text-align: -webkit-center;">

                    <div class="card shadow" style="width: 17rem; background-color:white; margin-bottom:40px; height:auto; border-radius: 5px;">
                        <div class="card-body">
                            <h5 class="card-titulo card-texto"><img class="card-icon" src="<?php echo get_template_directory_uri() . "/assets/credi-habi.svg" ?>"><span style="padding-left:15px; font-weight:600;"><?php _e('1.353 M€') ?></span></h5>
                            <div style="  width:100%; text-align:left; padding-top:15px; padding-left:15px;padding-right:15px; font-size: 14px; ">
                                <p><?php _e('Crédito habitação concedido em Portugal em 11/2021') ?><br><span style="font-style:italic; font-size:12px;"><?php _e('(segundo dados do BdP)') ?></span></p>
                            </div>
                        </div>
                    </div>

                    <div class="card shadow" style="width: 17rem; background-color:white; margin-bottom:40px; height:auto; border-radius: 5px;">
                        <div class="card-body">
                            <h5 class="card-titulo card-texto"><img class="card-icon" src="<?php echo get_template_directory_uri() . "/assets/credi-pessoal.svg" ?>"><span style="padding-left:15px; font-weight:600;"><?php _e('296 M€') ?></span></h5>
                            <div style="  width:100%; text-align:left; padding-top:15px; padding-left:15px;padding-right:15px; font-size: 14px; ">
                                <p><?php _e('Crédito Pessoal concedido em Portugal em 11/2021') ?> <br><span style="font-style:italic; font-size:12px;"><?php _e('(segundo dados do BdP)') ?></span></p>
                            </div>
                        </div>
                    </div>

                </div>


                <div class="col-12 col-lg-6">
                    <div class="bg-azul-temp shadow w-100 pt-depoimentos">
                        <h2 style="color: #cd9833 ;font-weight:700; font-size: 16px;"><?php _e('AVALIAÇÕES') ?></h2>

                        <div class="slider_depoi w-100 ">
                            <?php
                            $args = array(
                                'post_type' => 'depoimento',
                                'orderby' => 'rand',
                                'posts_per_page' => -1
                            );

                            $depoi = new WP_Query($args);
                            if ($depoi->have_posts()) {
                                while ($depoi->have_posts()) {
                                    $depoi->the_post();
                                    $pid = get_post();
                            ?>
                                    <div>
                                        <p style="font-size: 16px;color: #1d1d1b;"><?php echo get_field("depoimento") ?></p>
                                        <span class="titulo-autor"><?php echo get_field("nome") ?></span><br>
                                        <span style="font-size: 12px;color: rgba(29,29,27,1);"><?php echo get_field("profissao") ?></span>
                                    </div>
                            <?php

                                }
                            } else {
                                echo "sem depoimentos";
                            }
                            wp_reset_postdata();
                            ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>