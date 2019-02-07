<?php
namespace App\Http\Model\Template;
class TemplateRenault extends TemplateAbstract {

    function getMarque() {
      return "Voiture Renault"; 
    }

    function getOptions() {
      return "Options : rien";
    }
}