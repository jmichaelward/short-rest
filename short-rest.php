<?php
/**
 * Bootstrap the short rest process.
 */

if ( ! isset( $_SERVER['HTTP_X_SHORT_REST'] ) ) {
	return;
}

if (
	defined( 'SHORT_REST_KEY' )
	&& SHORT_REST_KEY !== filter_var( $_SERVER['HTTP_X_SHORT_REST'], FILTER_SANITIZE_STRING )
) {
	return;
}

define( 'SHORTINIT', true );
define( 'ENABLE_SHORT_REST', true );
