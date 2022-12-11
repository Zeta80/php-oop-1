<?php

// require_once __DIR__ . "/Genre.php";

class Movie
{
    public $nome;
    public $genere;
    public $anno;


    function __construct($nome, $genere, $anno = "")
    {
        $this->nome = $nome;
        $this->genere = $genere;
        $this->anno = $anno;
    }

    public function printMovieInfo()
    {
        return "Nome: $this->nome; Anno: $this->anno";
    }
}
