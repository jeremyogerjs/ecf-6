# ecf-6

## Prérequis
- php >= 7.4
- mySQL

## Introduction 
Ce projet a été réalisé en php/POO/PDO.

## Specification technique

Pour ce projet j'ai choisi d'utiliser bootstrap pour le css car c'est facile et rapide pour la mise en forme et creation de composant front-end.Par ailleurs je n'ai pas eu le temps d'implémenter la pagination, a la place j'ai intégrer un systeme de recherche.Il y a la possibilitées de rechercher les clients,les films et les locations via les liste dédiées.

#### Structure du projet
Pour la structure du projet je me suis inspiré du framework laravel pour ce faire dans le dossier app vous avez deux sous dossier (models, controlelrs) qui contienne toute la logique, chaque controller et model hérite d'un controller et d'un model générique.

#### Routing
Pour le routing je me suis inspiré d'un youtubeur nordCoders qui permet via une regex et d'un systeme similaire a laravel de passer le path et le controller ainsi que sa méthode pour déclenché la méthode.Vous trouverez le routing dans `index.php` a la racine du projet.

##### Login

J'ai instaurer l'authentification simple avec email et mot de passe on ne peut pas interagir avec le syteme si on ne l'est pas.

## Problémes rencontrés

J'ai eu du mal a la compréhension de la base de donnée a savoir les relations entre les tables et comment intégrer les fonctionnalitées demandé par le client.

## Installation en local

#### Etape 1 :
Pour l'installation rien de plus de simple rdv dans le dossier `documentation/bdd` récuperer les deux fichiers `.sql` et lancer respictivement `sakila-schema` et ensuite `sakila-data`.

#### Etape 2:
Une fois la base de donnée créer et les données insérer lancer un serveur en local `php -S localhost:8080`.

#### Etape 3:
Ensuite dans l'url taper <http://localhost:8080/admin> ceci vous créera automatiquement un compte pour tester les diverses fonctionnalitées. Bien entendu celle ci sera supprimer dès la mise en production.



#### Etape 4:
Une fois l'utilisateur créé rendez vous simplement a cette page <http://localhost:8080/> et connecté vous avec ses identifiants :
- Email : test@test.com
- mot de passe: test

Vous pouvez retrouvez ses informations dans le fichier `app/models/User.php` dans la méthode `store()`.

# ENJOY !!!

