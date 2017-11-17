<?php

require('../vendor/autoload.php');

/**
 * @return App
 */
function app() {
	return App::get();
}

App::boot(realpath(__DIR__ . '/../'), 'app/config.php')
	->http(Tempest\Http\Request::capture(), 'app/kernels/http.php')
	->send();