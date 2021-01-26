<?php

namespace App\Models;

abstract class Voiture
{
    public abstract function getModel();
    public abstract function getPrix();

    public function toString() {
        return $this->getModel()." : ".$this->getPrix()."€";
    }
}