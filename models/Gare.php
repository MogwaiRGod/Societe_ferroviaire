<?php

class Gare {
    private $nomVille;

    public function __construct(String $nmVl) {
        $this->nomVille = $nmVl;
    }

    /* METHODES MAGIQUES */

    // appelée en tant que chaîne, la gare affiche le nom de la ville où elle se situe
    public function __toString() {
        return $this->nomVille;
    }

    /* GET */

    public function getVille() : string {
        return $this->nomVille;
    }

    /* LOGIQUE METIER */

    // fonction qui retourne tous les trains passant par cette gare (sous forme de tableau)
    public function afficheTrains() {
        return;
    }
}