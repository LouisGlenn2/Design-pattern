<?php

namespace App\Models;

use App\Models\Voiture;

class Renault extends Voiture
{
    private $model;
    private $prix;

    public function __construct($model, $prix) {
        $this->model = $model;
        $this->prix = $prix;
    }

    public function getModel() {
        return $this->model;
    }

    public function getPrix() {
        return $this->prix;
    }
}