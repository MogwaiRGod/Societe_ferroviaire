<?php

class Client {
    private $civilite;
    private $nom;
    private $tel;
    private $adresse;
    private $email;

    public function __construct(String $civ, String $nm, String $numTel, String $eml, String $adr) {
        $this->civilite = $civ;
        $this->nom = $nm;
        $this->tel = $numTel;
        $this->adresse = $adr;
        $this->email = $eml;
    }

    /* GET */

    public function getCivilite() : string {
        return $this->civilite;
    }

    public function getNom() : string {
        return $this->nom;
    }

    public function getTel() : string {
        return $this->tel;
    }

    public function getAdresse() : string {
        return $this->adresse;
    }

    public function getEmail() : string {
        return $this->email;
    }

    /* LOGIQUE METIER */

    // fonction envoyant les données de la commande du client dans $_SESSION sous forme de tableau associatif
    // dans la clef 'commande'
    public function passerCommande(
        Marchandise $marchandise, 
        Gare $gareDep, 
        Gare $gareArr,
        /* date à partir de laquelle le client désire faire acheminer sa marchandise  */
        String $date
    ) {
        // on retourne le tableau de la commande
        return $cmd['commande'] = [
            'client' => $this,
            'marchandise' => $marchandise,
            'gareDep' => $gareDep,
            'gareArr' => $gareArr,
            'dateFret' => $date
        ];
    }
}