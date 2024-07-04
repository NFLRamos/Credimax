<?php
/**
 * Custom hooks
 *
 * @package mxu
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'mxu_site_info' ) ) {
	/**
	 * Add site info hook to WP hook library.
	 */
	function mxu_site_info() {
		do_action( 'mxu_site_info' );
	}
}

add_action( 'mxu_site_info', 'mxu_add_site_info' );
if ( ! function_exists( 'mxu_add_site_info' ) ) {
	/**
	 * Add site info content.
	 */
	function mxu_add_site_info() {

		$site_info = '<span style="font-size:14px;">Criado por <a class="link-contagio" href="https://contagio.pt/"><span class="sep">Contágio</a></span>';
			
		echo apply_filters( 'mxu_site_info_content', $site_info ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	}
}
