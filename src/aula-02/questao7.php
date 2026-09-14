<?php

$valorUnitario = (float) readline("Digite o valor unitário do produto: ");
$quantidade = (int) readline("Digite a quantidade adquirida: ");

$total = $valorUnitario * $quantidade;

echo "Valor total da compra: $total\n";
