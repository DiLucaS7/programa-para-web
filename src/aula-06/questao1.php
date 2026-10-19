<?php

// Cria um livro e exibe seu título, autor e número de páginas.
class Livro
{
    public string $titulo;
    public string $autor;
    public int $paginas;
}

$livro = new Livro();
$livro->titulo = "Dom Casmurro";
$livro->autor = "Machado de Assis";
$livro->paginas = 256;

echo $livro->titulo . "\n";
echo $livro->autor . "\n";
echo $livro->paginas . " paginas\n";
