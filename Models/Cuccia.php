<?php

class Cuccia extends Prodotto {

    public $descrizione;
    public static $tipo = 'Cuccia';

    function __construct(string $nome, int $prezzo, string $immagine, string $categoria, int $disponibilita, string $descrizione) {

        parent::__construct($nome,$prezzo, $immagine, $categoria,$disponibilita);

        $this->descrizione = $descrizione;
    }
}