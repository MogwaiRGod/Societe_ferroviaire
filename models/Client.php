<?php

class Client {
    private $nom;
    private $adresse;

    public function __construct(String $nm, String $adr) {
        $this->nom = $nm;
        $this->adresse = $adr;
    }

    /* GET */

    public function getNom() : string {
        return $this->nom;
    }

    public function getAdresse() : string {
        return $this->adresse;
    }
    
}