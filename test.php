<?php
	require_once('Library/Circle.php');

	$orbject = new Circle(5);
	
	$val = $orbject->calculatePerimeter();
	$val = $orbject->resize(1.234);
	
	print_r($val . PHP_EOL);
?>