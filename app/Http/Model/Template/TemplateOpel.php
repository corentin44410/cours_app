<?php
namespace App\Http\Model\Template;
class TemplateOpel extends TemplateAbstract {

    function getMarque() {
      return "Voiture Opel"; 
    }

    function getOptions() {
      return "Options Jantes alu, Toir ouvrable, Pilote Automatique";
    }
}