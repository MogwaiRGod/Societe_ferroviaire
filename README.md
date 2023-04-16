# Architecture du projet

```mermaid
graph TD;
  0['/'];
    0-->A(index.php);
    0-->B(.htaccess);
    
    0-->C[controllers];
    0-->D[models];
    0-->E[views];
    0-->F[utils];
    0-->G[DAO];
    0-->N[core];

    C-->S(Home.php)
    
    E-->O(home_tpl.php)

    F-->H(router.php);
    F-->I(init.php);
    F-->J(autoload.php);
    F-->Q(constants.php);
    F-->R(error_handler.php);
  
    G-->K[database];
      K-->L(db_info.php);
      K-->M(db_connect.php);

    N-->P(Controller.php)
```

## Contenu détaillé

| Dossier | Fichier | Contenu |
|:--:|:--:|:--|
| /utils | init.php | Contient les imports de tous les fichiers /utils nécessaires au lancement/bon fonctionnement de l'app |
| /utils | constants.php | Contient les chemins web et locaux vers le projet (sous forme de constantes) |