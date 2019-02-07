<?php
// Factory class to build US based center
class VoitureFactory{

    public function __construct(){}
     
    public function build($type){
        $car = null;
        switch($type) {
            case 'opel':
                $car = new Opel('opel');
                break;
            case 'renaud':
                $car = new Renault('renault');
                break;
            default:
                $car = new Renault('renault');
                break;
        }
        return $car;
    }
}