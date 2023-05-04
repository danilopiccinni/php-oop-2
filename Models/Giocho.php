<?php

class Gioco extends Prodotto {

    public $forma;
    public $peso;
    public static $tipo = 'Gioco';

    function __construct(string $nome,string $immagine, int $prezzo,  int $disponibilita, string $categoria, string $descrizione, string $forma, int $peso) {

        parent::__construct($nome,$immagine, $prezzo,  $disponibilita, $categoria, $descrizione);

        $this->forma = $forma;
        $this->peso = $peso;
        
    }

}