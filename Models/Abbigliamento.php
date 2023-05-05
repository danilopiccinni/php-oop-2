<?php

class Abbigliamento extends Prodotto {

    public $taglia;
    public $tessuto;
    public static $tipo = 'Abbigliamento';

    function __construct(string $nome,string $immagine, int $prezzo, string $categoria, string $taglia, string $tessuto) {

        parent::__construct($nome,$immagine, $prezzo, $categoria);
  
        $this->taglia = $taglia;
        $this->tessuto = $tessuto;
    }

}