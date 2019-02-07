<?php

namespace App\Http\Model\Strategy; 

class PeugeotStrategy implements IStrategy {
    
    private $tva = 15;

    public function __construct(){}
    
    public function factureLine($voiture) {
        $marque = $voiture->getMarque();
        return strtoupper ("Peugeot Strategy, TVA : ".$this->tva);
    }
}