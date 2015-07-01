<?php

namespace Aniche\TDD\Lista;

require "./vendor/autoload.php";

use DateTime;
use ArrayObject;
use Aniche\TDD\Lista\Negocio;
use Aniche\TDD\Lista\Resumo;

class GeradorDeResumo {

	public function gera($negocios) {

		$resumos = new ArrayObject();
		$mesmaData = new ArrayObject();
		$referencia = $negocios[0];

		foreach ($negocios as $negocio) {
			if (!$negocio->mesmaDataDo($referencia)) {
				$resumos->append($this->geraResumo($mesmaData));
				$mesmaData = new ArrayObject();
				$referencia = $negocio;
			}

			$mesmaData->append($negocio);
		}
		
		$resumos->append($this->geraResumo($mesmaData));

		return $resumos;
	}

	private function geraResumo($mesmaData) {
		$menor = 9999999.0;
		$maior = -9999999.0;
		
		foreach($mesmaData as $negocio) {
			if($negocio->getValor() > $maior) $maior = $negocio->getValor();
			if($negocio->getValor() < $menor) $menor = $negocio->getValor();
		}
		
		return new Resumo($mesmaData[0]->getData(), $maior, $menor);
	}
}

?>
