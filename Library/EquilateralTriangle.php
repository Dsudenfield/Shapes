<?php
require_once('Library/BaseShapes.php');

class EquilateralTriangle extends BaseShapes {

	protected $dimensions = [];
	protected $areaFormula = "0.433 * ( a * a )";
	protected $calculatePerimeter = "3 * a";

	public function __construct ($leg1) {
		$this->dimensions = ['a' => $leg1];
	}

	public function calculateArea() {
		return $this->runEquation($this->areaFormula, $this->dimensions);
	}

	public function calculatePerimeter() {
		return $this->runEquation($this->calculatePerimeter, $this->dimensions);
	}

	public function resize($scale) {
		return $this->dimensions['a'] * $scale;
	}
}