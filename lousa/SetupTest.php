<?php
namespace Aniche\TDD\Lousa;

require "./vendor/autoload.php";

use Aniche\TDD\Lousa\MaiorMenor;
use PHPUnit_Framework_TestCase as PHPUnit;

class SetupTest extends PHPUnit {

	private $mm;

	protected function setUp() {
		$this->mm = new MaiorMenor();
		parent::setUp();
	}
	
	public function testOrdemCrescente() {

		$this->mm->encontra(array(1, 2, 3, 4));

		$this->assertEquals(1, $this->mm->getMenor());
		$this->assertEquals(4, $this->mm->getMaior());
	}	
}

?>