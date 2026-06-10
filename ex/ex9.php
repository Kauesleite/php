<?php

function ordenar(array $array): array{
    sort($array);
    return $array;
}

$array = ["banana", "abacaxi", "laranja", "uva"];
$arrayOrdenado = ordenar($array);
echo "Array ordenao: ";
print_r($arrayOrdenado);