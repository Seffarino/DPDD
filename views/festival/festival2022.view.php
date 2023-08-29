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
                <li> <a href="#info_anchor"> INFOS</a></li>
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
            <h1>Dancing people don't die</h1>
            <img src="views/festival/images/concert.jpeg" alt="une foule devant un concert">
            <div class="scroll_indicator">
                <span></span>
            </div>
        </section>
        <section id="info" class="has-text-white ">
            <a id="info_anchor" class="anchor"></a>
            <div data-aos="fade-left" class="presentation_div size-small">
                <h1 class="aos-init aos-animate" style="text-align: center;" data-aos="fade-left"><span style="font-family: impact, sans-serif; color: rgb(236, 240, 241);">Festival Dancing People Don&rsquo;t Die</span></h1>
                <p style="text-align: center; line-height: 1;"><span style="font-family: impact, sans-serif; color: rgb(236, 240, 241);">by LaP&eacute;niche</span></p>
                <h2 class="aos-init aos-animate" style="text-align: center;" data-aos="fade-left"><span style="font-family: impact, sans-serif; color: rgb(236, 240, 241);">du 4 au 8 octobre 2022</span></h2>
                <div class="page" title="Page 2">
                    <div class="layoutArea">
                        <div class="column">
                            <p><span style="color: rgb(236, 240, 241);">Nouvelle version du festival de LaPéniche, enrichie de propositions jeune public, d&lsquo;ateliers d&lsquo;écriture, d&lsquo;initiation au deejaying...</span><br><span style="color: rgb(236, 240, 241);">Mais on reste évidemment sur cette belle lancée de défense d&lsquo;une représentation féminine trop longtemps ignorée et la volonté simple et pure de bien s&lsquo;amuser.</span></p>
                            <p><span style="color: rgb(236, 240, 241);">Musiques à écouter et toujours à danser, piano voix et amuseries electroniques pour une nouvelle collaboration &ldquo;électro sensible&ldquo; avec le conservatoire via Marina Herlop.</span></p>
                            <p><span style="color: rgb(236, 240, 241);">De la verve crue d&lsquo;ILLUSTRE ou d&lsquo;UltraMoule à la techno noire et menaçante de Mila Dietrich &amp; Ghost Dance ou le tapage </span><span style="color: rgb(236, 240, 241);">de pied impertinent de Bernadette en passant par le groove imparable des Space Galvachers ou de Cyril Cyril, voila encore de quoi régaler les adeptes de danses chaloupées ou énervées, de musiques tempérées ou tropicales, simplistes aussi bien que sophistiquées.</span></p>
                        </div>
                    </div>
                </div>
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

        <section id="prog">
            <a id="prog_anchor" class="anchor"></a>
            <h1>PROGRAMMATION</h1>
            <div id="filters">
                <button class="btn active" data-filtertarget="all">Tout</button>
                <button class="btn" data-filtertarget="2022-09-07">07 / 09 </button>

                <button class="btn" data-filtertarget="2022-10-03">03 / 10 </button>

                <button class="btn" data-filtertarget="2022-10-04">04 / 10 </button>

                <button class="btn" data-filtertarget="2022-10-05">05 / 10 </button>

                <button class="btn" data-filtertarget="2022-10-06">06 / 10 </button>

                <button class="btn" data-filtertarget="2022-10-07">07 / 10 </button>

                <button class="btn" data-filtertarget="2022-10-08">08 / 10 </button>
            </div>
            <div class="item_container">

                <!--
                ARTIST FIGURES
            -->

                <div data-aos="zoom-in" class="filter_div floating" data-filtervalue="2022-09-07" data-modal-target="29">
                    <img src="views/festival/images/97898_0907_12---Ultramoule-promo-2---CréditAnne-Laure-Etienne.jpg" alt="image de Atelier avec UltraMoule">
                    <div class="art_overlay"></div>
                    <ul class="artiste_descr">
                        <li>
                            <h2>Atelier avec UltraMoule</h2>
                        </li>
                        <li>
                            <h3>Atelier d'&eacute;criture</h3>
                        </li>
                    </ul>


                </div>
                <!--
                ARTIST MODALS
            -->

                <div id="29" class="modal">
                    <div class="modal_content">
                        <div class="modal_header">
                            <div class="social_media">
                                <img src="views/festival/images/97898_0907_12---Ultramoule-promo-2---CréditAnne-Laure-Etienne.jpg" alt="image de Atelier avec UltraMoule" width="100" height="100">
                                <ul>
                                    <li><a rel="noopener noreferrer" target="_blank" href="https://www.facebook.com/UltraMoule/"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a rel="noopener noreferrer" target="_blank" href="https://open.spotify.com/artist/0bUPwzpQoDd28qKydQyvOk?si=luYmmH_cSjSKM3LagWd-Zw"><i class="fab fa-spotify" aria-hidden="true"></i></a></li> <a rel=\"noopener noreferrer\" target=\"_blank\" href="https://www.sprwd.agency/ultramoule">
                                        <h3>Site Web</h3>
                                    </a>
                                </ul>
                            </div>
                            <div class="artist_info">
                                <h3>Atelier avec UltraMoule</h3>
                                <h3>07 / 09</h3>
                                <h3>Maison de quartier des Aub&eacute;pins</h3>
                                <h3>Atelier d'&eacute;criture / Lyon</h3>
                                <h3>Gratuit</h3>

                            </div>
                            <div>

                            </div>
                            <span class="exit_button">&times;</span>
                        </div>
                        <div class="modal_descr">
                            <div dir="auto">&Eacute;crire pour crier !</div>
                            <div dir="auto">&nbsp;</div>
                            <div dir="auto">Ultramoule triade f&eacute;ministe+ &agrave; la m&ecirc;l&eacute;e des genres t'invite &agrave; entrer dans leur &eacute;nergie de rage, de bienveillance, de fun et d'empuissancement pour s'entra&icirc;ner &agrave; oser faire entendre ta voix, tes mots.&nbsp;</div>
                            <div dir="auto">Atelier d'&eacute;criture de texte pour novice et initi&eacute;.e.&nbsp;</div>
                            <div dir="auto">&Eacute;criture &agrave; la table et au micro avec instrus en live accompagn&eacute; par le groupe.&nbsp;</div>
                            <div dir="auto">&nbsp;</div>
                            <div dir="auto">Tu ne te sens pas l&eacute;gitime de venir ? Tu as peur ? Tu ne sais pas si tu sauras &eacute;crire ? C'est exactement pour &ccedil;a que cet atelier est fait pour toi !</div>
                            <div dir="auto">&nbsp;</div>
                            <div dir="auto">Atelier d'&eacute;criture de 3h - mixit&eacute; choisie (Femme + minorit&eacute;s de genre)</div>
                            <div dir="auto">_________________<br>Maison de quartier des Aub&eacute;pins,<br>8 rue du Pont de Fer,<br>71100 Chalon sur Sa&ocirc;ne<br>De 14h &agrave; 17h<br>Gratuit<br>Infos et inscriptions : 03 85 46 61 27<br>Limit&eacute;es &agrave; 12 personnes !</div>
                            <p align="right"><em><span style="color: #000000;"><span style="font-family: Montserrat-Medium, serif;"><span style="font-size: large;">Financ&eacute; par par le contrat de ville</span></span></span></em></p>
                        </div>
                    </div>

                </div>
                <!--
                ARTIST FIGURES
            -->

                <div data-aos="zoom-in" class="filter_div floating" data-filtervalue="2022-10-03" data-modal-target="60">
                    <img src="views/festival/images/69987_1003_MUSIQUE-ET-PROFESSIONNALISATION_LOGO.jpg" alt="image de Parcours pro musique">
                    <div class="art_overlay"></div>
                    <ul class="artiste_descr">
                        <li>
                            <h2>Parcours pro musique</h2>
                        </li>
                        <li>
                            <h3>atelier d'info</h3>
                        </li>
                    </ul>


                </div>
                <!--
                ARTIST MODALS
            -->

                <div id="60" class="modal">
                    <div class="modal_content">
                        <div class="modal_header">
                            <div class="social_media">
                                <img src="views/festival/images/69987_1003_MUSIQUE-ET-PROFESSIONNALISATION_LOGO.jpg" alt="image de Parcours pro musique" width="100" height="100">
                                <ul>
                                </ul>
                            </div>
                            <div class="artist_info">
                                <h3>Parcours pro musique</h3>
                                <h3>03 / 10</h3>
                                <h3>EMA Citadelle, 7 rue Leschenault de La Tour</h3>
                                <h3>atelier d'info / </h3>
                                <h3>Gratuit</h3>

                            </div>
                            <div>

                            </div>
                            <span class="exit_button">&times;</span>
                        </div>
                        <div class="modal_descr">
                            <div class="m8h3af8h l7ghb35v kjdc1dyq kmwttqpk gh25dzvf">Chers &eacute;tudiantes, ch&egrave;res &eacute;tudiants ;</div>
                            <div class="m8h3af8h l7ghb35v kjdc1dyq kmwttqpk gh25dzvf">&nbsp;</div>
                            <div class="l7ghb35v kjdc1dyq kmwttqpk gh25dzvf jikcssrz">Dans le cadre du festival Dancing People Don't Die, le Collectif 60&deg; organise un atelier d'information et de discussion autour du parcours des professionnel(le)s du monde de la musique.</div>
                            <div class="l7ghb35v kjdc1dyq kmwttqpk gh25dzvf jikcssrz">&nbsp;</div>
                            <div class="l7ghb35v kjdc1dyq kmwttqpk gh25dzvf jikcssrz">Dans un format table ronde, 4 intervenant(e)s respectivement membres de la SACEM, du Conservatoire et de LaP&eacute;niche sont invit&eacute;(e)s &agrave; faire une pr&eacute;sentation de leur exp&eacute;rience personnelle et de leurs missions au sein de leur organisme ; qui sera suivie d'un temps destin&eacute; aux questions/r&eacute;ponses.</div>
                            <div class="l7ghb35v kjdc1dyq kmwttqpk gh25dzvf jikcssrz">Seront abord&eacute;s les th&eacute;matiques autour de la professionnalisation de l'artiste : mani&egrave;res de vivre de son art, les droits d'auteurs, le statut d'intermittence, et autres points administratifs m&eacute;connus des jeunes artistes d&eacute;sireux(ses) de se lancer.</div>
                            <div class="l7ghb35v kjdc1dyq kmwttqpk gh25dzvf jikcssrz">&nbsp;</div>
                            <div class="l7ghb35v kjdc1dyq kmwttqpk gh25dzvf jikcssrz">L'atelier se d&eacute;roulera sur le site de l'EMA Citadelle, 7 rue Leschenault de La Tour<br>le lundi 3 octobre de 14h &agrave; 16h30.</div>
                            <div class="l7ghb35v kjdc1dyq kmwttqpk gh25dzvf jikcssrz">&nbsp;</div>
                            <div class="l7ghb35v kjdc1dyq kmwttqpk gh25dzvf jikcssrz">Pour vous inscrire, merci de suivre ce lien Doodle :<br><a class="qi72231t nu7423ey n3hqoq4p r86q59rh b3qcqh3k fq87ekyn bdao358l fsf7x5fv rse6dlih s5oniofx m8h3af8h l7ghb35v kjdc1dyq kmwttqpk srn514ro oxkhqvkx rl78xhln nch0832m cr00lzj9 rn8ck1ys s3jn8y49 icdlwmnq cxfqmxzd ezidihy3" tabindex="0" href="https://doodle.com/meeting/participate/id/dL8wnzXd?fbclid=IwAR0f8ZcuN0qi8tv3mRSabmFT5IGnBCu_rBcaU2NkyMjpPfFb7tt-cJJTHiQ" target="_blank" rel="nofollow noopener">https://doodle.com/meeting/participate/id/dL8wnzXd</a></div>
                            <div class="l7ghb35v kjdc1dyq kmwttqpk gh25dzvf jikcssrz">Pour toute question, n'h&eacute;sitez pas &agrave; nous contacter &agrave; cette adresse : collectif60degres@gmail.com</div>
                            <div class="l7ghb35v kjdc1dyq kmwttqpk gh25dzvf jikcssrz">Bonne rentr&eacute;e &agrave; vous toutes,</div>
                        </div>
                    </div>

                </div>
                <!--
                ARTIST FIGURES
            -->

                <div data-aos="zoom-in" class="filter_div floating" data-filtervalue="2022-10-04" data-modal-target="27">
                    <img src="views/festival/images/21348_1004_MARINA_HERLOP_©Anxo-Casals.jpg" alt="image de Marina Herlop">
                    <div class="art_overlay"></div>
                    <ul class="artiste_descr">
                        <li>
                            <h2>Marina Herlop</h2>
                        </li>
                        <li>
                            <h3>Neoclassique Electro Exp&eacute;rimental</h3>
                        </li>
                    </ul>


                </div>
                <!--
                ARTIST MODALS
            -->

                <div id="27" class="modal">
                    <div class="modal_content">
                        <div class="modal_header">
                            <div class="social_media">
                                <img src="views/festival/images/21348_1004_MARINA_HERLOP_©Anxo-Casals.jpg" alt="image de Marina Herlop" width="100" height="100">
                                <ul>
                                    <li><a rel="noopener noreferrer" target="_blank" href="https://www.facebook.com/marinaherlop"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a rel="noopener noreferrer" target="_blank" href="https://www.instagram.com/marinaherlop/"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                    <li><a rel="noopener noreferrer" target="_blank" href="https://www.youtube.com/c/MarinaHerlop"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
                                    <li><a rel="noopener noreferrer" target="_blank" href="https://open.spotify.com/artist/4ZG4S6skttdVhHz08AjMhR?si=znG7vLQBQGG4U9hh9YTIlw"><i class="fab fa-spotify" aria-hidden="true"></i></a></li> <a rel=\"noopener noreferrer\" target=\"_blank\" href="https://bit.ly/3p43h3m">
                                        <h3>Site Web</h3>
                                    </a>
                                </ul>
                            </div>
                            <div class="artist_info">
                                <h3>Marina Herlop</h3>
                                <h3>04 / 10</h3>
                                <h3>20H - Auditorium du Conservatoire</h3>
                                <h3>Neoclassique Electro Exp&eacute;rimental / Barcelone</h3>
                                <h3>de 6 &agrave; 15 &euro;</h3>

                            </div>
                            <div>

                            </div>
                            <span class="exit_button">&times;</span>
                        </div>
                        <div class="modal_descr">
                            <p><strong>Opening Festival Dancing People Don't Die : Marina Herlop &agrave; l'Auditorium du Conservatoire</strong></p>
                            <p>&nbsp;</p>
                            <p>Marina Herlop est une chanteuse et pianiste catalane née en 1992 à Piera, en Espagne. Elle vit et travaille à Barcelone. En 2015 paraît son premier album Nanook dans lequel sa voix immaculée se mêle au son du piano. En 2018, elle expérimente sur Babasha, la voix et l&rsquo;électronique ne font qu&rsquo;un.<br><br>En 2021, Marina Herlop rejoint le label PAN avec son nouveau single, Miu. L&rsquo;artiste invite ses auditeurs à entrer dans son<br>paysage onirique et féérique en descendant à leur tour dans un terrier sonore, découvrant son jardin aux sentiers qui bifurquent. Résistant aux tentatives d&rsquo;interprétation de son &oelig;uvre, Marina Herlop préfère créer des mondes qui nourrissent et stimulent notre imaginaire. Avec Miu, l&rsquo;artiste utilise pour la première fois les syllabes Konnakol et les rythmes carnatiques qu&rsquo;elle combine à une voix humaine transformée et l&rsquo;électronique.<br>Miu devient une boite noire ou un objet cénobitique sur lequel nous pouvons projeter nos rêves et nos désirs.</p>
                            <p>&nbsp;</p>
                            <p>Cr&eacute;dit photo : Anxo Casals</p>
                        </div>
                        <div class="iframe_container"><iframe src="https://www.youtube.com/embed/TAFekxeTAwE" title="YouTube video player" allowfullscreen></iframe></div>
                    </div>

                </div>
                <!--
                ARTIST FIGURES
            -->

                <div data-aos="zoom-in" class="filter_div floating" data-filtervalue="2022-10-05" data-modal-target="45">
                    <img src="views/festival/images/82664_1005_PROJ_miniature-YouTube.jpg" alt="image de La Cantatrice Ch&ocirc;me Ep. 1">
                    <div class="art_overlay"></div>
                    <ul class="artiste_descr">
                        <li>
                            <h2>La Cantatrice Ch&ocirc;me Ep. 1</h2>
                        </li>
                        <li>
                            <h3>Projection documentaire</h3>
                        </li>
                    </ul>


                </div>
                <!--
                ARTIST MODALS
            -->

                <div id="45" class="modal">
                    <div class="modal_content">
                        <div class="modal_header">
                            <div class="social_media">
                                <img src="views/festival/images/82664_1005_PROJ_miniature-YouTube.jpg" alt="image de La Cantatrice Ch&ocirc;me Ep. 1" width="100" height="100">
                                <ul>
                                    <li><a rel="noopener noreferrer" target="_blank" href="https://www.facebook.com/LaCantatriceChome/"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            <div class="artist_info">
                                <h3>La Cantatrice Ch&ocirc;me Ep. 1</h3>
                                <h3>05 / 10</h3>
                                <h3>LaP&eacute;niche</h3>
                                <h3>Projection documentaire / </h3>
                                <h3>Entr&eacute;e libre</h3>

                            </div>
                            <div>

                            </div>
                            <span class="exit_button">&times;</span>
                        </div>
                        <div class="modal_descr">
                            <p><strong>19h : Projection de La Cantatrice Ch&ocirc;me &eacute;pisode 1 :</strong><br>2% de techniciennes, 17% d&lsquo;autrices- compositrices soci&eacute;taires &agrave; la SACEM ou encore 12% parmi les dirigeant.e.s des sc&egrave;nes de musiques actuelles.<br>O&ugrave; en sommes-nous ? Comment peut-on expliquer cela ? Quels sont les obstacles &agrave; surmonter et quelles sont les initiatives d&eacute;j&agrave; mises en place pour faire avancer les choses ?<br>C&lsquo;est &agrave; ces questions que<br>viennent r&eacute;pondre musicien.ne.s, programmateur.rice.s, directeur.rice.s de label, technicien.ne.s,<br>porteur.ses de l&lsquo;action publique, chercheur.se.s et militant.e.s dans le premier &eacute;pisode du documentaire &laquo; La Cantatrice Ch&ocirc;me &raquo; centr&eacute; sur les artistes et les musiciennes...<br>R&eacute;alisation : Germain Bacher, Florent Barrallon et Manon Caussignac</p>
                            <p><br>Dur&eacute;e : 40 min<br>Teaser : https://bit.ly/3KTZLCM</p>
                            <p>&nbsp;</p>
                            <p><strong>20h : Rencontre avec Manon Caussignac (co r&eacute;alisatrice), le planning familial, Selectress Gwen (dj)</strong></p>
                            <p><br><strong>21h : Dj set de Selectress Gwen</strong><br>______<br>LaP&eacute;niche<br>52 Quai Saint-Cosme<br>71100 Chalon<br>19h<br>Entr&eacute;e libre&nbsp;</p>
                        </div>
                        <div class="iframe_container"><iframe src="https://www.youtube.com/embed/wQ7I_4eYbpU" title="YouTube video player" allowfullscreen></iframe></div>
                    </div>

                </div>
                <!--
                ARTIST FIGURES
            -->

                <div data-aos="zoom-in" class="filter_div floating" data-filtervalue="2022-10-05" data-modal-target="31">
                    <img src="views/festival/images/60952_1005_JBB_photo-jbb-11Cécile-Gerbe-Servettaz.jpg" alt="image de Juke-Box Boum">
                    <div class="art_overlay"></div>
                    <ul class="artiste_descr">
                        <li>
                            <h2>Juke-Box Boum</h2>
                        </li>
                        <li>
                            <h3>Boum artistique jeune public</h3>
                        </li>
                    </ul>


                </div>
                <!--
                ARTIST MODALS
            -->

                <div id="31" class="modal">
                    <div class="modal_content">
                        <div class="modal_header">
                            <div class="social_media">
                                <img src="views/festival/images/60952_1005_JBB_photo-jbb-11Cécile-Gerbe-Servettaz.jpg" alt="image de Juke-Box Boum" width="100" height="100">
                                <ul>
                                    <li><a rel="noopener noreferrer" target="_blank" href="https://www.facebook.com/makanecollectifv"><i class="fab fa-facebook" aria-hidden="true"></i></a></li> <a rel=\"noopener noreferrer\" target=\"_blank\" href="https://lajukeboxboum.fr/">
                                        <h3>Site Web</h3>
                                    </a>
                                </ul>
                            </div>
                            <div class="artist_info">
                                <h3>Juke-Box Boum</h3>
                                <h3>05 / 10</h3>
                                <h3>Maison de Quartier Claudel Bernanos</h3>
                                <h3>Boum artistique jeune public / Bourg-en-Bresse</h3>
                                <h3>5 &euro;</h3>

                            </div>
                            <div>

                            </div>
                            <span class="exit_button">&times;</span>
                        </div>
                        <div class="modal_descr">
                            <p>LA JUKE-BOX BOUM EST UNE BOUM ARTISTIQUE POUR LES ENFANTS DE 6 &Agrave; 12 ANS.</p>
                            <p>&nbsp;</p>
                            <p>Que faire quand la musique s&rsquo;arr&ecirc;te ?</p>
                            <p>Les enfants pourront-ils sauver la boum ?</p>
                            <p>Qui sont ces Mono, M&ocirc;stache, Cyclo &amp; Bouh</p>
                            <p>Amen&eacute;.e.s &agrave; choisir les morceaux sur lesquels ils et elles souhaitent danser, les enfants sont ensuite invit&eacute;.e.s &agrave; se transformer pour devenir les monstres imaginaires de La Juke-Box Boum ! pour enfin rejoindre la piste de danse.</p>
                            <p>Mais soudain, la boum s&rsquo;arr&ecirc;te&hellip;</p>
                            <p>&nbsp;</p>
                            <p>Ouverture : 13h30</p>
                            <p>Dur&eacute;e : 1h30</p>
                            <p>6 &agrave; 12 ans</p>
                            <p>Maison de Quartier Claudel Bernanos, 1 rue St&eacute;phane Mallarm&eacute;</p>
                        </div>
                        <div class="iframe_container"><iframe src="https://www.youtube.com/embed/kKHwK-AvTbk" title="YouTube video player" allowfullscreen></iframe></div>
                    </div>

                </div>
                <!--
                ARTIST FIGURES
            -->

                <div data-aos="zoom-in" class="filter_div floating" data-filtervalue="2022-10-06" data-modal-target="28">
                    <img src="views/festival/images/86408_1006_THE_ANOMALYS.jpg" alt="image de The Anomalys">
                    <div class="art_overlay"></div>
                    <ul class="artiste_descr">
                        <li>
                            <h2>The Anomalys</h2>
                        </li>
                        <li>
                            <h3>Garage Punk</h3>
                        </li>
                    </ul>


                </div>
                <!--
                ARTIST MODALS
            -->

                <div id="28" class="modal">
                    <div class="modal_content">
                        <div class="modal_header">
                            <div class="social_media">
                                <img src="views/festival/images/86408_1006_THE_ANOMALYS.jpg" alt="image de The Anomalys" width="100" height="100">
                                <ul>
                                    <li><a rel="noopener noreferrer" target="_blank" href="https://www.facebook.com/The.Anomalys"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a rel="noopener noreferrer" target="_blank" href="https://www.youtube.com/channel/UCd1_XAkvd0hwkzosXVyrk1w"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
                                    <li><a rel="noopener noreferrer" target="_blank" href="https://open.spotify.com/artist/1ATUW8SL7jehlE6sDH7kCZ?si=D4lUAA5pT8O9eZ_yc1rd5Q"><i class="fab fa-spotify" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            <div class="artist_info">
                                <h3>The Anomalys</h3>
                                <h3>06 / 10</h3>
                                <h3>LaP&eacute;niche</h3>
                                <h3>Garage Punk / Amsterdam / France</h3>
                                <h3>5 &euro; / gratuit si pass 2 soirs ven-sam</h3>

                            </div>
                            <div>

                            </div>
                            <span class="exit_button">&times;</span>
                        </div>
                        <div class="modal_descr">
                            <p><strong>The Anomalys - On shot @ LaP&eacute;niche</strong></p>
                            <p><br>&ldquo;The Anomalys, certainement le groupe européen de garage punk primitif le<br>plus exporté du 21e siècle... Sauvage, frénétique, provocant the ANOMALYS ont joué dans le monde entier sur tous les continents, de la cave concert, jusqu&rsquo;à remplir des stades en Amérique du sud. Depuis 20 ans, Bone guitariste chanteur du groupe, prêche la bonne parole d&rsquo;un rock&rsquo;n&rsquo;roll punk pur où l&rsquo;on peut retrouver toutes ses influences rock&rsquo;n&rsquo;roll 50&rsquo;s 60&rsquo;s 70&rsquo;s teintées de blues, garage et punk ... Il est de retour avec un nouveau Line Up et pas des moindres, plus détonnant et percutant que jamais: on y retrouve à la batterie: Remy Pablo (Weird Omen, Escobar,..) et pour la deuxième guitare Sir Looch Vibrato (Magnetix, King Khan Unlimited,..)&ldquo;</p>
                        </div>
                        <div class="iframe_container"><iframe src="https://www.youtube.com/embed/c9w1bt8mPtg" title="YouTube video player" allowfullscreen></iframe></div>
                    </div>

                </div>
                <!--
                ARTIST FIGURES
            -->

                <div data-aos="zoom-in" class="filter_div floating" data-filtervalue="2022-10-07" data-modal-target="33">
                    <img src="views/festival/images/11751_1007_GUESS_WHAT_Space-Ship3.jpg" alt="image de Guess What">
                    <div class="art_overlay"></div>
                    <ul class="artiste_descr">
                        <li>
                            <h2>Guess What</h2>
                        </li>
                        <li>
                            <h3>Space Pop</h3>
                        </li>
                    </ul>


                </div>
                <!--
                ARTIST MODALS
            -->

                <div id="33" class="modal">
                    <div class="modal_content">
                        <div class="modal_header">
                            <div class="social_media">
                                <img src="views/festival/images/11751_1007_GUESS_WHAT_Space-Ship3.jpg" alt="image de Guess What" width="100" height="100">
                                <ul>
                                    <a rel=\"noopener noreferrer\" target=\"_blank\" href="http://www.angrry.propagande.org/GuessWhat/">
                                        <h3>Site Web</h3>
                                    </a>
                                </ul>
                            </div>
                            <div class="artist_info">
                                <h3>Guess What</h3>
                                <h3>07 / 10</h3>
                                <h3>LaP&eacute;niche Extended</h3>
                                <h3>Space Pop / France / Londres</h3>
                                <h3></h3>

                            </div>
                            <div>

                            </div>
                            <span class="exit_button">&times;</span>
                        </div>
                        <div class="modal_descr">
                            <div class="page" title="Page 7">
                                <div class="section">
                                    <div class="layoutArea">
                                        <div class="column">
                                            <p>&ldquo;Guess What, OVNI entre space disco, prog rock, jazz et exotica.<br>Guess What, duo orgue/batterie<br>exilé de France à Londres, rappelle</p>
                                            <p>le meilleur de ce qu&rsquo;a fait notre pop hexagonale. De François de Roubaix à Jean- Claude Vannier en passant par le tango ou la musique des Balkans,<br>le duo n&rsquo;est pas qu&rsquo;un foutoir sonique. C&rsquo;est aussi la promesse d&rsquo;une musique anachronique mais terriblement moderne.&rdquo;</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="iframe_container"><iframe src="https://www.youtube.com/embed/QdlZE_umMZU" title="YouTube video player" allowfullscreen></iframe></div>
                    </div>

                </div>
                <!--
                ARTIST FIGURES
            -->

                <div data-aos="zoom-in" class="filter_div floating" data-filtervalue="2022-10-07" data-modal-target="34">
                    <img src="views/festival/images/63931_1007_24_Museau_©FredMargueron_2020.jpg" alt="image de Museau">
                    <div class="art_overlay"></div>
                    <ul class="artiste_descr">
                        <li>
                            <h2>Museau</h2>
                        </li>
                        <li>
                            <h3>Hyperpop</h3>
                        </li>
                    </ul>


                </div>
                <!--
                ARTIST MODALS
            -->

                <div id="34" class="modal">
                    <div class="modal_content">
                        <div class="modal_header">
                            <div class="social_media">
                                <img src="views/festival/images/63931_1007_24_Museau_©FredMargueron_2020.jpg" alt="image de Museau" width="100" height="100">
                                <ul>
                                    <li><a rel="noopener noreferrer" target="_blank" href="https://www.facebook.com/whoismuseau"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a rel="noopener noreferrer" target="_blank" href="https://www.instagram.com/whoismuseau/"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                    <li><a rel="noopener noreferrer" target="_blank" href="https://www.youtube.com/channel/UC9XE5yS3obby__Y9afFlzjg"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
                                    <li><a rel="noopener noreferrer" target="_blank" href="https://open.spotify.com/artist/2ZSaLTuQ3RqqToiy2AgRAf?si=K2CmcimIRuaGDObPVneomQ"><i class="fab fa-spotify" aria-hidden="true"></i></a></li> <a rel=\"noopener noreferrer\" target=\"_blank\" href="https://whoismuseau.bandcamp.com/">
                                        <h3>Site Web</h3>
                                    </a>
                                </ul>
                            </div>
                            <div class="artist_info">
                                <h3>Museau</h3>
                                <h3>07 / 10</h3>
                                <h3>LaP&eacute;niche Extended</h3>
                                <h3>Hyperpop / Rouen</h3>
                                <h3></h3>

                            </div>
                            <div>

                            </div>
                            <span class="exit_button">&times;</span>
                        </div>
                        <div class="modal_descr">
                            <div class="page" title="Page 7">
                                <div class="section">
                                    <div class="layoutArea">
                                        <div class="column">
                                            <p>Museau est le projet d&lsquo;une plasticienne rouennaise en pleine exploration de l&lsquo;univers musical. Sa proposition fraîche et expérimentale a séduit le label Mouton Noir records qui a sorti ses deux premiers Ep&lsquo;s &ldquo;Canine&ldquo;et &ldquo;La Horde&ldquo;. Depuis Museau expérimente, renifle et fouine afin de proposer un univers mêlant de multiples horizons musicaux où s&lsquo;entrechoquent des inspirations diverses et variées. Entre <span style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">caresses et aboiements, la sculpture plastique devient musicale. Elle définit son style comme &laquo; electronic-hybrid-synthétic-pop&raquo;. Elle a été cette année Inouïs et s&lsquo;est produite au Printemps de Bourges. Plusieurs sorties de clips et de singles sont prévues ces prochains mois et son album Royal Câlin sortira cet automne.</span></p>
                                            <p>&nbsp;</p>
                                            <p><span style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">Dj set sp&eacute;cial DPDD</span></p>
                                            <p><span style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">Joue aussi le samedi !</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="iframe_container"><iframe src="https://www.youtube.com/embed/wWpBAgmrTnU" title="YouTube video player" allowfullscreen></iframe></div>
                    </div>

                </div>
                <!--
                ARTIST FIGURES
            -->

                <div data-aos="zoom-in" class="filter_div floating" data-filtervalue="2022-10-07" data-modal-target="36">
                    <img src="views/festival/images/58549_1007_SPACE_GALVACHERS.jpg" alt="image de Space Galvachers">
                    <div class="art_overlay"></div>
                    <ul class="artiste_descr">
                        <li>
                            <h2>Space Galvachers</h2>
                        </li>
                        <li>
                            <h3>Transe artisanale</h3>
                        </li>
                    </ul>


                </div>
                <!--
                ARTIST MODALS
            -->

                <div id="36" class="modal">
                    <div class="modal_content">
                        <div class="modal_header">
                            <div class="social_media">
                                <img src="views/festival/images/58549_1007_SPACE_GALVACHERS.jpg" alt="image de Space Galvachers" width="100" height="100">
                                <ul>
                                    <li><a rel="noopener noreferrer" target="_blank" href="https://www.facebook.com/spacegalvachers"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a rel="noopener noreferrer" target="_blank" href="https://www.instagram.com/spacegalvachers/"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                    <li><a rel="noopener noreferrer" target="_blank" href="https://bit.ly/3epc6m4"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
                                    <li><a rel="noopener noreferrer" target="_blank" href="https://open.spotify.com/artist/2GgQ5QYTSEUHmIL4tMRaLR?si=lcwtvmCRQt21qjEGYPJCXw"><i class="fab fa-spotify" aria-hidden="true"></i></a></li> <a rel=\"noopener noreferrer\" target=\"_blank\" href="https://www.spacegalvachers.com/">
                                        <h3>Site Web</h3>
                                    </a>
                                </ul>
                            </div>
                            <div class="artist_info">
                                <h3>Space Galvachers</h3>
                                <h3>07 / 10</h3>
                                <h3>LaP&eacute;niche Extended</h3>
                                <h3>Transe artisanale / BFC</h3>
                                <h3></h3>

                            </div>
                            <div>

                            </div>
                            <span class="exit_button">&times;</span>
                        </div>
                        <div class="modal_descr">
                            <p>Sortez les boules &agrave; facettes! Gumbris (super stars), gongs &agrave; l&rsquo;&eacute;touff&eacute;e, z&eacute;brures synth&eacute;tiques eighties, les Space Galvachers d&eacute;goupillent leur transe artisanale ! Venez, on va s&lsquo;enjailler !</p>
                        </div>
                        <div class="iframe_container"><iframe src="https://www.youtube.com/embed/GBTpBj9Uslo" title="YouTube video player" allowfullscreen></iframe></div>
                    </div>

                </div>
                <!--
                ARTIST FIGURES
            -->

                <div data-aos="zoom-in" class="filter_div floating" data-filtervalue="2022-10-07" data-modal-target="37">
                    <img src="views/festival/images/18708_1007_MARIE_MADELEINE_MM-IG-gonflable.jpg" alt="image de Marie Madeleine">
                    <div class="art_overlay"></div>
                    <ul class="artiste_descr">
                        <li>
                            <h2>Marie Madeleine</h2>
                        </li>
                        <li>
                            <h3>Musique intersid&eacute;rale</h3>
                        </li>
                    </ul>


                </div>
                <!--
                ARTIST MODALS
            -->

                <div id="37" class="modal">
                    <div class="modal_content">
                        <div class="modal_header">
                            <div class="social_media">
                                <img src="views/festival/images/18708_1007_MARIE_MADELEINE_MM-IG-gonflable.jpg" alt="image de Marie Madeleine" width="100" height="100">
                                <ul>
                                    <li><a rel="noopener noreferrer" target="_blank" href="https://www.youtube.com/channel/UCuAqucP95vg2mB99oxB8mJ"><i class="fab fa-youtube" aria-hidden="true"></i></a></li> <a rel=\"noopener noreferrer\" target=\"_blank\" href="https://soundcloud.com/mariemadeleine">
                                        <h3>Site Web</h3>
                                    </a>
                                </ul>
                            </div>
                            <div class="artist_info">
                                <h3>Marie Madeleine</h3>
                                <h3>07 / 10</h3>
                                <h3>LaP&eacute;niche Extended</h3>
                                <h3>Musique intersid&eacute;rale / Plan&egrave;te Claire</h3>
                                <h3></h3>

                            </div>
                            <div>

                            </div>
                            <span class="exit_button">&times;</span>
                        </div>
                        <div class="modal_descr">
                            <div class="page" title="Page 8">
                                <div class="section">
                                    <div class="layoutArea">
                                        <div class="column">
                                            <p>Marie Madeleine ne meurt jamais ! Après plusieurs années passées &laquo; off the grid &raquo;, Marie Madeleine revient sur le devant de la scène. Suite à un buzz organique sur Tik Tok, leur titre Swimming Pool s&rsquo;est retrouvé propulsé (entre autre) au numéro 3 du top viral monde Spotify. Cet élan d&rsquo;amour a motivé les membres du groupe à se retrouver, dépoussiérer leurs vieux synthés, rebrancher l&rsquo;ampli de la basse et bosser leurs vocalises. Après une pause de quelques années ils se retrouvent autour d&rsquo;un bon gin artisanal et de substances prohibées et s&rsquo;apprêtent à servir leur public à nouveau.</p>
                                            <div class="page" title="Page 8">
                                                <div class="section">
                                                    <div class="layoutArea">
                                                        <div class="column">
                                                            <p>&ldquo;Marie Madeleine, la Reine du Disco Wave, calice à la main, viendra vous ambiancer dans un lieu incongru et presque secret. Un dj set chaleureux et sensuel pour rappeler les vacances et la mélancolie d&rsquo;une fin de soirée.</p>
                                                            <p>Nous célébrerons ensemble l&rsquo;amour et la tristesse !&ldquo;</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="iframe_container"><iframe src="https://www.youtube.com/embed/Xf9EWtqosdY" title="YouTube video player" allowfullscreen></iframe></div>
                    </div>

                </div>
                <!--
                ARTIST FIGURES
            -->

                <div data-aos="zoom-in" class="filter_div floating" data-filtervalue="2022-10-07" data-modal-target="32">
                    <img src="views/festival/images/5912_1007_ELISA_DO_BRASIL_Credit-Mika-Cotellon.jpg" alt="image de Elisa Do Brasil">
                    <div class="art_overlay"></div>
                    <ul class="artiste_descr">
                        <li>
                            <h2>Elisa Do Brasil</h2>
                        </li>
                        <li>
                            <h3>Jungle / Drum &amp; Bass</h3>
                        </li>
                    </ul>


                </div>
                <!--
                ARTIST MODALS
            -->

                <div id="32" class="modal">
                    <div class="modal_content">
                        <div class="modal_header">
                            <div class="social_media">
                                <img src="views/festival/images/5912_1007_ELISA_DO_BRASIL_Credit-Mika-Cotellon.jpg" alt="image de Elisa Do Brasil" width="100" height="100">
                                <ul>
                                    <li><a rel="noopener noreferrer" target="_blank" href="https://www.facebook.com/djelisadobrasil/"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a rel="noopener noreferrer" target="_blank" href="https://www.instagram.com/elisadobrasil/"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                    <li><a rel="noopener noreferrer" target="_blank" href="https://www.youtube.com/user/ElisaDoBrasilTV"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
                                    <li><a rel="noopener noreferrer" target="_blank" href="https://open.spotify.com/artist/58VxLz6DFhSPyEFcmASlMh?si=S2-gS5CQRbWtuB9_DQWFSA"><i class="fab fa-spotify" aria-hidden="true"></i></a></li> <a rel=\"noopener noreferrer\" target=\"_blank\" href="https://bit.ly/3xkbsgD">
                                        <h3>Site Web</h3>
                                    </a>
                                </ul>
                            </div>
                            <div class="artist_info">
                                <h3>Elisa Do Brasil</h3>
                                <h3>07 / 10</h3>
                                <h3>LaP&eacute;niche Extended</h3>
                                <h3>Jungle / Drum &amp; Bass / France / Br&eacute;sil</h3>
                                <h3></h3>

                            </div>
                            <div>

                            </div>
                            <span class="exit_button">&times;</span>
                        </div>
                        <div class="modal_descr">
                            <div class="page" title="Page 6">
                                <div class="section">
                                    <div class="layoutArea">
                                        <div class="column">
                                            <p>Née sous le soleil brûlant de Brasilia, ELISA DO BRASIL arrive très jeune<br>en France où elle trouvera dans les musiques électroniques ses premières amours passionnelles. Oscillant entre les mouvements DRUM&rsquo;N&rsquo;BASS et Free Party, EDB redessine son ADN en s&rsquo;impliquant dans ces deux musiques... au point d&rsquo;en devenir l&rsquo;une des figures de proue alors qu&rsquo;elle a tout juste 20 ans. En 1999, elle devient résidente</p>
                                        </div>
                                    </div>
                                    <div class="layoutArea">
                                        <div class="column">
                                            <p>du mythique REX CLUB avec ses soirées &laquo; MASSIVE &raquo; (qui accueillera Laurent Garnier ou MC Verse, entre autres légendes internationales) et créée un appel d&rsquo;air considérable qui va façonner le futur de la scène Drum &amp; Bass en France.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="iframe_container"><iframe src="https://www.youtube.com/embed/e_xD0WKymns" title="YouTube video player" allowfullscreen></iframe></div>
                    </div>

                </div>
                <!--
                ARTIST FIGURES
            -->

                <div data-aos="zoom-in" class="filter_div floating" data-filtervalue="2022-10-07" data-modal-target="46">
                    <img src="views/festival/images/61000_1007_CHRISTINE-.jpg" alt="image de Christine">
                    <div class="art_overlay"></div>
                    <ul class="artiste_descr">
                        <li>
                            <h2>Christine</h2>
                        </li>
                        <li>
                            <h3>Electro Dark / Retro Wave</h3>
                        </li>
                    </ul>


                </div>
                <!--
                ARTIST MODALS
            -->

                <div id="46" class="modal">
                    <div class="modal_content">
                        <div class="modal_header">
                            <div class="social_media">
                                <img src="views/festival/images/61000_1007_CHRISTINE-.jpg" alt="image de Christine" width="100" height="100">
                                <ul>
                                    <li><a rel="noopener noreferrer" target="_blank" href="https://www.facebook.com/sheischristine"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a rel="noopener noreferrer" target="_blank" href="https://www.instagram.com/sheischristine/"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                    <li><a rel="noopener noreferrer" target="_blank" href="https://www.youtube.com/channel/UCQOLitW5v4iUwTHx0N8TjcA"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
                                    <li><a rel="noopener noreferrer" target="_blank" href="https://open.spotify.com/artist/3tPdlblQ1h11Cd4FycbZkQ?si=I2j3I-E3T9KiKXjtD_jYow"><i class="fab fa-spotify" aria-hidden="true"></i></a></li> <a rel=\"noopener noreferrer\" target=\"_blank\" href="https://sheischristine.bandcamp.com/">
                                        <h3>Site Web</h3>
                                    </a>
                                </ul>
                            </div>
                            <div class="artist_info">
                                <h3>Christine</h3>
                                <h3>07 / 10</h3>
                                <h3>LaP&eacute;niche Extended</h3>
                                <h3>Electro Dark / Retro Wave / Rouen</h3>
                                <h3></h3>

                            </div>
                            <div>

                            </div>
                            <span class="exit_button">&times;</span>
                        </div>
                        <div class="modal_descr">
                            <p>Fondé en 2011, Christine est le projet de Nicolas, producteur de musique électronique dark rouennais et créateur du Label indépendant Mouton Noir records. Le projet a sorti 5 Eps, 2 albums et une BO (du film SAM WAS HERE). Le groupe a bénéficié depuis ses débuts de plusieurs soutiens (Découvertes du Printemps de Bourges, Booster parrainé par le FAIR,<br>Transmusicales de Rennes, Détours d&rsquo;Adami, Tournée 78 tours) et se produit &nbsp;régulièrement en France et à l&rsquo;étranger. Christine compose actuellement son troisième album qui verra le jour en 2023.</p>
                            <p>&nbsp;</p>
                            <p>Set sp&eacute;cial DPDD</p>
                            <p>Joue aussi le samedi</p>
                        </div>
                        <div class="iframe_container"><iframe src="https://www.youtube.com/embed/8rem09uZc5A" title="YouTube video player" allowfullscreen></iframe></div>
                    </div>

                </div>
                <!--
                ARTIST FIGURES
            -->

                <div data-aos="zoom-in" class="filter_div floating" data-filtervalue="2022-10-07" data-modal-target="47">
                    <img src="views/festival/images/53318_1007_ROCHES-NOIRES.jpg" alt="image de Roches Noires">
                    <div class="art_overlay"></div>
                    <ul class="artiste_descr">
                        <li>
                            <h2>Roches Noires</h2>
                        </li>
                        <li>
                            <h3>Techno Glitch IDM</h3>
                        </li>
                    </ul>


                </div>
                <!--
                ARTIST MODALS
            -->

                <div id="47" class="modal">
                    <div class="modal_content">
                        <div class="modal_header">
                            <div class="social_media">
                                <img src="views/festival/images/53318_1007_ROCHES-NOIRES.jpg" alt="image de Roches Noires" width="100" height="100">
                                <ul>
                                    <li><a rel="noopener noreferrer" target="_blank" href="https://www.facebook.com/rochesnoiresofficial"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a rel="noopener noreferrer" target="_blank" href="https://www.instagram.com/roches_noires_"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                    <li><a rel="noopener noreferrer" target="_blank" href="https://www.youtube.com/channel/UCGqdq3HUGTjS3WrbvJsc0a"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
                                    <li><a rel="noopener noreferrer" target="_blank" href="https://open.spotify.com/artist/65NDISQQB8lxfjyXHhllBS?si=aFAnS6ouTlmYl8xxFGdbSw"><i class="fab fa-spotify" aria-hidden="true"></i></a></li> <a rel=\"noopener noreferrer\" target=\"_blank\" href="https://rochesnoires.bandcamp.com/">
                                        <h3>Site Web</h3>
                                    </a>
                                </ul>
                            </div>
                            <div class="artist_info">
                                <h3>Roches Noires</h3>
                                <h3>07 / 10</h3>
                                <h3>LaP&eacute;niche Extended</h3>
                                <h3>Techno Glitch IDM / Rouen</h3>
                                <h3></h3>

                            </div>
                            <div>

                            </div>
                            <span class="exit_button">&times;</span>
                        </div>
                        <div class="modal_descr">
                            <p>Roches Noires est le nom de sc&egrave;ne du producteur de musique &eacute;lectronique rouennais Cl&eacute;ment Durand. Un nom qui rend hommage aux falaises situ&eacute;es sur la c&ocirc;te fleurie, un lieu cher &agrave; l&rsquo;artiste et c&eacute;l&egrave;bre pour son h&ocirc;tel, o&ugrave; errent encore les fant&ocirc;mes de Marcel Proust et Marguerite Duras. De l&agrave; naitra une electronica &eacute;l&eacute;gante, froide et sophistiqu&eacute;e comme les plages de Trouville en hiver.<br>D&eacute;but 2020 il nous livre son premier EP &laquo; Made To Disappear &raquo;, et nous pr&eacute;cipite dans un univers aussi planant que puissant o&ugrave; fusionnent rythmiques synth&eacute;tiques et envol&eacute;es m&eacute;lodiques. Une symphonie &eacute;lectronique prenante, comme on en voit rarement.</p>
                        </div>
                        <div class="iframe_container"><iframe src="https://www.youtube.com/embed/6i1oaW5zcUs" title="YouTube video player" allowfullscreen></iframe></div>
                    </div>

                </div>
                <!--
                ARTIST FIGURES
            -->

                <div data-aos="zoom-in" class="filter_div floating" data-filtervalue="2022-10-07" data-modal-target="49">
                    <img src="views/festival/images/25157_1007_Mensonges-.jpg" alt="image de Mensonges">
                    <div class="art_overlay"></div>
                    <ul class="artiste_descr">
                        <li>
                            <h2>Mensonges</h2>
                        </li>
                        <li>
                            <h3>Bass Music - futur club</h3>
                        </li>
                    </ul>


                </div>
                <!--
                ARTIST MODALS
            -->

                <div id="49" class="modal">
                    <div class="modal_content">
                        <div class="modal_header">
                            <div class="social_media">
                                <img src="views/festival/images/25157_1007_Mensonges-.jpg" alt="image de Mensonges" width="100" height="100">
                                <ul>
                                    <li><a rel="noopener noreferrer" target="_blank" href="https://www.facebook.com/mensongesdj"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a rel="noopener noreferrer" target="_blank" href="https://www.instagram.com/mensonges_er/?hl=fr"><i class="fab fa-instagram" aria-hidden="true"></i></a></li> <a rel=\"noopener noreferrer\" target=\"_blank\" href="https://soundcloud.com/djmensonges">
                                        <h3>Site Web</h3>
                                    </a>
                                </ul>
                            </div>
                            <div class="artist_info">
                                <h3>Mensonges</h3>
                                <h3>07 / 10</h3>
                                <h3>LaP&eacute;niche Extended</h3>
                                <h3>Bass Music - futur club / Lyon</h3>
                                <h3></h3>

                            </div>
                            <div>

                            </div>
                            <span class="exit_button">&times;</span>
                        </div>
                        <div class="modal_descr">
                            <p>Activiste de la sc&egrave;ne Lyonnaise, Mensonges se d&eacute;die &agrave; la musique &eacute;lectronique &agrave; travers plusieurs projets. Elle est notamment &agrave; la t&ecirc;te de l'association Chineurs de Lyon et du collectif f&eacute;minin Unit Soeurs.&nbsp;<br>En tant que dj, c&rsquo;est &agrave; travers une esth&eacute;tique musicale marqu&eacute;e de basses puissantes, de sons d&eacute;structur&eacute;s et de m&eacute;lodies futuristes, qu&rsquo;elle d&eacute;cloisonne les limites des genres pour s&rsquo;en approprier les codes. Capable d'enflammer un Dancefloor et de s'immiscer dans l'esprit du public &agrave; travers une s&eacute;lecta prot&eacute;iforme intense et percussive, elle s'&eacute;panouit tout autant dans un univers beaucoup plus brut et industriel, loin des codes du club.</p>
                        </div>
                        <div class="iframe_container"><iframe src="https://www.youtube.com/embed/5tTsd7ZwzLs" title="YouTube video player" allowfullscreen></iframe></div>
                    </div>

                </div>
                <!--
                ARTIST FIGURES
            -->

                <div data-aos="zoom-in" class="filter_div floating" data-filtervalue="2022-10-08" data-modal-target="59">
                    <img src="views/festival/images/52121_1008_BERNADETTE_ATELIER.jpg" alt="image de Atelier Djaying avec Bernadette">
                    <div class="art_overlay"></div>
                    <ul class="artiste_descr">
                        <li>
                            <h2>Atelier Djaying avec Bernadette</h2>
                        </li>
                        <li>
                            <h3></h3>
                        </li>
                    </ul>


                </div>
                <!--
                ARTIST MODALS
            -->

                <div id="59" class="modal">
                    <div class="modal_content">
                        <div class="modal_header">
                            <div class="social_media">
                                <img src="views/festival/images/52121_1008_BERNADETTE_ATELIER.jpg" alt="image de Atelier Djaying avec Bernadette" width="100" height="100">
                                <ul>
                                    <li><a rel="noopener noreferrer" target="_blank" href="https://www.facebook.com/groups/moveurgambettes/"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            <div class="artist_info">
                                <h3>Atelier Djaying avec Bernadette</h3>
                                <h3>08 / 10</h3>
                                <h3>Maison de Quartier Des Pr&eacute;s Saint-Jean</h3>
                                <h3> / Rh&ocirc;ne-Alpes</h3>
                                <h3>Gratuit</h3>

                            </div>
                            <div>

                            </div>
                            <span class="exit_button">&times;</span>
                        </div>
                        <div class="modal_descr">
                            <div class="m8h3af8h l7ghb35v kjdc1dyq kmwttqpk gh25dzvf">Sur le festival Dancing People Don't Die, tu as la possibilit&eacute; de d&eacute;couvrir l'environnement dj / platines et de r&eacute;aliser tes premi&egrave;res (ou pas) transitions lors d'un atelier non mixte avec Bernadette !</div>
                            <div class="l7ghb35v kjdc1dyq kmwttqpk gh25dzvf jikcssrz">Bernadette<br>&lt; Rh&ocirc;ne-Alpes // M&eacute;lange de genre &eacute;lectroniques &gt;</div>
                            <div class="l7ghb35v kjdc1dyq kmwttqpk gh25dzvf jikcssrz">Move UR Gambettes : atelier d'initiation au djing en mixit&eacute; choisie</div>
                            <div class="l7ghb35v kjdc1dyq kmwttqpk gh25dzvf jikcssrz">Apprentissage des bases du djing (s&eacute;lection des tracks, calage des BPM, transitions, effets, etc..)</div>
                            <div class="l7ghb35v kjdc1dyq kmwttqpk gh25dzvf jikcssrz">Dur&eacute;e : 2 heures</div>
                            <div class="l7ghb35v kjdc1dyq kmwttqpk gh25dzvf jikcssrz">Public : de genre f&eacute;minin (ou non binaire)</div>
                            <div class="l7ghb35v kjdc1dyq kmwttqpk gh25dzvf jikcssrz">Jusqu'&agrave; 6 participantes</div>
                            <div class="l7ghb35v kjdc1dyq kmwttqpk gh25dzvf jikcssrz">Mat&eacute;riel : 2xCDJ + 1xDJM (ou Xone)</div>
                            <div class="l7ghb35v kjdc1dyq kmwttqpk gh25dzvf jikcssrz">___________________<br>Maison de Quartier Des Pr&eacute;s Saint-Jean<br>1 Rue Winston Churchill,<br>71100 Chalon-sur-Sa&ocirc;ne</div>
                            <div class="l7ghb35v kjdc1dyq kmwttqpk gh25dzvf jikcssrz">&nbsp;</div>
                            <div class="l7ghb35v kjdc1dyq kmwttqpk gh25dzvf jikcssrz">De 15h &agrave; 17h<br>Gratuit sur inscription : 03 85 97 09 70</div>
                        </div>
                        <div class="iframe_container"><iframe src="https://www.youtube.com/embed/0pdlHL6gWnU" title="YouTube video player" allowfullscreen></iframe></div>
                    </div>

                </div>
                <!--
                ARTIST FIGURES
            -->

                <div data-aos="zoom-in" class="filter_div floating" data-filtervalue="2022-10-08" data-modal-target="56">
                    <img src="views/festival/images/51630_1008_JOSYoct2019_WelcomeProd_Girl_z_Attak_Artistes-061.jpg" alt="image de Josy Fullvibes">
                    <div class="art_overlay"></div>
                    <ul class="artiste_descr">
                        <li>
                            <h2>Josy Fullvibes</h2>
                        </li>
                        <li>
                            <h3>Techno</h3>
                        </li>
                    </ul>


                </div>
                <!--
                ARTIST MODALS
            -->

                <div id="56" class="modal">
                    <div class="modal_content">
                        <div class="modal_header">
                            <div class="social_media">
                                <img src="views/festival/images/51630_1008_JOSYoct2019_WelcomeProd_Girl_z_Attak_Artistes-061.jpg" alt="image de Josy Fullvibes" width="100" height="100">
                                <ul>
                                    <a rel=\"noopener noreferrer\" target=\"_blank\" href="https://www.mixcloud.com/josyfullvibes/">
                                        <h3>Site Web</h3>
                                    </a>
                                </ul>
                            </div>
                            <div class="artist_info">
                                <h3>Josy Fullvibes</h3>
                                <h3>08 / 10</h3>
                                <h3>LaP&eacute;niche Extended</h3>
                                <h3>Techno / creuse</h3>
                                <h3></h3>

                            </div>
                            <div>

                            </div>
                            <span class="exit_button">&times;</span>
                        </div>
                        <div class="modal_descr">
                            <p>Josy Full Vibes conjugue le mix au f&eacute;minin ! Depuis 1976, elle voyage avec sa passion pour la musique partout en France et &agrave; travers l&rsquo;Europe. Elle sera pr&eacute;sente pour vous faire danser avec sa musique tribale et envo&ucirc;tante !</p>
                        </div>
                        <div class="iframe_container"><iframe src="https://www.youtube.com/embed/xwCxePME_YA" title="YouTube video player" allowfullscreen></iframe></div>
                    </div>

                </div>
                <!--
                ARTIST FIGURES
            -->

                <div data-aos="zoom-in" class="filter_div floating" data-filtervalue="2022-10-08" data-modal-target="55">
                    <img src="views/festival/images/81731_1008_WET_ENOUGH.jpg" alt="image de Wet Enough">
                    <div class="art_overlay"></div>
                    <ul class="artiste_descr">
                        <li>
                            <h2>Wet Enough</h2>
                        </li>
                        <li>
                            <h3>Funk fusion</h3>
                        </li>
                    </ul>


                </div>
                <!--
                ARTIST MODALS
            -->

                <div id="55" class="modal">
                    <div class="modal_content">
                        <div class="modal_header">
                            <div class="social_media">
                                <img src="views/festival/images/81731_1008_WET_ENOUGH.jpg" alt="image de Wet Enough" width="100" height="100">
                                <ul>
                                    <li><a rel="noopener noreferrer" target="_blank" href="https://www.facebook.com/wetenough"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a rel="noopener noreferrer" target="_blank" href="https://www.instagram.com/wet_enough/"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            <div class="artist_info">
                                <h3>Wet Enough</h3>
                                <h3>08 / 10</h3>
                                <h3>Site de l'Abattoir</h3>
                                <h3>Funk fusion / BFC</h3>
                                <h3>gratuit</h3>

                            </div>
                            <div>

                            </div>
                            <span class="exit_button">&times;</span>
                        </div>
                        <div class="modal_descr">
                            <p dir="ltr">Warm Up &agrave; 21h sur le site de l'Abattoir devant le billetterie le 8 octobre !</p>
                            <p dir="ltr">&nbsp;</p>
                            <p dir="ltr">Wet Enough? est un jeune groupe bisontin, s'inspirant de leurs pr&eacute;d&eacute;cesseurs et contemporains pour remettre au go&ucirc;t du jour une mouvance fusionnant funk, rock, hip-hop et jazz.&nbsp;</p>
                            <p dir="ltr">Le projet Wet Enough? est n&eacute; d'affinit&eacute;s amicales et musicales, de bonnes ententes et d'envies similaires : 5 &eacute;tudiants en musique qui veulent faire danser les gens, cr&eacute;er un live d'&oelig;uvres originales m&ecirc;lant les influences de chacun.&nbsp;</p>
                            <p dir="ltr">Leur univers reste cependant accessible &agrave; tout type de public. A mi-chemin entre les rythmiques funk et disco des ann&eacute;es 80-90, les riffs de rock dansant, les groove de hip-hop et les sonorit&eacute;s jazz moderne, l'ambiance parlera aux amateurs de musiques actuelles comme aux fans de rap, au public nostalgique de la musique de sa jeunesse, ou au simple auditeur curieux.</p>
                            <p>&nbsp;</p>
                        </div>
                    </div>

                </div>
                <!--
                ARTIST FIGURES
            -->

                <div data-aos="zoom-in" class="filter_div floating" data-filtervalue="2022-10-08" data-modal-target="54">
                    <img src="views/festival/images/58178_1005_JBB_photo-jbb-11Cécile-Gerbe-Servettaz.jpg" alt="image de Juke-Box Boum 2">
                    <div class="art_overlay"></div>
                    <ul class="artiste_descr">
                        <li>
                            <h2>Juke-Box Boum 2</h2>
                        </li>
                        <li>
                            <h3>Boum artistique jeune public</h3>
                        </li>
                    </ul>


                </div>
                <!--
                ARTIST MODALS
            -->

                <div id="54" class="modal">
                    <div class="modal_content">
                        <div class="modal_header">
                            <div class="social_media">
                                <img src="views/festival/images/58178_1005_JBB_photo-jbb-11Cécile-Gerbe-Servettaz.jpg" alt="image de Juke-Box Boum 2" width="100" height="100">
                                <ul>
                                    <li><a rel="noopener noreferrer" target="_blank" href="https://www.facebook.com/makanecollectifv"><i class="fab fa-facebook" aria-hidden="true"></i></a></li> <a rel=\"noopener noreferrer\" target=\"_blank\" href="https://lajukeboxboum.fr/">
                                        <h3>Site Web</h3>
                                    </a>
                                </ul>
                            </div>
                            <div class="artist_info">
                                <h3>Juke-Box Boum 2</h3>
                                <h3>08 / 10</h3>
                                <h3>La Maison Verte</h3>
                                <h3>Boum artistique jeune public / Bourg-en-Bresse</h3>
                                <h3>5&euro;</h3>

                            </div>
                            <div>

                            </div>
                            <span class="exit_button">&times;</span>
                        </div>
                        <div class="modal_descr">
                            <p>LA JUKE-BOX BOUM EST UNE BOUM ARTISTIQUE POUR LES ENFANTS DE 6 &Agrave; 12 ANS.</p>
                            <p>&nbsp;</p>
                            <p>Que faire quand la musique s&rsquo;arr&ecirc;te ?</p>
                            <p>Les enfants pourront-ils sauver la boum ?</p>
                            <p>Qui sont ces Mono, M&ocirc;stache, Cyclo &amp; Bouh</p>
                            <p>Amen&eacute;.e.s &agrave; choisir les morceaux sur lesquels ils et elles souhaitent danser, les enfants sont ensuite invit&eacute;.e.s &agrave; se transformer pour devenir les monstres imaginaires de La Juke-Box Boum ! pour enfin rejoindre la piste de danse.</p>
                            <p>Mais soudain, la boum s&rsquo;arr&ecirc;te&hellip;</p>
                            <p>&nbsp;</p>
                            <p>Ouverture : 15h30</p>
                            <p>Dur&eacute;e : 1h30</p>
                            <p>6 &agrave; 12 ans</p>
                            <p>&Agrave; la Maison Verte, 2 Rue Andr&eacute; Malraux</p>
                        </div>
                        <div class="iframe_container"><iframe src="https://www.youtube.com/embed/kKHwK-AvTbk" title="YouTube video player" allowfullscreen></iframe></div>
                    </div>

                </div>
                <!--
                ARTIST FIGURES
            -->

                <div data-aos="zoom-in" class="filter_div floating" data-filtervalue="2022-10-08" data-modal-target="63">
                    <img src="views/festival/images/28506_1008_ODIL.jpg" alt="image de D&eacute;bat ODIL TV &amp; showcase ILLUSTRE">
                    <div class="art_overlay"></div>
                    <ul class="artiste_descr">
                        <li>
                            <h2>D&eacute;bat ODIL TV &amp; showcase ILLUSTRE</h2>
                        </li>
                        <li>
                            <h3>Plateau TV</h3>
                        </li>
                    </ul>


                </div>
                <!--
                ARTIST MODALS
            -->

                <div id="63" class="modal">
                    <div class="modal_content">
                        <div class="modal_header">
                            <div class="social_media">
                                <img src="views/festival/images/28506_1008_ODIL.jpg" alt="image de D&eacute;bat ODIL TV &amp; showcase ILLUSTRE" width="100" height="100">
                                <ul>
                                    <li><a rel="noopener noreferrer" target="_blank" href="https://www.facebook.com/ODiLMedia"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a rel="noopener noreferrer" target="_blank" href="https://www.instagram.com/odil.officiel/?hl=fr"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                    <li><a rel="noopener noreferrer" target="_blank" href="https://www.youtube.com/channel/UC2OqW2WUkaS4xZjh8QYmyNw"><i class="fab fa-youtube" aria-hidden="true"></i></a></li> <a rel=\"noopener noreferrer\" target=\"_blank\" href="https://odil.tv/">
                                        <h3>Site Web</h3>
                                    </a>
                                </ul>
                            </div>
                            <div class="artist_info">
                                <h3>D&eacute;bat ODIL TV &amp; showcase ILLUSTRE</h3>
                                <h3>08 / 10</h3>
                                <h3>Espace Des Arts</h3>
                                <h3>Plateau TV / Montceau-Les-Mines</h3>
                                <h3>Gratuit</h3>

                            </div>
                            <div>

                            </div>
                            <span class="exit_button">&times;</span>
                        </div>
                        <div class="modal_descr">
                            <div class="m8h3af8h l7ghb35v kjdc1dyq kmwttqpk gh25dzvf">Comme chaque ann&eacute;e depuis sur Dancing People Don't Die nous recevons notre web TV pr&eacute;f&eacute;r&eacute;e ODILT TV pour un d&eacute;bat film&eacute; en deux parties, avec cette ann&eacute;e un showcase &agrave; la suite de ce temps de discussion. Cette ann&eacute;e le d&eacute;bat aura lieu &agrave; l'Espace Des Arts, dans la Salle De Classe, de 14h30 &agrave; 17H.</div>
                            <div class="l7ghb35v kjdc1dyq kmwttqpk gh25dzvf jikcssrz">&nbsp;</div>
                            <div class="l7ghb35v kjdc1dyq kmwttqpk gh25dzvf jikcssrz">14h30 : D&Eacute;BAT 1</div>
                            <div class="l7ghb35v kjdc1dyq kmwttqpk gh25dzvf jikcssrz">La pratique musicale a-t-elle un genre ?<br>Le constat est assez implacable. La plupart des rockeurs ou des rappeurs sont des hommes, les studios de r&eacute;p&eacute;titions sont majoritairement squatt&eacute;s par des hommes et malgr&eacute; la sensibilisation du monde culturel aux questions de parit&eacute;, les artistes programm&eacute;s sont aussi, majoritairement des hommes... Une fois qu'on dresse ce tableau, quels leviers peut-on identifier pour nuancer cette tendance ? R&eacute;fl&eacute;chissons &agrave; l'&eacute;ducation des marmots, aux repr&eacute;sentations sociales, &agrave; l'accessibilit&eacute; des parcours professionnalisants pour tous&middot;tes dans le domaine des pratiques instrumentales et artistiques plus largement.</div>
                            <div class="l7ghb35v kjdc1dyq kmwttqpk gh25dzvf jikcssrz">&nbsp;</div>
                            <div class="l7ghb35v kjdc1dyq kmwttqpk gh25dzvf jikcssrz">D&Eacute;BAT 2</div>
                            <div class="l7ghb35v kjdc1dyq kmwttqpk gh25dzvf jikcssrz">Peut-on encore draguer en 2022 ?<br>Les temps changent, le d&eacute;bat n&eacute;cessaire sur les violences sexuelles et sexistes s'ouvre. Mais on entend r&eacute;sonner fort l'opposition des pro.&nbsp;<a class="qi72231t nu7423ey n3hqoq4p r86q59rh b3qcqh3k fq87ekyn bdao358l fsf7x5fv rse6dlih s5oniofx m8h3af8h l7ghb35v kjdc1dyq kmwttqpk srn514ro oxkhqvkx rl78xhln nch0832m cr00lzj9 rn8ck1ys s3jn8y49 icdlwmnq cxfqmxzd pbevjfx6 innypi6y" tabindex="0" role="link" href="https://www.facebook.com/hashtag/metoo?__eep__=6&amp;__cft__[0]=AZWOQ-GEihjl5ZiilIQZhCwpJlVlgPxOgv6DMtyPZg5VMX1J5gz6Bor2ypNlk3zuJtKh-ikTWweBcKv22DRxar1U6rQ70dUJUw-rGCIchjMw4bzfdU8BCQuAMQv3bRrDmFU&amp;__tn__=q">#Metoo</a>&nbsp;versus les chasseurs de sorci&egrave;res... D'un c&ocirc;t&eacute; l'envie imp&eacute;rieuse d'en finir avec des comportements intol&eacute;rables, de l'autre la sensation d'&ecirc;tre &eacute;touff&eacute; par de nouveaux codes traduits par "pff, on peut m&ecirc;me plus draguer tranquille sans risquer de prendre la foudre...!".<br>Mais qu'en est-il r&eacute;ellement de nos relations &agrave; l'int&eacute;rieur m&ecirc;me des espaces culturels et festifs ? Comment sont r&eacute;-interrog&eacute;s nos modes d'interactions sociales en concert, pendant la f&ecirc;te, l&agrave; o&ugrave; les corps se retrouvent, se lib&egrave;rent, se rencontrent &agrave; l'&egrave;re m&eacute;diatique du consentement ? Quelles solutions pour nous aider &agrave; faire de nos lieux de cultures des milieux "safe", pour toutes et tous ?</div>
                            <div class="l7ghb35v kjdc1dyq kmwttqpk gh25dzvf jikcssrz">&nbsp;</div>
                            <div class="l7ghb35v kjdc1dyq kmwttqpk gh25dzvf jikcssrz">16h30 : Showcase de ILLUSTRE<br><br></div>
                            <div class="l7ghb35v kjdc1dyq kmwttqpk gh25dzvf jikcssrz">______________<br>De 14h30 &agrave; 17h<br>L'Espace Des Arts<br>5B Av. Nic&eacute;phore Ni&eacute;pce,<br>71100 Chalon-sur-Sa&ocirc;ne</div>
                            <div class="l7ghb35v kjdc1dyq kmwttqpk gh25dzvf jikcssrz">Gratuit</div>
                        </div>
                        <div class="iframe_container"><iframe src="https://www.youtube.com/embed/k-DLRKf59zI" title="YouTube video player" allowfullscreen></iframe></div>
                    </div>

                </div>
                <!--
                ARTIST FIGURES
            -->

                <div data-aos="zoom-in" class="filter_div floating" data-filtervalue="2022-10-08" data-modal-target="53">
                    <img src="views/festival/images/75086_1007_CHRISTINE-.jpg" alt="image de Christine">
                    <div class="art_overlay"></div>
                    <ul class="artiste_descr">
                        <li>
                            <h2>Christine</h2>
                        </li>
                        <li>
                            <h3>Electro Dark / Retro Wave</h3>
                        </li>
                    </ul>


                </div>
                <!--
                ARTIST MODALS
            -->

                <div id="53" class="modal">
                    <div class="modal_content">
                        <div class="modal_header">
                            <div class="social_media">
                                <img src="views/festival/images/75086_1007_CHRISTINE-.jpg" alt="image de Christine" width="100" height="100">
                                <ul>
                                    <li><a rel="noopener noreferrer" target="_blank" href="https://www.facebook.com/sheischristine"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a rel="noopener noreferrer" target="_blank" href="https://www.instagram.com/sheischristine/"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                    <li><a rel="noopener noreferrer" target="_blank" href="https://www.youtube.com/channel/UCQOLitW5v4iUwTHx0N8TjcA"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
                                    <li><a rel="noopener noreferrer" target="_blank" href="https://open.spotify.com/artist/3tPdlblQ1h11Cd4FycbZkQ?si=I2j3I-E3T9KiKXjtD_jYow"><i class="fab fa-spotify" aria-hidden="true"></i></a></li> <a rel=\"noopener noreferrer\" target=\"_blank\" href="https://sheischristine.bandcamp.com/">
                                        <h3>Site Web</h3>
                                    </a>
                                </ul>
                            </div>
                            <div class="artist_info">
                                <h3>Christine</h3>
                                <h3>08 / 10</h3>
                                <h3>LaP&eacute;niche Extended</h3>
                                <h3>Electro Dark / Retro Wave / Rouen</h3>
                                <h3></h3>

                            </div>
                            <div>

                            </div>
                            <span class="exit_button">&times;</span>
                        </div>
                        <div class="modal_descr">
                            <p>Fondé en 2011, Christine est le projet de Nicolas, producteur de musique électronique dark rouennais et créateur du Label indépendant Mouton Noir records. Le projet a sorti 5 Eps, 2 albums et une BO (du film SAM WAS HERE). Le groupe a bénéficié depuis ses débuts de plusieurs soutiens (Découvertes du Printemps de Bourges, Booster parrainé par le FAIR,<br>Transmusicales de Rennes, Détours d&rsquo;Adami, Tournée 78 tours) et se produit &nbsp;régulièrement en France et à l&rsquo;étranger. Christine compose actuellement son troisième album qui verra le jour en 2023.</p>
                            <p>&nbsp;</p>
                            <p>Set sp&eacute;cial DPDD</p>
                            <p>&nbsp;</p>
                        </div>
                        <div class="iframe_container"><iframe src="https://www.youtube.com/embed/8rem09uZc5A" title="YouTube video player" allowfullscreen></iframe></div>
                    </div>

                </div>
                <!--
                ARTIST FIGURES
            -->

                <div data-aos="zoom-in" class="filter_div floating" data-filtervalue="2022-10-08" data-modal-target="52">
                    <img src="views/festival/images/121_1007_ROCHES-NOIRES.jpg" alt="image de Roches Noires">
                    <div class="art_overlay"></div>
                    <ul class="artiste_descr">
                        <li>
                            <h2>Roches Noires</h2>
                        </li>
                        <li>
                            <h3>Techno Glitch IDM</h3>
                        </li>
                    </ul>


                </div>
                <!--
                ARTIST MODALS
            -->

                <div id="52" class="modal">
                    <div class="modal_content">
                        <div class="modal_header">
                            <div class="social_media">
                                <img src="views/festival/images/121_1007_ROCHES-NOIRES.jpg" alt="image de Roches Noires" width="100" height="100">
                                <ul>
                                    <li><a rel="noopener noreferrer" target="_blank" href="https://www.facebook.com/rochesnoiresofficial"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a rel="noopener noreferrer" target="_blank" href="https://www.instagram.com/roches_noires_"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                    <li><a rel="noopener noreferrer" target="_blank" href="https://www.youtube.com/channel/UCGqdq3HUGTjS3WrbvJsc0a"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
                                    <li><a rel="noopener noreferrer" target="_blank" href="https://open.spotify.com/artist/65NDISQQB8lxfjyXHhllBS?si=aFAnS6ouTlmYl8xxFGdbSw"><i class="fab fa-spotify" aria-hidden="true"></i></a></li> <a rel=\"noopener noreferrer\" target=\"_blank\" href="https://rochesnoires.bandcamp.com/">
                                        <h3>Site Web</h3>
                                    </a>
                                </ul>
                            </div>
                            <div class="artist_info">
                                <h3>Roches Noires</h3>
                                <h3>08 / 10</h3>
                                <h3>LaP&eacute;niche Extended</h3>
                                <h3>Techno Glitch IDM / Rouen</h3>
                                <h3></h3>

                            </div>
                            <div>

                            </div>
                            <span class="exit_button">&times;</span>
                        </div>
                        <div class="modal_descr">
                            <p>Roches Noires est le nom de sc&egrave;ne du producteur de musique &eacute;lectronique rouennais Cl&eacute;ment Durand. Un nom qui rend hommage aux falaises situ&eacute;es sur la c&ocirc;te fleurie, un lieu cher &agrave; l&rsquo;artiste et c&eacute;l&egrave;bre pour son h&ocirc;tel, o&ugrave; errent encore les fant&ocirc;mes de Marcel Proust et Marguerite Duras. De l&agrave; naitra une electronica &eacute;l&eacute;gante, froide et sophistiqu&eacute;e comme les plages de Trouville en hiver.<br>D&eacute;but 2020 il nous livre son premier EP &laquo; Made To Disappear &raquo;, et nous pr&eacute;cipite dans un univers aussi planant que puissant o&ugrave; fusionnent rythmiques synth&eacute;tiques et envol&eacute;es m&eacute;lodiques. Une symphonie &eacute;lectronique prenante, comme on en voit rarement.</p>
                            <p>&nbsp;</p>
                            <p>Sp&eacute;cial DPDD !</p>
                        </div>
                        <div class="iframe_container"><iframe src="https://www.youtube.com/embed/6i1oaW5zcUs" title="YouTube video player" allowfullscreen></iframe></div>
                    </div>

                </div>
                <!--
                ARTIST FIGURES
            -->

                <div data-aos="zoom-in" class="filter_div floating" data-filtervalue="2022-10-08" data-modal-target="51">
                    <img src="views/festival/images/37068_1007_24_Museau_©FredMargueron_2020.jpg" alt="image de Museau">
                    <div class="art_overlay"></div>
                    <ul class="artiste_descr">
                        <li>
                            <h2>Museau</h2>
                        </li>
                        <li>
                            <h3>Hyperpop</h3>
                        </li>
                    </ul>


                </div>
                <!--
                ARTIST MODALS
            -->

                <div id="51" class="modal">
                    <div class="modal_content">
                        <div class="modal_header">
                            <div class="social_media">
                                <img src="views/festival/images/37068_1007_24_Museau_©FredMargueron_2020.jpg" alt="image de Museau" width="100" height="100">
                                <ul>
                                    <li><a rel="noopener noreferrer" target="_blank" href="https://www.facebook.com/whoismuseau"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a rel="noopener noreferrer" target="_blank" href="https://www.instagram.com/whoismuseau/"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                    <li><a rel="noopener noreferrer" target="_blank" href="https://www.youtube.com/channel/UC9XE5yS3obby__Y9afFlzjg"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
                                    <li><a rel="noopener noreferrer" target="_blank" href="https://open.spotify.com/artist/2ZSaLTuQ3RqqToiy2AgRAf?si=K2CmcimIRuaGDObPVneomQ"><i class="fab fa-spotify" aria-hidden="true"></i></a></li> <a rel=\"noopener noreferrer\" target=\"_blank\" href="https://whoismuseau.bandcamp.com/">
                                        <h3>Site Web</h3>
                                    </a>
                                </ul>
                            </div>
                            <div class="artist_info">
                                <h3>Museau</h3>
                                <h3>08 / 10</h3>
                                <h3>LaP&eacute;niche Extended</h3>
                                <h3>Hyperpop / Rouen</h3>
                                <h3></h3>

                            </div>
                            <div>

                            </div>
                            <span class="exit_button">&times;</span>
                        </div>
                        <div class="modal_descr">
                            <p>Museau est le projet d&lsquo;une plasticienne rouennaise en pleine exploration de l&lsquo;univers musical. Sa proposition fraîche et expérimentale a séduit le label Mouton Noir records qui a sorti ses deux premiers Ep&lsquo;s &ldquo;Canine&ldquo;et &ldquo;La Horde&ldquo;. Depuis Museau expérimente, renifle et fouine afin de proposer un univers mêlant de multiples horizons musicaux où s&lsquo;entrechoquent des inspirations diverses et variées. Entre <span style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">caresses et aboiements, la sculpture plastique devient musicale. Elle définit son style comme &laquo; electronic-hybrid-synthétic-pop&raquo;. Elle a été cette année Inouïs et s&lsquo;est produite au Printemps de Bourges. Plusieurs sorties de clips et de singles sont prévues ces prochains mois et son album Royal Câlin sortira cet automne.</span></p>
                            <p>&nbsp;</p>
                            <p><span style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">Dj set sp&eacute;cial DPDD</span></p>
                            <p><span style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">Joue aussi le samedi !</span></p>
                        </div>
                        <div class="iframe_container"><iframe src="https://www.youtube.com/embed/Hyperpop" title="YouTube video player" allowfullscreen></iframe></div>
                    </div>

                </div>
                <!--
                ARTIST FIGURES
            -->

                <div data-aos="zoom-in" class="filter_div floating" data-filtervalue="2022-10-08" data-modal-target="50">
                    <img src="views/festival/images/30976_1007_MARIE_MADELEINE_MM-IG-gonflable.jpg" alt="image de Marie Madeleine">
                    <div class="art_overlay"></div>
                    <ul class="artiste_descr">
                        <li>
                            <h2>Marie Madeleine</h2>
                        </li>
                        <li>
                            <h3>Musique intersid&eacute;rale</h3>
                        </li>
                    </ul>


                </div>
                <!--
                ARTIST MODALS
            -->

                <div id="50" class="modal">
                    <div class="modal_content">
                        <div class="modal_header">
                            <div class="social_media">
                                <img src="views/festival/images/30976_1007_MARIE_MADELEINE_MM-IG-gonflable.jpg" alt="image de Marie Madeleine" width="100" height="100">
                                <ul>
                                    <li><a rel="noopener noreferrer" target="_blank" href="https://www.youtube.com/channel/UCuAqucP95vg2mB99oxB8mJ"><i class="fab fa-youtube" aria-hidden="true"></i></a></li> <a rel=\"noopener noreferrer\" target=\"_blank\" href="https://soundcloud.com/mariemadeleine">
                                        <h3>Site Web</h3>
                                    </a>
                                </ul>
                            </div>
                            <div class="artist_info">
                                <h3>Marie Madeleine</h3>
                                <h3>08 / 10</h3>
                                <h3>LaP&eacute;niche Extended</h3>
                                <h3>Musique intersid&eacute;rale / Plan&egrave;te Claire</h3>
                                <h3></h3>

                            </div>
                            <div>

                            </div>
                            <span class="exit_button">&times;</span>
                        </div>
                        <div class="modal_descr">
                            <p>Marie Madeleine ne meurt jamais ! Après plusieurs années passées &laquo; off the grid &raquo;, Marie Madeleine revient sur le devant de la scène. Suite à un buzz organique sur Tik Tok, leur titre Swimming Pool s&rsquo;est retrouvé propulsé (entre autre) au numéro 3 du top viral monde Spotify. Cet élan d&rsquo;amour a motivé les membres du groupe à se retrouver, dépoussiérer leurs vieux synthés, rebrancher l&rsquo;ampli de la basse et bosser leurs vocalises. Après une pause de quelques années ils se retrouvent autour d&rsquo;un bon gin artisanal et de substances prohibées et s&rsquo;apprêtent à servir leur public à nouveau.</p>
                            <div class="page" title="Page 8">
                                <div class="section">
                                    <div class="layoutArea">
                                        <div class="column">
                                            <p>&ldquo;Marie Madeleine, la Reine du Disco Wave, calice à la main, viendra vous ambiancer dans un lieu incongru et presque secret. Un dj set chaleureux et sensuel pour rappeler les vacances et la mélancolie d&rsquo;une fin de soirée.</p>
                                            <p>Nous célébrerons ensemble l&rsquo;amour et la tristesse !&ldquo;</p>
                                            <p>&Ccedil;a joue dans cet endroit que tu connais si tu y es d&eacute;j&agrave; all&eacute; ;)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="iframe_container"><iframe src="https://www.youtube.com/embed/Xf9EWtqosdY" title="YouTube video player" allowfullscreen></iframe></div>
                    </div>

                </div>
                <!--
                ARTIST FIGURES
            -->

                <div data-aos="zoom-in" class="filter_div floating" data-filtervalue="2022-10-08" data-modal-target="42">
                    <img src="views/festival/images/45493_1008_LA_JUNGLE_Festin-5-STUDIO-DERVILLE-2022.jpg" alt="image de La Jungle">
                    <div class="art_overlay"></div>
                    <ul class="artiste_descr">
                        <li>
                            <h2>La Jungle</h2>
                        </li>
                        <li>
                            <h3>Kraut-transe-noise</h3>
                        </li>
                    </ul>


                </div>
                <!--
                ARTIST MODALS
            -->

                <div id="42" class="modal">
                    <div class="modal_content">
                        <div class="modal_header">
                            <div class="social_media">
                                <img src="views/festival/images/45493_1008_LA_JUNGLE_Festin-5-STUDIO-DERVILLE-2022.jpg" alt="image de La Jungle" width="100" height="100">
                                <ul>
                                    <li><a rel="noopener noreferrer" target="_blank" href="https://www.facebook.com/lajungleband"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a rel="noopener noreferrer" target="_blank" href="https://www.instagram.com/la_jungle_band/"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                    <li><a rel="noopener noreferrer" target="_blank" href="https://www.youtube.com/channel/UC8uEx7tJlNl4hXTO6H7o2eQ"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
                                    <li><a rel="noopener noreferrer" target="_blank" href="https://open.spotify.com/artist/2M1oEnlS4vNxIW3grVQJ1h?si=UoqRdZs2TymCI6GUlRqicQ"><i class="fab fa-spotify" aria-hidden="true"></i></a></li> <a rel=\"noopener noreferrer\" target=\"_blank\" href="https://lajungleband.com/">
                                        <h3>Site Web</h3>
                                    </a>
                                </ul>
                            </div>
                            <div class="artist_info">
                                <h3>La Jungle</h3>
                                <h3>08 / 10</h3>
                                <h3>LaP&eacute;niche extended</h3>
                                <h3>Kraut-transe-noise / Belgique</h3>
                                <h3></h3>

                            </div>
                            <div>

                            </div>
                            <span class="exit_button">&times;</span>
                        </div>
                        <div class="modal_descr">
                            <div class="page" title="Page 12">
                                <div class="section">
                                    <div class="layoutArea">
                                        <div class="column">
                                            <p>Bien que définitivement un enfant du noise rock, La Jungle prend des morceaux de tout le spectre musical et les boucle en direct dans le but de créer des séquences compulsives et répétitives. Hypnotique, spontanée et volontiers lancinante, frisant parfois un groove sans fin, leur musique peut même inclure de brèves impulsions orientales de doom ou des détournements de <span style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">métal bang au milieu d&lsquo;un voyage épique de kraut rock.</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="iframe_container"><iframe src="https://www.youtube.com/embed/6TiTBITgBdk" title="YouTube video player" allowfullscreen></iframe></div>
                    </div>

                </div>
                <!--
                ARTIST FIGURES
            -->

                <div data-aos="zoom-in" class="filter_div floating" data-filtervalue="2022-10-08" data-modal-target="41">
                    <img src="views/festival/images/73412_1008_ILLUSTRE-(1)---Photo-Julien-Mignot.jpg" alt="image de ILLUSTRE">
                    <div class="art_overlay"></div>
                    <ul class="artiste_descr">
                        <li>
                            <h2>ILLUSTRE</h2>
                        </li>
                        <li>
                            <h3>Rap &eacute;gopo&eacute;tic</h3>
                        </li>
                    </ul>


                </div>
                <!--
                ARTIST MODALS
            -->

                <div id="41" class="modal">
                    <div class="modal_content">
                        <div class="modal_header">
                            <div class="social_media">
                                <img src="views/festival/images/73412_1008_ILLUSTRE-(1)---Photo-Julien-Mignot.jpg" alt="image de ILLUSTRE" width="100" height="100">
                                <ul>
                                    <li><a rel="noopener noreferrer" target="_blank" href="https://www.facebook.com/Illustreofficiel"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a rel="noopener noreferrer" target="_blank" href="https://www.instagram.com/i.llustre/"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                    <li><a rel="noopener noreferrer" target="_blank" href="https://www.youtube.com/user/fastmovie63"><i class="fab fa-youtube" aria-hidden="true"></i></a></li> <a rel=\"noopener noreferrer\" target=\"_blank\" href="https://illustreofficiel.wixsite.com/illustre">
                                        <h3>Site Web</h3>
                                    </a>
                                </ul>
                            </div>
                            <div class="artist_info">
                                <h3>ILLUSTRE</h3>
                                <h3>08 / 10</h3>
                                <h3>LaP&eacute;niche Extended</h3>
                                <h3>Rap &eacute;gopo&eacute;tic / Clermont-Ferrand</h3>
                                <h3></h3>

                            </div>
                            <div>

                            </div>
                            <span class="exit_button">&times;</span>
                        </div>
                        <div class="modal_descr">
                            <div class="page" title="Page 11">
                                <div class="section">
                                    <div class="layoutArea">
                                        <div class="column">
                                            <p>Comme les deux pôles d&lsquo;un iceberg, ILLUSTRE cherche à assembler les différences. Créer une cohésion, une alchimie, dans une société en plein bouleversements. Hors des codes et non-binaire, remettant en question les clichés sur le genre, elle aime rendre complémentaire ce qui tend à s&rsquo;éloigner. Et s&lsquo;adresse à toute une génération, qui doit puiser dans ses complexes les plus enfouis, pour devenir enfin soi-même. Cette identité singulière se retrouve dans son premier album, ILLE, une ode musicale rap soutenue par des productions modernes entre chill trap et banger. A travers un jeu de miroirs entre féminin et masculin, elle parle de notre monde, de notre identité, du lâcher prise, de la place de la femme, elle parle de persévérance, d&lsquo;émotion...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="iframe_container"><iframe src="https://www.youtube.com/embed/Sb3JQAhqgV8" title="YouTube video player" allowfullscreen></iframe></div>
                    </div>

                </div>
                <!--
                ARTIST FIGURES
            -->

                <div data-aos="zoom-in" class="filter_div floating" data-filtervalue="2022-10-08" data-modal-target="40">
                    <img src="views/festival/images/84754_1008_DARKNSTORMY_sw.jpg" alt="image de Dark N Stormy">
                    <div class="art_overlay"></div>
                    <ul class="artiste_descr">
                        <li>
                            <h2>Dark N Stormy</h2>
                        </li>
                        <li>
                            <h3>Dark Techno</h3>
                        </li>
                    </ul>


                </div>
                <!--
                ARTIST MODALS
            -->

                <div id="40" class="modal">
                    <div class="modal_content">
                        <div class="modal_header">
                            <div class="social_media">
                                <img src="views/festival/images/84754_1008_DARKNSTORMY_sw.jpg" alt="image de Dark N Stormy" width="100" height="100">
                                <ul>
                                    <li><a rel="noopener noreferrer" target="_blank" href="https://www.facebook.com/miladietrichmusic"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a rel="noopener noreferrer" target="_blank" href="https://www.instagram.com/ghost_dance1/"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                    <li><a rel="noopener noreferrer" target="_blank" href="https://www.youtube.com/watch?v=KKakxDxsGxk&amp;ab_channel=mau5trap"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
                                    <li><a rel="noopener noreferrer" target="_blank" href="https://open.spotify.com/artist/6gFqC88ulyEMiqeVp5b71Q?si=tbuQTem0THK8xCrotj-xyQ"><i class="fab fa-spotify" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            <div class="artist_info">
                                <h3>Dark N Stormy</h3>
                                <h3>08 / 10</h3>
                                <h3>LaP&eacute;niche extended</h3>
                                <h3>Dark Techno / France</h3>
                                <h3></h3>

                            </div>
                            <div>

                            </div>
                            <span class="exit_button">&times;</span>
                        </div>
                        <div class="modal_descr">
                            <div class="page" title="Page 11">
                                <div class="section">
                                    <div class="layoutArea">
                                        <div class="column">
                                            <p>Le Projet : Initié par Mila Dietrich &amp; Ghost Dance, Dark N Stormy est plus qu&lsquo;un concept de soirée, c&lsquo;est une vision de la rave : sombre et sans concession. Ensemble ils distillent une techno saturée d&lsquo;EBM, d&lsquo;indus, de coldwave, aux émanations punk rock. Après le succès de la date parisienne &ldquo;Une Nuit En Enfer&ldquo; est née l&lsquo;envie d&lsquo;exporter le concept dans d&lsquo;autres villes et d&lsquo;autres lieux sous le nom de Dark N&lsquo; Stormy. LET&lsquo;S RAVE DARKER!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="iframe_container"><iframe src="https://www.youtube.com/embed/b27UoPMgrwg" title="YouTube video player" allowfullscreen></iframe></div>
                    </div>

                </div>
                <!--
                ARTIST FIGURES
            -->

                <div data-aos="zoom-in" class="filter_div floating" data-filtervalue="2022-10-08" data-modal-target="39">
                    <img src="views/festival/images/25106_1008_CYRIL_cyr_9.jpg" alt="image de Cyril Cyril">
                    <div class="art_overlay"></div>
                    <ul class="artiste_descr">
                        <li>
                            <h2>Cyril Cyril</h2>
                        </li>
                        <li>
                            <h3>Kraut-transe</h3>
                        </li>
                    </ul>


                </div>
                <!--
                ARTIST MODALS
            -->

                <div id="39" class="modal">
                    <div class="modal_content">
                        <div class="modal_header">
                            <div class="social_media">
                                <img src="views/festival/images/25106_1008_CYRIL_cyr_9.jpg" alt="image de Cyril Cyril" width="100" height="100">
                                <ul>
                                    <li><a rel="noopener noreferrer" target="_blank" href="https://www.facebook.com/cyrilcyrilband"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a rel="noopener noreferrer" target="_blank" href="https://open.spotify.com/artist/2JH6WXpSCRKK7nmZ72gmVn?si=9vS0EBUHTV6x18P3864ibg"><i class="fab fa-spotify" aria-hidden="true"></i></a></li> <a rel=\"noopener noreferrer\" target=\"_blank\" href="https://bit.ly/3CXNEm2">
                                        <h3>Site Web</h3>
                                    </a>
                                </ul>
                            </div>
                            <div class="artist_info">
                                <h3>Cyril Cyril</h3>
                                <h3>08 / 10</h3>
                                <h3>LaP&eacute;niche Extended</h3>
                                <h3>Kraut-transe / Suisse</h3>
                                <h3></h3>

                            </div>
                            <div>

                            </div>
                            <span class="exit_button">&times;</span>
                        </div>
                        <div class="modal_descr">
                            <div class="page" title="Page 10">
                                <div class="section">
                                    <div class="layoutArea">
                                        <div class="column">
                                            <p>L&rsquo;autoroute blanche, la piscine le dimanche, le Mont Saint Michel... tous rejoignent la scène, Cyril Cyril remue<br>la boule à neige, Helvet underground comme on les appelle. Le dimanche de Cyril Cyril est une transe, on arrive, on se rassemble, les gens. La voix samplée, hésite, gémit un peu, Miami Beach, OK let&rsquo;s go.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="iframe_container"><iframe src="https://www.youtube.com/embed/7VLH774LD4k" title="YouTube video player" allowfullscreen></iframe></div>
                    </div>

                </div>
                <!--
                ARTIST FIGURES
            -->

                <div data-aos="zoom-in" class="filter_div floating" data-filtervalue="2022-10-08" data-modal-target="38">
                    <img src="views/festival/images/57255_1008_BERNADETTE_Crédit-photo-_-Jim-Prunier-6.jpg" alt="image de Bernadette">
                    <div class="art_overlay"></div>
                    <ul class="artiste_descr">
                        <li>
                            <h2>Bernadette</h2>
                        </li>
                        <li>
                            <h3>M&eacute;langes de genres &eacute;lectroniques </h3>
                        </li>
                    </ul>


                </div>
                <!--
                ARTIST MODALS
            -->

                <div id="38" class="modal">
                    <div class="modal_content">
                        <div class="modal_header">
                            <div class="social_media">
                                <img src="views/festival/images/57255_1008_BERNADETTE_Crédit-photo-_-Jim-Prunier-6.jpg" alt="image de Bernadette" width="100" height="100">
                                <ul>
                                    <li><a rel="noopener noreferrer" target="_blank" href="https://www.facebook.com/Bernadette.musique"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a rel="noopener noreferrer" target="_blank" href="https://www.instagram.com/bernadette_musique/"><i class="fab fa-instagram" aria-hidden="true"></i></a></li> <a rel=\"noopener noreferrer\" target=\"_blank\" href="https://soundcloud.com/bernadette_musique">
                                        <h3>Site Web</h3>
                                    </a>
                                </ul>
                            </div>
                            <div class="artist_info">
                                <h3>Bernadette</h3>
                                <h3>08 / 10</h3>
                                <h3>LaP&eacute;niche extended</h3>
                                <h3>M&eacute;langes de genres &eacute;lectroniques / Rh&ocirc;ne-Alpes</h3>
                                <h3></h3>

                            </div>
                            <div>

                            </div>
                            <span class="exit_button">&times;</span>
                        </div>
                        <div class="modal_descr">
                            <div class="page" title="Page 10">
                                <div class="section">
                                    <div class="layoutArea">
                                        <div class="column">
                                            <p>Appréciée pour ses DJ sets aux multiples facettes, Bernadette, s&rsquo;affranchit des restriction de genre et se baladent allègrement entre de la musique House (Funk / Acid / Italo disco) &amp; Rave en passant par des rythmiques plus spasmodiques ( Break / UK Bass / Jungle / Bass Music), l&rsquo;artiste navigue avec une facilité déconcertante entre les univers. Jeune productrice, elle aime utiliser <span style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">son savoir technique de la harpe pour s&rsquo;émanciper des limites et prendre des risques en développant un son riche, aux identités marquées. Sa première sortie &laquo; BabyDoux &raquo; sur la compilation d&rsquo;Ola Radio est playlisté par Trax magazine.</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="iframe_container"><iframe src="https://www.youtube.com/embed/h8RxKTOChXY" title="YouTube video player" allowfullscreen></iframe></div>
                    </div>

                </div>
                <!--
                ARTIST FIGURES
            -->

                <div data-aos="zoom-in" class="filter_div floating" data-filtervalue="2022-10-08" data-modal-target="30">
                    <img src="views/festival/images/94093_1008_ULTRAMOULE.jpg" alt="image de UltraMoule">
                    <div class="art_overlay"></div>
                    <ul class="artiste_descr">
                        <li>
                            <h2>UltraMoule</h2>
                        </li>
                        <li>
                            <h3>Electro-punk-rap</h3>
                        </li>
                    </ul>


                </div>
                <!--
                ARTIST MODALS
            -->

                <div id="30" class="modal">
                    <div class="modal_content">
                        <div class="modal_header">
                            <div class="social_media">
                                <img src="views/festival/images/94093_1008_ULTRAMOULE.jpg" alt="image de UltraMoule" width="100" height="100">
                                <ul>
                                    <li><a rel="noopener noreferrer" target="_blank" href="https://www.facebook.com/UltraMoule/"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a rel="noopener noreferrer" target="_blank" href="https://www.instagram.com/ultramoule/"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                    <li><a rel="noopener noreferrer" target="_blank" href="https://www.youtube.com/channel/UCfRxzAxvBumZ9qbAuk8xvBg"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
                                    <li><a rel="noopener noreferrer" target="_blank" href="https://open.spotify.com/artist/0bUPwzpQoDd28qKydQyvOk?si=mUixZuiATWWVr07eN9cU1Q"><i class="fab fa-spotify" aria-hidden="true"></i></a></li> <a rel=\"noopener noreferrer\" target=\"_blank\" href="https://www.sprwd.agency/ultramoule">
                                        <h3>Site Web</h3>
                                    </a>
                                </ul>
                            </div>
                            <div class="artist_info">
                                <h3>UltraMoule</h3>
                                <h3>08 / 10</h3>
                                <h3>LaP&eacute;niche extended</h3>
                                <h3>Electro-punk-rap / Lyon</h3>
                                <h3></h3>

                            </div>
                            <div>

                            </div>
                            <span class="exit_button">&times;</span>
                        </div>
                        <div class="modal_descr">
                            <div class="page" title="Page 13">
                                <div class="section">
                                    <div class="layoutArea">
                                        <div class="column">
                                            <p>Trio lyonnais décalé à la frontière de plusieurs esthétiques Ariette, Butch et Konda se revendiquent du Punk à chattes et du Gangsista rap. Imagine des gros kicks et des snares qui claquent tout droit sortis d&rsquo;une bonne boite à rythme, des riffs de violons qui ressemblent à ceux d&rsquo;une guitare mais en pas pareil, un violoncelle qui tabasse et qui t&lsquo;envoie des basses à t&lsquo;en faire vibrer le thorax, le tout saupoudré <span style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">de textes cinglants criés, rappés, chantés aux punchlines qui fouettent là où ça fait du bien. Histoire que tu te projettes un peu plus : c&rsquo;est un savoureux mélange de Lauryn Hill, Nova Twins, Giedré, des Béruriers Noirs et des Beastie Boys, rien que ça !</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="iframe_container"><iframe src="https://www.youtube.com/embed/1w_EqO0CmnQ" title="YouTube video player" allowfullscreen></iframe></div>
                    </div>

                </div>
            </div>
        </section>
        <!--       BILLETERIE
            -->
        <section id="billeterie">
            <a id="billeterie_anchor" class="anchor"></a>
            <h1>BILLETTERIE</h1>

            <div class="billeterie_wrapper">
                <span class="exit_button">&times;</span>
                <div data-aos="flip-down" class="billet billet1">
                    <p>04 / 10 - Marina Herlop</p>
                    <a rel="noopener noreferrer" target="_blank" href=https://bit.ly/3esXkuU><i class="fas fa-receipt"></i></a>
                    <div class="hover_infos">
                        <p>Cliquez pour plus d'infos</p>
                    </div>
                    <div class="active_text">
                        <p style="text-align: center;">Opening Festival Dancing People Don't Die</p>
                        <p style="text-align: center;">Marina Herlop &agrave; l'Auditorium Du Conservatoire</p>
                        <p style="text-align: center;">De 6 &agrave; 15&euro;</p>
                        <p style="text-align: center;">En partenariat avec le CRR du Grand Chalon</p>
                    </div>
                </div>
                <div data-aos="flip-down" class="billet billet1">
                    <p>05 / 10 - Juke Box Boum : Jeune Public</p>
                    <a rel="noopener noreferrer" target="_blank" href=https://xceed.me/fr/chalon-sur-saone/event/jukebox-boum--111767><i class="fas fa-receipt"></i></a>
                    <div class="hover_infos">
                        <p>Cliquez pour plus d'infos</p>
                    </div>
                    <div class="active_text">
                        <p style="text-align: center;">Jeune public : 6 &agrave; 12 ans</p>
                        <p style="text-align: center;">13h30 &agrave; 15h30&nbsp; &agrave; la maison de Quartier Claudel Bernanos</p>
                        <p style="text-align: center;">tarif unique 5 &euro;</p>
                    </div>
                </div>
                <div data-aos="flip-down" class="billet billet1">
                    <p>06 / 10 - #DPDD : The Anomalys</p>
                    <div class="hover_infos">
                        <p>Cliquez pour plus d'infos</p>
                    </div>
                    <div class="active_text">
                        <p>The Anomalys &agrave; LaP&eacute;niche</p>
                        <p>5 &euro; (sur palce uniquement)</p>
                        <p>Gratuit sur pr&eacute;sentation d'un pass festival ven. 7 - sam. 8</p>
                    </div>
                </div>
                <div data-aos="flip-down" class="billet billet1">
                    <p>07 / 10 - Pass vendredi LaP&eacute;niche extended</p>
                    <a rel="noopener noreferrer" target="_blank" href=https://xceed.me/fr/chalon-sur-saone/club/lapeniche><i class="fas fa-receipt"></i></a>
                    <div class="hover_infos">
                        <p>Cliquez pour plus d'infos</p>
                    </div>
                    <div class="active_text">
                        <p>Pass soir 1 &agrave; LaP&eacute;niche - L'Abattoir - 20h30-3h</p>
                        <p>De 8 &agrave; 15 &euro;</p>
                        <p>Christine + Dj Mensonges + Elisa Do Brasil + Guess What + Marie Madeleine + Museau + Roches noires + Space Galvachers</p>
                    </div>
                </div>
                <div data-aos="flip-down" class="billet billet1">
                    <p>07 / 10 - Pass 2 soirs LaP&eacute;niche</p>
                    <a rel="noopener noreferrer" target="_blank" href=https://xceed.me/fr/chalon-sur-saone/club/lapeniche><i class="fas fa-receipt"></i></a>
                    <div class="hover_infos">
                        <p>Cliquez pour plus d'infos</p>
                    </div>
                    <div class="active_text">
                        <p>Pass vendredi &amp; samedi soir &agrave; LaP&eacute;niche - L'Abattoir</p>
                        <p>De 20 &agrave; 30 &euro;</p>
                        <p>(donne ac&egrave;s gratuit au concert de The Anomalys du jeudi 6 octobre)</p>
                        <p>Christine + Dj Mensonges + Elisa Do Brasil + Guess What + Marie Madeleine + Museau + Roches noires + Space Galvachers</p>
                        <p>Bernadette + Christine + Cyril Cyril + Dark N&lsquo; Stormy (Mila Dietrich &amp; Ghost Dance) + ILLUSTRE + Josy Fullvibes + La Jungle + Marie Madeleine + Museau + Roches Noire + UltraMoule</p>
                    </div>
                </div>
                <div data-aos="flip-down" class="billet billet1">
                    <p>08 / 10 - Pass samedi LaP&eacute;niche extended</p>
                    <a rel="noopener noreferrer" target="_blank" href=https://xceed.me/fr/chalon-sur-saone/club/lapeniche><i class="fas fa-receipt"></i></a>
                    <div class="hover_infos">
                        <p>Cliquez pour plus d'infos</p>
                    </div>
                    <div class="active_text">
                        <p>Pass soir 2 &agrave; LaP&eacute;niche - L'Abattoir - 22h-6h</p>
                        <p>De 18 &agrave; 25 &euro;</p>
                        <div class="page" title="Page 17">
                            <div class="section">
                                <div class="layoutArea">
                                    <div class="column">
                                        <p>Bernadette + Christine + Cyril Cyril + Dark N&lsquo; Stormy (Mila Dietrich &amp; Ghost Dance) + ILLUSTRE + Josy Fullvibes + La Jungle + Marie Madeleine + Museau + Roches Noire + UltraMoule</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-aos="flip-down" class="billet billet1">
                    <p>08 / 10 - Juke Box Boum - Jeune Public</p>
                    <a rel="noopener noreferrer" target="_blank" href=https://xceed.me/fr/chalon-sur-saone/event/jukebox-boum-1--112744><i class="fas fa-receipt"></i></a>
                    <div class="hover_infos">
                        <p>Cliquez pour plus d'infos</p>
                    </div>
                    <div class="active_text">
                        <p style="text-align: center;">Jeune public : 6 &agrave; 12 ans</p>
                        <p style="text-align: center;">15h &agrave; 16h30&nbsp; &agrave; la Maison Verte</p>
                        <p style="text-align: center;">Tarif unique 5 &euro;&nbsp;</p>
                    </div>
                </div>
                <div data-aos="flip-down" class="billet billet1">
                    <p>08 / 10 - Jetons boissons 7 &amp; 8 oct.</p>
                    <a rel="noopener noreferrer" target="_blank" href=https://xceed.me/fr/chalon-sur-saone/event/dancing-people-dont-die-tickets-boissons--112494><i class="fas fa-receipt"></i></a>
                    <div class="hover_infos">
                        <p>Cliquez pour plus d'infos</p>
                    </div>
                    <div class="active_text">
                        <p>Jetons boissons</p>
                        <p>20 &euro;</p>
                        <p>50 &euro;</p>
                        <p>&Agrave; r&eacute;cup&eacute;rer &agrave; la billetterie le soir du festival</p>
                    </div>
                </div>



            </div>
            <div>
                <p style="text-align: center;">Points de ventes physiques :</p>
                <p style="text-align: center;">Sympathy For The Vinyl, rue de Poulets &agrave; Chalon-sur-Sa&ocirc;ne</p>
                <p style="text-align: center;">Rock'n Art Caf&eacute;, rue Pasteur &agrave; Chalon-sur-Sa&ocirc;ne</p>
                <p style="text-align: center;">Pour Marina Herlop, billetterie physique au Conservatoir les 23 et 27 octobre &agrave; partir de 17h</p>
                <p style="text-align: center;">Toutes les r&eacute;servations en ligne : https://bit.ly/3fuN31q</p>
                <p style="text-align: center;">Mais aussi sur l'application Pass Culture !</p>
            </div>
        </section>
        <!-- AFTERMOVIE -->
        <section id="aftermovie">
            <h1>VID&Eacute;OS</h1>
            <div class="video_caroussel_container">
                <div class="video_button" id="next_video"></div>
                <div class="video_button" id="previous_video"></div>
                <div class="iframe_container hidden">
                    <iframe src="https://www.youtube.com/embed/ECTgnwrXUV4" title="YouTube video player"></iframe>
                </div>
                <div class="iframe_container hidden">
                    <iframe src="https://www.youtube.com/embed/v_u1H6FP_-c" title="YouTube video player"></iframe>
                </div>
                <div class="iframe_container hidden">
                    <iframe src="https://www.youtube.com/embed/cZTxcRt95aI" title="YouTube video player"></iframe>
                </div>

                <div class="nav_dots">
                    <div class="nav_dot"></div>
                    <div class="nav_dot"></div>
                    <div class="nav_dot"></div>

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
                <p style="text-align: center;">Les lieux :</p>
                <p style="text-align: center;">-&gt; LaP&eacute;niche extended 52 Quai saint-Cosme &agrave; Chalon</p>
                <p style="text-align: center;">-&gt; Auditorium du Conservatoire Grande rue Saint-Cosme &agrave; Chalon</p>
                <p style="text-align: center;">-&gt; Maison de quartier Des Aub&eacute;pins 8 rue du Pont Du Fer &agrave; Chalon</p>
                <p style="text-align: center;">-&gt; Maison de Quartier Claudel Bernanos 1 rue St&eacute;phane Mallarm&eacute; &agrave; Chalon</p>
                <p style="text-align: center;">-&gt; Maison Verte 2 Rue Andr&eacute; Malraux &agrave; Chalon</p>
                <p style="text-align: center;">-&gt; Espace des Arts 5B Av. Nic&eacute;phore Ni&eacute;pce &agrave; Chalon</p>
                <p style="text-align: center;">Restauration :</p>
                <p style="text-align: center;">Vendredi 7 octobre : foodtruck C'est Dans La Boite</p>
                <p style="text-align: center;">Samedi 8 octobre : foodtruck Take Away</p>
                <p style="text-align: center;">&nbsp;</p>
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

                    <li data-aos="fade-up"><a rel="noopener noreferrer" target="_blank" data-targetpartenaire="Partenaires institutionnels" class="partenaire_button">Partenaires institutionnels </a>
                        <div class="partenaire_container hidden" id="Partenaires institutionnels">

                            <a href=https://www.saoneetloire71.fr /><img class="logo" src="views/festival/images/46870_Logo département noir et blanc.png" alt="logo"></a>
                            <a href=https://www.bourgognefranchecomte.fr /><img class="logo" src="views/festival/images/80611_logo_region.png" alt="logo"></a>
                            <a href=https://www.culture.gouv.fr/Regions/Drac-Bourgogne-Franche-Comte><img class="logo" src="views/festival/images/38952_logo-drac-bourgogne.png" alt="logo"></a>
                            <a href=https://www.ac-dijon.fr/fonds-pour-le-developpement-de-la-vie-associative-fdva-2022-125588><img class="logo" src="views/festival/images/58231_DSDEN-SDJES-71-FDVA_bl.png" alt="logo"></a>
                            <a href=https://www.legrandchalon.fr /><img class="logo" src="views/festival/images/60249_logo_grand_chalon.png" alt="logo"></a>
                            <a href=https://www.cohesion-territoires.gouv.fr /><img class="logo" src="views/festival/images/33130_POLITIQUE_VILLE_TERRITOIRE.png" alt="logo"></a>
                            <a href=https://www.chalon.fr /><img class="logo" src="views/festival/images/13850_ville-de-chalon_blanc.png" alt="logo"></a>
                        </div>

                    </li>

                    <li data-aos="fade-up"><a rel="noopener noreferrer" target="_blank" data-targetpartenaire="Partenaires professionnels" class="partenaire_button">Partenaires professionnels </a>
                        <div class="partenaire_container hidden" id="Partenaires professionnels">

                            <a href=https://www.sacem.fr /><img class="logo" src="views/festival/images/3197_SACEM_R_2020.png" alt="logo"></a>
                            <a href=https://cnm.fr /><img class="logo" src="views/festival/images/50033_cnm_logotype_blanc-cmjn.png" alt="logo"></a>
                            <a href=https://www.copieprivee.org /><img class="logo" src="views/festival/images/41977_logo_copie_privee_noir_web150x150.png" alt="logo"></a>
                        </div>

                    </li>

                    <li data-aos="fade-up"><a rel="noopener noreferrer" target="_blank" data-targetpartenaire="Etablissements partenaires" class="partenaire_button">Etablissements partenaires </a>
                        <div class="partenaire_container hidden" id="Etablissements partenaires">

                            <a href=https://perfect-live.com /><img class="logo" src="views/festival/images/85055_logoperfectlive_nb.png" alt="logo"></a>
                            <a href=http://emafructidor.com/ema /><img class="logo" src="views/festival/images/51984_logo-ema_BL.png" alt="logo"></a>
                            <a href=><img class="logo" src="views/festival/images/62958_LOGO-ALKOR-bl-WEB.png" alt="logo"></a>
                            <a href=https://www.sympathyforthevinyl.fr /><img class="logo" src="views/festival/images/45192_LOGO_Sympathy_for_the_vinyl.png" alt="logo"></a>
                            <a href=https://adeco-publicite.fr /><img class="logo" src="views/festival/images/96420_Logo-Adéco-bl.png" alt="logo"></a>
                            <a href=><img class="logo" src="views/festival/images/95894_hairtruck.png" alt="logo"></a>
                            <a href=https://www.planning-familial.org/fr/le-planning-familial-de-saone-et-loire-71><img class="logo" src="views/festival/images/97511_logo blanc.png" alt="logo"></a>
                            <a href=https://www.espace-des-arts.com /><img class="logo" src="views/festival/images/32857_Logo EDA 2020 bl.png" alt="logo"></a>
                            <a href=http://audacieuse-bab.com /><img class="logo" src="views/festival/images/13564_LOGO-LaBAB-white(3).png" alt="logo"></a>
                            <a href=https://conservatoire.legrandchalon.fr/decouvrir/spectacles/marina-herlop><img class="logo" src="views/festival/images/9832_CONSERVATOIRE noiretblanc - écriture blanche.png" alt="logo"></a>
                            <a href=http://www.avl-event.fr /><img class="logo" src="views/festival/images/45971_avl-logo.png" alt="logo"></a>
                            <a href=https://www.streetcomdiffusion.fr /><img class="logo" src="views/festival/images/9615_DERNIER_Logo  streetcom Imp 300nb.png" alt="logo"></a>
                            <a href=https://larustine.net /><img class="logo" src="views/festival/images/67936_larustine-logo.png" alt="logo"></a>
                            <a href=http://latitudevins.com/#!Home.html><img class="logo" src="views/festival/images/62451_LATITUDE_VINS_LOGOS.png" alt="logo"></a>
                            <a href=http://www.loca-son.fr /><img class="logo" src="views/festival/images/31527_LOCASON FLYERS DL logobl.png" alt="logo"></a>
                            <a href=https://www.protect-events.fr /><img class="logo" src="views/festival/images/57736_LOGO PROTECT-events_bl.png" alt="logo"></a>
                            <a href=https://www.facebook.com/profile.php?id=100057598714901><img class="logo" src="views/festival/images/24153_Logo ROCK n ART.png" alt="logo"></a>
                            <a href=https://www.avantagesjeunes.com /><img class="logo" src="views/festival/images/58454_LOGO_CARTE_AVANTAGE_JEUNE.png" alt="logo"></a>
                            <a href=https://www.chalondanslarue.com /><img class="logo" src="views/festival/images/72988_LOGO_CDLR_300x300px_300dpi_neg.png" alt="logo"></a>
                            <a href=http://www.lapeniche.org /><img class="logo" src="views/festival/images/61707_LOGOPENICHE_white.png" alt="logo"></a>
                        </div>

                    </li>

                    <li data-aos="fade-up"><a rel="noopener noreferrer" target="_blank" data-targetpartenaire="Partenaires m&eacute;dias" class="partenaire_button">Partenaires m&eacute;dias </a>
                        <div class="partenaire_container hidden" id="Partenaires m&eacute;dias">

                            <a href=https://odil.tv /><img class="logo" src="views/festival/images/40231_ODILTV.png" alt="logo"></a>
                            <a href=https://www.traxmag.com /><img class="logo" src="views/festival/images/17763_Trax-log-blanc.png" alt="logo"></a>
                            <a href=http://www.radiobresse.com /><img class="logo" src="views/festival/images/74511_logo-radio-bresse.png" alt="logo"></a>
                            <a href=https://radioprevert.com /><img class="logo" src="views/festival/images/84888_logo200.png" alt="logo"></a>
                            <a href=https://www.sparse.fr /><img class="logo" src="views/festival/images/78117_logo-sparse.png" alt="logo"></a>
                            <a href=https://radiodijoncampus.com /><img class="logo" src="views/festival/images/49635_LOGO-CAMPUS-2017-blanc-creux.png" alt="logo"></a>
                        </div>

                    </li>

                    <li data-aos="fade-up"><a rel="noopener noreferrer" target="_blank" data-targetpartenaire="R&eacute;seaux" class="partenaire_button">R&eacute;seaux </a>
                        <div class="partenaire_container hidden" id="R&eacute;seaux">

                            <a href=https://www.fedelima.org /><img class="logo" src="views/festival/images/46850_Fedelima.png" alt="logo"></a>
                            <a href=https://www.sma-syndicat.org /><img class="logo" src="views/festival/images/48558_logo-sma-2019.png" alt="logo"></a>
                            <a href=https://icicestcool.org /><img class="logo" src="views/festival/images/30244_logo_ici c'est cool.png" alt="logo"></a>
                            <a href=https://www.femabfc.org /><img class="logo" src="views/festival/images/96712_LA_FEMA.png" alt="logo"></a>
                            <a href=https://www.vousnetespaslaparhasard.com /><img class="logo" src="views/festival/images/11561_Festivals indépendants Logo Blanc.png" alt="logo"></a>
                            <a href=><img class="logo" src="views/festival/images/12842_rezo_nb.png" alt="logo"></a>
                        </div>

                    </li>
                </ul>

            </section>

        </div>
        <section class="contact">
            <h1>Contacts</h1>
            <div class="contact_wrapper">
                <div data-aos="flip-left" data-aos-duration="693" class="equipe_member">
                    <p style="text-align: center;"><strong>Direction / Programmation</strong></p>
                    <p style="text-align: center;">Sophie Bellamy</p>
                    <p style="text-align: center;">sophie@lapeniche.org</p>
                </div>
                <div data-aos="flip-left" data-aos-duration="693" class="equipe_member">
                    <p style="text-align: center;"><strong>Administration / comptabilit&eacute; / billetterie</strong></p>
                    <p style="text-align: center;">Lucile Rautureau</p>
                    <p style="text-align: center;">admin@lapeniche.org</p>
                </div>
                <div data-aos="flip-left" data-aos-duration="693" class="equipe_member">
                    <p style="text-align: center;"><strong>Communication / presse</strong></p>
                    <p style="text-align: center;">Adrien Guitton</p>
                    <p style="text-align: center;">com@lapeniche.org</p>
                </div>
                <div data-aos="flip-left" data-aos-duration="693" class="equipe_member">
                    <p style="text-align: center;"><strong>Association Mosa&iuml;ques</strong></p>
                    <p style="text-align: center;">LaP&eacute;niche / DPDD</p>
                    <p style="text-align: center;">info@lapeniche.org</p>
                </div>
                <div data-aos="flip-left" data-aos-duration="693" class="equipe_member">
                    <p style="text-align: center;"><strong>Production &amp; B&eacute;n&eacute;volat</strong></p>
                    <p style="text-align: center;">Margot Chedeville</p>
                    <p style="text-align: center;">prod@lapeniche.org</p>
                </div>

            </div>
        </section>
        <footer>
            <div class="footer_social">
                <p>Follow us :
                    <a rel="noopener noreferrer" target="_blank" href=" https://www.facebook.com/dancingpeopledontdie/"><i class="fab fa-facebook" aria-hidden="true"></i></a>
                    <a rel="noopener noreferrer" target="_blank" href="https://www.instagram.com/dancing_people_dont_die/"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                </p>
            </div>
        </footer>
    </div>
</body>

</html>