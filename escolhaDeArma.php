<?php

require_once 'autoload.php';

use Apex\Modelo\Utilitarios\Armas;

$arma1 = new Armas('Carabina', 'Rifle', 'Verde com amarelo');
print_r($arma1);
echo 'Tamanho do pente da arma: ';
echo $arma1->recuperaTamanhoDoPente() . PHP_EOL;
echo PHP_EOL;

$arma1->alterarTamanhoPente(4);
echo 'Tamanho do pente da arma: ';
echo $arma1->recuperaTamanhoDoPente() . PHP_EOL;


$arma2 = new Armas('Kraber', 'Sniper', "Azul");
print_r($arma2);
echo 'Tamanho do pente da arma: ';
echo $arma2->recuperaTamanhoDoPente() . PHP_EOL;
echo $arma2->recuperaNivelDoPente() . PHP_EOL;

$arma2->alterarTamanhoPente(1);
echo 'Novo tamanho do pente da arma: ';
echo $arma2->recuperaTamanhoDoPente() . PHP_EOL;
echo $arma2->recuperaNivelDoPente() . PHP_EOL;

echo $arma2->encontreiMunicao(40);
echo 'Munição atual: ';
echo $arma2->recuperaMunicao() . PHP_EOL;




