<?php

namespace Aniche\TDD\Design\Exercicio3;

require "./vendor/autoload.php";

class ProcessadorDeBoletos {

	public function processa($boletos, $fatura) {
		foreach($boletos as $boleto) {
			$pagamento = new Pagamento($boleto->getValor(), MeioDePagamento::BOLETO);
			$fatura->getPagamentos()->append($pagamento);
		}
	}
}

?>