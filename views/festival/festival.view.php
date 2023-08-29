<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>DPDD</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='views/festival/css/main.css'>
    <script src="views/festival/js/main.js"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="preload" as="image" href="./logo_dpdd.png" />
</head>

<body>

    <div class="modal_control">
        <header class="menuheader">
            <a href="#affiche" id="logo"><img src="views/festival/images/logo_dpdd.png" alt="logo du festival" width="113" height="113"></a>
            <ul class="navbar">
                <li> <a href="#info_anchor"> Qui SOMMES-NOUS?</a></li>
                <li><a href="#prog_anchor"> PROGRAMMATION</a> </li>
                <li> <a href="#billeterie_anchor">BILLETTERIE</a> </li>
                <li> <a href="#pratique_anchor">PRATIQUE</a></li>
                <li> <a href="#partenaire_anchor"> PARTENAIRES</a></li>
            </ul>
        </header>

        <nav role="navigation" id="burger">
            <div id="menuToggle">
                <input type="checkbox" />
                <span></span>
                <span></span>
                <span></span>
                <ul id="menu">
                    <a href="#affiche" id="logo"><img src="views/festival/images/logo_dpdd.png" alt="logo du festival" width="113" height="113"></a>
                    <li> <a href="#info_anchor"> INFOS</a></li>
                    <li><a href="#prog_anchor"> PROGRAMMATION</a> </li>
                    <li> <a href="#billeterie_anchor">BILLETTERIE</a> </li>
                    <li> <a href="#pratique_anchor">PRATIQUE</a></li>
                    <li> <a href="#partenaire_anchor"> PARTENAIRES</a></li>
                </ul>
            </div>
        </nav>

        <section id="affiche">
            <h1><?= $mep[0]['titre_entete'] ?></h1>
            <img src="<?= URL ?>views/festival/images/<?= $mep[0]['image_entete'] ?>" alt="une foule devant un concert">
            <div class="scroll_indicator">
                <span></span>
            </div>
        </section>
        <section id="info" class="has-text-white ">
            <a id="info_anchor" class="anchor"></a>
            <div data-aos="fade-left" class="presentation_div size-small">
                <?= $mep[0]['presentation'] ?>
                <div class="presentation_icons">
                    <div data-aos="fade-right" class="presentation_icon">
                        <i class="fas fa-music"></i>
                        <p>23 concerts en place</p>
                        <p>1 conférence</p>
                        <p> événements gratuits</p>
                        <p>1 plateau débat</p>
                    </div>
                    <div data-aos="fade-up" class="presentation_icon">
                        <i class="fas fa-tree"></i>
                        <p>produits locaux et régionaux</p>
                    </div>
                    <div data-aos="fade-left" class="presentation_icon">
                        <i class="fas fa-wheelchair"></i>
                        <p>accessible</p>
                    </div>
                </div>

            </div>

        </section>
        <section><?= $mep[0]['playlist'] ?></section>
        <section id="prog">
            <a id="prog_anchor" class="anchor"></a>
            <h1><?= $mep[0]['programmation_titre'] ?></h1>
            <div id="filters">
                <?php if (!empty($artistes)) echo '<button class="btn active" data-filtertarget="all">Tout</button>' ?>
                <?php foreach ($dates as $date) : ?>

                    <button class="btn" data-filtertarget="<?= $date['artiste_date'] ?>"><?php $date1 =  strtotime($date['artiste_date']);
                                                                                            $dateformated = date('d / m ', $date1);
                                                                                            echo $dateformated ?>
                    </button>
                <?php endforeach; ?>
            </div>
            <div class="item_container">

                <?php foreach ($artistes as $artiste) : ?>
                    <!--
                ARTIST FIGURES
            -->

                    <div data-aos="zoom-in" class="filter_div floating" data-filtervalue="<?= $artiste['artiste_date'] ?>" data-modal-target="<?= $artiste['artiste_id']  ?>">
                        <img src="views/festival/images/<?= $artiste['artiste_image'] ?>" alt="image de <?= $artiste['artiste_nom'] ?>">
                        <div class="art_overlay"></div>
                        <ul class="artiste_descr">
                            <li>
                                <h2><?= $artiste['artiste_nom'] ?></h2>
                            </li>
                            <li>
                                <h3><?= $artiste['artiste_style'] ?></h3>
                            </li>
                        </ul>


                    </div>
                    <!--
                ARTIST MODALS
            -->

                    <div id="<?= $artiste['artiste_id'] ?>" class="modal">
                        <div class="modal_content">
                            <div class="modal_header">
                                <div class="social_media">
                                    <img src="views/festival/images/<?= $artiste['artiste_image'] ?>" alt="image de <?= $artiste['artiste_nom'] ?>" width="100" height="100">
                                    <ul>
                                        <?php if (!empty($artiste['artiste_facebook']))
                                            echo "<li><a rel=\"noopener noreferrer\" target=\"_blank\" href=\"" . $artiste['artiste_facebook'] . "\"><i class=\"fab fa-facebook\" aria-hidden=\"true\"></i></a></li>"; ?>
                                        <?php if (!empty($artiste['artiste_twitter']))
                                            echo "<li><a rel=\"noopener noreferrer\" target=\"_blank\" href=\"" . $artiste['artiste_twitter'] . "\"><i class=\"fab fa-twitter\" aria-hidden=\"true\"></i></a></li>"; ?>
                                        <?php if (!empty($artiste['artiste_instagram']))
                                            echo "<li><a rel=\"noopener noreferrer\" target=\"_blank\" href=\"" . $artiste['artiste_instagram'] . "\"><i class=\"fab fa-instagram\" aria-hidden=\"true\"></i></a></li>"; ?>
                                        <?php if (!empty($artiste['artiste_youtube']))
                                            echo "<li><a rel=\"noopener noreferrer\" target=\"_blank\" href=\"" . $artiste['artiste_youtube'] . "\"><i class=\"fab fa-youtube\" aria-hidden=\"true\"></i></a></li>"; ?>
                                        <?php if (!empty($artiste['artiste_spotify']))
                                            echo "<li><a rel=\"noopener noreferrer\" target=\"_blank\" href=\"" . $artiste['artiste_spotify'] . "\"><i class=\"fab fa-spotify\" aria-hidden=\"true\"></i></a></li>"; ?>
                                        <?php if (!empty($artiste['artiste_site_web']))
                                            echo '<a rel=\"noopener noreferrer\" target=\"_blank\" href="' . $artiste['artiste_site_web'] . '"><h3>Site Web</h3></a>'; ?>
                                    </ul>
                                </div>
                                <div class="artist_info">
                                    <h3><?= $artiste['artiste_nom'] ?></h3>
                                    <h3><?php $date =  strtotime($artiste['artiste_date']);
                                        $dateformated = date('d / m', $date);
                                        echo $dateformated ?></h3>
                                    <h3><?= $artiste['artiste_lieu'] ?></h3>
                                    <h3><?= $artiste['artiste_style'] ?> / <?= $artiste['artiste_provenance'] ?></h3>
                                    <h3><?= $artiste['artiste_tarif'] ?></h3>

                                </div>
                                <div>

                                </div>
                                <span class="exit_button">&times;</span>
                            </div>
                            <div class="modal_descr">
                                <?= $artiste['artiste_description'] ?>
                            </div>
                            <?php if (!empty($artiste['artiste_video']))
                                echo '<div class="iframe_container"><iframe src="https://www.youtube.com/embed/' . $artiste['artiste_video']  . '" title="YouTube video player" allowfullscreen></iframe></div>'; ?>
                        </div>

                    </div>
                <?php endforeach; ?>
            </div>
        </section>
        <!--       BILLETERIE
            -->
        <section id="billeterie">
            <a id="billeterie_anchor" class="anchor"></a>
            <h1>BILLETTERIE</h1>

            <div class="billeterie_wrapper">
                <span class="exit_button">&times;</span>
                <?php foreach ($billetterie as $billet) : ?>
                    <?php $i = 0; ?>
                    <div data-aos="flip-down" class="billet billet1">
                        <p><?= date('d / m', strtotime($billet["billet_date"])) ?> <?= ' - ' . $billet['billet_libelle'] ?></p>
                        <?PHP if (strlen($billet["billet_lien"]) > 0) {
                            $lien_billet = $billet["billet_lien"];
                            echo '<a rel="noopener noreferrer" target="_blank" href=' . "$lien_billet" . '><i class="fas fa-receipt"></i></a>';
                        }
                        /* "<?= $billet['billet_lien'] ?>"><i class="fas fa-receipt"></i></a> */
                        ?>
                        <div class="hover_infos">
                            <p>Cliquez pour plus d'infos</p>
                        </div>
                        <div class="active_text">
                            <?= $billet['billet_description'] ?>
                        </div>
                    </div>
                <?php endforeach; ?>



            </div>
            <div>
                <?= $mep[0]['billetterie'] ?>
            </div>
        </section>
        <!-- AFTERMOVIE -->
        <section id="aftermovie">
            <h1><?= $mep[0]['aftermovie_titre'] ?></h1>
            <div class="video_caroussel_container">
                <div class="video_button" id="next_video"></div>
                <div class="video_button" id="previous_video"></div>
                <?php foreach ($caroussel_video as $video) : ?>
                    <div class="iframe_container hidden">
                        <iframe src="https://www.youtube.com/embed/<?= $video['aftermovie_url'] ?>" title="YouTube video player"></iframe>
                    </div>
                <?php endforeach; ?>

                <div class="nav_dots">
                    <?php foreach ($caroussel_video as $video) : ?>
                        <div class="nav_dot"></div>
                    <?php endforeach; ?>

                </div>
            </div>

        </section>
        <!--        PRATIQUE 
            -->
        <section id="pratique">
            <a id="pratique_anchor" class="anchor"></a>
            <h1>PRATIQUE</h1>
            <div class="pratique_wrapper">
                <div class="pratique_map">
                    <div><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10929.929207858553!2d4.8452!3d46.7751!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc38fe5353319dba7!2sLaP%C3%A9niche!5e0!3m2!1sfr!2sfr!4v1623004731538!5m2!1sfr!2sfr" width="450" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>

                </div>
                <?= $mep[0]['pratique'] ?>
            </div>
        </section>
        <!-- Accessibilité -->
        <div class="p_a_wrapper">
            <section id="accessibilite">
                <h1>ACCESSIBILITÉ</h1>
                <div class="accessibilite_wrapper">
                    <div data-aos="zoom-in-right">
                        <i class="fas fa-wheelchair"></i>
                        <h2>Accessible aux personnes à mobilité réduite</h2>
                        <h3>Un accès au parking du site de l’Abattoir est prévu pour les personne à mobilité réduite</h3>
                    </div>
                    <div data-aos="zoom-in">
                        <i data-aos="zoom-in" class="fas fa-volume-up"></i>
                        <h2>Prévention risque auditive</h2>
                        <h3>Des bouchons d’oreilles sont à disposition à l’entrée du festival</h3>
                    </div>
                    <div data-aos="zoom-in-left">
                        <i data-aos="zoom-in-left" class="fas fa-syringe"></i>
                        <h2>Prévention toxico et alcool</h2>
                        <h3>Une association sera présente sur le site de l’Abattoir</h3>
                    </div>
                </div>
            </section>
            <!-- Partenaires -->
            <section id="partenaires">
                <a id="partenaire_anchor" class="anchor"></a>
                <h1>PARTENAIRES</h1>
                <ul>
                    <?php foreach ($formated_partenaires as $categorie => $partenaires) : ?>

                        <li data-aos="fade-up"><a rel="noopener noreferrer" target="_blank" data-targetpartenaire="<?= $categorie ?>" class="partenaire_button"><?= $categorie ?> </a>
                            <div class="partenaire_container" id="<?= $categorie ?>">
                                <?php foreach ($partenaires as $partenaire) : ?>

                                    <?= '<a href=' . $partenaire['partenaire_url'] . '><img class="logo" src="views/festival/images/' . $partenaire['partenaire_image'] . '" alt="logo"></a>' ?>
                                <?php endforeach; ?>
                            </div>

                        </li>
                    <?php endforeach; ?>
                </ul>

            </section>

        </div>
        <section class="contact">
            <h1>Contacts</h1>
            <div class="contact_wrapper">
                <?php foreach ($contacts as $contact) : ?>
                    <div data-aos="flip-left" data-aos-duration="693" class="equipe_member">
                        <?= $contact['contact_contenu'] ?>
                    </div>
                <?php endforeach; ?>

            </div>
        </section>
        <footer>
            <div class="footer_social">
                <p>Follow us :
                    <a rel="noopener noreferrer" target="_blank" href=" https://www.facebook.com/dancingpeopledontdie/"><i class="fab fa-facebook" aria-hidden="true"></i></a>
                    <a rel="noopener noreferrer" target="_blank" href="https://www.instagram.com/dancing_people_dont_die/"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                    <a rel="noopener noreferrer" target="_blank" href="https://www.youtube.com/@lapenichechalon620/featured/"><i class="fab fa-youtube" aria-hidden="true"></i></a>
                </p>
            </div>
            <div class="mentions_legales">
                <p>Le Festival Dancing People Don’t Die est organisé par LaPéniche - Association Mosaïques</p>
                <p>Association Loi 1901 / Siège social : 52 quai Saint-Cosme, 71100 Chalon-sur-Saône / 03 85 94 05 78</p>
                <p>Développement web :<a href="mailto:seffaramayas30@gmail.com">SEFFAR Amayas</a></p>
                <p>
                    Gandi SAS
                    63, 65 Boulevard Massena
                    75013 Paris
                    France
                    Tel : +33170377661
                </p>
                <p>Responsable de publication : <a href="mailto:com@lapeniche.org">Adrien Guitton</a> / Charte CNIL-RGPD</p>
            </div>
        </footer>
    </div>
</body>

</html>