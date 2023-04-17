<?php

class Societe {
    private $nom;
    private $nomPdg;
    private $email;

    public function __construct(String $nm, String $nmP, String $eml) {
        $this->nom = $nm;
        $this->nomPdg = $nmP;
        $this->email = $eml;
    }

    /* GET */

    public function getNom() : string {
        return $this->nom;
    }

    public function getNomPdg() : string {
        return $this->nomPdg;
    }

    public function getEmail() : string {
        return $this->email;
    }

    /* LOGIQUE METIER */

    // fonction permettant de valider la commande d'un client càd d'ajouter la marchandise du client dans un wagon
    // et de màj la BDD en conséquance
    public function validerCommande(
        /* tableau associatif contenant les éléments de la commande */ 
        $cmd
    ) {
        // conversion de la date demandée par le client en un objet DateTime
        $dateDemandee = new DateTime($cmd['dateFret']);
        // var_dump($dateDemandee);

        // on cherche un trajet répondant aux besoins du client
    }

    // fonction retournant un trajet répondant aux besoins du client
    private function trouverTrajet() {
        ;
    }
}