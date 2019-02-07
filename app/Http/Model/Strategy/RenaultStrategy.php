<?php

namespace App\Http\Model\Strategy; 

class RenaultStrategy implements IStrategy {
    
    private $tva = 10;

    public function __construct(){}
    
    public function factureLine($voiture) {
        $marque = $voiture->getMarque();
        return strtoupper ("Renault Strategy, TVA : ".$this->tva);
    }
}