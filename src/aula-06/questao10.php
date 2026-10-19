<?php

// Modela mochilas para representar seus dados, guardar itens e exibir seu conteúdo.
class Mochila
{
    public string $marca;
    public string $cor;
    public int $capacidadeLitros;
    public array $itens = [];

    public function guardar(string $item): void
    {
        $this->itens[] = $item;
    }

    public function abrir(): void
    {
        echo "Itens na mochila {$this->marca}: " . implode(", ", $this->itens) . "\n";
    }

    public function mostrarDetalhes(): void
    {
        echo "Marca: {$this->marca}\n";
        echo "Cor: {$this->cor}\n";
        echo "Capacidade: {$this->capacidadeLitros} litros\n";
    }
}

$mochila1 = new Mochila();
$mochila1->marca = "Trilha";
$mochila1->cor = "Verde";
$mochila1->capacidadeLitros = 30;
$mochila1->guardar("garrafa");
$mochila1->guardar("mapa");

$mochila2 = new Mochila();
$mochila2->marca = "Urbana";
$mochila2->cor = "Preta";
$mochila2->capacidadeLitros = 18;
$mochila2->guardar("caderno");

echo "=== MOCHILA 1 ===\n";
$mochila1->mostrarDetalhes();
$mochila1->abrir();

echo "\n=== MOCHILA 2 ===\n";
$mochila2->mostrarDetalhes();
$mochila2->abrir();