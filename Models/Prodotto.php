<?php

class Prodotto {
    public $nome;
    public $immagine;
    public $prezzo;
    public $disponibilita;
    public $categoria;
    public $descrizione;

    function __construct(string $nome,string $immagine, int $prezzo,  int $disponibilita, string $categoria, string $descrizione) {
        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->immagine = $immagine;
        $this->disponibilita = $disponibilita;
        $this->categoria = $categoria;
        $this->descrizione = $descrizione;
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

    public function getDescription() {
        return $this->descrizione;
    }
}

