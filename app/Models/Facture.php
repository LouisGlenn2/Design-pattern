<?php

namespace App\Models;

use App\Models\Voiture;

class Facture
{
    private $texte;

    public function __construct(Voiture $voiture) {
        $this->texte = "Facture hors TVA : ".$voiture->getPrix()."€ pours \"".$voiture->getModel()."\"";
    }

    public function getTexte() {
        return $this->texte;
    }

    public function setTexte(Voiture $voiture) {
        $this->texte = "Facture Hors TVA : ".$voiture->getPrix()."€ pour \"".$voiture->getModel()."\"";
    }
}