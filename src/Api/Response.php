<?php

namespace JMichaelWard\ShortRest\Api;

use JMichaelWard\ShortRest\Contract\ResponseContract;

class Response implements ResponseContract {
	public function send(): void {
		wp_send_json( [] );
	}
}
