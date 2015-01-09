<?php // .pomm_cli_bootstrap.php

use \PommProject\Foundation\Pomm;

$loader = require __DIR__.'/vendor/autoload.php';
$loader->add(null, __DIR__);

return new Pomm(['my_db' =>
	                 [
		                 'dsn' => 'pgsql://pronoia@localhost/pomm_test_simple',
		                 'class:session_builder' => '\PommProject\ModelManager\SessionBuilder',
	                 ]
                ]);


