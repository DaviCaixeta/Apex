<?php

namespace Apex\Modelo\Utilitarios;

class Item
{
    private string $nome;
    private int $quantidade = 0;

    public function __construct(string $nome, int $quantidade)
    {
        $this->nome = $nome;
        $this->quantidade = $quantidade;
    }

    public function recuperaNomeItem(): string
    {
        return $this->nome;
    }

    public function recuperaQuantidade(): int
    {
        return $this->quantidade;
    }

    public function encontreiItemIgual(): void
    {
        echo 'Encontrei este item de novo!' . PHP_EOL;
        $this->quantidade++;
    }

    public function useiItem(): void
    {
        echo 'Usando o item.' . PHP_EOL;
        $this->quantidade--;
    }
}