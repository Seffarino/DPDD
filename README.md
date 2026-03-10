# DPDD - Lancement local avec Docker

Cette configuration permet de lancer l'application PHP (Apache + `mod_rewrite`) avec une base MariaDB pour un environnement de développement/démo.

## Prérequis

- Docker
- Docker Compose

## Démarrage

1. Copier les variables d'environnement :

```bash
cp .env.example .env
```

2. Lancer les conteneurs :

```bash
docker compose up --build
```

3. Accéder à l'application :

- Site : http://localhost:8080
- Back-office (si utilisé) : http://localhost:8080/back/login

## Arrêt

```bash
docker compose down
```

Pour supprimer aussi les données MySQL locales :

```bash
docker compose down -v
```

## Base de données

Aucun dump SQL complet du projet n'étant fourni dans le dépôt, un schéma minimal a été ajouté dans `docker/db/init/01-schema.sql`.

Ce schéma permet :
- d'éviter les erreurs SQL au démarrage,
- d'afficher le site avec des données vides,
- de démontrer la navigation principale.

Si vous avez un dump officiel du projet, placez-le dans `docker/db/init/` (ou importez-le ensuite), puis recréez le volume DB pour repartir d'une base propre.
