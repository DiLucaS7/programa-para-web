<?php

class Carrinho
{
    public string $dono;
    public int $itens = 0;

    public function mostrar(): void
    {
        echo "Carrinho de {$this->dono}: {$this->itens} item(ns)\n";
    }

    public function adicionar(int $quantos): void
    {
        $this->itens += $quantos;
        $this->mostrar();
    }
}

$carrinhoAna = new Carrinho();
$carrinhoAna->dono = "Ana";
$carrinhoAna->adicionar(3);
$carrinhoAna->adicionar(2);