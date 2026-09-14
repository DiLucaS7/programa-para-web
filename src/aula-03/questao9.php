<?php

$temperatura = (float) readline("Digite a temperatura em °C: ");

if ($temperatura < 0) {
    echo "Classificação: Muito frio\n";
} elseif ($temperatura >= 0 && $temperatura < 15) {
    echo "Classificação: Frio\n";
} elseif ($temperatura >= 15 && $temperatura < 25) {
    echo "Classificação: Agradável\n";
} elseif ($temperatura >= 25 && $temperatura < 35) {
    echo "Classificação: Quente\n";
} else {
    echo "Classificação: Muito quente\n";
}
