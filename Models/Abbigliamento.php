<?php

class Abbigliamento extends Prodotto {

    public $descrizione;
    public static $tipo = 'Abbigliamento';

    function __construct(string $nome, int $prezzo, string $immagine, string $categoria, int $disponibilita, string $descrizione) {

        parent::__construct($nome,$prezzo, $immagine, $categoria,$disponibilita);

        $this->descrizione = $descrizione;
    }
}