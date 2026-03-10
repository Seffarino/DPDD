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

L'initialisation MariaDB est maintenant 100% dockerisée via `docker/db/init/` :

- `01-schema.sql` crée les tables réellement utilisées par l'application,
- `02-seed.sql` injecte automatiquement des données de démonstration (artistes, partenaires, billetterie, contacts, etc.).

⚠️ Les scripts d'init MariaDB ne s'exécutent que lors de la création initiale du volume.
Pour rejouer l'initialisation complète en local :

```bash
docker compose down -v
docker compose up --build
```

Compte admin de démo :
- login : `admin`
- mot de passe : `admin123`
