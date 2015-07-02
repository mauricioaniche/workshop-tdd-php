<?php

namespace Aniche\TDD\Design\Exercicio3;

require "./vendor/autoload.php";

class Boleto {

	private $valor;

	public function __construct($valor) {
		$this->valor = $valor;
	}

	public function getValor() {
		return $this->valor;
	}
	
	
}
?>