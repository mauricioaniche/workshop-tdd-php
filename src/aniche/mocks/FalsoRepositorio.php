<?php

namespace Aniche\TDD\Mocks;

require "./vendor/autoload.php";

use ArrayObject;
use DateTime;
use Aniche\TDD\Mocks\Fatura;
use Aniche\TDD\Mocks\RepositorioDeFaturas;


class FalsoRepositorio implements RepositorioDeFaturas {

	public function todas() {
		$f1 = new Fatura(new DateTime(), 'MICROSOFT', 1000);
		$f2 = new Fatura(new DateTime(), 'APPLE', 5000);

		$lista = new ArrayObject();
		$lista->append($f1);
		$lista->append($f2);

		return $lista;
	}

}

?>