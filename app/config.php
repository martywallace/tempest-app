<?php

use Tempest\Environment;

return function(Environment $env) {
	return [
		'dev' => $env->bool('DEV'),

		'templates' => 'app/templates',
		'storage' => 'app/storage'
	];
};