<?php

use Tempest\Environment;

return function(Environment $env) {
	return [
		'dev' => $env->bool('DEV'),
		'timezone' => 'Australia/Sydney',
		'templates' => 'app/templates',
		'storage' => 'app/storage'
	];
};