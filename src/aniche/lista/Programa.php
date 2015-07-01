<?php

namespace Aniche\TDD\Lista;

require "./vendor/autoload.php";

use ArrayObject;
use DateTime;
use Aniche\TDD\Lista\Negocio;
use Aniche\TDD\Lista\Resumo;
use Aniche\TDD\Lista\GeradorDeResumo;


date_default_timezone_set("America/Sao_Paulo");

$r = new Resumo(new DateTime("2015-10-05"), 10, 20);

$n1 = new Negocio(new DateTime("2015-10-05"), 1000);
$n2 = new Negocio(new DateTime("2015-10-05"), 2000);
$n3 = new Negocio(new DateTime("2015-10-06"), 5000);

if($n1->mesmaDataDo($n2)) {
	echo "sim\n";
} else {
	echo "nao\n";
}


$g = new GeradorDeResumo();

$negocios = new ArrayObject();
$negocios->append($n1);
$negocios->append($n2);
$negocios->append($n3);

$ret = $g->gera($negocios);

echo $ret[0]->getMaior();
echo "\n";
echo $ret[1]->getMaior();
?>