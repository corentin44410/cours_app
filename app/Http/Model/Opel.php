<?php
namespace App\Http\Model;
class Opel
{
    private $marque;
    private $nom;

    public function __construct($nom)
    {
        $this->marque = 'opel ';
        $this->nom = $nom;
    }

    public function toString()
    {
        return $this->marque . ' ' . $this->nom;
    }

    public function getMarque(){
        return $this->marque;
    }

    public function getNom(){
        return $this->nom;
    }
}
