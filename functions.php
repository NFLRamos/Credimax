<?php
/**
 * mxu functions and definitions
 *
 * @package mxu
 */

use function PHPSTORM_META\map;

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// mxu's includes directory.
$mxu_inc_dir = 'inc';

// Array of files to include.
$mxu_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker. Trying to get deeper navigation? Check out: https://github.com/mxu/mxu/issues/567.
	'/editor.php',                          // Load Editor functions.
	'/cpt.php',                             // Add Suport do SVG.
	'/acf.php',                             // Add Suport do SVG.
	'/deprecated.php',                      // Load deprecated functions.
);

// Load WooCommerce functions if WooCommerce is activated.
if ( class_exists( 'WooCommerce' ) ) {
	$mxu_includes[] = '/woocommerce.php';
}

// Load Jetpack compatibility file if Jetpack is activiated.
if ( class_exists( 'Jetpack' ) ) {
	$mxu_includes[] = '/jetpack.php';
}

// Include files.
foreach ( $mxu_includes as $file ) {
	require_once get_theme_file_path( $mxu_inc_dir . $file );
}


// funcao pra ir buscar a DESCRIÇAO do consultor selecionado - dinamic populate

add_filter('gform_field_value_consultor', function() {
	

		$nome = get_field('nome_form');
		return $nome;

});

// funcao pra ir buscar CONTACTO-MAIL do consultor selecionado - dinamic populate

add_filter('gform_field_value_contacto_credi', function() {
	

	
	$contacto_sede = get_field('e-mail_hidden_');
	return $contacto_sede;

});
add_filter('gform_field_value_contacto_gestor', function() {
	

	$contacto_equipa = get_field('e-mail_hidden');
	return $contacto_equipa;

});



//chamada ficheiros shortcodes
include ('shortcode_footer.php'); // shortcode para icons footer
include ('shortcode_faqs.php'); // shortcode for faqs