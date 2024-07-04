<?php
function icons_show(){

ob_start();?>

<div class="margem-negativa-icons">
    <a href="https://www.facebook.com/Credimax" target="_blank" class="mr-4" title="facebook Credimax"><img style="height:25px;" alt="facebook Credimax" title="facebook Credimax" src="<?php echo get_template_directory_uri(); ?>/assets/logo-facebook.svg"></a>
    <a href="https://www.instagram.com/Credimax" target="_blank" class="mr-4" title="instagram Credimax"><img style="height:25px;" alt="instagram Credimax" title="instagram Credimax" src="<?php echo get_template_directory_uri(); ?>/assets/logo-instagram.svg"></a>
    <a href="https://www.linkedin.com/company/Credimax" target="_blank" title="linkedin Credimax"><img style="height:25px;" alt="linkedin Credimax" title="linkedin Credimax" src="<?php echo get_template_directory_uri(); ?>/assets/logo-linkedin.svg"></a>
</div>

<?php $content = ob_get_clean();

return $content;
}

add_shortcode('icons', 'icons_show');  // shortcode: [icons]
?>




