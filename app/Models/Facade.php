<?php

namespace App\Models;

use App\Models\Usine;
use App\Models\Concession;
use App\Models\Facture;

class Facade
{
    public static function commander($marque, $model, $prix, Concession $concession) {
        $voiture = Usine::getVoiture($marque, $model, $prix);
        $concession->addVoiture($voiture);
        $facture = new Facture($voiture);

        return ["usine" => $voiture, "concession" => $concession, "facture" => $facture];
    }
}