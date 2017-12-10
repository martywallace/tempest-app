<?php

use Tempest\Terminal\Terminal;
use Tempest\Terminal\Commands\CreateUserCommand;

return function(Terminal $terminal) {
	return [
		new CreateUserCommand()
	];
};