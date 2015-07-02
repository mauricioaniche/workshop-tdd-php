<?php

namespace Aniche\TDD\Design\Exercicio1;

require "./vendor/autoload.php";

class CalculadoraDeSalario {


	public function calcula($funcionario) {

		if(Cargo::DESENVOLVEDOR == $funcionario->getCargo()) {
			return $this->dezOuVintePorcento($funcionario);
		}
		
		if(Cargo::DBA == $funcionario->getCargo() || Cargo::TESTER == $funcionario->getCargo()) {
			return $this->quinzeOuVinteCincoPorcento($funcionario);
		}
		
		// lancar uma excecao!
		return 0;
	}

	private function dezOuVintePorcento($funcionario) {
		if($funcionario->getSalarioBase() > 3000.0) {
			return $funcionario->getSalarioBase() * 0.8;
		}
		else {
			return $funcionario->getSalarioBase() * 0.9;
		}
	}

	private function quinzeOuVinteCincoPorcento($funcionario) {
		if($funcionario->getSalarioBase() > 2000.0) {
			return $funcionario->getSalarioBase() * 0.75;
		}
		else {
			return $funcionario->getSalarioBase() * 0.85;
		}
	}

}
?>