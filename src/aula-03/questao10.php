<?php

$codigo = (int) readline("Digite o código do pedido (1 a 4): ");

switch ($codigo) {
    case 1:
        echo "Status: Pedido recebido.\n";
        break;
    case 2:
        echo "Status: Pedido em preparo.\n";
        break;
    case 3:
        echo "Status: Pedido em transporte.\n";
        break;
    case 4:
        echo "Status: Pedido entregue.\n";
        break;
    default:
        echo "Código inválido.\n";
        break;
}
