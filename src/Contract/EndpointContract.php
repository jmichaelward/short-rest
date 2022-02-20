<?php

namespace JMichaelWard\ShortRest\Contract;

use JMichaelWard\ShortRest\Api\Response;

interface EndpointContract {
	/**
	 * Determine whether a request is authenticated.
	 *
	 * @return bool
	 */
	public function authenticate(): bool;

	/**
	 * Send a successful response.
	 *
	 * @return Response
	 */
	public function success(): Response;

	/**
	 * Send an error response.
	 *
	 * @return Response
	 */
	public function error(): Response;
}
