<?php

namespace Aniche\TDD\Mocks;

require "./vendor/autoload.php";

use ArrayObject;
use DateTime;
use Aniche\TDD\Mocks\FalsoRepositorio;

date_default_timezone_set("America/Sao_Paulo");

$filtro = new FiltroDeFaturas(new FalsoRepositorio());

$resultado = $filtro->filtra();

echo $resultado[0]->getValor();

?>