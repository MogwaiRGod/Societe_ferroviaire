<?php

class Gare {
    private $nomVille;

    public function __construct(String $nmVl) {
        $this->nomVille = $nmVl;
    }

    /* GET */

    public function getVille() : string {
        return $this->nomVille;
    }
}