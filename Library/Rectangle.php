<?php
require_once('Library/BaseShapes.php');

class Rectangle extends BaseShapes {

	protected $dimensions = [];
	protected $areaFormula = "l * w";
	protected $perimeterFormula = "( l + w ) * 2";

	public function __construct ($length, $width) {
		$this->dimensions = ['l' => $length, 'w' => $width];
	}

	public function calculateArea() {
		return $this->runEquation($this->areaFormula, $this->dimensions);
	}

	public function calculatePerimeter() {
		return $this->runEquation($this->perimeterFormula, $this->dimensions);
	}

	public function resize($scale) {
		foreach($this->dimensions as $key => $dimension) {
			$newValue[$key] = $dimension * $scale;
		}
		return $newValue;
	}
}