<?php

$valorCompra = (float) readline("Digite o valor total da compra: ");

if ($valorCompra < 100) {
    $desconto = 0;
} elseif ($valorCompra >= 100 && $valorCompra < 300) {
    $desconto = 0.10;
} elseif ($valorCompra >= 300 && $valorCompra < 600) {
    $desconto = 0.15;
} else {
    $desconto = 0.20;
}

$valorComDesconto = $valorCompra - ($valorCompra * $desconto);

echo "Desconto aplicado: " . ($desconto * 100) . "%\n";
echo "Valor final: R$ " . number_format($valorComDesconto, 2, ',', '.') . "\n";
