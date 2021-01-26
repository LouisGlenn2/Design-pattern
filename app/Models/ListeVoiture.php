<?php

namespace App\Models;

use App\Models\Aggregation;

class ListeVoiture
{
    protected $iterator;
    public function createIterator()
    {
        return $this->iterator = new Aggregation(array('Merco', 'BMW', 'Ferrari', 'Lambo', 'Fendt'));
    }

    public function getIterator(){
        return $this->iterator->getIte();
    }
}