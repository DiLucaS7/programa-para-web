<?php

$valorCompra = (float) readline("Digite o valor da compra: ");

if ($valorCompra < 50) {
    $frete = 10.00;
} elseif ($valorCompra >= 50 && $valorCompra < 100) {
    $frete = 7.50;
} elseif ($valorCompra >= 100 && $valorCompra < 200) {
    $frete = 5.00;
} else {
    $frete = 0.00;
}

$total = $valorCompra + $frete;

echo "Frete: R$ " . number_format($frete, 2, ',', '.') . "\n";
echo "Total da compra: R$ " . number_format($total, 2, ',', '.') . "\n";
