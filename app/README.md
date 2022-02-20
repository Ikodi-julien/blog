# PROJET IKODI-BLOG

## Pourquoi ?

-   Pour passer mon blog wordpress sur un application que j'aurai créée de A à Z.
-   Pour réaliser une application avec Laravel.
-   Pour réaliser une autre application avec Next.js (en deuxième partie de projet).
-   Pour réaliser un projet multiplateforme, incluant PHP/Laravel/Node.js/Next.js/React dans un environnement Docker.

## Comment ?

-   Dans un premier temps, mettre en place le blog avec Laravel + Mariadb :
    -   Définir les user cases, features,
    -   Faire les wireframes,
    -   Coder l'app avec Laravel + Mariadb.
-   Dans un deuxième temps, refaire un blog avec Next.js :
    -   Mêmes user cases, features,
    -   Faire nouveau wireframes,
    -   Coder l'app avec Next.js + même Mariadb.

## User cases

En tant que visiteur, je veux :

-   Pouvoir lire un article afin d'apprendre des choses,
-   Pouvoir lister les articles afin de choisir quoi lire,
-   Pouvoir trier les articles par catégorie afin de trouver ce qui m'intéresse,

En tant qu'auteur, en plus du visiteur, je veux :

-   Avoir accès a une interface privée afin d'uploader un article,
-   Pouvoir uploader un dossier contenant l'article au format markdown et les médias associés,

### Stack technique

-   Déploiement dev / prod : Docker,
-   Backend :
    -   database : Mariadb,
    -   une app Laravel,
    -   une app Next.js,
