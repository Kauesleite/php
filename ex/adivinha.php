<?php

$numeroSecreto = rand(1, 100);
$tentativas = 0;

echo "=== JOGO DA ADIVINHAÇÃO ===\n";
echo "Tente adivinhar o número entre 1 e 100\n\n";

while (true) {
    echo "Digite um número: ";
    $palpite = (int) fgets(STDIN);

    $tentativas++;

    if ($palpite == $numeroSecreto) {
        echo "🎉 Parabéns! Você acertou!\n";
        echo "Número secreto: $numeroSecreto\n";
        echo "Tentativas: $tentativas\n";
        break;
    }

    if ($palpite < $numeroSecreto) {
        echo "⬆️ O número secreto é maior.\n";
    } else {
        echo "⬇️ O número secreto é menor.\n";
    }
}