<?php

$entrada = readline("Digite um valor: ");

$igualSolto = $entrada == 10;
$igualEstrito = $entrada === 10;

echo "Tipo da entrada: " . gettype($entrada) . "\n";
echo "\$entrada == 10  →  " . ($igualSolto ? 'true' : 'false') . "\n";
echo "\$entrada === 10 →  " . ($igualEstrito ? 'true' : 'false') . "\n";
