<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Model\Singleton;

class test extends Controller
{
    function singleton(){
        $a = Singleton::getInstance();
        $b = Singleton::getInstance();
        $a->increment();
        return View('singleton', array(
            "a" => $a->increment(),
            "b" => $b->increment()
        ));
    }
}
