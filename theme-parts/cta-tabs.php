<div class="container container-xxl mt-top mb-bot tema-cta">
    <div class="row">
        <div class="col-12 pt-5 text-center">
            <h2 class="text-center h2TitleHome"><?php echo get_option('options_title_1');
                                                ?></h2>
            <div class=" softgrey w-100 text-center mt-4 pb-5">
                <?php echo get_option('options_subtitle_1') ?>
            </div>
        </div>
        <div class="col-12">
            <ul class="nav nav-pills mb-3 btnUnderline d-flex justify-content-center" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true" style="font-size: 1.17em; font-weight: bolder"><?php _e('Crédito Habitação') ?></a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false" style="font-size: 1.17em; font-weight: bolder"><?php _e('Crédito Pessoal') ?></a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false" style="font-size: 1.17em; font-weight: bolder"><?php _e('Crédito Automóvel') ?></a>
                </li>
                
            </ul>

            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="row">
                        <div class="col-md-6 pr-lg-5" style="padding-top: 20px;">
                            <?php echo get_option('options_content_1') ?>

                            <div class="mt-4 mb-4" style="display:flex;">
                                <div style="font-size: 14px; font-weight: 700;color: #1d1d1b  ; padding-right:25px; display: flex; flex-direction: row; align-items: center;"><img style="padding-right:10px; " src="<?php echo get_template_directory_uri() . "/assets/check-gold.png" ?>"> <?php echo get_option('options_Hcheck_1') ?></div>
                                <div style="font-size: 14px; font-weight: 700;color: #1d1d1b  ; padding-right:25px; display: flex; flex-direction: row; align-items: center;"><img style="padding-right:10px; " src="<?php echo get_template_directory_uri() . "/assets/check-gold.png" ?>"> <?php echo get_option('options_Hcheck_2') ?></div>
                                <div style="font-size: 14px; font-weight: 700;color: #1d1d1b  ; display: flex; flex-direction: row; align-items: center;"><img style="padding-right:10px; " src="<?php echo get_template_directory_uri() . "/assets/check-gold.png" ?>"> <?php echo get_option('options_Hcheck_3') ?></div>
                            </div>

                            <a class="btn btn-primary mt-3 py-2 px-4" href="<?php the_permalink(get_option('options_link_1')) ?>" title="ver detalhes sobre crédito habitação">
                                <?php _e('Ver todas as soluções'); ?><span class="seta-dir-branca"></span>
                               
                            </a>
                        </div>
                        <div class="col-md-6">
                            <img title="Credito habitação" alt="credito cenas" src="<?php echo get_template_directory_uri(); ?>/assets/home-habi.png">
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="row">
                        <div class="col-md-6 pr-lg-5" style="padding-top: 20px;">
                            <?php echo get_option('options_content_2') ?>

                            <div class="mt-4 mb-4" style="display:flex;">
                                <div style="font-size: 14px; font-weight: 700;color: #1d1d1b; padding-right:25px; display: flex; flex-direction: row; align-items: center;"><img style="padding-right:10px; " src="<?php echo get_template_directory_uri() . "/assets/check-gold.png" ?>"><?php echo get_option('options_Acheck_1') ?></div>
                                <div style="font-size: 14px; font-weight: 700;color: #1d1d1b; padding-right:25px; display: flex; flex-direction: row; align-items: center;"><img style="padding-right:10px; " src="<?php echo get_template_directory_uri() . "/assets/check-gold.png" ?>"><?php echo get_option('options_Acheck_2') ?></div>
                                <div style="font-size: 14px; font-weight: 700;color: #1d1d1b; display: flex; flex-direction: row; align-items: center;"><img style="padding-right:10px; " src="<?php echo get_template_directory_uri() . "/assets/check-gold.png" ?>"><?php echo get_option('options_Acheck_3') ?></div>
                            </div>
                            <a class="btn btn-primary mt-3 py-2 px-4" title="Crédito Automovel Credimax " href="<?php the_permalink(get_option('options_link_2')) ?>">
                                <?php _e('Ver todas as soluções'); ?><span class="seta-dir-branca"></span>
                                
                            </a>
                        </div>
                        <div class="col-md-6">
                            <img title="Credito automovel Credimax" alt="credito Automovel Credimax" src="<?php echo get_template_directory_uri(); ?>/assets/home-auto.png">
                        </div>
                    </div>
                </div>
                
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <div class="row">
                        <div class="col-md-6 pr-lg-5" style="padding-top: 20px;">
                            <?php echo get_option('options_content_3') ?>

                            <div class="mt-4  mb-4" style="display:flex;">
                                <div style="font-size: 14px; font-weight: 700;color: #1d1d1b; padding-right:25px; display: flex; flex-direction: row; align-items: center;"><img style="padding-right:10px; " src="<?php echo get_template_directory_uri() . "/assets/check-gold.png" ?>"><?php echo get_option('options_Pcheck_1') ?></div>
                                <div style="font-size: 14px; font-weight: 700;color: #1d1d1b; padding-right:25px; display: flex; flex-direction: row; align-items: center;"><img style="padding-right:10px; " src="<?php echo get_template_directory_uri() . "/assets/check-gold.png" ?>"><?php echo get_option('options_Pcheck_2') ?></div>
                                <div style="font-size: 14px; font-weight: 700;color: #1d1d1b; display: flex; flex-direction: row; align-items: center;"><img style="padding-right:10px; " src="<?php echo get_template_directory_uri() . "/assets/check-gold.png" ?>"><?php echo get_option('options_Pcheck_3') ?></div>
                            </div>
                            <a class="btn btn-primary mt-3 py-2 px-4" title="Ver detalhes Credimax" href="<?php the_permalink(get_option('options_link_3')) ?>">
                                <?php _e('Ver todas as soluções'); ?>
                                <span class="seta-dir-branca"></span>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <img title="Crédito Pessoal Credimax" alt="Crédito Pessoal Credimax" src="<?php echo get_template_directory_uri(); ?>/assets/home-pessoal.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>