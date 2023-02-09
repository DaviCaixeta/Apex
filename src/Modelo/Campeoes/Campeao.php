<?php

namespace Apex\Modelo\Campeoes;

use Apex\Modelo\InformacoesGerais;

class Campeao extends InformacoesGerais
{
    private Habilidades $poder;

    public function __construct(string $nome, Habilidades $poder, string $skin)
    {
        parent::__construct($nome, $skin);
        $this->poder = $poder;
    }

    public function recuperaPoder(): Habilidades
    {
        return $this->poder;
    }
}