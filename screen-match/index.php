<?php

require __DIR__ . "/src/Modelo/Filme.php";

echo "Bem-vindo(a) ao screen match!\n";

$filme = new Filme('O Poderoso Chefão', 1972, 'drama');   

$filme->avalia(8.5);
$filme->avalia(9.0);
$filme->avalia(10.0);
$filme->avalia(7.0);

var_dump($filme);

echo $filme->media() . "\n";

echo $filme->anoLancamento . "\n";