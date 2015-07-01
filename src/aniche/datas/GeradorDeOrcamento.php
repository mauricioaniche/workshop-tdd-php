<?php

namespace Aniche\TDD\Datas;

require "./vendor/autoload.php";

use DateTime;
use Aniche\TDD\Datas\Item;
use Aniche\TDD\Datas\Compra;

date_default_timezone_set("America/Sao_Paulo");

class GeradorDeOrcamento {

	public function calculaDesconto($compra) {
		
		if($this->janeiro()) return $compra->getValorLiquido() * 0.05;
		if($this->natal()) return $compra->getValorLiquido() * 0.15;

		return 0;
	}

	private function natal() {
		$hoje = new DateTime();
		return $hoje->format('m') == '12' && 
				$hoje->format('d') == '25';
	}
	
	private function janeiro() {
		$hoje = new DateTime();
		return $hoje->format('m') == '01';
	}
}

?>