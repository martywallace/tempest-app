<?php

use Tempest\Kernel\Input;

require(realpath(__DIR__ . '/../vendor/autoload.php'));

/**
 * Global convenience method for {@link App::get()}.
 *
 * @return App
 */
function app() {
	return App::get();
}

/**
 * Boot the application.
 *
 * @param string $kernel The kernel to use.
 * @param Input $input The input to provide to the kernel.
 * @param string $config The kernel configuration.
 */
return function($kernel, Input $input, $config) {
	App::boot(realpath(__DIR__ . '/../'), 'app/config/app.php')
		->handle($kernel, $input, $config)
		->send();
};