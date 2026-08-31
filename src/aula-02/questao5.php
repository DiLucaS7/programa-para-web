<?php

$opcao = (int) readline("Escolha uma opção:\n1 - Atendimento ao cliente\n2 - Suporte técnico\n3 - Financeiro\n4 - Sair\nOpção: ");

switch ($opcao) {
    case 1:
        echo "Você foi direcionado para o atendimento ao cliente.\n";
        break;
    case 2:
        echo "Você foi direcionado para o suporte técnico.\n";
        break;
    case 3:
        echo "Você foi direcionado para o setor financeiro.\n";
        break;
    case 4:
        echo "Encerrando o atendimento.\n";
        break;
    default:
        echo "Opção inválida.\n";
        break;
}
