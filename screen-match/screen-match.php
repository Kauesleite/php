<?php

require "funcoes.php";

echo "Bem-vindo(a) ao screen match!\n";

$nomeFilme = "Top Gun - Maverick";

$quantidadeDeNotas = $argc - 1;
$anoLancamento = 2022;

$notas = [];

for ($contador = 1; $contador < $argc; $contador++) {
    $notas[] = (float) $argv[$contador];
}

$notaFilme = array_sum($notas) / $quantidadeDeNotas;
$planoPrime = incluidoNoPlano(true, 2022);


echo "Nome do filme: " . $nomeFilme . "\n";
echo "Nota do filme: $notaFilme\n";
echo "Ano de lançamento: $anoLancamento\n";

exibeMsgLan(2022);


$genero = match ($nomeFilme) {
    "Top Gun - Maverick" => "ação",
    "Thor: Ragnarok" => "super-herói",
    "Se beber não case" => "comédia",
    default => "gênero desconhecido",
};

echo "O gênero do filme é: $genero\n";

$filme = [
    "nome" => "Thor: Ragnarok",
    "ano" => 2021,
    "nota" => 7.8,
    "genero" => "super-herói",
];


echo $filme["ano"];

var_dump($notas);
sort($notas);
var_dump($notas);
$menorNota= min($notas);
var_dump($menorNota);

var_dump($filme['nome']);
$posicaoDoisPontos= strpos($filme['nome'], ':');
var_dump($posicaoDoisPontos);

$stringTratada = substr($filme['nome'], 0 ,$posicaoDoisPontos);
var_dump($stringTratada);

//echo json_encode($filme);

//var_dump(json_decode('{"nome":"Thor: Ragnarok","ano":2021,"nota":7.8,"genero":"super-her\u00f3i"}',true));

$filmeComoStringJson = json_encode($filme);
file_put_contents(__DIR__ . '/filme.json', $filmeComoStringJson);