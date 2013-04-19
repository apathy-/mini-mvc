<?php

$g=$_GET;
$controller = @$g['c']?$g['c']:'Dashboard';

include 'controllers/App.php';

if(!is_file("controllers/{$controller}.php")) {
	$controller = '_404';
}

if(!@include"controllers/{$controller}.php") {
	die('fail');	
}

$m = method_exists($controller,$m=@$g['m'])?$m:'index';

$o = new $controller();
$o->$m($g);

