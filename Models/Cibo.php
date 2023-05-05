<?php

class Cibo extends Prodotto {

    public $pesoConfezione;
    public $etaCaneDestinata;
    public static $tipo = 'Cibo';

    function __construct(string $nome,string $immagine, int $prezzo, string $categoria, int $pesoConfezione, string $etaCaneDestinata) {

        parent::__construct($nome,$immagine, $prezzo, $categoria);
        
        $this->pesoConfezione = $pesoConfezione;
        $this->etaCaneDestinata = $etaCaneDestinata;
    }

}