<?php

namespace Apex\Modelo\Utilitarios;

use Apex\Modelo\InformacoesGerais;

class Armas extends InformacoesGerais
{
    private string $classeDeArma;
    private int $tamanhoPente;
    private int $nivelPente;
    private int $municao;

    public function __construct(string $nome, string $classeDeArma, string $skin)
    {
        parent::__construct($nome, $skin);
        $this->tamanhoPente = 0;
        $this->verificaClasse($classeDeArma);
        $this->classeDeArma = $classeDeArma;
        $this->nivelPente = 0;
        $this->municao = 80;
    }

    public function recuperaClasseDeArma(): string
    {
        return $this->classeDeArma;
    }

    protected function verificaClasse(string $classeDeArma)
    {
        switch ($classeDeArma) {
            case 'Shotgun':
                return $this->tamanhoPente = 6;
                break;
            case 'Sub':
                return $this->tamanhoPente = 20;
                break;
            case 'Sniper':
                return $this->tamanhoPente = 8;
                break;
            case 'Rifle':
                return $this->tamanhoPente = 18;
                break;
            case 'Pistola':
                return $this->tamanhoPente = 15;
                break;
            default:
                echo 'Nome da classe errada!' . PHP_EOL;
                exit();
        }
    }
    public function recuperaTamanhoDoPente(): int
    {
        return $this->tamanhoPente;
    }


    public function alterarTamanhoPente($nivelPente): int
    {
        $this->nivelPente = $nivelPente;
        switch ($nivelPente) {
            case 1:
                return $this->tamanhoPente = $this->tamanhoPente + 3;
                break;
            case 2:
                return $this->tamanhoPente = $this->tamanhoPente + 6;
                break;
            case 3:
                return $this->tamanhoPente = $this->tamanhoPente + 9;
                break;
            case 4:
                echo 'Pente possui recarregamento automático' . PHP_EOL;
                return $this->tamanhoPente = $this->tamanhoPente + 9;
                break;
            default:
                echo 'Tamanho de pente errado!' . PHP_EOL;
                exit();
        }
    }
    public function recuperaNivelDoPente(): string
    {
        switch ($this->nivelPente) {
            case 0:
                return "Está sem Carregador" . PHP_EOL;
                break;
            case 1:
                return "Está com Carregador Branco" . PHP_EOL;
                break;
            case 2:
                return "Está com Carregador Azul" . PHP_EOL;
                break;
            case 3:
                return "Está com Carregador Roxo" . PHP_EOL;
                break;
            case 4:
                return "Está com Carregador Dourado" . PHP_EOL;
                break;
            default:
                echo 'Tamanho de pente errado!' . PHP_EOL;
                exit();
        }
    }

    public function encontreiMunicao($numero): void
    {
        echo 'Encontrei munição para a minha arma!' . PHP_EOL;
        $this->municao += $numero;
    }

    public function recuperaMunicao(): int
    {
        return $this->municao;
    }
}
