# PROJET IKODI-BLOG

## Besoins et objectifs :

- Passer mon blog wordpress sur un application que j'aurai créée de A à Z.
- Réaliser une application avec Laravel afin d'utiliser le framework.
- Réaliser une autre application avec Next.js et les styled components (en deuxième partie de projet, pour le plaisir !).
- Le challenge de réaliser un projet multi plate-forme, incluant Mariadb/PHP/Laravel/Node.js/Next.js/React dans un même environnement Docker.

## Etapes (détails dans le journal)

- 1er temps, les besoins :

  - Définir les user cases, features,

- 2ème temps, le setup technique :

  - setup de l'app avec Docker + Laravel + Mariadb + Next.js
  - Tester la connexion db depuis laravel et Next.js,

- 3ème temps, la conception :
  - Faire les wireframes pour le blog Laravel,
  - Faire nouveau wireframes pour Next.js,
- 4ème temps, la réalisation :
  - Coder le blog avec Laravel + Mariadb,
  - Coder l'app avec Next.js + même Mariadb.

### Les besoins

En tant que visiteur, je veux :

- Pouvoir lire un article afin d'apprendre des choses,
- Pouvoir lister les articles afin de choisir quoi lire,
- Pouvoir trier les articles par catégorie afin de trouver ce qui m'intéresse,

En tant qu'auteur, en plus du visiteur, je veux :

- Avoir accès a une interface privée afin d'uploader un article,
- Pouvoir uploader un dossier contenant l'article au format markdown et les médias associés,

### Stack technique

- Déploiement :
  - dev : local/Docker,
  - prod : AWS-EC2/Nginx/Docker,
- Backend :
  - database : Mariadb,
  - une app Laravel,
  - une app Next.js,
