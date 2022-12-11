<?php

class Movie
{
    public $titolo;
    public $genere;
    public $eta_film;
    private $ventennale = "Non è un Cult";

    function __construct($titolo, $genere)
    {
        $this->titolo = $titolo;
        $this->genere = $genere;
    }

    public function getCult()
    {
        return $this->ventennale;
    }

    public function setCult()
    {
        if ($this->eta_film > 20) {
            $this->ventennale = "E' un Cult";
        }
    }

    public function printMovieInfo()
    {
        return "Titolo: $this->titolo; Genere: $this->genere; Età Film: $this->eta_film";
    }
}
