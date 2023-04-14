<?php

class Marchandise {
    private $natureMarchandise;
    private $nbUnites;
    private $client;

    public function __construct(
        NatureMarchandise $natMar, 
        int $nbUn, 
        Client $cl
    ) {
        $this->natureMarchandise = $natMar;
        $this->nbUnites = $nbUn;
        $this->client = $cl;
    }

    /* GET */

    public function getNbUnites() : int {
        return $this->nbUnites;
    }

    public function getNatureMarchandise() : NatureMarchandise {
        return $this->natureMarchandise;
    }

    public function getClient() : Client {
        return $this->client;
    }
}