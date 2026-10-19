<?php

class Jogador
{
    public string $nome;
    public int $pontos = 0;

    public function marcarPontos(int $quantos): void
    {
        $this->pontos += $quantos;
    }

    public function zerar(): void
    {
        $this->pontos = 0;
    }

    public function status(): void
    {
        echo "{$this->nome}: {$this->pontos} pontos\n";
    }
}

$ana = new Jogador();
$ana->nome = "Ana";

$bruno = new Jogador();
$bruno->nome = "Bruno";
$bruno->marcarPontos(8);

$ana->status();
$bruno->status();