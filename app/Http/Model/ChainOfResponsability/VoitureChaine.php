<?php

namespace App\Http\Model\ChainOfResponsability;

class VoitureChaine extends AbstractVoitureChaine {

    private $topic;
    private $title;
    
    function __construct($topic_in) {
      $this->topic = $topic_in;
      $this->title = NULL;
    }
    function getTopic() {
      return $this->topic;
    }
    //this is the end of the chain - returns title or says there is none
    function getTitle() {
      if (NULL != $this->title) {
        return $this->title;
      } else {
        return 'there is no title available';
      }
    }
    function setTitle($title_in) {$this->title = $title_in;}
}