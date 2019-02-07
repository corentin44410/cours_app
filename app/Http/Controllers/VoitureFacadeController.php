<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Model\VoitureFacade;
use Illuminate\Support\Facades\Log;

class VoitureFacadeController extends Controller
{
    function voitureFacade(){
        $voitureFacade1 = new VoitureFacade(1);
        $voitureFacade2 = new VoitureFacade(2);
        if($voitureFacade1 != null && $voitureFacade2 != null){
            $voitureFacade1->commander('renault');
            $voitureFacade2->commander('opel');
            return View('voituresFacade', array(
                "v1" => $voitureFacade1->getFacture(),
                "v2" => $voitureFacade2->getFacture()
            ));
        }
        
        
    }
}
