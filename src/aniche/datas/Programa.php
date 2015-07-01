<?php
namespace Aniche\TDD\Datas;

require "./vendor/autoload.php";

use ArrayObject;

$it1 = new Item("Geladeira", 1, 1000);


$itens = new ArrayObject();
$itens->append($it1);

$compra = new Compra($itens);

$g = new GeradorDeOrcamento();
$valor = $g->calculaDesconto($compra);

echo $valor;


?>