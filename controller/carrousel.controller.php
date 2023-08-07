<?php
require_once "controller/securite.php";
require_once "models/carrousel.manager.php";
require_once "controller/utiles.php";

class CarrouselController
{
    private $carrouselManager;

    public function __construct()
    {
        $this->carrouselManager = new CarrouselManager();
    }

    public function visualisation()
    {
        if (Securite::verifAccessSession()) {
            $carrousel = $this->carrouselManager->getCarrousel();
            require_once "views/view.carrouselVisualisation.php";
        } else {
            throw new Exception("Vous n'avez pas le droit d'être là ! ");
        }
    }

    public function suppression()
    {
        if (Securite::verifAccessSession()) {
            $idCarrousel = (int)Securite::secureHTML($_POST['aftermovie_id']);
            $this->carrouselManager->deleteDBCarrousel($idCarrousel);
            $_SESSION['alert'] = [
                "message" => "La vidéo est supprimé",
                "type" => "alert-success"
            ];

            header('Location: ' . URL . 'back/carrousel/visualisation');
        } else {
            throw new Exception("Vous n'avez pas le droit d'être là ! ");
        }
    }

    public function get_creation()
    {
        if (Securite::verifAccessSession()) {
            require_once "views/view.carrousel.creation.php";
        } else {
            throw new Exception("Vous n'avez pas le droit d'être là ! ");
        }
    }

    public function creationValidation()
    {
        if (Securite::verifAccessSession()) {
            $url = Securite::secureHTML($_POST['aftermovie_url']);


            $idAftermovie = $this->carrouselManager->createVideo($url);

            $_SESSION['alert'] = [
                "message" => "La vidéo est créé avec l'id : " . $idAftermovie,
                "type" => "is-success"
            ];
            header('Location: ' . URL . 'back/carrousel/visualisation');
        } else {
            throw new Exception("Vous n'avez pas le droit d'être là ! ");
        }
    }
}
