<?php

class Wagon {
    private $numero;
    private $nature;
    private $maxCap;
    private $capacite /* capacite OCCUPEE */;
    private $position /* position dans le train */;

    public function __construct(
        NatureMarchandise $nt,
        int $maxCap, 
        int $pos,
        int $cap = 0 /* wagon vide par défaut */
    ) {
        $this->nature = $nt;
        $this->position = $pos;
        if (isset($cap)) {
            $this->capacite = $cap;
        }
        else {
            $this->capacite;
        }
    }

    /* GET */

    public function getNature() : NatureMarchandise {
        return $this->nature;
    }

    public function getCapaciteMax() : int {
        return $this->maxCap;
    }

    public function getCapacite() : int {
        return $this->capacite;
    }

    public function getPosition() : int {
        return $this->position;
    }

    /* LOGIQUE METIER */

    public function afficherChargement() {
        return;
    }

    // fonction indiquant si le wagon a les spécifités requises pour la marchandise
    public function checkWagon($natureMarch, $quantiteMarch) : bool {
        if ($this->nature == $natureMarch && $this->capacite <= $quantiteMarch) {
            return TRUE;
        }
        else {
            return FALSE;
        }
    }
}