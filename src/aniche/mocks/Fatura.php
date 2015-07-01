<?php

namespace Aniche\TDD\Mocks;

require "./vendor/autoload.php";

class Fatura {

	private $data;
	private $cliente;
	private $valor;

	public function __construct($data, $cliente, $valor) {
		$this->data = $data;
		$this->cliente = $cliente;
		$this->valor = $valor;
	}
	public function getData() {
		return $this->data;
	}
	public function getCliente() {
		return $this->cliente;
	}
	public function getValor() {
		return $this->valor;
	}
	
	
}

?>