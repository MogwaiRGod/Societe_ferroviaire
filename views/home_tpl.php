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
 * Script de test
 */

// la société de transport ferroviaire (lol)
$UPS = new Societe("UPS", "Nando Cesarone", "ups@transport.com");

// 1/ le client veut transporter une marchandise d'une gare à une autre 
// (10 voitures de paris à toulouse, 10 voitures de paris a limoges) 

// le client
$toyota = new Client(
    "M.", 
    "Akio Toyoda", 
    "+3312345678", 
    "toyota@toyota.jp", 
    "Toyota, Aichi
    Japon"
);

// var_dump($toyota->getAttributes());
$test = new ClientDAO;
$test->create(new Client);

// les marchandises
$voiture = new NatureMarchandise("voitures", "vtr" /* unité de mesure des voitures */);
$march1 = new Marchandise(
    $voiture,
    10,
    $toyota
);
$march2 = $march1;

// le client passe ses commandes
$cmd1 = $toyota->passerCommande(
    $march1,
    new Gare("Paris"),
    new gare ("Toulouse"),
    "2023-04-07"
);
$cmd2 = $toyota->passerCommande(
    $march2,
    new Gare("Paris"),
    new gare ("Limoges"),
    "2023-04-07"
);

// 2/ la société vérifie qu'elle PEUT transporter les marchandises :
//     - villes/gares desservies 
//     - wagon disponibles (nombre / capacité)
//     - dates / trajets (à partir de quel nombre de wagon on fait demarrer le train )
//     - on valide et facture le client (abstraitement !)

// $UPS->validerCommande(
//     $cmd, 
//     new Trajet(
//         54567875,
//         new Train(
//             "HTTU 86890866",
//             [
//                 new Ligne(
//                     new Gare("Dubai"),
//                     new Gare('Ankara'),
//                     new Gare("Münich"),
//                     new Gare ("Agde"),
//                     new Gare ("Montpellier")
//                 )
//             ],
//             "04-30-2023",
//             [
//                 new Wagon(
//                     $essence,
//                     300, 
//                     3,
//                 ),
//                 new Wagon(
//                     $essence,
//                     300, 
//                     2,
//                 ),
//                 new Wagon(
//                     $essence,
//                     300, 
//                     1,
//                     200
//                 ),
//                 new Wagon(
//                     $essence,
//                     300, 
//                     0,
//                     300
//                 )
//             ]
//         ),
//         "04-30-2023",
//         "05-03-2023",
//         new Gare ("Montpellier"),
//         "06:09",
//         "22:54",
//         [0,1,0,1,1,0,0]
//     )
// );
?>
        </pre>
    </div>
</body>
</html>