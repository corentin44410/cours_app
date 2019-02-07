<?php
namespace App\Http\Model;
class Renault
{
    private $marque;
    private $nom;

    public function __construct($nom)
    {
        $this->marque = 'renault ';
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
