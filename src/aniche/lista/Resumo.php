<?php

namespace Aniche\TDD\Lista;

require "./vendor/autoload.php";

class Resumo {

	private $data;
	private $maior;
	private $menor;

	public function __construct($data, $maior, $menor) {
		$this->data = $data;
		$this->maior = $maior;
		$this->menor = $menor;
	}
	public function getData() {
		return $this->data;
	}
	public function getMaior() {
		return $this->maior;
	}
	public function getMenor() {
		return $this->menor;
	}

	
	
}

?>
