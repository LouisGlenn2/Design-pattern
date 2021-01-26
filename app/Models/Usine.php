<?php

namespace App\Models;

use App\Models\Merco;
use App\Models\Renault;

class Usine
{
    public static function getVoiture($marque, $model, $prix) {
        if(strtolower("Merco") == strtolower($marque)) {
            return new Merco($model, $prix);
        } elseif(strtolower("Renault") == strtolower($marque)) {
            return new Renault($model, $prix);
        } else {
            return null;
        }
    }
}