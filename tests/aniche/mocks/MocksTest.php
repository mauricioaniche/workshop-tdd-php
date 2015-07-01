<?php
namespace Aniche\TDD\Mocks;

require "./vendor/autoload.php";

use DateTime;
use ArrayObject;
use Mockery;
use PHPUnit_Framework_TestCase as PHPUnit;

class MocksTest extends PHPUnit {

	public function testMock() {

		$f1 = new Fatura(new DateTime(), 'MICROSOFT', 1000);
		$f2 = new Fatura(new DateTime(), 'APPLE', 5000);

		$lista = new ArrayObject();
		$lista->append($f1);
		$lista->append($f2);

		$repo = Mockery::mock("Aniche\TDD\Mocks\RepositorioDeFaturas");
		$repo->shouldReceive("todas")->andReturn($lista);

		$filtro = new FiltroDeFaturas($repo);

		$resultado = $filtro->filtra();

		$this->assertEquals(1000, $resultado[0]->getValor());

	}	
}

?>