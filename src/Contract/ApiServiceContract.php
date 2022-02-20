<?php

namespace JMichaelWard\ShortRest\Contract;

interface ApiServiceContract {
	/**
	 * Returns an endpoint object.
	 *
	 * @return Endpoint
	 */
	public function get_endpoint(): Endpoint;
}
