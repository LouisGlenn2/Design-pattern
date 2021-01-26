<?php

namespace App\Models;

use App\Models\Voiture;

class Concession
{
    private $nom;
    private $tab_voiture;

    public function __construct($nom) {
        $this->tab_voiture = [];
        $this->nom = $nom;
    }

    public function getVoiture() {
        return $this->tab_voiture;
    }

    public function addVoiture(Voiture $voiture) {
        $this->tab_voiture[] = $voiture;
    }

    public function getNom() {
        return $this->nom;
    }

}