<?php
	//use Libraray\Rectangle;
	require_once('Library/Circle.php');

	$orbject = new Circle(5);
	//$val = $orbject->calculateArea();
	$val = $orbject->calculatePerimeter();
	$val = $orbject->resize(1.234);
	
	print_r($val);
?>