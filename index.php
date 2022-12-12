<?php

require_once __DIR__ . "/movie.php";

$donnie_darko = new Movie("Donnie Darko", "Psicologico");
$donnie_darko->titolo = "Donnie Darko";
$donnie_darko->genere = "psicologico";
$donnie_darko->eta_film = 21;
$donnie_darko->setCult();
var_dump($donnie_darko);
var_dump($donnie_darko->getCult());
echo $donnie_darko->printMovieInfo();


$interstellar = new Movie("Interstellar", "Drammatico");
$interstellar->titolo = "Interstellar";
$interstellar->genere = "Romantico";
$interstellar->eta_film = 10;
$interstellar->setCult();
var_dump($romantico);
var_dump($interstellar->getCult());
echo $interstellar->printMovieInfo();
