<?php

abstract class DAO {
    protected $dbCo;

    /* CREATE */

    // fonction permettant d'ajouter une rangée à une table selon l'objet entré en argument
    // càd que l'objet (modèle) va servir à créer une entrée dans la BDD dans la table correspondante
    // retourne un booléen selon si l'opération a réussi
    public function create($model /* objet */) : bool {
        require_once ROOT . "/DAO/database/db_connect.php";
        // connexion à la BDD
        $dbCo = connectToDB();

        // on récupère le nom de la table
        $tableName = $model->returnTable($model);

        // les propriétés du modèle vont devenir des champs de la table
        $fields = $model->getAttributes();

        // $values est un tableau qui va récupérer les valeurs des attributs de l'objet entré en argument
        $values = [];

        // requête dynamique
        $statement = "INSERT INTO " . "`" . $tableName . "`" . "(";
        foreach($fields as $field => $cell) {
            array_push($values, $cell);
            $statement .= $field . ",";
        }
        // on enlève la dernière virgule
        $statement = substr($statement, 0, -1);
               
        // on ferme la parenthèse et on continue la requête
        $statement .= ") VALUES (";

        // requête préparée : on va mettre des valeurs inconnues à insérer pour tous les champs de la table
        for($i = 0; $i < count($fields); $i++) {
            $statement .= "?, ";
        }

        // on enlève la dernière virgule et l'espace
        $statement = substr($statement, 0, -2);

        // on ferme la parenthèse et on termine la requête
        $statement .= ");";

        // préparation de la requête
        $query = $dbCo->prepare($statement);

        // binding + exécution de la requête
        // on bind les valeurs qu'il y a dans $_POST puis que les create se font à partir de valeurs de formulaires
        try {
            $query->execute($values);
        }
        catch (PDOException $e) {
            $e->getMessage();
            return FALSE;
        }

        return TRUE;
    }

    /* READ */

    /* UPDATE */

    /* DELETE */
}