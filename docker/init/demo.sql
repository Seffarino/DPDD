CREATE DATABASE IF NOT EXISTS DPDD CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE DPDD;

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

DROP TABLE IF EXISTS partenaires;
DROP TABLE IF EXISTS categorie_partenaires;
DROP TABLE IF EXISTS billetterie;
DROP TABLE IF EXISTS aftermovie;
DROP TABLE IF EXISTS contact;
DROP TABLE IF EXISTS DPDD_artiste;
DROP TABLE IF EXISTS mise_en_page;
DROP TABLE IF EXISTS administrateur;

CREATE TABLE administrateur (
                                admin_id INT AUTO_INCREMENT PRIMARY KEY,
                                login VARCHAR(100) NOT NULL UNIQUE,
                                mdp VARCHAR(255) NOT NULL
);

CREATE TABLE mise_en_page (
                              id INT NOT NULL PRIMARY KEY,
                              aftermovie_titre VARCHAR(255) NOT NULL,
                              pratique MEDIUMTEXT NOT NULL,
                              programmation_titre VARCHAR(255) NOT NULL,
                              presentation MEDIUMTEXT NOT NULL,
                              billetterie MEDIUMTEXT NOT NULL,
                              titre_entete VARCHAR(255) NOT NULL,
                              image_entete VARCHAR(255) NOT NULL,
                              playlist MEDIUMTEXT NOT NULL
);

CREATE TABLE DPDD_artiste (
                              artiste_id INT AUTO_INCREMENT PRIMARY KEY,
                              artiste_nom VARCHAR(255) NOT NULL,
                              artiste_date DATE NOT NULL,
                              artiste_style VARCHAR(255) NOT NULL,
                              artiste_video VARCHAR(100) DEFAULT '',
                              artiste_provenance VARCHAR(255) DEFAULT '',
                              artiste_description MEDIUMTEXT NOT NULL,
                              artiste_youtube VARCHAR(255) DEFAULT '',
                              artiste_twitter VARCHAR(255) DEFAULT '',
                              artiste_instagram VARCHAR(255) DEFAULT '',
                              artiste_facebook VARCHAR(255) DEFAULT '',
                              artiste_lieu VARCHAR(255) DEFAULT '',
                              artiste_image VARCHAR(255) NOT NULL,
                              artiste_site_web VARCHAR(255) DEFAULT '',
                              artiste_spotify VARCHAR(255) DEFAULT '',
                              artiste_tarif VARCHAR(255) DEFAULT ''
);

CREATE TABLE contact (
                         contact_id INT AUTO_INCREMENT PRIMARY KEY,
                         contact_contenu MEDIUMTEXT NOT NULL,
                         contact_ordre INT NOT NULL DEFAULT 0
);

CREATE TABLE categorie_partenaires (
                                       categorie_id INT AUTO_INCREMENT PRIMARY KEY,
                                       categorie_libelle VARCHAR(255) NOT NULL,
                                       categorie_ordre INT NOT NULL DEFAULT 0
);

CREATE TABLE partenaires (
                             partenaire_id INT AUTO_INCREMENT PRIMARY KEY,
                             partenaire_url VARCHAR(255) NOT NULL,
                             partenaire_image VARCHAR(255) NOT NULL,
                             categorie_id INT NOT NULL,
                             partenaire_ordre INT NOT NULL DEFAULT 0
);

CREATE TABLE aftermovie (
                            aftermovie_id INT AUTO_INCREMENT PRIMARY KEY,
                            aftermovie_url VARCHAR(100) NOT NULL
);

CREATE TABLE billetterie (
                             billet_id INT AUTO_INCREMENT PRIMARY KEY,
                             billet_date DATE NOT NULL,
                             billet_libelle VARCHAR(255) NOT NULL,
                             billet_description MEDIUMTEXT NOT NULL,
                             billet_lien VARCHAR(255) DEFAULT ''
);

-- admin / admin
INSERT INTO administrateur (login, mdp)
VALUES (
           'admin',
           '$2y$12$flGfUkw3koU2Sv5T4nBm3.ol3XNJ1hOclpsgHibBfp8jBdn.EdhEe'
       );

