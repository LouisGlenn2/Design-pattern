<?php

namespace App\Models;

class Observeur
{
    private $notification;
    private $countNotif = 0;

    public function __construct()
    {
        $this->notification = "Création du sujet";
    }

    public function display()
    {
        return $this->notification;
    }

    public function addNotif() {
        $this->countNotif++;
        $this->notification = "Modifié ".$this->countNotif." fois.";
    }
}