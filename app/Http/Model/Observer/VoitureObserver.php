<?php

namespace App\Http\Model\Observer;
use Illuminate\Support\Facades\Log;

class VoitureObserver implements myObserver {
    private $i = 0;
    
    public function __construct(){} 

    public function update() {
        $this->display();
        //Log::info($this->display($subject));
    }

    public function display(){
        $this->i++;
        return $this->i;
    }
}