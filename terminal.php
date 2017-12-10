<?php

use Tempest\Terminal\Terminal;
use Tempest\Terminal\Arguments;

$boot = require('./app/boot.php');

$boot(Terminal::class, Arguments::capture(), 'app/config/terminal.php');