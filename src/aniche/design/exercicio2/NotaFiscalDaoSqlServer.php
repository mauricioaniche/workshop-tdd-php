<?php

namespace Aniche\TDD\Design\Exercicio2;

require "./vendor/autoload.php";

class NotaFiscalDaoSqlServer implements NotaFiscalDao {

	public function persiste($nf) {
		echo("salva nf no banco");
	}

}

?>