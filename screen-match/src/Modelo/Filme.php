<?php

class Filme {
    private string $nome = 'Nome Padrao';
    private int $anoLancamento = 2024;
    private string $genero = 'acao';
    private array $notas = [];

    function avalia(float $nota):void{
        $this->notas[] = $nota;
    }

    function media(): float {
        $soma = array_sum($this->notas);
        $quantidadeDeNotas = count($this->notas);
        return $soma / $quantidadeDeNotas;
    }
    // metodo de acesso/acessor //getter
    public function getAnoLancamento(): int {
        return $this->anoLancamento;
    }

    public function setAnoLancamento(int $anoLancamento): void{
        $this->anoLancamento = $anoLancamento;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function setNome(string $nome): void {
        $this->nome = $nome;
    }

    public function getGenero(): string {
        return $this->genero;
    }
    
    public function setGenero(string $genero): void {
        $this->genero = $genero;
    }
}

