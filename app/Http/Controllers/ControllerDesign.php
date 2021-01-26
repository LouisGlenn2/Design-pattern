<?php

namespace App\Http\Controllers;
use App\Models\ModelSingleton;
use App\Models\Usine;
use App\Models\Facade;
use App\Models\Concession;
use App\Models\ListeVoiture;
use App\Models\Sujet;
use App\Models\observeur;

use Illuminate\Http\Request;


class ControllerDesign extends Controller
{
    function singleton()
    {
        $a = ModelSingleton::getInstance();
        $b = ModelSingleton::getInstance();

        return view('singleton', ['a'=>$a, 'b'=>$b]);
    }

    public function fabrique() {
        $merco1 = Usine::getVoiture("merco", "Merco 1", 1500000);
        $merco2 = Usine::getVoiture("merco", "Merco 2", 1000000);
        $renault1 = Usine::getVoiture("Renault", "Renault 1", 12000);
        $renault2 = Usine::getVoiture("Renault", "Renault 2", 9000);

        return view('fabrique', ['merco1' => $merco1, 'merco2' => $merco2, 'renault1' => $renault1, 'renault2' => $renault2]);
    }

    public function facade() {
        $lannion =  new Concession("Concession de Lannion");
        $brest =  new Concession("Concession de Brest");

        $facade1 = Facade::commander("Merco", "Merco1", 15000000, $brest);
        $facade2 = Facade::commander("Renault", "Renault1", 1000, $lannion);
        $facade3 = Facade::commander("Merco", "Merco2", 10545400, $brest);
        $facade4 = Facade::commander("Renault", "Renault2", 9000, $lannion);

        $concessions = [$lannion, $brest];
        $usines = [$facade1['usine'], $facade2['usine'], $facade3['usine'], $facade4['usine']];
        $factures = [$facade1['facture'], $facade2['facture'], $facade3['facture'], $facade4['facture']];
        

        return view('facade', ['usines' => $usines, 'concessions' => $concessions, 'factures' => $factures]);
    }
    
    public function iterator(){
        $listeVoiture = new ListeVoiture;
        $listeVoiture->createIterator();

        return view('iterator',["listeVoiture"=>$listeVoiture->getIterator()]);
    }

    public function observeur(){
        $sujet = new sujet("Initial");
        $observeur1 = new Observeur();
        $observeur2 = new Observeur();
        $sujet->addObserveur($observeur1);
        $sujet->addObserveur($observeur2);

        return view('observeur', ['sujet'=>$sujet, 'observeur1'=>$observeur1, 'observeur2'=>$observeur2]);
    }
}
