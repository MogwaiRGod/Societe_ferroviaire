<?php

class CrudController {
    // controller appelant le modèle correspondant
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

            // on instancie les attributs avec les valeurs correspondantes contenues dans POST
            foreach($tabAttributes as $key => $tab) {
                // e.g $key = civilite
                // => $$key = $civilite
                // et $_POST[$key] <=> $_POST[$civilite]
                // => e.g $key -> "M."
                $$key = $_POST[$key];
            }

            // on créé un objet (modèle) avec les paires clefs/attributs récupérées
            $data = new $model(
                $civilite,
                $nom,
                $tel,
                $email,
                $adresse
            );

            // var_dump($data);
            // on appelle le DAO avec la méthode demandée
            $DAO->create($data);
        }
    }
}