<?php

namespace Aniche\TDD\Design\Exercicio1;

require "./vendor/autoload.php";

class Funcionario {

	private $id;
	private $nome;
	private $cargo;
	private $dataDeAdmissao;
	private $salarioBase;

	public function getId() {
		return $this->id;
	}
	public function getNome() {
		return $this->nome;
	}
	public function getCargo() {
		return $this->cargo;
	}
	public function getDataDeAdmissao() {
		return $this->dataDeAdmissao;
	}
	public function getSalarioBase() {
		return $this->salarioBase;
	}
	public function setId($id) {
		$this->id = $id;
	}
	public function setNome($nome) {
		$this->nome = $nome;
	}
	public function setCargo($cargo) {
		$this->cargo = $cargo;
	}
	public function setDataDeAdmissao($dataDeAdmissao) {
		$this->dataDeAdmissao = $dataDeAdmissao;
	}
	public function setSalarioBase($salarioBase) {
		$this->salarioBase = $salarioBase;
	}

}


?>