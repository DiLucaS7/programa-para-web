<?php

$idade = (int) readline("Digite sua idade: ");
$respostaIngresso = strtolower(readline("Possui ingresso? (s/n): "));
$temIngresso = $respostaIngresso === 's';

$acessoLiberado = $idade >= 18 && $temIngresso;

if ($acessoLiberado) {
    echo "Entrada liberada\n";
} else {
    echo "Acesso negado\n";
}
