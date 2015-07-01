<?php

namespace Aniche\TDD\Dao;


class Usuario {
	
	private $id;
	private $nome;
	private $email;
	private $idade;

	public function __construct($nome, $email, $idade) {
		$this->id = 0;
		$this->nome = $nome;
		$this->email = $email;
		$this->idade = $idade;
	}

	public function getIdade() {
		return $this->idade;
	}

	public function getNome() {
		return $this->nome;
	}

	public function getEmail() {
		return $this->email;
	}

	public function setId($id) {
		$this->id = $id;
	}

	public function getId() {
		return $this->id;
	}
	
}

?>