<?php

use Tempest\Http\Http;
use Tempest\Http\Request;

$boot = require('../app/boot.php');

$boot(Http::class, Request::capture(), 'app/config/http.php');