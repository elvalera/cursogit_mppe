<?php

// This is the database connection configuration.
return array(
	//'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/dbacreencias.db',
	// uncomment the following lines to use a MySQL database
	
	'connectionString' => 'pgsql:host=localhost;dbname=;port=6000',
	'emulatePrepare' => true,
	'username' => '',
	'password' => '',
	'charset' => 'utf8',
	
)
