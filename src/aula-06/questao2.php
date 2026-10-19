<?php

class Livro
{
    public string $titulo;
    public string $autor;
    public int $paginas;
}

$livro1 = new Livro();
$livro1->titulo = "Dom Casmurro";
$livro1->autor = "Machado de Assis";
$livro1->paginas = 256;

$livro2 = new Livro();
$livro2->titulo = "O Cortiço";
$livro2->autor = "Aluísio Azevedo";
$livro2->paginas = 304;

echo $livro1->titulo . "\n";
echo $livro1->autor . "\n";
echo $livro1->paginas . " paginas\n\n";

echo $livro2->titulo . "\n";
echo $livro2->autor . "\n";
echo $livro2->paginas . " paginas\n";

// Neste programa existem 1 classe e 2 objetos.