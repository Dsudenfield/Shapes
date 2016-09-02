<?php
require_once('Library/BaseShapes.php');

class Circle extends BaseShapes {

	protected $dimensions = [];
	protected $areaFormula = "3.14 * r";
	protected $calculatePerimeter = "2 * r * 3.14";

	public function __construct ($radius) {
		$this->dimensions = ['r' => $radius];
	}

	public function calculateArea() {
		return $this->runEquation($this->areaFormula, $this->dimensions);
	}

	public function calculatePerimeter() {
		return $this->runEquation($this->calculatePerimeter, $this->dimensions);
	}

	public function resize($scale) {
		return $this->dimensions['r'] * $scale;
	}
}