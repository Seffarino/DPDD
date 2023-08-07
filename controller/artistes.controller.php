<?php
require_once "controller/securite.php";
require_once "models/artistes.manager.php";
require_once "controller/utiles.php";

class ArtistesController
{
    private $artisteManager;

    public function __construct()
    {
        $this->artisteManager = new ArtistesManager();
    }

    public function visualisation()
    {
        if (Securite::verifAccessSession()) {
            $artistes = $this->artisteManager->getArtistes();
            require_once "views/view.artistesVisualisation.php";
        } else {
            throw new Exception("Vous n'avez pas le droit d'être là ! ");
        }
    }
    public function getModification()
    {
        if (Securite::verifAccessSession()) {
            $idArtiste = (int)Securite::secureHTML($_POST['artiste_id']);
            $artiste = $this->artisteManager->getArtiste($idArtiste)[0];
            require_once "views/view.artistesModification.php";
        } else {
            throw new Exception("Vous n'avez pas le droit d'être là ! ");
        }
    }
    public function suppression()
    {
        if (Securite::verifAccessSession()) {
            $idArtiste = (int)Securite::secureHTML($_POST['artiste_id']);
            $image = $this->artisteManager->getImageArtiste($idArtiste);
            unlink("views/festival/images/" . $image);

            $this->artisteManager->deleteDBArtistes($idArtiste);
            $_SESSION['alert'] = [
                "message" => "L'Artiste est supprimé",
                "type" => "alert-success"
            ];

            header('Location: ' . URL . 'back/artistes/visualisation');
        } else {
            throw new Exception("Vous n'avez pas le droit d'être là ! ");
        }
    }

    public function get_creation()
    {
        if (Securite::verifAccessSession()) {
            require_once "views/view.artiste.creation.php";
        } else {
            throw new Exception("Vous n'avez pas le droit d'être là ! ");
        }
    }
    public function fieldsVerification($nom, $date, $style, $video, $provenance, $description, $youtube, $twitter, $instagram, $facebook, $lieu, $siteweb, $spotify, $tarif)
    {
        $errors = array();
        if (strlen($date) < 1) {
            array_push($errors, "La date est invalide");
        }
        return $errors;
    }
    public function creationValidation()
    {
        if (Securite::verifAccessSession()) {
            $nom = Securite::secureHTML($_POST['artiste_nom']);
            $date = Securite::secureHTML($_POST['artiste_date']);
            $style = Securite::secureHTML($_POST['artiste_style']);
            $video = Securite::secureHTML($_POST['artiste_video']);
            $provenance = Securite::secureHTML($_POST['artiste_provenance']);
            $description = $_POST['artiste_description'];
            $youtube = Securite::secureHTML($_POST['artiste_youtube']);
            $twitter = Securite::secureHTML($_POST['artiste_twitter']);
            $instagram = Securite::secureHTML($_POST['artiste_instagram']);
            $facebook = Securite::secureHTML($_POST['artiste_facebook']);
            $lieu = Securite::secureHTML($_POST['artiste_lieu']);
            $siteweb = Securite::secureHTML($_POST['artiste_site_web']);
            $spotify = Securite::secureHTML($_POST['artiste_spotify']);
            $tarif = Securite::secureHTML($_POST['artiste_tarif']);

            $image = "";
            if ($_FILES['image']['size'] > 0) {
                $repertoire = "views/festival/images/";
                $image = ajoutImage($_FILES['image'], $repertoire);
            }
            $errors = $this->fieldsVerification($nom, $date, $style, $video, $provenance, $description, $youtube, $twitter, $instagram, $facebook, $lieu, $siteweb,  $spotify, $tarif);
            if (empty($errors)) {
                $idAnimal = $this->artisteManager->createArtiste($nom, $date, $style, $video, $provenance, $description, $youtube, $twitter, $instagram, $facebook, $lieu, $image, $siteweb,  $spotify, $tarif);
                $_SESSION['alert'] = [
                    "message" => "L'artiste est créé avec l'id : " . $idAnimal,
                    "type" => "is-success"
                ];
            } else {
                $_SESSION['alert'] = [
                    "message" => "Erreur lors de la creation de l'artiste :" . implode(" , ", $errors),
                    "type" => "is-alert"
                ];
            }

            header('Location: ' . URL . 'back/artistes/visualisation');
        } else {
            throw new Exception("Vous n'avez pas le droit d'être là ! ");
        }
    }
    public function getModificationValidation()
    {
        if (Securite::verifAccessSession()) {
            $id = Securite::secureHTML($_POST['artiste_id']);
            $nom = Securite::secureHTML($_POST['artiste_nom']);
            $date = Securite::secureHTML($_POST['artiste_date']);
            $style = Securite::secureHTML($_POST['artiste_style']);
            $video = Securite::secureHTML($_POST['artiste_video']);
            $provenance = Securite::secureHTML($_POST['artiste_provenance']);
            $description = $_POST['artiste_description'];
            $youtube = Securite::secureHTML($_POST['artiste_youtube']);
            $twitter = Securite::secureHTML($_POST['artiste_twitter']);
            $instagram = Securite::secureHTML($_POST['artiste_instagram']);
            $facebook = Securite::secureHTML($_POST['artiste_facebook']);
            $lieu = Securite::secureHTML($_POST['artiste_lieu']);
            $siteweb = Securite::secureHTML($_POST['artiste_site_web']);
            $spotify = Securite::secureHTML($_POST['artiste_spotify']);
            $tarif = Securite::secureHTML($_POST['artiste_tarif']);

            $errors = $this->fieldsVerification($nom, $date, $style, $video, $provenance, $description, $youtube, $twitter, $instagram, $facebook, $lieu, $siteweb, $spotify, $tarif);
            if (empty($errors)) {
                $affectedrows = $this->artisteManager->modifyArtiste($id, $nom, $date, $style, $video, $provenance, $description, $youtube, $twitter, $instagram, $facebook, $lieu, $siteweb,  $spotify, $tarif);
                $_SESSION['alert'] = [
                    "message" => "L'artiste est modifié " . $affectedrows,
                    "type" => "is-success"
                ];
            } else {
                $_SESSION['alert'] = [
                    "message" => "Erreur lors de la modification de l'artiste" . implode(" ", $errors),
                    "type" => "is-alert"
                ];
            }

            header('Location: ' . URL . 'back/artistes/visualisation');
        } else {
            throw new Exception("Vous n'avez pas le droit d'être là ! ");
        }
    }
}
