<?php

namespace JMichaelWard\ShortRest\Contract;

interface ResponseContract {
	/**
	 * Send the response.
	 *
	 * @return void
	 */
	public function send(): void;
}
