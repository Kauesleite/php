<?php

require __DIR__ . "/src/Modelo/Filme.php";

echo "Bem-vindo(a) ao screen match!\n";

$filme = new Filme();
$filme->setAnoLancamento(2019);
/*$filme->nome = "Thor Ragnarok";
$filme->anoLancamento = 2019;
$filme->genero = "super-herói";*/    

$filme->avalia(8.5);
$filme->avalia(9.0);
$filme->avalia(10.0);
$filme->avalia(7.0);

var_dump($filme);

echo $filme->media() . "\n";

echo $filme->getAnoLancamento() . "\n";