INSERT INTO mise_en_page (
    id,
    aftermovie_titre,
    pratique,
    programmation_titre,
    presentation,
    billetterie,
    titre_entete,
    image_entete,
    playlist
) VALUES (
             0,
             'Aftermovie',
             '<div><h2>Infos pratiques</h2><p>Festival de démonstration recréé avec des données factices.</p><p>Lieu : Chalon-sur-Saône.</p></div>',
             'Programmation',
             '<div><h2>DPDD — Démo locale</h2><p>Site festival avec back-office PHP/MySQL, routing personnalisé, gestion des contenus et médias.</p></div>',
             '<div><p>Billetterie de démonstration. Les liens sont fictifs.</p></div>',
             'Dancing People Don''t Die',
             '73893_00004-4220336415.png',
             '<iframe style="border-radius:12px" src="https://open.spotify.com/embed/playlist/37i9dQZF1DX4dyzvuaRJ0n?utm_source=generator" width="100%" height="352" frameborder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>'
         );

INSERT INTO DPDD_artiste (
    artiste_nom,
    artiste_date,
    artiste_style,
    artiste_video,
    artiste_provenance,
    artiste_description,
    artiste_youtube,
    artiste_twitter,
    artiste_instagram,
    artiste_facebook,
    artiste_lieu,
    artiste_image,
    artiste_site_web,
    artiste_spotify,
    artiste_tarif
) VALUES
      (
          'Nova Pulse',
          '2026-07-12',
          'Electro / Live',
          'dQw4w9WgXcQ',
          'France',
          '<p>Projet électro fictif utilisé pour démontrer la page programmation, les modales artistes et l''intégration vidéo.</p>',
          'https://www.youtube.com/watch?v=dQw4w9WgXcQ',
          '',
          'https://www.instagram.com/',
          'https://www.facebook.com/',
          'Grande scène',
          '73893_00004-4220336415.png',
          'https://example.com',
          'https://open.spotify.com/',
          '12€'
      ),
      (
          'Echo District',
          '2026-07-13',
          'Indie / Alternative',
          '',
          'Belgique',
          '<p>Second artiste factice pour tester les filtres par date et la grille de cartes.</p>',
          '',
          '',
          '',
          '',
          'Club',
          '25106_1008_CYRIL_cyr_9.jpg',
          '',
          '',
          'Gratuit'
      );

INSERT INTO contact (contact_contenu, contact_ordre) VALUES
                                                         ('<h3>Direction</h3><h4>Amayas Seffar</h4><p>Coordination du projet web et intégration du site.</p>', 1),
                                                         ('<h3>Communication</h3><h4>Équipe Démo</h4><p>Contact presse et informations festival.</p>', 2);

INSERT INTO categorie_partenaires (categorie_libelle, categorie_ordre) VALUES
                                                                           ('Institutionnels', 1),
                                                                           ('Médias', 2);

INSERT INTO partenaires (partenaire_url, partenaire_image, categorie_id, partenaire_ordre) VALUES
                                                                                               ('https://example.com', '73893_00004-4220336415.png', 1, 1),
                                                                                               ('https://example.com', '73893_00004-4220336415.png', 2, 2);

INSERT INTO aftermovie (aftermovie_url) VALUES
                                            ('dQw4w9WgXcQ'),
                                            ('3JZ_D3ELwOQ');

INSERT INTO billetterie (billet_date, billet_libelle, billet_description, billet_lien) VALUES
                                                                                           ('2026-07-12', 'Pass 1 jour', '<p>Accès à la soirée du 12 juillet. Tarif de démonstration.</p>', 'https://example.com'),
                                                                                           ('2026-07-13', 'Pass 1 jour', '<p>Accès à la soirée du 13 juillet. Tarif de démonstration.</p>', 'https://example.com'),
                                                                                           ('2026-07-12', 'Pass 2 jours', '<p>Accès complet au festival de démonstration.</p>', 'https://example.com');

SET FOREIGN_KEY_CHECKS = 1;