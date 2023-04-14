<?php

class NatureMarchandise {
    protected $nomNature;
    protected $uniteMesure;

    public function __construct(String $nmNtr) {
        $this->nomNature = $nmNtr;
        $this->uniteMesure = $this->definirUnite($nmNtr);
    }

    private function definirUnite() : string {
        switch ($this->nomNature) {
            case 'essence':
                return 'm^3';
                break;
            case 'bois':
                return 'stères';
                break;
            default:
                return $this->nomNature;
        }
    }

    /* GET */

    public function getUniteMesure() : string {
        return $this->uniteMesure;
    }

    public function getNomNature() : string {
        return $this->nomNature;
    }
}