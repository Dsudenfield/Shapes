<?php
require_once('Library/BaseShapes.php');

class Parallelogram extends BaseShapes {

	protected $dimensions = [];
	protected $areaFormula = "b * h";
	protected $perimeterFormula = "( a * b ) * 2";

	public function __construct ($side, $base, $height) {
		$this->dimensions = ['b' => $base, 'a' => $side, 'h' => $height];
	}

	public function calculateArea() {
		$dimensions = $this->dimensions;
		unset($dimensions['s']);
		//error_log(print_r($dimensions,1));
		//die();
		return $this->runEquation($this->areaFormula, $dimensions);
	}

	public function calculatePerimeter() {
		$dimensions = $this->dimensions;
		unset($dimensions['h']);
		return $this->runEquation($this->perimeterFormula, $dimensions);
	}

	public function resize($scale) {
		foreach($this->dimensions as $key => $dimension) {
			if($key != 'h') {
				$newValue[$key] = $dimension * $scale;
			}
		}
		return $newValue;
	}
}