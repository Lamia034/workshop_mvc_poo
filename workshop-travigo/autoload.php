<?php 

session_start();
require_once  "./bootstrap.php";

define('BASE_URL','http://localhost/workshop-travigo/');

spl_autoload_register('autoload');

function autoload($class_name){
	$array_paths = array(
		'database/',
        'app/classes/',
        'model/',
        'controller/'
	);

	$parts = explode('\\',$class_name);
	$name = array_pop($parts);

	foreach($array_paths as $path){
		$file = sprintf($path.'%s.php',$name);
		if(is_file($file)){
			include_once $file;
		}
	}

}