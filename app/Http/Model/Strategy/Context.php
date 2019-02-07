<?php

namespace App\Http\Model\Strategy;

class Context {
    private $strategy = NULL; 

    //bookList is not instantiated at construct time
    public function __construct($strategy) {
        switch ($strategy) {
            case "Opel": 
                $this->strategy = new OpelStrategy();
            break;
            case "Renault": 
                $this->strategy = new RenaultStrategy();
            break;
            case "Peugeot": 
                $this->strategy = new PeugeotStrategy();
            break;
            default:
                $this->strategy = new PeugeotStrategy();
        }
    }
    public function toString($voiture) {
      return $this->strategy->factureLine($voiture);
    }
}