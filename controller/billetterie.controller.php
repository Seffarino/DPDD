<?php
require_once "controller/securite.php";
require_once "models/billetterie.manager.php";
require_once "controller/utiles.php";

class BilletterieController
{
    private $billetManager;

    public function __construct()
    {
        $this->billetManager = new BilletManager();
    }

    public function visualisation()
    {
        if (Securite::verifAccessSession()) {
            $billetterie = $this->billetManager->getBillets();
            require_once "views/view.billetterie.visualisation.php";
        } else {
            throw new Exception("Vous n'avez pas le droit d'être là ! ");
        }
    }
    public function getModification()
    {
        if (Securite::verifAccessSession()) {
            $idBillet = (int)Securite::secureHTML($_POST['billet_id']);
            $billet = $this->billetManager->getBillet($idBillet)[0];
            require_once "views/view.billetterie.modification.php";
        } else {
            throw new Exception("Vous n'avez pas le droit d'être là ! ");
        }
    }
    public function suppression()
    {
        if (Securite::verifAccessSession()) {
            $idBillet = (int)Securite::secureHTML($_POST['billet_id']);
            $this->billetManager->deleteDBbillet($idBillet);
            $_SESSION['alert'] = [
                "message" => "Le billet est supprimé",
                "type" => "alert-success"
            ];

            header('Location: ' . URL . 'back/billetterie/visualisation');
        } else {
            throw new Exception("Vous n'avez pas le droit d'être là ! ");
        }
    }

    public function get_creation()
    {
        if (Securite::verifAccessSession()) {
            require_once "views/view.billetterie.creation.php";
        } else {
            throw new Exception("Vous n'avez pas le droit d'être là ! ");
        }
    }
    public function fieldsVerification($date,$libelle,$description,$lien)
    {
        $errors = array();
        if (strlen($date) < 1) {
            array_push($errors, "La date est invalide");
        }
        if (!empty($libelle) && strlen($libelle) > 50) {
            array_push($errors, "Le nom est trop long (moins de 50 carac.)");
        }
        if (!empty($description) && strlen($description) > 3500) {
            array_push($errors, "La description est trop long (moins de 3500 carac.)");
        }
        if (!empty($lien) && strlen($lien) > 150) {
            array_push($errors, "Le lien est trop long (moins de 150 carac.)");
        }
        return $errors;
    }
    public function creationValidation()
    {
        if (Securite::verifAccessSession()) {
            $libelle = Securite::secureHTML($_POST['billet_libelle']);
            $date = Securite::secureHTML($_POST['billet_date']);
            $description = $_POST['billet_description'];
            $lien = Securite::secureHTML($_POST['billet_lien']);
            $errors = $this->fieldsVerification($date,$libelle,$description,$lien);
            if (empty($errors)) {
                $idBillet = $this->billetManager->createBillet($date,$libelle,$description,$lien);
                $_SESSION['alert'] = [
                    "message" => "Le billet est créé avec l'id : " . $idBillet,
                    "type" => "is-success"
                ];
            } else {
                $_SESSION['alert'] = [
                    "message" => "Erreur lors de la creation du billet :" . implode(" , ", $errors),
                    "type" => "is-alert"
                ];
            }

            header('Location: ' . URL . 'back/billetterie/visualisation');
        } else {
            throw new Exception("Vous n'avez pas le droit d'être là ! ");
        }
    }
    public function modificationValidation()
    {
        if (Securite::verifAccessSession()) {
            $id = Securite::secureHTML($_POST['billet_id']);
            $libelle = Securite::secureHTML($_POST['billet_libelle']);
            $date = Securite::secureHTML($_POST['billet_date']);
            $description = $_POST['billet_description'];
            $lien = Securite::secureHTML($_POST['billet_lien']);
            $errors = $this->fieldsVerification($date,$libelle,$description,$lien);
            if (empty($errors)) {
                $idBillet = $this->billetManager->modifyBillet($id,$date,$libelle,$description,$lien);
                $_SESSION['alert'] = [
                    "message" => "Le billet est modifié avec succes : " . $idBillet,
                    "type" => "is-success"
                ];
            } else {
                $_SESSION['alert'] = [
                    "message" => "Erreur lors de la modifcation du billet :" . implode(" , ", $errors),
                    "type" => "is-alert"
                ];
            }

            header('Location: ' . URL . 'back/billetterie/visualisation');
        } else {
            throw new Exception("Vous n'avez pas le droit d'être là ! ");
        }
    }
}
