<?php

namespace App\Http\Model;
use Illuminate\Support\Facades\Log;
use App\Http\Model\myIterator;

class VoitureIterator implements myIterator
{
    private $collection;

    private $position = 0;

    public function __construct($collection)
    {
        $this->collection = $collection;
    }

    public function current()
    {
        return $this->collection->getItems()[$this->position];
    }

    public function key()
    {
        return $this->position;
    }

    public function value()
    {
        return $this->collection->getItems()[$this->position];
        //Log::info('position : '.$this->position);
    }

    public function next()
    {
        if($this->hasNext()){
            $this->position = $this->position + 1;
            Log::info('position : '.$this->position);
        }else{
            Log::info('Pas de suivant');
        }
    }

    public function hasNext(){
        if($this->collection->getItems()[$this->position+1] == null && isset($this->collection->getItems()[$this->position+1])){
            return false;
        }else{
            return true;
        }
    }

    public function valid()
    {
        return isset($this->collection->getItems()[$this->position]);
    }
}
