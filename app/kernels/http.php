<?php

use Tempest\Http\Http;

return function(Http $http) {
	return [
		$http->get('/')->template('index.html')
	];
};