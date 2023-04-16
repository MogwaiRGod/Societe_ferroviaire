<?php

class Trajet {
    private $refTrajet;
    private $train;
    private $depart;
    private $arrivee;
    private $gares = [] /* Gare : tableau */;
    private $horDep;
    private $horArr;
    private $jours = [] /* int : jours de semaine où ce trajet est effectué ; 0 : ne passe pas, 1 : passe */;
    
    public function __construct(
        int $ref,
        Train $trn,
        String $dep,
        String $arr,
        $gr,
        String $hrDp,
        String $hrAr,
        $jrs
    ) {
        $this->refTrajet = $ref;
        $this->train = $trn;
        $this->depart = $dep;
        $this->arrivee = $arr;
        $this->gares = $gr;
        $this->horDep = $hrDp;
        $this->horArr = $hrAr;
        $this->jours = $jrs;
    }

}