<?php

$nomeCliente = readline("Nome do cliente: ");
$idade = (int) readline("Idade: ");
$rendaMensal = (float) readline("Renda mensal: ");
$tempoEmprego = (int) readline("Tempo de emprego (meses): ");
$respostaNegativado = strtolower(readline("Está negativado? (s/n): "));

$idadePermitida = $idade >= 18 && $idade <= 65;
$rendaOuEstabilidade = $rendaMensal >= 2000 || $tempoEmprego >= 24;
$estaNegativado = $respostaNegativado === 's';

$creditoAprovado = ($idadePermitida && $rendaOuEstabilidade && !$estaNegativado);

if ($idadePermitida) {
    echo "Idade permitida: atendida\n";
} else {
    echo "Idade permitida: não atendida\n";
}

if ($rendaOuEstabilidade) {
    echo "Renda ou estabilidade: atendida\n";
} else {
    echo "Renda ou estabilidade: não atendida\n";
}

if (!$estaNegativado) {
    echo "Nome limpo: atendida\n";
} else {
    echo "Nome limpo: não atendida\n";
}

if ($creditoAprovado) {
    echo "Resultado: Crédito aprovado para $nomeCliente\n";
} else {
    echo "Resultado: Crédito negado para $nomeCliente\n";
}
