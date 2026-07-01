<?php

class Filme {
  
    private array $notas = [];

    public function __construct(public readonly string $nome = 'Nome Padrao', public readonly int $anoLancamento = 2024, public readonly string $genero = 'acao') {
        
        $this->notas = [];
    }    

    function avalia(float $nota):void{
        $this->notas[] = $nota;
    }

    function media(): float {
        $soma = array_sum($this->notas);
        $quantidadeDeNotas = count($this->notas);
        return $soma / $quantidadeDeNotas;
    }
    // metodo de acesso/acessor //getter
  
}

