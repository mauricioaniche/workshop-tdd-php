<?php

namespace Aniche\TDD\Design\Exercicio2;

require "./vendor/autoload.php";

use PHPUnit_Framework_TestCase as PHPUnit;
use Mockery;

class GeradorDeNotaFiscalTests extends PHPUnit {

	private $email;
	private $dao;
	private $gerador;

	protected function setUp() {
		$this->email = Mockery::mock("Aniche\TDD\Design\Exercicio2\EnviadorDeEmail");
		$this->dao = Mockery::mock("Aniche\TDD\Design\Exercicio2\NotaFiscalDao");

		$this->gerador = new GeradorDeNotaFiscal($this->email, $this->dao);
	}

	protected function tearDown() {
    	Mockery::close();
    	parent::tearDown();
	}
	
	public function testDeveGerarNotaEDispararAcoes() {
		$fatura = new Fatura(1000, "cliente 1");
		
		$this->email->shouldReceive('enviaEmail')->with(Mockery::any())->once();
		$this->dao->shouldReceive('persiste')->with(Mockery::any())->once();

		$nf = $this->gerador->gera($fatura);
		
		$this->assertEquals(1000 * 0.06, $nf->getImpostos());
	}
	
}

?>