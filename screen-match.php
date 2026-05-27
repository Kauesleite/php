<?php

echo "Welcome to CineGibi!\n";
//argv argc é referente aos argumentos
//argv é um array que pega os valores de cada argumento passado como parametro na chamada do script
//argc é a quantidade de parametros passados na chamada no script

$movieName = "Top Gun - Maverick"; 
$releaseYear = 2022;

$sumOfNotes = 0;

$numberOfRatings = $argc -1;

//for (inicializacao; condicao da repeticao, incremento)
for ($contador = 1; $contador < $argc; $contador++) {
    $sumOfNotes += $argv[$contador];
}

$rating = $sumOfNotes / $numberOfRatings;

$primePlan = true;

//echo $rating;
$includeOnPlan = $primePlan || $releaseYear<2020;

//echo $includeOnPlan;

echo "Nome do filme: $movieName\n";
echo "Nota do filme: $rating\n";
echo "Ano de lançamento: $releaseYear\n";

if ($releaseYear > 2022) {
    echo "Esse filme é uma lançamento\n";
}elseif($releaseYear<2022 && $releaseYear>2020){
    echo "Relativamente novo\n";
} else{
    echo "Filme antigo\n";
}

$gender = match ($movieName) {
    "Top Gun - Maverick" => "action",
    "Thor: Ragnarok" => "heroes",
    "Se beber nao case" => "comedy",
    default => "genero desconhecido",
};

echo "O genero do filme é: $gender\n";

echo $argc;
