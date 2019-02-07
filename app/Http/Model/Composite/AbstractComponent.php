<?php

namespace App\Http\Model\Composite;

abstract class AbstractComponent {
    abstract function getPrixTotal();
    abstract function getNbVoiture();
    abstract function setNbVoiture($voiture);
    abstract function addVoiture($voiture);
    abstract function removeVoiture($voiture);
}