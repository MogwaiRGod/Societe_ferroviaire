<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Société ferroviaire</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Diane">
    <!-- <link rel="stylesheet" href="style/root.css"> -->
    <!-- <link rel="stylesheet" href="style/style.css"> -->
</head>

<body>
    <div id="container">
        <pre>
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
?>
        </pre>
    </div>
</body>
</html>