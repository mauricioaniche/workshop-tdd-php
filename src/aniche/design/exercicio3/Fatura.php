<?php

namespace Aniche\TDD\Design\Exercicio3;

require "./vendor/autoload.php";
use ArrayObject;

class Fatura {

	private $cliente;
	private $valor;
	private $pagamentos;
	private $pago;
	
	public function __construct($cliente, $valor) {
		$this->cliente = $cliente;
		$this->valor = $valor;
		$this->pagamentos = new ArrayObject();
		$this->pago = false;
	}

	public function getCliente() {
		return $this->cliente;
	}

	public function getValor() {
		return $this->valor;
	}

	public function getPagamentos() {
		return $this->pagamentos;
	}

	public function isPago() {
		return $this->pago;
	}

	public function setPago($pago) {
		$this->pago = $pago;
	}
	
	
}
?>