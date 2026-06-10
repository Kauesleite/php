<?php

$caminhoArquivo = __DIR__ . '/filme.json';
$conteudoArquivo = file_get_contents($caminhoArquivo);
$filmeArray = json_decode($conteudoArquivo, true);

var_dump($filmeArray);

