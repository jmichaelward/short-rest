<?php

namespace JMichaelWard\ShortRest;

/**
 * Main class for initializing request handlers for short REST.
 */
class ShortRest {
	/**
	 * Configuration for the custom API.
	 */
	private ApiConfigurationContract $api_config;

	/**
	 * @param ApiConfigurationContract $api_config
	 */
	public function __construct( ApiConfigurationContract $api_config ) {
		$this->api_config = $api_config;
	}

	/**
	 * Initialize the Short REST process.
	 *
	 * @return void
	 */
	public function init(): void {
		if ( ! ( defined( 'ABSPATH' ) && defined( 'ENABLE_SHORT_REST' ) ) ) {
			return;
		}

		$this->respond();
	}

	/**
	 * Send the JSON response to the request.
	 *
	 * @return void
	 */
	private function respond(): void {
		wp_send_json( [ 'time' => time() ] );
	}
}
