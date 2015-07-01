<?php

namespace Aniche\TDD\Desconto;

require "./vendor/autoload.php";

use Aniche\TDD\Desconto\Compra;
use Aniche\TDD\Desconto\Item;

class AplicadorDeDescontos {

	public function aplica($compra) {
		$retorno = descontoPorProduto($compra);
		if(!retorno) descontoPorValor($compra);
	}

	private function descontoPorProduto($compra) {
		if($compra->tem("MACBOOK") && $compra->tem("IPHONE")) {
			$compra->reduzValor($compra->getValorLiquido() * 0.15);
			return true;
		}

		if($compra->tem("NOTEBOOK") && $compra->tem("WINDOWS PHONE")) {
			$compra->reduzValor($compra->getValorLiquido() * 0.12);
			return true;
		}
		
		if($compra->tem("XBOX")) {
			$compra->reduzValor($compra->getValorLiquido() * 0.7);
			return true;
		}
		
		return false;
	}

	private function descontoPorValor($compra) {
		
		if($compra->getValorLiquido()<=1000 && $compra->qtdItens() <= 2) {
			$compra->reduzValor($compra->getValorLiquido() * 0.02);
		}
		
		else if($compra->getValorLiquido() > 3000 && $compra->qtdItens() < 5 && $compra->qtdItens() > 2) {
			$compra->reduzValor($compra->getValorLiquido() * 0.05);
		}

		else if($compra->getValorLiquido() > 3000 && $compra->qtdItens() >= 5) {
			$compra->reduzValor($compra->getValorLiquido() * 0.06);
		}
	}
}

?>