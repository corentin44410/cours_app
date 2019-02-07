<?php
namespace App\Http\Model\Template;
class TemplatePeugeot extends TemplateAbstract {

    function getMarque() {
      return "Voiture Peugeot"; 
    }

    function getOptions() {
      return "Options : GPS intégré, Jantes alu, Toit ouvrable";
    }
}