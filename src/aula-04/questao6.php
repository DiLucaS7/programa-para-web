<?php

$notaInformada = readline("Digite a nota: ");

$notaInvalida = !is_numeric($notaInformada) || $notaInformada < 0 || $notaInformada > 10;

if ($notaInvalida) {
    echo "Nota inválida. Digite um número entre 0 e 10.\n";
} else {
    $nota = (float) $notaInformada;
    echo "Nota registrada: $nota\n";
}
