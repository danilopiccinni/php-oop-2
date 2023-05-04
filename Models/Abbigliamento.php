<?php

class Abbigliamento extends Prodotto {

    public $taglia;
    public $tessuto;
    public static $tipo = 'Abbigliamento';

    function __construct(string $nome,string $immagine, int $prezzo,  int $disponibilita, string $categoria, string $descrizione, string $taglia, string $tessuto) {

        parent::__construct($nome,$immagine, $prezzo,  $disponibilita, $categoria, $descrizione);
  
        $this->taglia = $taglia;
        $this->tessuto = $tessuto;
    }

}