<?php
require_once('Library/BaseShapes.php');

class Square extends BaseShapes {

	protected $dimensions = [];
	protected $areaFormula = "s * s";
	protected $perimeterFormula = "4 * s";

	public function __construct ($side) {
		$this->dimensions = ['s' => $side];
	}

	public function calculateArea() {
		return $this->runEquation($this->areaFormula, $this->dimensions);
	}

	public function calculatePerimeter() {
		return $this->runEquation($this->perimeterFormula, $this->dimensions);
	}

	public function resize($scale) {
		return $this->dimensions['s'] * $scale;
	}
}