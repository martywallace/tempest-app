<?php

use Tempest\App as BaseApp;

class App extends BaseApp {

	protected function setup() {
		date_default_timezone_set('Australia/Sydney');
	}

	protected function services() {
		return [
			// Your application services here.
			// ...
		];
	}

}