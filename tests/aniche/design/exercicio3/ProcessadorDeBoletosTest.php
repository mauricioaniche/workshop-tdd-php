<?php

namespace Aniche\TDD\Design\Exercicio3;

require "./vendor/autoload.php";

use PHPUnit_Framework_TestCase as PHPUnit;
use ArrayObject;
use Aniche\TDD\Design\Exercicio3\Fatura;

class ProcessadorDeBoletosTest extends PHPUnit {

	public function testNaoDeveGerarPagamentosQuandoNaoHaBoletos() {
		$f = new Fatura("sun", 1000.0);

		$boletosPagos = new ArrayObject();

		$p = new ProcessadorDeBoletos();
		$p->processa($boletosPagos, $f);

		$this->assertEquals(0, $f->getPagamentos()->count());
	}


	public function testDeveGerarUmPagamentoDeBoletoParaAFatura() {
		$f = new Fatura("sun", 1000.0);
		$boletosPagos = new ArrayObject();
		$boletosPagos->append(new Boleto(200.0));
		$boletosPagos->append(new Boleto(500.0));
		
		$p = new ProcessadorDeBoletos();
		$p->processa($boletosPagos, $f);
		
		$this->assertEquals(2, $f->getPagamentos()->count());
		$this->assertEquals(200.0, $f->getPagamentos()[0]->getValor());
		$this->assertEquals(MeioDePagamento::BOLETO, $f->getPagamentos()[0]->getForma());

		$this->assertEquals(500.0, $f->getPagamentos()[1]->getValor());
		$this->assertEquals(MeioDePagamento::BOLETO, $f->getPagamentos()[1]->getForma());
	}
}

?>