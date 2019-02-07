<?php

namespace App\Http\Model;

use App\Http\Model\Renault;
use App\Http\Model\Opel;
// Factory class to build US based center
class VoitureFactory{

    public function __construct(){}
     
    public function build($type){
        $car = null;
        switch($type) {
            case 'opel':
                $car = new Opel('opel');
                break;
            case 'renault':
                $car = new Renault('renault');
                break;
            default:
                $car = new Renault('renault');
                break;
        }
        return $car;
    }
}