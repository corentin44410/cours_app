<?php

namespace App\Http\Model\Strategy; 

class OpelStrategy implements IStrategy {
    
    private $tva = 20;

    public function __construct(){}
    
    public function factureLine($voiture) {
        $marque = $voiture->getMarque();
        return strtoupper ("OPEL Strategy, TVA : ".$this->tva);
    }
}