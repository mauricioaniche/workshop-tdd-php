<?php

namespace Aniche\TDD\Design\Exercicio2;

require "./vendor/autoload.php";

class EnviadorDeEmailPorSmtp implements EnviadorDeEmail {

	public function enviaEmail($nf) {
		echo("envia email da nf " . $nf->getId());
	}

}

?>