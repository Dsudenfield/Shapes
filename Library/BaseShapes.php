<?php
//namespace Library;
ini_set('error_log', '/tmp/php/log');
abstract class BaseShapes {

	abstract protected function calculateArea();

	abstract protected function calculatePerimeter();

	abstract protected function resize($scale);

	public function runEquation($formula, $dimensions) {
		$equation = $formula;
		foreach(explode(' ', $formula) as $val) {
			if(isset($dimensions[$val])) {
				$equation = str_replace($val, $dimensions[$val], $equation);
			}
		}
		eval('$result = ' . $equation . ';');
		return $result;
	}
}