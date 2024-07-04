<?php
/**
 * mxu enqueue scripts
 *
 * @package mxu
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'mxu_scripts' ) ) {
	/**
	 * Load theme's JavaScript and CSS sources.
	 */
	function mxu_scripts() {
		// Get the theme data.
		$the_theme     = wp_get_theme();
		$theme_version = $the_theme->get( 'Version' );

		$css_version = $theme_version . '.' . filemtime( get_template_directory() . '/css/theme.min.css' );
		wp_enqueue_style( 'slick', get_template_directory_uri() . '/css/slick.css', array(), $css_version );

		wp_enqueue_style( 'mxu-styles', get_template_directory_uri() . '/css/theme.min.css', array(), $css_version );

		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'jquery3', get_template_directory_uri() . '/js/jquery-3.6.0.min.js', array(), '', false );
		wp_enqueue_style( 'slick1', get_template_directory_uri() . '/css/slick-theme.css', array(), $css_version );
		


		$js_version = $theme_version . '.' . filemtime( get_template_directory() . '/js/theme.min.js' );
		wp_enqueue_script( 'footer', get_template_directory_uri() . '/js/themeFooter.js', array(), $js_version, true );
		wp_enqueue_script( 'mxu-scripts', get_template_directory_uri() . '/js/theme.min.js', array(), $js_version, true );
		wp_enqueue_script( 'loan-mxu', get_template_directory_uri() . '/js/loan.js', array(), $js_version, true );
		wp_enqueue_script( 'slick2', get_template_directory_uri() . '/js/slick.js', array(),'1.8',false );
		wp_enqueue_script( 'faqs', get_template_directory_uri() . '/js/faqs.js', array(), $js_version, true );

		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
} // End of if function_exists( 'mxu_scripts' ).

add_action( 'wp_enqueue_scripts', 'mxu_scripts' );
