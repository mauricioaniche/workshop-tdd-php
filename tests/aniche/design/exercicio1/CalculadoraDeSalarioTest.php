<?php
namespace Aniche\TDD\Design\Exercicio1;

require "./vendor/autoload.php";

use PHPUnit_Framework_TestCase as PHPUnit;

class CalculadoraDeSalarioTest extends PHPUnit {

	private $calculadora;

	protected function setUp() {
		$this->calculadora = new CalculadoraDeSalario();
	}
	
	public function testDeveRetornar4000MenosImpostosDe20PorCentoSeDesenvolvedorGanhaMaisDe3000(){
		$desenvolvedor = $this->umFuncionario(Cargo::DESENVOLVEDOR, $this->comSalarioBase(4000.0));
		
		$salario = $this->calculadora->calcula($desenvolvedor);

		$this->assertEquals(4000.0 * 0.8, $salario);
	}

	public function testDeveRetornar1000MenosImpostosDe10PorCentoSeDesenvolvedorGanhaMenosDe3000(){
		$desenvolvedor = $this->umFuncionario(Cargo::DESENVOLVEDOR, $this->comSalarioBase(1000.0));
		
		$salario = $this->calculadora->calcula($desenvolvedor);
		
		$this->assertEquals(1000.0 * 0.9, $salario);
	}


	public function testDeveRetornar4000MenosImpostosDe25PorCentoSeDBAGanhaMaisDe2000(){
		$dba = $this->umFuncionario(Cargo::DBA, $this->comSalarioBase(4000.0));
		
		$salario = $this->calculadora->calcula($dba);
		
		$this->assertEquals(4000.0 * 0.75, $salario);
	}

	public function testDeveRetornar1000MenosImpostosDe15PorCentoSeDBAGanhaMenosDe2000(){
		$dba = $this->umFuncionario(Cargo::DBA, $this->comSalarioBase(1000.0));
		
		$salario = $this->calculadora->calcula($dba);
		
		$this->assertEquals(1000.0 * 0.85, $salario);
	}

	public function testDeveRetornar4000MenosImpostosDe25PorCentoSeTestadorGanhaMaisDe2000(){
		$testador = $this->umFuncionario(Cargo::TESTER, $this->comSalarioBase(4000.0));
		
		$salario = $this->calculadora->calcula($testador);
		
		$this->assertEquals(4000.0 * 0.75, $salario);
	}

	public function testDeveRetornar1000MenosImpostosDe15PorCentoSeTestadorGanhaMenosDe2000(){
		$testador = $this->umFuncionario(Cargo::TESTER, $this->comSalarioBase(1000.0));
		
		$salario = $this->calculadora->calcula($testador);
		
		$this->assertEquals(1000.0 * 0.85, $salario);
	}
	
		
	private function umFuncionario($cargo, $salario) {
		$funcionario = new Funcionario();
		$funcionario->setNome("Martin Fowler");
		$funcionario->setSalarioBase($salario);
		$funcionario->setCargo($cargo);
		return $funcionario;
	}
	

	private function comSalarioBase($salario) {
		return $salario;
	}
}

?>