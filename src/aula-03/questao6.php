<?php

$numero1 = (float) readline("Digite o primeiro número: ");
$numero2 = (float) readline("Digite o segundo número: ");
$operacao = readline("Digite a operação (+, -, *, /): ");

switch ($operacao) {
    case '+':
        echo "Resultado: " . ($numero1 + $numero2) . "\n";
        break;
    case '-':
        echo "Resultado: " . ($numero1 - $numero2) . "\n";
        break;
    case '*':
        echo "Resultado: " . ($numero1 * $numero2) . "\n";
        break;
    case '/':
        if ($numero2 == 0) {
            echo "Erro: divisão por zero!\n";
        } else {
            echo "Resultado: " . ($numero1 / $numero2) . "\n";
        }
        break;
    default:
        echo "Operação inválida.\n";
        break;
}
