<?php

class Wagon {
    private $nature;
    private $capacite;
    private $train;

    public function __construct(
        NatureMarchandise $nt,
        int $cpct, 
        Train $trn
    ) {
        $this->nature = $nt;
        $this->capacite = $cpct;
        $this->train = $trn;
    }

    /* GET */

    public function getNature() : NatureMarchandise {
        return $this->nature;
    }

    public function getCapacite() : int {
        return $this->capacite;
    }

    public function getTrain() : Train {
        return $this->train;
    }
}