<?php

namespace App\Http\Model\Observer;

interface mySubject {
    function registerObserver(myObserver $observer);
    function unregisterObserver(myObserver $observer);
    function notifyObservers();
}