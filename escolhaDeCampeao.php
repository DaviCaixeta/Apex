<?php

require_once 'autoload.php';

use Apex\Modelo\Campeoes\{Campeao, Habilidades};

$poder1 = new Habilidades('Aviso de Visão', 'Entrada no Vazio', 'Portal');
$campeao1 = new Campeao('Wraith', $poder1, 'Vermelha com Azul');

$poder2 = new Habilidades('Visão por Batimentos', 'Revelação de Inimigos', 'Área à Mostra');
$campeao2 = new Campeao('Seer', $poder2, 'Verde água');

print_r($campeao1);
print_r($campeao2);

