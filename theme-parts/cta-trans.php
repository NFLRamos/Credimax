<div class="container container-xxl mt-top mt-lg-5 tema-cta">
    <div class="row">
        <div class="col pt-3 pb-5 pb-lg-0">

            <ul class="col-md-6 nav nav-pills mb-3 btnUnderline" id="pills-tab" role="tablist">
                <li style="font-size:14px;" class="nav-item" role="presentation">
                    <a class="nav-link active" id="pills-home-tab2" data-toggle="pill" href="#pills-home2" role="tab" aria-controls="pills-home" aria-selected="true" style="font-size: 1.5em;  font-weight: bold;"><?php _e('Transferência de Crédito') ?></a>
                </li>
                <li style="font-size:14px;" class="nav-item" role="presentation">
                    <a class="nav-link" id="pills-profile-tab2" data-toggle="pill" href="#pills-profile2" role="tab" aria-controls="pills-profile" aria-selected="false" style="font-size: 1.5em;  font-weight: bold;"><?php _e('Crédito Consolidado') ?></a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home2" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="row">
                        <div class="col-md-6 pr-5">
                            <?php echo get_option('options_content_5') ?>


                            <a class="btn btn-primary mt-3 py-2 px-4" title="Ver todas as soluções" href="<?php the_permalink(get_option('options_link_5')) ?>">
                                <?php _e('Ver todas as soluções'); ?>
                                <span class="seta-dir-branca"></span>
                            </a>
                        </div>
                        <div class="col-md-6 ctaTrans">
                            <img src="">
                        </div>
                    </div>

                </div>

                <div class="tab-pane fade" id="pills-profile2" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="row">
                        <div class="col-md-6 pr-5">
                            <?php echo get_option('options_content_6') ?>

                            <a class="btn btn-primary mt-3 py-2 px-4" title="Ver todas as soluções Consolidação de Credito" href="<?php the_permalink(get_option('options_link_6')) ?>">
                                <?php _e('Ver todas as soluções'); ?>
                                <span class="seta-dir-branca"></span>
                            </a>
                        </div>
                        <div class="col-md-6 ctaConso">
                            <img src="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>