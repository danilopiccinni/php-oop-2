<?php

require_once __DIR__ . '/../traits/contabile.php';
require_once __DIR__ . '/../traits/votabile.php';
class Abbigliamento extends Prodotto {

    use Contabile;
    use Votabile;


    public $taglia;
    public $tessuto;
    public static $tipo = 'Abbigliamento';

    function __construct(string $nome,string $immagine, int $prezzo, string $categoria, string $taglia, string $tessuto) {

        parent::__construct($nome,$immagine, $prezzo, $categoria);
  
        $this->taglia = $taglia;
        $this->tessuto = $tessuto;
    }

}