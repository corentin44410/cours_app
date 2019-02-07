<?php

namespace App\Http\Model\Composite;


class VoitureNoeud extends AbstractComponent {
    
    private $voitures = array();
    private $NbVoiture;

    public function __construct() {
      $this->setNbVoiture(0);
    }

    public function getNbVoiture() {
      return $this->NbVoiture;
    }

    public function setNbVoiture($nb) {
      $this->NbVoiture = $nb;
    }

    public function getPrixTotal() {
        return FALSE;
    }

    public function addVoiture($voiture) {
      $this->setNbVoiture($this->getNbVoiture() + 1);
      $this->voitures[$this->getNbVoiture()] = $voiture;
    }

    /*public function removeVoiture($voiture) {
      $i = 0;
      while (++$i <= $this->getNbVoiture()) {
        if ($voiture->getVoitureInfo(1) == 
          $this->voitures[$i]->getVoitureInfo(1)) {
          for ($j = $i; $j < $this->getNbVoiture(); $j++) {
            $this->voitures[$j] = $this->voitures[$j + 1];
          }
          $this->setNbVoiture($this->getNbVoiture() - 1);
        }
      }
      return $this->getNbVoiture();
    }*/

}