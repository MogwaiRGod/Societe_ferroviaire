<?php

abstract class DAO {
    protected $dbCo;

    /* CREATE */

    public function create($model /* objet ? */) {
        require_once ROOT . "/DAO/database/db_connect.php";
        // connexion à la BDD
        $dbCo = connectToDB();

        // on récupère le nom de la table
        $tableName = $model->returnTable($model);

        // les propriétés du modèle vont devenir des champs de la table
        $fields = $model->getAttributes();
        // var_dump($fields);

        // requête dynamique
        $statement = "INSERT INTO " . $tableName . " (";
        foreach($fields as $field => $cell) {
            $statement .= $field . ",";
        }
        // on enlève la dernière virgule
        $statement = substr($statement, 0, -1);
               
        // on ferme la parenthèse et on continue la requête
        $statement .= ") VALUES (";

        // requête préparée : on va mettre des valeurs inconnues à insérer pour tous les champs dé la table
        for($i = 1; $i < count($fields); $i++) {
            $statement .= "?, ";
        }

        // on enlève la dernière virgule et l'espace
        $statement = substr($statement, 0, -2);

        // on ferme la parenthèse et on termine la requête
        $statement .= ");";
    }

    /* READ */

    /* UPDATE */

    /* DELETE */
}