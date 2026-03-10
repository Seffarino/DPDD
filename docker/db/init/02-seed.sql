SET NAMES utf8mb4;

INSERT INTO administrateur (login, mdp)
SELECT 'admin', '$2y$12$PB9vuZIt2PMjfEZu4.E6OuygRgI1PgIfkQdogPfhBWXCXWnkai9wu'
WHERE NOT EXISTS (SELECT 1 FROM administrateur WHERE login = 'admin');

UPDATE mise_en_page
SET
  aftermovie_titre = 'AFTERMOVIE',
  pratique = '<div class="size-small"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent quis risus eget lacus congue congue. Integer consequat dui ut lectus sodales, et faucibus justo malesuada.</p><p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Donec suscipit, lorem in vulputate posuere, libero mauris pretium felis, sit amet imperdiet neque est vitae nisi.</p></div>',
  programmation_titre = 'PROGRAMMATION 2026',
  presentation = '<h2>Festival Dancing People Don\'t Die</h2><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque faucibus sapien quis augue tristique, vitae faucibus ligula tristique. Proin sed diam sed ipsum convallis feugiat.</p><p>Curabitur tempus, odio ac feugiat efficitur, justo nibh vestibulum risus, eget sodales lacus augue eu turpis.</p>',
  billetterie = '<div class="size-small"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pharetra mauris id nibh gravida, non feugiat purus posuere. Les billets sont disponibles en ligne et sur place selon les stocks.</p></div>',
  titre_entete = 'DANCING PEOPLE DON\'T DIE',
  image_entete = 'https://images.unsplash.com/photo-1514525253161-7a46d19cd819?auto=format&fit=crop&w=1600&q=80',
  playlist = '<iframe style="border-radius:12px" src="https://open.spotify.com/embed/playlist/37i9dQZF1DX8NTLI2TtZa6" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>'
WHERE id = 0;

INSERT INTO DPDD_artiste (
  artiste_nom, artiste_date, artiste_style, artiste_video, artiste_provenance,
  artiste_description, artiste_youtube, artiste_twitter, artiste_instagram,
  artiste_facebook, artiste_lieu, artiste_image, artiste_site_web,
  artiste_spotify, artiste_tarif
) VALUES
(
  'Nova Echo', '2026-07-10', 'Electro Pop', 'dQw4w9WgXcQ', 'Lyon',
  'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi varius, lectus at feugiat dapibus, arcu mauris ultrices augue, nec posuere neque nisl vel justo.',
  'https://www.youtube.com/@lapenichechalon620',
  'https://twitter.com',
  'https://instagram.com',
  'https://facebook.com',
  'Scène Principale',
  'https://images.unsplash.com/photo-1470229722913-7c0e2dbbafd3?auto=format&fit=crop&w=900&q=80',
  'https://example.com',
  'https://open.spotify.com',
  '15€ prévente / 18€ sur place'
),
(
  'Les Braises Nocturnes', '2026-07-11', 'Indie Rock', 'kXYiU_JCYtU', 'Dijon',
  'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sodales volutpat lacus, a pretium nisl hendrerit vel. Vivamus sed eros non sem tempor vestibulum.',
  'https://www.youtube.com/@lapenichechalon620',
  'https://twitter.com',
  'https://instagram.com',
  'https://facebook.com',
  'Scène Rivière',
  'https://images.unsplash.com/photo-1501386761578-eac5c94b800a?auto=format&fit=crop&w=900&q=80',
  'https://example.com',
  'https://open.spotify.com',
  'Gratuit avant 18h / 12€ ensuite'
),
(
  'Pixel Sun', '2026-07-12', 'Techno Live', '2Vv-BfVoq4g', 'Paris',
  'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque luctus, mauris in tincidunt imperdiet, ipsum neque commodo massa, ac posuere ex odio eget ipsum.',
  'https://www.youtube.com/@lapenichechalon620',
  'https://twitter.com',
  'https://instagram.com',
  'https://facebook.com',
  'Chapiteau',
  'https://images.unsplash.com/photo-1429962714451-bb934ecdc4ec?auto=format&fit=crop&w=900&q=80',
  'https://example.com',
  'https://open.spotify.com',
  '20€ pass soirée'
);

INSERT INTO billetterie (billet_date, billet_libelle, billet_description, billet_lien) VALUES
('2026-07-10', 'Pass 1 jour', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ut diam in nunc auctor cursus et in justo.', 'https://www.helloasso.com'),
('2026-07-11', 'Pass 2 jours', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean cursus nisi et erat posuere, non feugiat turpis vulputate.', 'https://www.eventbrite.fr'),
('2026-07-12', 'Pass 3 jours', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eleifend ante sit amet sem porttitor lacinia.', 'https://www.billetweb.fr');

INSERT INTO contact (contact_contenu, contact_ordre) VALUES
('<h2>Programmation</h2><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br>programmation@dpdd.local</p>', 1),
('<h2>Presse</h2><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br>presse@dpdd.local</p>', 2),
('<h2>Bénévolat</h2><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br>benevoles@dpdd.local</p>', 3);

INSERT INTO categorie_partenaires (categorie_libelle, categorie_ordre) VALUES
('Institutionnels', 1),
('Médias', 2),
('Locaux', 3);

INSERT INTO partenaires (partenaire_url, partenaire_image, partenaire_ordre, categorie_id) VALUES
('https://www.chalon.fr', 'https://images.unsplash.com/photo-1451187580459-43490279c0fa?auto=format&fit=crop&w=400&q=80', 1, 1),
('https://www.bourgognefranchecomte.fr', 'https://images.unsplash.com/photo-1469474968028-56623f02e42e?auto=format&fit=crop&w=400&q=80', 2, 1),
('https://www.traxmag.com', 'https://images.unsplash.com/photo-1492684223066-81342ee5ff30?auto=format&fit=crop&w=400&q=80', 1, 2),
('https://www.radiofrance.fr', 'https://images.unsplash.com/photo-1514525253161-7a46d19cd819?auto=format&fit=crop&w=400&q=80', 2, 2),
('https://lapeniche.org', 'https://images.unsplash.com/photo-1459749411175-04bf5292ceea?auto=format&fit=crop&w=400&q=80', 1, 3),
('https://www.grandchalon.fr', 'https://images.unsplash.com/photo-1511379938547-c1f69419868d?auto=format&fit=crop&w=400&q=80', 2, 3);

INSERT INTO aftermovie (aftermovie_url) VALUES
('dQw4w9WgXcQ'),
('kXYiU_JCYtU'),
('2Vv-BfVoq4g');
