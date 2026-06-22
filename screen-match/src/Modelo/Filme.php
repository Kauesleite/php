<?php

class Filme {
    public string $nome;
    public int $anoLancamento;
    public string $genero;
    public array $notas = [];

    function avalia(float $nota):void{
        $this->notas[] = $nota;
    }

    function media(): float {
        $soma = array_sum($this->notas);
        $quantidadeDeNotas = count($this->notas);
        return $soma / $quantidadeDeNotas;
    }
}

