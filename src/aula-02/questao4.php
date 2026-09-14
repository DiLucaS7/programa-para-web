<?php

$numero1 = (float) readline("Digite o primeiro número: ");
$numero2 = (float) readline("Digite o segundo número: ");

$soma = $numero1 + $numero2;
$subtracao = $numero1 - $numero2;
$multiplicacao = $numero1 * $numero2;

if ($numero2 == 0) {
    echo "Divisão: impossível, divisor igual a zero.\n";
} else {
    $divisao = $numero1 / $numero2;
    echo "Divisão: $divisao\n";
}

echo "Soma: $soma\n";
echo "Subtração: $subtracao\n";
echo "Multiplicação: $multiplicacao\n";
