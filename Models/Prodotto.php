<?php

class Prodotto {
    public $nome;
    public $immagine;
    public $prezzo;
    public $categoria;
    public $quantitaDisponibile;

    function __construct(string $nome,string $immagine, int $prezzo, string $categoria) {
        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->immagine = $immagine;
        $this->categoria = $categoria;
        $this->quantitaDisponibile = 5;
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

    public function diminiusciQuantita($quantita){
        if ($this->quantitaDisponibile > 0){
            $this->quantitaDisponibile -= $quantita;
        } else {
            throw $e= new Exception('quantità esaurita');
            var_dump($e);
        }
    }

}

