<?php

$g=$_GET;
$controller = @$g['c']?$g['c']:'Home';

if(!@include"controllers/{$controller}.php") {
	die('fail');	
}

$m = method_exists($controller,$m=@$g['m'])?$m:'index';

$o = new $controller();
$o->$m($g);

?>
