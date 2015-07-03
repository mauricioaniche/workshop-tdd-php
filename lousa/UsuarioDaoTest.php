<?php
namespace Aniche\TDD\Dao;

require "./vendor/autoload.php";

use Aniche\TDD\Dao\UsuarioDao;
use PHPUnit_Framework_TestCase as PHPUnit;

class UsuarioDaoTest extends PHPUnit {

	public function testBusca() {

		$dao = new UsuarioDao("localhost", "root", "", "tddphp");

		$usuario = new Usuario("Mauricio", "mau@mau.com", 20);
		$dao->salvar($usuario);

		$encontrei = $dao->porNomeEEmail("Mauricio", "mau@mau.com");

		$this->assertEquals("Mauricio", $encontrei->getNome());
		$this->assertEquals("mau@mau.com", $encontrei->getEmail());
	}	

	public function testBusca2() {

		$dao = new UsuarioDao("localhost", "root", "", "tddphp");

		$usuario = new Usuario("Mauricio", "mau@mau.com", 20);
		$dao->salvar($usuario);

		$encontrei = $dao->porIdade(10, 20);

		$this->assertEquals("Mauricio", $encontrei->getNome());
		$this->assertEquals("mau@mau.com", $encontrei->getEmail());
	}	
}

?>