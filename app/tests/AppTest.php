<?php namespace Tests;

use App;
use PHPUnit\Framework\TestCase;

class AppTest extends TestCase {

	public function testBootApp() {
		$this->assertInstanceOf(App::class, App::boot(''));
	}

}