<?php
/**
 * Script de test des modèles et DAO
 */

$testNature = new NatureMarchandise("essence");
var_dump($testNature);
echo "<hr>";

$clientTotal = new Client(
    "Patrick Pouyanné",
    "Tour Total
    2, place Jean-Millier
    La Défense
    92400 Courbevoie
    France"
);

$fret = new Marchandise (
    $testNature,
    100,
    $clientTotal
);
var_dump($fret);
echo "<hr>";