<?php

class Lampada
{
    public string $estado = "desligada";

    public function ligar(): void
    {
        $this->estado = "ligada";
    }

    public function desligar(): void
    {
        $this->estado = "desligada";
    }

    public function status(): void
    {
        echo "A lampada esta {$this->estado}\n";
    }
}

$lampada = new Lampada();
$lampada->status();
$lampada->ligar();
$lampada->status();
$lampada->desligar();
$lampada->status();