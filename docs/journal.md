## Le 04/03/2022

- Rédiger un article sur la création du blog avec Laravel ->
- Finaliser le design ->

## Le 03/03/2022

Objectifs du jour:

- Revoir design d'un post -> ok (commit)
- 1er deploy:
  - DNS -> ok
  - config nginx:
    - upstream -> ok
    - sites-availables .conf -> ok
    - sites-enables symlink -> ok
  - certbot / https -> ok
  - Faire et tester docker-compose-prod:
    - Ajout env vars pour db -> ok (commit pour deploy)
    - Mise à jour Readme avec consignes install prod -> ok
  - Il est vivant !!! -> yes ! (commit DOC)
- Mise en forme d'un bloc 'code' pour les posts -> ok (commit)
- Ajouter 2 ou 3 autres articles -> ok

_Issues_

- Mettre en forme les articles sur un même model -> ok
- Les liens des boutons du Héro ne sont pas définis -> ok (commit)

## Le 01/03/2022

Objectifs du jour :

- Faire middleware contrôle accès /admin -> ok
  commit -> ok
- Gérer le disable du lien de la page admin -> ok
  commit -> ok
- Revoir design navbar -> ok
- Revoir design latest posts -> ok
  commit ->

## Le 29/02/2022

Objectifs du jour :

- Ajouter les catégories aux posts, avec relation selon MCD svp :
  - Faire un seeder pour les catégories -> ok,
  - Faire relation manyToMany entre categories et posts -> ok,
    commit -> ok
  - Ajouter la liste des catégories dans un select au create d'un nouveau post ->
    ok
  - Création d'un AdminController pour gérer les catégories -> ok
  - Faire migration pour ajout table intermédiaire post_category -> ok
  - La création d'un post avec une catégorie fonctionne -> ok
  - La création d'un post avec plusieurs catégories fonctionne -> ok
    commit -> ok
- Faire seeding posts -> ok
  commit -> ok
- Faire le tri des posts selon catégorie -> ok
  commit -> ok
- Afficher les derniers posts dans le composant "Articles réçents" -> ok (plus compliqué que prévu, pas vraiment trouvé comment récupérer un post et ses catégories dans le même objet, les icons bootstrap et fontawesome pas terribles).
  commit -> ok
- Formulaire de connexion + protéger la route admin:
  - Faire page formulaire de connexion -> ok
  - Faire method connexion -> ok
    commit -> ok

## Le 28/02/2022

Objectifs du jour :

- Mise en forme html et stockage de 3 articles demo -> ok
  commit -> ok
- Affichage des articles demo dans la vue 'list':
  - Enregistrement des meta données en db:
    - Création d'un formulaire de saisie -> ok
    - Création de la route et du controller -> ok
    - Enregistrement en db -> ok
      commit -> ok
    - Afficher la liste de posts -> ok
    - Modifier la migration et le controller pour meilleur insertion en db -> ok
      commit -> ok
- Affichage d'un post :
  - Ajout d'un volume avec docker-compose pour récupérer les posts -> ok
  - Affichage d'un post d'après le titre dans l'url -> ok
    commit -> ok
- Voir comment persister les données db avec docker -> ok (ajout d'un volume en lien avec host pour les datas)
  commit -> ok
- Fix lien img des posts, avec docker-compose le volume virtuel posts_html de larablog est passé dans /public + commit -> ok

## Le 27/02/2022

Objectifs du jour :

- Page affichage des articles :
  - Création des composants selon wireframe + css de base -> ok
    commit -> ok
- Création des modeles selon mcd et migrations :
  - Post -> ok
  - Message -> ok
  - Category -> ok
    commit -> ok

## Le 26/02/2022

Objectifs du jour :

- app Laravel :
  - Mise en place composants sur page d'accueil. -> ok
  - Ajouter bootstrap css -> ok
  - css de base avec bootstrap :
    - navbar -> ok
    - footer -> ok
    - main :
      - héro -> ok
      - section articles récents -> ok
        Commit -> ok

## Le 25/02/2022

Objectifs du jour :

- Faire le MCD.
  - Lister et décrire les modèles -> ok
  - Faire le shéma MCD -> ok

Mettre en lien le MCD et commit -> ok

## Le 22/02/2022

Objectifs du jour :

- Finaliser les composants des vues dans le README -> ok
- Faire les wireframes pour l'app Laravel
  - '/' :
    - mobil -> ok
    - desktop -> ok
  - '/{catégorie}' :
    - mobil -> ok
    - desktop -> ok
  - '/{catégorie}/{titre_article}' :
    - mobil -> ok
    - desktop -> ok

Mettre en lien les wireframes et commit -> ok

## Le 21/02/2022

README complété et ajout du journal.

Actuellement le setup est ok avec Laravel + mariadb.
Tentative d'ajout d'image node.js avec next.js en Dockerfile
=> Incroyable ! Il semblerait que cela fonctionne du premier coup !!!

En résumé :

- Setup docker / docker-compose d'une image mariadb + image laravel + image node avec next.js
  - app laravel sur port 6500 -> ok
  - app next.js sur port 6600 -> ok

-> je suis content, je commit !

## Le 20/02/2022

Rédaction premier jet README.md
