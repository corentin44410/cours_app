<?php

namespace App\Http\Model\Observer;
use Illuminate\Support\Facades\Log;

class VoitureSubject implements mySubject {

    private $observers = array();
    private $marque = "";

    function __construct($marque) {
        $this->marque = $marque;
    }

    function registerObserver(myObserver $observer) {
      $this->observers[] = $observer;
    }

    function getMarque(){
        return $this->marque;
    }

    function setMarque($marque){
        $this->marque = $marque;
        Log::info("MARQUE : ".$this->marque);
        $this->notifyObservers();
    }

    function unregisterObserver(myObserver $observer) {
      foreach($this->observers as $key => $val) {
        if ($val === $observer) { 
            //Log::info($val);
          unset($this->observers[$key]);
        }
      }
    }

    function notifyObservers() {
      Log::info("MARQUENotify : ".$this->marque);
      foreach($this->observers as $observer) {  
        $observer->update($this);
      }
    }

    function toString(){
        return "Sujet : ".$this->marque;
    }
}
