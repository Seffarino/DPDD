<?php
require_once "controller/securite.php";
require_once "models/mise_en_page.manager.php";
require_once "controller/utiles.php";

class MepController
{
    private $mepManager;

    public function __construct()
    {
        $this->mepManager = new MepManager();
    }

    public function visualisation()
    {
        if (Securite::verifAccessSession()) {
            $mep = $this->mepManager->getMep();
            require_once "views/view.mep.php";
        } else {
            throw new Exception("Vous n'avez pas le droit d'être là ! ");
        }
    }

    public function modification()
    {
        if (Securite::verifAccessSession()) {
            $aftermovie_titre = Securite::secureHTML($_POST['aftermovie_titre']);
            $pratique = $_POST['pratique'];
            $programmation_titre = Securite::secureHTML($_POST['programmation_titre']);
            $presentation = $_POST['presentation'];
            $billetterie = $_POST['billetterie'];
            $titre_entete = $_POST['titre_entete'];
            $playlist = $_POST['playlist'];
            $prev_image = $this->mepManager->getImageMep();
            $image = "";
            if ($_FILES['image']['size'] > 0) {
                $repertoire = "views/festival/images/";
                $image = ajoutImage($_FILES['image'], $repertoire);
                unlink("views/festival/images/" . $prev_image);
            }

            $succes = $this->mepManager->updateMep($aftermovie_titre, $pratique, $programmation_titre, $presentation, $billetterie, $titre_entete, $image, $playlist);
            if ($succes) {
                $_SESSION['alert'] = [
                    "message" => "Mise à jour de la mise en page : ",
                    "type" => "is-success"
                ];
            }

            header('Location: ' . URL . 'back/mise_en_page/visualisation');
        } else {
            throw new Exception("Vous n'avez pas le droit d'être là ! ");
        }
    }
}
