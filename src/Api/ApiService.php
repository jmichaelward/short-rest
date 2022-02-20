<?php

namespace JMichaelWard\ShortRest\Api;

use JMichaelWard\ShortRest\Contract;

/**
 * Abstract service class for a custom REST API.
 */
abstract class ApiService implements Contract\ApiServiceContract {
	/**
	 * Array of endpoints.
	 *
	 * @var Contract\EndpointContract[]
	 */
	protected array $endpoints;
}
