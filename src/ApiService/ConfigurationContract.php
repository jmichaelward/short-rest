<?php

namespace JMichaelWard\ShortRest\ApiService;

interface ConfigurationContract {
	/**
	 * Determine whether a request is authenticated.
	 *
	 * @return bool
	 */
	public function authenticate(): bool;

	/**
	 * Respond to a request.
	 *
	 * @return mixed
	 */
	public function respond();
}
