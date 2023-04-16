<?php

class Train {
    private $refTrain;
    private $lignes /* Lignes : tableau */;
    private $wagons /* Wagon : tableau */;
    private $dateDepart;

    public function __construct($rfTrn, $lgns, String $dateDep, $wgns) {
        $this->refTrain = $rfTrn;
        $this->lignes = $lgns;
        $this->dateDepart = $dateDep;
        $this->wagons = $wgns;
    }

    /* GET */

    public function getLignes() {
        return $this->lignes;
    }

    public function getDate() : string {
        return $this->dateDepart;
    }

    public function getWagons() {
        return $this->wagons;
    }

}