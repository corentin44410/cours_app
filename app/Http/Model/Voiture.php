<?php
class Voiture
{
    private $marque;
    private $nom;

    public function __construct($marque, $nom)
    {
        $this->marque = $marque;
        $this->nom = $nom;
    }

    public function toString()
    {
        return $this->marque . ' ' . $this->nom;
    }
}
