<?php

class Prodotto {
    public $nome;
    public $immagine;
    public $prezzo;
    public $disponibilita;

    function __construct(string $nome,string $immagine, int $prezzo,  int $disponibilita) {
        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->immagine = $immagine;
        $this->disponibilita = $disponibilita;
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
}
