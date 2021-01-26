<?php

namespace App\Models;

class sujet
{
    protected $lesObserveurs = array();
    protected $texte;

    public function __construct($leTexte)
    {
        $this->texte = $leTexte;
    }

    public function addObserveur($observeur)
    {
        array_push($this->lesObserveurs, $observeur);
    }

    public function suppObserveur($observeur)
    {
        unset($this->lesObserveurs[array_search($observeur, $this->lesObserveurs)]);
    }
    
    public function update($newTexte)
    {
        $this->texte = $newTexte;
        foreach($this->lesObserveurs as $observ) 
        {
            $observ->addNotif();
        }
    }

    public function getObserveur()
    {
        return $this->lesObserveurs;
    }

    public function getTexte()
    {
        return $this->texte;
    }
}
