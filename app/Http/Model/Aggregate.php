<?php

namespace App\Http\Model;

interface Aggregate{

    public function getItems();

    public function addVoiture($item);

    public function getIterator(): myIterator;
}
