<?php

class Filme {
    private string $nome;
    private int $anoLancamento;
    private string $genero;
    private array $notas = [];

    function avalia(float $nota):void{
        $this->notas[] = $nota;
    }

    function media(): float {
        $soma = array_sum($this->notas);
        $quantidadeDeNotas = count($this->notas);
        return $soma / $quantidadeDeNotas;
    }
}

