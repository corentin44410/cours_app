<?php
namespace App\Http\Model;
class Concession
{
    private $nomConcession;
    private $voitures;

    public function __construct($nomConcession)
    {
        $this->nomConcession = $nomConcession;
        $this->voitures = Array();
    }

    public function addCar($voiture){
        //$this->voitures->push($voiture);
        if($voiture == 'renault'){
            $prix = '10000 €';
        }else{
            $prix = '14900 €';
        }
        $tab = array("voiture" => $voiture,"prix" => $prix);
        array_push($this->voitures,$tab);
        return $prix;
    }

    public function toString()
    {
        return ' Concession  ' . $this->nomConcession;
    }

    public function getNomConcession(){
        return $this->nomConcession;
    }
}
