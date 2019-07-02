<?php

use PHPUnit\Framework\TestCase;

class CalculadoraTest extends TestCase{

	public function testSoma()
	{
		$calc = new Calculadora();
		$this->assertEquals(
			2,
			$calc->soma(1, 1)
		);
	}

	public function testSoma2()
	{
		$calc = new Calculadora();
		$this->assertEquals(
			-42,
			$calc->soma(-51, 9)
		);
	}

	public function testSoma3()
	{
		$calc = new Calculadora();
		$this->assertEquals(
			59,
			$calc->soma(50, 9)
		);
	}

}