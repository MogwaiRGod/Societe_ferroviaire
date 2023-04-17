<?php

class CrudController {

    // controller appelant la page du formulaire correspondant
    // ou qui instancie un modèle correspondant, puis son DAO afin de l'ajouter à la BDD
    public function ajout($model) {

        if($_SERVER["REQUEST_METHOD"] !== "POST"){
            // affichage du formulaire client
            $formName = strtolower($model);
            include(ROOT . "/views/forms/form_$formName.php");
        }
        else {
            // on instancie le DAO correspondant
            $nomDAO = $model.'DAO';
            $DAO = new $nomDAO;

            // récupération des attributs du modèle
            $mod = new $model;
            $tabAttributes = $mod->getAttributes();

            // va contenir les champs de la table
            $fields = [];

            // on créé un objet (modèle) avec les paires clefs/attributs récupérées
            $data = new $model;

            // on instancie les attributs avec les valeurs correspondantes contenues dans POST
            foreach($tabAttributes as $key => $tab) {
                // e.g $key = civilite
                // => $$key = $civilite
                // et $_POST[$key] <=> $_POST[$civilite]
                // => e.g $key -> "M."

                // les valeurs de mes modèles sont en private => j'ai des méthodes set pour attribuer des valeurs aux attributs
                // à commenter et décommenter le bloc de code en-dessous si les attributs sont publics
                $methode = "set" . $key;
                // on attribue les valeurs aux attributs
                $data->$methode($_POST[$key]);
                // echo $_POST[$key];
                
                // si les attributs sont publics :
                // $data->$key = $_POST[$key];
            }

            // on appelle le DAO avec la méthode demandée
            $DAO->create($data);
        }
    }
}