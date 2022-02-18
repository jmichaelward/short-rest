<?php

namespace JMichaelWard\ShortRest;

/**
 * Main class for initializing request handlers for short REST.
 */
class ShortRest {
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
