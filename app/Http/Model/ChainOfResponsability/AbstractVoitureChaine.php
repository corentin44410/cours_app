<?php

namespace App\Http\Model\ChainOfResponsability;

abstract class AbstractVoitureChaine {
    abstract function getTopic();
    abstract function getTitle();
    abstract function setTitle($title_in);
}