<?php

class Prodotto {
    public $nome;
    public $immagine;
    public $prezzo;
    public $categoria;
    public $disponibilita;

    function __construct(string $nome, int $prezzo, string $immagine, string $categoria, int $disponibilita) {
        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->immagine = $immagine;
        $this->categoria = $categoria;
        $this->disponibilita = $disponibilita;
    }
}

