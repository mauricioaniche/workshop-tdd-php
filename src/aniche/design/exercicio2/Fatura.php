<?php

namespace Aniche\TDD\Design\Exercicio2;

require "./vendor/autoload.php";

class Fatura {

	private $valorMensal;
	private $cliente;
	
	public function __construct($valorMensal, $cliente) {
		$this->valorMensal = $valorMensal;
		$this->cliente = $cliente;
	}
	public function getValorMensal() {
		return $this->valorMensal;
	}
	public function setValorMensal($valorMensal) {
		$this->valorMensal = $valorMensal;
	}
	public function getCliente() {
		return $this->cliente;
	}
	public function setCliente($cliente) {
		$this->cliente = $cliente;
	}
	
	
}

?>