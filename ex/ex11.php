<?php 
$nomeArquivo = 'teste.txt';
$novaFrase = "\nPHP é incrível!";

$arquivo = fopen($nomeArquivo, 'a');

fwrite($arquivo, $novaFrase);
fclose($arquivo);