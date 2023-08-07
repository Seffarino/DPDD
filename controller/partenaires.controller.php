<?php
require_once "controller/securite.php";
require_once "models/partenaires.manager.php";
require_once "controller/utiles.php";

class PartenairesController
{
    private $partenairesManager;

    public function __construct()
    {
        $this->partenairesManager = new PartenairesManager();
    }

    public function visualisation()
    {
        if (Securite::verifAccessSession()) {
            $partenaires = $this->partenairesManager->getPartenaires();
            require_once "views/view.partenairesVisualisation.php";
        } else {
            throw new Exception("Vous n'avez pas le droit d'être là ! ");
        }
    }
    public function getFormatedCategories()
    {
        $partenaires = $this->partenairesManager->getPartenaires();
        $categories = $this->partenairesManager->getCategories();

        print_r($partenaires);
        print_r($categories);
    }
    public function categorieVisualisation()
    {
        if (Securite::verifAccessSession()) {
            $categories = $this->partenairesManager->getCategories();
            require_once "views/view.categorieVisualisation.php";
        } else {
            throw new Exception("Vous n'avez pas le droit d'être là ! ");
        }
    }
    public function suppression()
    {
        if (Securite::verifAccessSession()) {
            $idPartenaire = (int)Securite::secureHTML($_POST['partenaire_id']);
            $image = $this->partenairesManager->getImagePartenaires($idPartenaire);
            unlink("views/festival/images/" . $image);

            $this->partenairesManager->deleteDBPartenaires($idPartenaire);
            $_SESSION['alert'] = [
                "message" => "Le partenaire est supprimé",
                "type" => "alert-success"
            ];

            header('Location: ' . URL . 'back/partenaires/visualisation');
        } else {
            throw new Exception("Vous n'avez pas le droit d'être là ! ");
        }
    }

    public function categorieSuppression()
    {
        if (Securite::verifAccessSession()) {
            $idCategorie = (int)Securite::secureHTML($_POST['categorie_id']);
            $this->partenairesManager->deleteDBCategorie($idCategorie);
            $_SESSION['alert'] = [
                "message" => "La catégorie est supprimé avec lID : " . $idCategorie,
                "type" => "alert-success"
            ];

            header('Location: ' . URL . 'back/partenaires/categorieVisualisation');
        } else {
            throw new Exception("Vous n'avez pas le droit d'être là ! ");
        }
    }

    public function get_creation()
    {
        if (Securite::verifAccessSession()) {
            $categories = $this->partenairesManager->getCategories();
            require_once "views/view.partenairesCreation.php";
        } else {
            throw new Exception("Vous n'avez pas le droit d'être là ! ");
        }
    }

    public function get_categorie_creation()
    {
        if (Securite::verifAccessSession()) {
            require_once "views/view.categorieCreation.php";
        } else {
            throw new Exception("Vous n'avez pas le droit d'être là ! ");
        }
    }

    public function creationValidation()
    {
        if (Securite::verifAccessSession()) {
            $url = Securite::secureHTML($_POST['partenaire_url']);
            $image = "";
            if ($_FILES['image']['size'] > 0) {
                $repertoire = "views/festival/images/";
                $image = ajoutImage($_FILES['image'], $repertoire);
            }
            $categorie = (int) Securite::secureHTML($_POST['partenaire_categorie']);
            $idPartenaire = $this->partenairesManager->createPartenaire($url, $image, $categorie);

            $_SESSION['alert'] = [
                "message" => "Le partenaire est créé avec l'id : " . $idPartenaire,
                "type" => "is-success"
            ];
            header('Location: ' . URL . 'back/partenaires/visualisation');
        } else {
            throw new Exception("Vous n'avez pas le droit d'être là ! ");
        }
    }

    public function categorieValidation()
    {
        if (Securite::verifAccessSession()) {
            $libelle = Securite::secureHTML($_POST['categorie_libelle']);
            $idCategorie = $this->partenairesManager->createCategorie($libelle);

            $_SESSION['alert'] = [
                "message" => "La catégorie est créé avec l'id : " . $idCategorie,
                "type" => "is-success"
            ];
            header('Location: ' . URL . 'back/partenaires/visualisation');
        } else {
            throw new Exception("Vous n'avez pas le droit d'être là ! ");
        }
    }

    public function categorieHaut()
    {
        $idCategorie = (int)Securite::secureHTML($_POST['categorie_id']);
        $ordre = (int)Securite::secureHTML($_POST['categorie_ordre']);
        $this->partenairesManager->categorieHaut($idCategorie, $ordre);
        header('Location: ' . URL . 'back/partenaires/categorieVisualisation');
    }

    public function categorieBas()
    {
        $idCategorie = (int)Securite::secureHTML($_POST['categorie_id']);
        $ordre = (int)Securite::secureHTML($_POST['categorie_ordre']);
        $this->partenairesManager->categorieBas($idCategorie, $ordre);
        header('Location: ' . URL . 'back/partenaires/categorieVisualisation');
    }
    public function bas()
    {
        $idPartenaire = (int)Securite::secureHTML($_POST['partenaire_id']);
        $ordre = (int)Securite::secureHTML($_POST['partenaire_ordre']);
        $this->partenairesManager->partenaireBas($idPartenaire, $ordre);
        header('Location: ' . URL . 'back/partenaires/visualisation');
    }
    public function haut()
    {
        $idPartenaire = (int)Securite::secureHTML($_POST['partenaire_id']);
        $ordre = (int)Securite::secureHTML($_POST['partenaire_ordre']);
        $this->partenairesManager->partenaireHaut($idPartenaire, $ordre);
        header('Location: ' . URL . 'back/partenaires/visualisation');
    }
}
