<?php

class Ligne {
    private $gares /* Gare : tableau */;

    public function __construct($gr) {
        $this->gares = $gr;
    }
    
    /* GET */

    public function getGares() {
        return $gares;
    }

    public function addGare(Gare $newGare) : void {
        array_push($this->gares, $newGare);
    }

    /* LOGIQUE METIER */

    // fonction indiquant si la ligne passe par une gare entrée en argument
    public function passePar($gare) : bool {
        if($index = array_search($gare, $this->gares) !== FALSE) {
            return TRUE;
        }
        else {
            return FALSE;
        }
    }
}