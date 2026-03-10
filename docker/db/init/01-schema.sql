CREATE TABLE IF NOT EXISTS administrateur (
  id INT AUTO_INCREMENT PRIMARY KEY,
  login VARCHAR(191) NOT NULL,
  password VARCHAR(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS DPDD_artiste (
  artiste_id INT AUTO_INCREMENT PRIMARY KEY,
  artiste_nom VARCHAR(255) NOT NULL,
  artiste_date VARCHAR(255) DEFAULT NULL,
  artiste_style VARCHAR(255) DEFAULT NULL,
  artiste_video VARCHAR(255) DEFAULT NULL,
  artiste_provenance VARCHAR(255) DEFAULT NULL,
  artiste_description TEXT,
  artiste_youtube VARCHAR(255) DEFAULT NULL,
  artiste_twitter VARCHAR(255) DEFAULT NULL,
  artiste_instagram VARCHAR(255) DEFAULT NULL,
  artiste_facebook VARCHAR(255) DEFAULT NULL,
  artiste_lieu VARCHAR(255) DEFAULT NULL,
  artiste_image VARCHAR(255) DEFAULT NULL,
  artiste_site_web VARCHAR(255) DEFAULT NULL,
  artiste_spotify VARCHAR(255) DEFAULT NULL,
  artiste_tarif VARCHAR(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS billetterie (
  billet_id INT AUTO_INCREMENT PRIMARY KEY,
  billet_date VARCHAR(255) DEFAULT NULL,
  billet_libelle VARCHAR(255) DEFAULT NULL,
  billet_description TEXT,
  billet_lien VARCHAR(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS contact (
  contact_id INT AUTO_INCREMENT PRIMARY KEY,
  contact_contenu TEXT,
  contact_ordre INT DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS categorie_partenaires (
  categorie_id INT AUTO_INCREMENT PRIMARY KEY,
  categorie_libelle VARCHAR(255) NOT NULL,
  categorie_ordre INT DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS partenaires (
  partenaire_id INT AUTO_INCREMENT PRIMARY KEY,
  partenaire_url VARCHAR(255) DEFAULT NULL,
  partenaire_image VARCHAR(255) DEFAULT NULL,
  partenaire_ordre INT DEFAULT 0,
  categorie_id INT DEFAULT NULL,
  CONSTRAINT fk_partenaires_categorie FOREIGN KEY (categorie_id) REFERENCES categorie_partenaires(categorie_id) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS aftermovie (
  aftermovie_id INT AUTO_INCREMENT PRIMARY KEY,
  aftermovie_url VARCHAR(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS mise_en_page (
  id INT PRIMARY KEY,
  aftermovie_titre VARCHAR(255) DEFAULT '',
  pratique TEXT,
  programmation_titre VARCHAR(255) DEFAULT '',
  presentation TEXT,
  billetterie TEXT,
  titre_entete VARCHAR(255) DEFAULT '',
  image_entete VARCHAR(255) DEFAULT '',
  playlist TEXT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO mise_en_page (id, aftermovie_titre, pratique, programmation_titre, presentation, billetterie, titre_entete, image_entete, playlist)
VALUES (0, '', '', '', '', '', '', '', '')
ON DUPLICATE KEY UPDATE id = id;
