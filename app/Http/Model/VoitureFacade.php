<?php

namespace App\Http\Model;
use App\Http\Model\VoitureFactory;
use App\Http\Model\Concession;
use Illuminate\Support\Facades\Log;

class VoitureFacade {
        
        public $id ="";
        public $concession;
        public $voiture;
        public $prix;
        public $facture = "";
        
        public function __construct($id) {
            $this->id = $id;
            $this->concession = new Concession('Concessionnaire de voitures');
            
            Log::error("Constructeru FACADE ");
        }
          
        public function commander($marque) {
            error_log('COMMANDER');
            $voiture = $this->fabriquer($marque);
            $this->voiture = $voiture;
            $this->envoyerConcession($voiture);
                  
            $this->creerFacture();
            echo $this->getFacture();
            error_log($this->getFacture());
        }

        private function fabriquer($marque){
            $voitureFactory = new VoitureFactory();
            return $voitureFactory->build($marque);
        }

        private function envoyerConcession($voiture){
            $this->prix = $this->concession->addCar($voiture);
        }

        private function creerFacture(){
            $this->facture = "Marque : ".$this->voiture->toString().', Concession  : '.$this->concession->toString().' ,Prix : '.$this->prix;
        }

        public function getFacture(){
            return $this->facture;
        }
     }