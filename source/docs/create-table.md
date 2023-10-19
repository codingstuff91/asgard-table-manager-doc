---
title: Gestion des tables
description: Getting started with Jigsaw's docs starter template is as easy as 1, 2, 3.
extends: _layouts.documentation
section: content
---
# Liste des tables par session {#getting-started}

Pour connaitre l'ensemble des tables ouverte pour chaque session, il vous suffit de cliquer sur la date de la carte de la session qui vous interesse.

<img class="block m-auto" src="/assets/img/sessions-index.png" alt="Screenshot of search results" />

## Création d'une nouvelle table d'un jeu existant

Pour créer une nouvelle table, il faut d'abord se rendre sur la page d'affichage d'une session.

Ensuite il faudra cliquer sur le bouton "Ouvrir une table"

<img class="block m-auto" src="/assets/img/new-table.png" alt="Screenshot of search results" />

Les tables de jeux sont reparties en 4 catégories

<img class="block m-auto" src="/assets/img/games-categories.png" alt="Screenshot of search results" />

Choisissez d'abord une catégorie de jeux parmi l'une des 4 mentionnées ci-dessus

Ensuite choisissez votre jeu parmi la liste des jeux (filtrée en fonction du choix précédent)

> La liste des jeux sera actualisé en fonction de votre choix de catégorie

Enfin, il faudra ensuite définir un nombre de joueurs maximum à votre table, définir un nombre de points (valable uniquement pour les jeux wargame) et enfin l'heure de début de la partie.

> Si vous avez oublié de saisir une de ces informations une message d'erreur apparaitra en dessous des champs concernés.

Pour finir, vous pouvez renseigner une description supplémentaire à votre table mais sachez qu'elle est facultative.

## Ajouter un jeu inédit

Si le jeu pour lequel vous souhaitez ouvrir une table n'existe pas dans la liste des jeux proposés, vous pouvez l'ajouter en cliquant sur le bouton

<img class="block m-auto" src="/assets/img/add-game.png" alt="Screenshot of search results" />

Il faudra alors sélectionner une catégorie de jeu et donner le titre du jeu concerné.

> Une fois cela fait vous serez redirigé vers la page de création de table.

## Nombre de joueurs maximum

Soyez vigilants dans le nombre de joueurs maximum que vous renseignerez.

Si le nombre maximum de joueurs est atteint, plus aucune inscription à la table ne sera possible.

> A la création d'une table l'organisateur est automatiquement inscrit comme joueur.

> N'oubliez pas de le prendre en compte lorsque vous saisissez le nombre de joueurs maximum de votre table.

## Validation et envoi notification discord

Si vous avez saisi toutes les informations demandées, la table sera créée dans la base de données de l'application.

Une notification sera envoyée sur le serveur discord automatiquement pour prévenir l'association ASGARD de l'ajout de votre nouvel table

Cette notification sera envoyée dans le channel correspondant au jour où aura lieu votre table (Vendredi, Samedi, Dimanche ou autre jour).

La notification comportera entre autres le nom du jeu, le nom de l'organisateur, la date de la table et l'heure de début.
