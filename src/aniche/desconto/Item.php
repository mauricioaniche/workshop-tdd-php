<?php

namespace Aniche\TDD\Desconto;

require "./vendor/autoload.php";

class Item {

	private $nome;
	private $quantidade;
	private $precoUnitario;

	public function __construct($nome, $quantidade, $preco) {
		$this->nome = $nome;
		$this->quantidade = $quantidade;
		$this->precoUnitario = $preco;
	}
	public function getNome() {
		return $this->nome;
	}
	public function getQuantidade() {
		return $this->quantidade;
	}
	public function getPrecoUnitario() {
		return $this->precoUnitario;
	}

	public function getPrecoTotal() {
		return $this->precoUnitario * $this->quantidade;
	}
	
}


?>