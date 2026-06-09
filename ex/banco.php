<?php
echo "Olá bem vindo ao BancoCeta\n";
echo "==============================\n";
$titular = 'Luna';
echo "Titular: $titular\n";
$saldo = 1000.00;
echo "Saldo atual: $saldo\n";

while (true){
        echo "==============================\n";
        echo "1.Consultar saldo atual\n";
        echo "2.Sacar valor\n";
        echo "3.Depositar valor\n";
        echo "4.Sair\n";
   
    $entrada = (int) fgets(STDIN);
        
    if($entrada == 1){
        echo "==============================\n";
        echo "Titular: $titular\n";
        echo "Saldo atual: $saldo\n";
    } else if ($entrada == 2){  
        echo "Digite o valor a ser sacado:\n";
        $valorSacar = (float)fgets(STDIN);
        if($valorSacar > $saldo || $valorSacar <= 0){
            echo" inválido\n";
        } else{
        $saldo -= $valorSacar;
        echo "Seu novo saldo é: $saldo\n";
        }
    } else if($entrada == 3){
        echo "Digite o valor a ser depositado:\n";
        $valorDeposito =(float)fgets(STDIN);
        if($valorDeposito <= 0){
            echo" inválido\n";
        } else{
        $saldo += $valorDeposito;
        echo "Seu novo saldo é: $saldo\n";
        }
    } else if ($entrada == 4){
        break;
    } else{
        echo "Digite uma opção válida\n";
    }
}