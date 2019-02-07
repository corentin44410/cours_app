<?php

namespace App\Http\Model;
use Illuminate\Support\Facades\Log;
use App\Http\Model\VoitureIterator;
use App\Http\Model\Aggregate;

class VoitureAggregate implements Aggregate{

    private $voitures = array();

    /*public function __construct(){
        $this->voitures = ['opel', 'renault', 'peugeot'];
    }*/

    public function getItems(){
        return $this->voitures;
    }
    
    public function addVoiture($voiture){
        $this->voitures[] = $voiture;
    }
    
    public function getIterator(): myIterator{
        return new VoitureIterator($this);
    }
}
    