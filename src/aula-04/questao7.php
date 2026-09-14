<?php

$matricula1 = readline("Digite a primeira matrícula: ");
$matricula2 = readline("Digite a segunda matrícula: ");

$resultadoStrcmp = strcmp($matricula1, $matricula2);

if ($resultadoStrcmp < 0) {
    echo "Comparando como texto (strcmp): $matricula1 vem primeiro\n";
} elseif ($resultadoStrcmp > 0) {
    echo "Comparando como texto (strcmp): $matricula2 vem primeiro\n";
} else {
    echo "Comparando como texto (strcmp): as matrículas são iguais\n";
}

if ($matricula1 < $matricula2) {
    echo "Comparando com o operador <: $matricula1 vem primeiro\n";
} elseif ($matricula1 > $matricula2) {
    echo "Comparando com o operador <: $matricula2 vem primeiro\n";
} else {
    echo "Comparando com o operador <: as matrículas são iguais\n";
}
