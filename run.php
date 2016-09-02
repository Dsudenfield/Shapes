<?php
	//use Libraray\Rectangle;
	require_once('Library/Rectangle.php');

	$rectangle = new Rectangle(20, 20);
	$area = $rectangle->calculateArea();

	print_r($area);
?>