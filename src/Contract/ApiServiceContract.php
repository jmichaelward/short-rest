<?php

namespace JMichaelWard\ShortRest\Contract;

interface ApiServiceContract {
	/**
	 * Returns an endpoint object.
	 *
	 * @return EndpointContract
	 */
	public function get_endpoint(): EndpointContract;
}
