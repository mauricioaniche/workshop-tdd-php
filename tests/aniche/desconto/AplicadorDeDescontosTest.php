<?php
namespace Aniche\TDD\Desconto;

require "./vendor/autoload.php";

use PHPUnit_Framework_TestCase as PHPUnit;

class AplicadorDeDescontosTest extends PHPUnit {

	public function testMacbookEIphone() {
		$desconto = new AplicadorDeDescontos();

		$it1 = new Item("MACBOOK", 1, 1000.0);
		$it2 = new Item("IPHONE", 1, 1000.0);

		$itens = array($it1, $it2);
		$compra = new Compra($itens);
		$desconto->aplica($compra);

		$this->assertEquals(2000 * 0.85, $compra->getValorLiquido());
	}	
}

?>