<?php

namespace JMichaelWard\ShortRest;

use JMichaelWard\ShortRest\ApiService\ConfigurationContract;

/**
 * Main class for initializing request handlers for short REST.
 */
class ShortRest {
	/**
	 * Configuration for the custom API.
	 */
	private ConfigurationContract $api_config;

	/**
	 * @param ConfigurationContract $api_config
	 */
	public function __construct( ConfigurationContract $api_config ) {
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

		$this->api_config->respond();
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
