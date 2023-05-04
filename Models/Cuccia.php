<?php

class Cuccia extends Prodotto {
    public $categoria;
    public $descrizione;
    public static $tipo = 'Cuccia';

    function __construct(string $nome,string $immagine, int $prezzo,  int $disponibilita, string $descrizione, string $categoria) {

        parent::__construct($nome,$immagine, $prezzo,  $disponibilita);
        $this->categoria = $categoria;
        $this->descrizione = $descrizione;
    }
}