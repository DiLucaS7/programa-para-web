<?php

$valorPedido = (float) readline("Digite o valor do pedido: ");
$temCartao = strtolower(readline("Cliente possui cartão? (s/n): ")) === 's';
$temPix = strtolower(readline("Cliente possui Pix? (s/n): ")) === 's';

$pagamentoAceito = $temCartao || $temPix;

if ($pagamentoAceito) {
    echo "Valor do pedido: R$ " . number_format($valorPedido, 1, ',', '.') . "\n";
    echo "Pedido aprovado\n";
} else {
    echo "Pedido recusado: nenhuma forma de pagamento disponível\n";
}
