<?php

namespace Apex\Modelo;

abstract class InformacoesGerais
{
    protected string $nome;
    protected string $skin;

    public function __construct(string $nome, string $skin)
    {
        $this->nome = $nome;
        $this->skin = $skin;
    }

    public function recuperaNome(): string
    {
        return $this->nome;
    }

    public function recuperaSkin(): string
    {
        return $this->skin;
    }
}