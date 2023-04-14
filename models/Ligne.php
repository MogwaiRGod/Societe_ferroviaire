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
}