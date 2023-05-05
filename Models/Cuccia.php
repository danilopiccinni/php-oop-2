<?php

require_once __DIR__ . '/../traits/contabile.php';
require_once __DIR__ . '/../traits/votabile.php';
class Cuccia extends Prodotto {

    use Contabile;
    use Votabile;

    public $dimensione;
    public $coloreCuccia;
    public $materiale;
    public static $tipo = 'Cuccia';

    function __construct(string $nome,string $immagine, int $prezzo,  int $disponibilita, string $categoria, string $descrizione, string $dimensione, string $coloreCuccia, string $materiale) {

        parent::__construct($nome,$immagine, $prezzo,  $disponibilita, $categoria, $descrizione);

        $this->dimensione = $dimensione;
        $this->coloreCuccia = $coloreCuccia;
        $this->materiale = $materiale;

    }


}