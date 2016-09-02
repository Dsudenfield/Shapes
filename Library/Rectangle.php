<?php
//namespace Library;
require_once('Library/BaseShapes.php');
ini_set('error_log', '/tmp/php/log');

class Rectangle extends BaseShapes {

	protected $formula = [];
	protected $dimensions = [];

	public function __construct ($length, $width) {
		$this->dimensions = ['L' => $length, 'W' => $width];
	}

	public function calculateArea() {
		$formula = ['L', '*', 'W'];
		return $this->runEquation($formula, $this->dimensions);
	}

	public function calculatePerimeter($fomula, $dimestions) {
		//2(l+w)
		$formula = ['(', 'L', '+', 'W', ')', '*', '2'];
		return $this->runEquation($formula, $this->dimensions);
	}

	public function resize($formula, $dimestions) {

	}
}