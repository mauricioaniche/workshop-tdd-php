<?php

namespace Aniche\TDD\Design\Exercicio2;

require "./vendor/autoload.php";

class GeradorDeNotaFiscal {

	private $email;
	private $dao;

	public function __construct($email, $dao) {
		$this->email = $email;
		$this->dao = $dao;
	}
	
	public function gera($fatura) {
		
		$valor = $fatura->getValorMensal();
		
		$nf = new NotaFiscal(valor, $this->impostoSimplesSobreO($valor));
		
		$this->email->enviaEmail($nf);
		$this->dao->persiste($nf);

		return $nf;
	}

	private function impostoSimplesSobreO($valor) {
		return $valor * 0.06;
	}
}

?>