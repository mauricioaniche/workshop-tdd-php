<?php
namespace Aniche\TDD\Desconto;

require "./vendor/autoload.php";
use ArrayObject;

$it1 = new Item("Geladeira", 1, 500.0);
$it2 = new Item("IPhone", 2, 1500.0);

echo $it1->getNome();

$itens = new ArrayObject();
$itens->append($it1);
$itens->append($it2);

$compra = new Compra($itens);
echo $compra->getValorLiquido();

$compra->reduzValor(1000);
echo $compra->getValorLiquido();
echo $compra->tem("Geladeira");
echo $compra->qtdItens();
?>