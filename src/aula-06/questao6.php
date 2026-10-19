<?php

class Produto {
    public $nome;
    public $preco;

    function aumentarPreco($valor) {
        $this->preco = $this->preco + $valor; // Corrigido: propriedades de objeto usam $this->.
    }

    function mostrar() {
        echo $this->nome . " custa R$ " . $this->preco . "\n";
    }
}

$produto = new Produto();

$produto->nome = "Caderno"; // Corrigido: acesso à propriedade precisa usar -> após o objeto.
$produto->preco = 10; // Corrigido: propriedade preco também precisa do operador ->.
$produto->aumentarPreco(5); // Corrigido: o método é chamado no objeto, não na classe.
$produto->mostrar(); // Corrigido: a chamada do método precisa dos parênteses.