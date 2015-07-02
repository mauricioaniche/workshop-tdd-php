<?php

namespace Aniche\TDD\Design\Exercicio2;

require "./vendor/autoload.php";

class NotaFiscal {

	private $valorBruto;
	private $impostos;

	public function __construct($valorBruto, $impostos) {
		$this->valorBruto = $valorBruto;
		$this->impostos = $impostos;
	}
	
	public function getValorBruto() {
		return $this->valorBruto;
	}
	public function setValorBruto($valorBruto) {
		$this->valorBruto = $valorBruto;
	}
	public function getImpostos() {
		return $this->impostos;
	}
	public function setImpostos($impostos) {
		$this->impostos = $impostos;
	}
	
	public function getValorLiquido() {
		return $this->valorBruto - $this->impostos;
	}

}

?>