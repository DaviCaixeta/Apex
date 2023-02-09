<?php

require_once 'autoload.php';

use Apex\Modelo\Utilitarios\Item;

$item1 = new Item('Kit Médico', 2);
print_r($item1);

$item1->encontreiItemIgual();
echo 'Nova Quantidade do Item: ';
echo $item1->recuperaQuantidade() . PHP_EOL;

$item1->useiItem();
echo 'Nova Quantidade do Item: ';
echo $item1->recuperaQuantidade() . PHP_EOL;

$item2 = new Item('Bateria de Escudo', 1);
print_r($item2);
echo $item2->recuperaNomeItem() . PHP_EOL;
$item2->useiItem();
echo 'Nova Quantidade do Item: ';
echo $item2->recuperaQuantidade() . PHP_EOL;

