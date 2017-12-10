<?php

use Tempest\Http\Http;

return function(Http $http) {
	return [
		$http->get('/')->render('index.html')
	];
};