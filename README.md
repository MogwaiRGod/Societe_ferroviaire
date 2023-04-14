# Architecture du projet

```mermaid
graph TD;
  0['/'];
    0-->A(index.php);
    0-->B(.htaccess);
```

```mermaid
  graph TD;
  0['/'];
    0-->A[controllers];
```

```mermaid
  graph TD;
    0['/'];
    0-->B[models];
```


```mermaid
  graph TD;
    0['/'];
    0-->C[views];
```

```mermaid
  graph TD;
    0['/'];
    0-->D[utils];
  
    D-->I(router.php);
    D-->J(init.php);
    D-->K(autoload.php);
```

```mermaid
graph TD;
    0['/'];
    0-->E[DAO];
 
    E-->F[database];
      F-->G(db_info.php);
      F-->H(db_connect.php);
```

## Contenu détaillé

| Dossier | Fichier | Contenu |
|:--:|:--:|:--|
| /utils | init.php | Contient les imports de tous les fichiers /utils nécessaires au lancement/bon fonctionnement de l'app |
