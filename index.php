<?php

//Config files
require_once 'config/paths.php';
require_once 'config/database.php';

//lib autoload
function __autoload($class) {
	require_once "libs/$class.php";
}

$app = new Bootstrap();// calls the application

?>