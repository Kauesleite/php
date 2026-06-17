<?php

$nome = $_POST['nome'];
$ano = (int)$_POST['ano'];
$nota = (float)$_POST['nota'];
$genero = $_POST['genero'];

$filme = [
    "nome" => $nome,
    "ano" => $ano,
    "nota" => $nota,
    "genero" => $genero
];

file_put_contents('filme.json', json_encode($filme));

header('Location: /sucesso.php?filme=' . $filme["nome"]);