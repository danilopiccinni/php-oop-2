<?php

class Prodotto {
    public $nome;
    public $immagine;
    public $prezzo;
    public $categoria;

    function __construct(string $nome,string $immagine, int $prezzo, string $categoria) {
        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->immagine = $immagine;
 
        $this->categoria = $categoria;

    }

    public function getName() {
        return $this->nome;
    }

    public function getImage() {
        return $this->immagine;
    }

    public function getPrice() {
        return $this->prezzo;
    }

    public function getCategoria() {
        return $this->categoria;
    }

}

