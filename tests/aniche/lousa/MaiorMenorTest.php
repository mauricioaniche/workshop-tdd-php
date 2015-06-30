<?php
namespace Aniche\TDD\Lousa;

require "./vendor/autoload.php";

use Aniche\TDD\Lousa\MaiorMenor;
use PHPUnit_Framework_TestCase as PHPUnit;

class MaiorMenorTest extends PHPUnit {

	public function testOrdemCrescente() {
		$mm = new MaiorMenor();

		$mm->encontra(array(1, 2, 3, 4));

		$this->assertEquals(1, $mm->getMenor());
		$this->assertEquals(4, $mm->getMaior());
	}	
}

?>