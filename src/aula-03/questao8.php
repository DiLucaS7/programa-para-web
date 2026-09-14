<?php

$usuario = readline("Digite o usuário: ");
$senha = readline("Digite a senha: ");

if ($usuario === "admin" && $senha === "1234") {
    echo "Login realizado com sucesso!\n";
} else {
    echo "Usuário ou senha inválidos.\n";
}
