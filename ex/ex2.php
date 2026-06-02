<?php
echo "Informe primeiro seu peso e apos sua altura\n";

$peso = $argv[1];
$altura = $argv[2];

$imc = $peso / ($altura **2);

echo $imc . "\n";

if ($imc < 18.5){
    echo "seu imc eh $imc voce esta subnutrido";
} else if ($imc < 25){
    echo "seu imc eh $imc voce esta normal";
} else if ($imc < 30){
    echo "seu imc eh $imc voce esta com sobrepeso";
} else if ($imc < 40){
    echo "seu imc eh $imc voce esta com obesidade 2";
} else {
    echo "seu imc eh $imc voce esta com obesidade grave";
}