<?php

$idade = (int) readline("Digite a idade da pessoa: ");

if ($idade < 12) {
    echo "Classificação: Criança\n";
} elseif ($idade >= 12 && $idade <= 17) {
    echo "Classificação: Adolescente\n";
} elseif ($idade >= 18 && $idade <= 59) {
    echo "Classificação: Adulto\n";
} else {
    echo "Classificação: Idoso\n";
}
