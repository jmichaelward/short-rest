<?php

namespace JMichaelWard\ShortRest;

use JMichaelWard\ShortRest\Contract\ApiServiceContract;

/**
 * Main class for initializing request handlers for short REST.
 */
class ShortRest {
	/**
	 * Configuration for the custom API.
	 */
	private ApiServiceContract $api_config;

	/**
	 * @param ApiServiceContract $api_config
	 */
	public function __construct( ApiServiceContract $api_config ) {
		$this->api_config = $api_config;
	}

	/**
	 * Initialize the Short REST process.
	 *
	 * @return void
	 */
	public function init(): void {
		if ( ! $this->is_short_rest_request() ) {
			return;
		}

		$endpoint = $this->api_config->get_endpoint();

		if ( ! $endpoint->authenticate() ) {
			wp_send_json_error( [] );
		}

		$endpoint->respond();
	}

	/**
	 * Check whether the request is a SHORT REST request.
	 *
	 * @return bool
	 */
	protected function is_short_rest_request(): bool {
		return defined( 'ABSPATH' ) && defined( 'ENABLE_SHORT_REST' );
	}
}
