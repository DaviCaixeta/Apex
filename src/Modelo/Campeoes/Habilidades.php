<?php

namespace Apex\Modelo\Campeoes;

class Habilidades
{
    private string $passiva;
    private string $tatica;
    private string $ultimate;

    public function __construct(string $passiva, string $tatica, string $ultimate)
    {
        $this->passiva = $passiva;
        $this->tatica = $tatica;
        $this->ultimate = $ultimate;
    }

    public function recuperaPassiva(): string
    {
        return $this->passiva;
    }

    public function recuperaTatica(): string
    {
        return $this->tatica;
    }

    public function recuperaUltimate(): string
    {
        return $this->ultimate;
    }
}