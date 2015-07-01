<?php

namespace Aniche\TDD\Lista;

require "./vendor/autoload.php";

use DateTime;

class Negocio {

	private $data;
	private $valor;

	public function __construct($data, $valor) {
		$this->data = $data;
		$this->valor = $valor;
	}
	public function getData() {
		return $this->data;
	}
	public function getValor() {
		return $this->valor;
	}
	public function mesmaDataDo($referencia) {
		return 
			$this->data->format('d') == $referencia->getData()->format('d') && 
			$this->data->format('m') == $referencia->getData()->format('m') && 
			$this->data->format('Y') == $referencia->getData()->format('Y');
	}
	
	
}

?>