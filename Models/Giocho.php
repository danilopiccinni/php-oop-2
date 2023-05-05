<?php

require_once __DIR__ . '/../traits/contabile.php';
require_once __DIR__ . '/../traits/votabile.php';

class Gioco extends Prodotto {

    use Contabile;
    use Votabile;

    public $forma;
    public $peso;
    public static $tipo = 'Gioco';

    function __construct(string $nome,string $immagine, int $prezzo, string $categoria, string $forma, int $peso) {

        parent::__construct($nome,$immagine, $prezzo, $categoria);

        $this->forma = $forma;
        $this->peso = $peso;
        
    }

}