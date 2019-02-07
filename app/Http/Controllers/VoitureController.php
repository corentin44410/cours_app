<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Model\Voiture;
use App\Http\Model\VoitureFactory;
use App\Http\Model\VoitureIterator;
use App\Http\Model\VoitureAggregate;
use App\Http\Model\Observer\VoitureObserver;
use App\Http\Model\Observer\VoitureSubject;
use Illuminate\Support\Facades\Log;
use App\Http\Model\Opel;
use App\Http\Model\Peugeot;
use App\Http\Model\Strategy\Context;
use App\Http\Model\Template\TemplatePeugeot;
use App\Http\Model\Template\TemplateRenault;
use App\Http\Model\Template\TemplateOpel;
use App\Http\Model\Composite\VoitureLeaf;
use App\Http\Model\Composite\VoitureNoeud;
use App\Http\Model\Composite\AbstractComponent;

class VoitureController extends Controller
{
    function voiture(){
        $voitureFactory = new VoitureFactory();
        $voiture1 = $voitureFactory->build('renault');
        $voiture2 = $voitureFactory->build('opel');
        $voiture3 = $voitureFactory->build('autre');
        
        return View('voitures', array(
            "v1" => $voiture1->toString(),
            "v2" => $voiture2->toString(),    
            "v3" => $voiture3->toString()
        ));
    }

    function voitureIterator(){
        $aggregate = new VoitureAggregate;
        $aggregate->addVoiture("Opel");
        $aggregate->addVoiture("Renault");
        $aggregate->addVoiture("Peugeot");

        $iterator = $aggregate->getIterator();
        Log::info($iterator->value());
        $aggregate->getIterator()->next();
        Log::info($iterator->value());
        $iterator->next();
        Log::info($iterator->value());
        $iterator->next();
        Log::info($iterator->value());

        return View('iterator', array(
            "iterator" => $aggregate->getIterator()
        ));
    }

    function voitureObserver(){
        $obs1 = new VoitureObserver();
        $obs2 = new VoitureObserver();
        
        $subj = new VoitureSubject('Peugeot');
        $subj->registerObserver($obs1);
        $subj->registerObserver($obs2);
        
        return View('observer', array(
            "obs1" => $obs1,
            "obs2" => $obs2,
            "subj" => $subj
        ));
    }

    function voitureStrategy(){
        $opel = new Opel('Zaffira');
        $peugeot = new Peugeot('206cc');

        $context1 = new Context('Opel');
        $context2 = new Context('Peugeot');
        
        return View('strategy',array(
            'opel' => $opel,
            'context1' => $context1,
            'context2' => $context2
        ));
    }

    function voitureTemplate(){
        $opel = new Opel('Zaffira');
        $templatePeugeot = new TemplatePeugeot();
        $templateRenault = new TemplateRenault();
        $templateOpel = new TemplateOpel();

        return View('template',array(
            'opel' => $opel,
            'templateP' => $templatePeugeot,
            'templateR' => $templateRenault,
            'templateO' => $templateOpel
        ));
    }

    function voitureCommand(){
        return View('command');
    }

    function voitureComposite(){
        $noeud1 = new AbstractComponent();
        $noeud2 = new AbstractComponent();
        $noeud3 = new AbstractComponent();

        $noeud1->addVoiture($noeud2);
        $noeud2->addVoiture($noeud3);
        return View('composite',array(
            ""=> $noeud1
        ));
    }
}
