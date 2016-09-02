<?php
require_once('Library/BaseShapes.php');

class RightTriangle extends BaseShapes {

	protected $dimensions = [];
	protected $areaFormula = "( a * b ) / 2";
	protected $calculatePerimeter = "sqrt( a * a +  b * b ) + a + b";

	public function __construct ($leg1, $leg2) {
		$this->dimensions = ['a' => $leg1, 'b' => $leg2];
	}

	public function calculateArea() {
		return $this->runEquation($this->areaFormula, $this->dimensions);
	}

	public function calculatePerimeter() {
		return $this->runEquation($this->calculatePerimeter, $this->dimensions);
	}

	public function resize($scale) {
		foreach($this->dimensions as $key => $dimension) {
				$newValue[$key] = $dimension * $scale;
		}
		return $newValue;
	}
}