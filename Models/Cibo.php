<?php

class Cibo extends Prodotto {

    public $descrizione;
    public static $tipo = 'Cibo';

    function __construct(string $nome, int $prezzo, string $immagine, string $categoria, int $disponibilita, string $descrizione) {

        parent::__construct($nome,$prezzo, $immagine, $categoria, $disponibilita);

        $this->descrizione = $descrizione;
    }
}