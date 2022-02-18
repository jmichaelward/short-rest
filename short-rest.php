<?php
/**
 * Bootstrap the short rest process.
 *
 * Implementations that want to require
 */

global $short_rest_key;

if ( ! isset( $_SERVER['HTTP_X_SHORT_REST'] ) ) {
	return;
}

if ( empty( $short_rest_key ) && defined( 'SHORT_REST_KEY' ) ) {
	$short_rest_key = SHORT_REST_KEY;
}

if (
	! empty( $short_rest_key )
	&& $short_rest_key !== filter_var( $_SERVER['HTTP_X_SHORT_REST'], FILTER_SANITIZE_STRING )
) {
	return;
}

define( 'SHORTINIT', true );
define( 'ENABLE_SHORT_REST', true );
