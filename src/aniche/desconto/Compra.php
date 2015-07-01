<?php

namespace Aniche\TDD\Desconto;

require "./vendor/autoload.php";

use Aniche\TDD\Desconto\Item;

class Compra {

	private $valorLiquido;
	private $itens;

	public function __construct($itenss) {
		$this->itens = $itenss;
		$this->valorLiquido = 0;
		$this->somaItens();
	}
	
	private function somaItens() {

		foreach($this->itens as $item) {
			$this->valorLiquido += $item->getPrecoTotal();
		}
		
	}
	
	public function reduzValor($reducao) {
		$this->valorLiquido -= $reducao;
	}

	public function getValorLiquido() {
		return $this->valorLiquido;
	}

	public function qtdItens() {
		$qtd = 0;
		foreach($this->itens as $item) {
			$qtd+= $item->getQuantidade();
		}
		return $qtd;
	}

	public function tem($produto) {
		foreach($this->itens as $item) {
			if($item->getNome() == $produto) return true;
		}
		
		return false;
	}
	
}


?>