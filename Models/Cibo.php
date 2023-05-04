<?php

class Cibo extends Prodotto {

    public $pesoConfezione;
    public $etaCaneDestinata;
    public static $tipo = 'Cibo';

    function __construct(string $nome,string $immagine, int $prezzo,  int $disponibilita, string $categoria, string $descrizione, int $pesoConfezione, string $etaCaneDestinata) {

        parent::__construct($nome,$immagine, $prezzo,  $disponibilita, $categoria, $descrizione);
        
        $this->pesoConfezione = $pesoConfezione;
        $this->etaCaneDestinata = $etaCaneDestinata;
    }

}