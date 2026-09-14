<?php

$usuarioInformado = strtolower(readline("Usuário: "));
$senhaInformada = readline("Senha: ");

$usuarioValido = strcasecmp($usuarioInformado, 'Jullinn') === 0;
$senhaValida = $senhaInformada === '69';
$credenciaisValidas = $usuarioValido && $senhaValida;

if (!$credenciaisValidas) {
    echo "Usuário ou senha inválidos\n";
} else {
    echo "Bem-vindo, admin!\n";
}
