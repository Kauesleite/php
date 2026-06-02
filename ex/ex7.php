<?php

function opMat(int $num1, int $num2, string $op) {
    return match($op){
        'soma' => $num1 + $num2 ,
        'sub' => $num1 - $num2,
        'mult' => $num1 * $num2,
        'div' => $num2  !== 0 || $num1  !== 0 ? $num1 / $num2 : 'Divisão por zero não existe',
        default => null
    };
}

echo opMat(15, 3, 'soma') . "\n";
echo opMat(15, 3, 'sub') . "\n";
echo opMat(15, 3, 'mult') . "\n";
echo opMat(15, 0, 'div') . "\n";


