<?php

$taxaFixa = 5.50;
$distancia = (float) readline("Digite a distância percorrida em km: ");

$valorCorrida = $taxaFixa + ($distancia * 2.75);

echo "Valor da corrida: R$ " . number_format($valorCorrida, 2, ',', '.') . "\n";
