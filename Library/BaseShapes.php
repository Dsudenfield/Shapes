<?php
//namespace Library;
ini_set('error_log', '/tmp/php/log');
abstract class BaseShapes {

	protected $operators = ['*','/','+', '-'];

	abstract protected function calculateArea();

	abstract protected function calculatePerimeter($formula, $dimensions);

	abstract protected function resize($dimestions, $scale);

	public function runEquation($formula, $dimensions) {
		foreach($this->formula as $val) {
			$equation[] = (isset($this->dimensions[$val])) ? $this->dimensions[$val] : $val;
		}
		eval('$result = ' . implode($equation, ' ') . ';');
		return $result;
	}
}