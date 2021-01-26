<?php

namespace App\Models;

use App\Models\Voiture;

class Aggregation
{
    private $tab = [];

    public function __construct($tab) {
        $this->tab = $tab;
    }
    
    public function getIte() {
        return $this->tab;
    }
}