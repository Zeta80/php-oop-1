<?php


class Genre
{
    public $genere;



    function __construct(String $genere,)
    {
        $this->genere = $genere;
    }

    public function print()
    {
        return "$this->genere";
    }
}
