<?php 

trait Contabile {

    public $contatore = 0;


    public function setContatore($quantita) {
        if(is_numeric($quantita)){
            $this->contatore += $quantita;
        } else {
            throw new Exception('parliamo di quantità, quindi ci si aspetta un numero!!!');
        }
    }

    public function getContatore() {
        return $this->contatore;
    }
}