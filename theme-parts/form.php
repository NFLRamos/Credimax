<?php 
    $iconId = get_post_meta($post->ID,'icon', true);
    $title = get_post_meta($post->ID,'titulo', true);
    $slogan = get_post_meta($post->ID,'chavao', true);
    $iconId = get_post_meta($post->ID,'icon', true);
    $cover = get_post_meta($post->ID,'cover', true);
    $idForm = get_post_meta($post->ID,'idForm', true);
?>
<div class="container-fluid mt-top <?php if(!$cover) {
    echo 'pt-5' ;
    }?> pb-5 bg-dark-blue">
    <div class="row">

        <div class="container-fluid bg-cover2" style="background-image: url(<?php echo wp_get_attachment_url($cover); ?>); min-height: 400px;">

        </div>
        <div class="container container-xxl <?php if($cover) {echo 'pt-5' ;}?> ctaForms">
            <div class="col-12">
                <div class="w-100 text-center">
                    <img src="<?php echo wp_get_attachment_url($iconId); ?>">
                    <h2 class="text-center mt-5"><?php echo $title; ?></h2>
                    <p class="text-center"> <?php echo $slogan ?></p>
                </div>
            </div>
            <div class="col-12 mt-5 ">
                <?php echo do_shortcode('[gravityform id="'.$idForm.'" title="false" description="false" ajax="true" tabindex="49"]')?>
            </div>
        </div>
    </div>
</div>