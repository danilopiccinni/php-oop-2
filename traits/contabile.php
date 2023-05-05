<?php 

trait Contabile {

    public $contatore;


    public function setContatore($quantita) {
        $this->contatore .= $quantita;
    }
}