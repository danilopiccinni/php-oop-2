<?php

require_once __DIR__ . '/../traits/contabile.php';
require_once __DIR__ . '/../traits/votabile.php';
class Cuccia extends Prodotto {

    use Contabile;
    use Votabile;

    public $dimensione;
    public $coloreCuccia;
    public $materiale;

    function __construct(string $nome,string $immagine, int $prezzo, string $categoria, string $dimensione, string $coloreCuccia, string $materiale) {

        parent::__construct($nome,$immagine, $prezzo, $categoria);

        $this->dimensione = $dimensione;
        $this->coloreCuccia = $coloreCuccia;
        $this->materiale = $materiale;

    }


}