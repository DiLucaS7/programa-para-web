<?php

$nome = readline("Digite o nome do aluno: ");
$nota = (float) readline("Digite a nota do aluno: ");

if ($nota >= 7.0) {
    echo "Aluno: $nome\n";
    echo "Situação: Aprovado\n";
} elseif ($nota >= 5.0) {
    echo "Aluno: $nome\n";
    echo "Situação: Recuperação\n";
} else {
    echo "Aluno: $nome\n";
    echo "Situação: Reprovado\n";
}
