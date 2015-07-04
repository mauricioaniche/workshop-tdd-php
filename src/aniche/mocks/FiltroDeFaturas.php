<?php

namespace Aniche\TDD\Mocks;

require "./vendor/autoload.php";

use ArrayObject;
use Aniche\TDD\Mocks\Fatura;

class FiltroDeFaturas {

	private $faturas;

	public function __construct($faturas) {
		$this->faturas = $faturas;
	}
	
	public function filtra() {
		
		$filtradas = new ArrayObject();
		
		foreach($this->faturas->todas() as $fatura) {
			if ($fatura->getValor() > 2000) $filtradas->append($fatura);
			else if ($fatura->getValor() < 2000 && $fatura->getCliente() == "MICROSOFT") $filtradas->append($fatura);
			else if (intval($fatura->getData()->format('Y')) < 1999) $filtradas->append($fatura);
		}
		
		return $filtradas;
	}
}

?>