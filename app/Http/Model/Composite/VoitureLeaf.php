<?php

namespace App\Http\Model\Composite;

class VoitureLeaf extends AbstractComponent {
    private $nom;
    private $prix;

    function __construct($nom, $prix) {
      $this->nom = $nom;
      $this->prix = $prix;
    }

    function getPrixTotal() {
        return FALSE;
    }

    function getVoitureCount() {
      return 1;
    }

    function setVoitureCount($newCount) {
      return FALSE;
    }

    function addVoiture($voiture) {
      return FALSE;
    }

    function removeVoiture($voiture) {
      return FALSE;
    }
}