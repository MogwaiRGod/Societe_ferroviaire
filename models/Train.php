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

    /* LOGIQUE METIER */

    // fonction indiquant si le train suit une ligne spécifique
    private function suivreLigne($ligne) : bool {
        if($index = array_search($ligne, $this->lignes) !== FALSE) {
            return TRUE;
        }
        else {
            return FALSE;
        }
    }

    // fonction qui vérifie si le train contient un wagon permettant de transporter la marchandise entrée en argument
    private function checkWagons($marchandise) : bool {
        foreach($this->wagons as $wagon) {
            if($wagon->checkWagon($marchandise->getNatureMarchandise(), $marchandise->getNbUnites)) {
                return true;
            }
        }
    }

    // fonction indiquant si le train a les spécificités requises pour le trajet demandé
    public function checkTrain($ligne, $marchandise, $date) : bool {
        if ($this->suivreLigne($ligne) && $this->checkWagons($marchandise) && $this->dateDepart >= $date) {
            return TRUE;
        }
        else {
            return FALSE;
        }
    }
}