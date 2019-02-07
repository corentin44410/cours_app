<?php

namespace App\Http\Model\Template;

abstract class TemplateAbstract {
    
    public final function getText() {
        $marque = $this->getMarque();
        $options = $this->getOptions();
        return "Marque : ".$marque."Options : ".$options;
    }

    abstract function getMarque();

    abstract function getOptions();
}