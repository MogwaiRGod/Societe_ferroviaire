<?php

class Train {
    private $lignes /* tableau */;
    private $dateDepart;

    public function __construct(Ligne $lgns, String $dateDep) {
        $this->lignes = $lgns;
        $this->dateDepart = $dateDep;
    }

    /* GET */

    public function getLignes() {
        return $this->lignes;
    }

    public function getDate() : string {
        return $this->dateDepart;
    }

}