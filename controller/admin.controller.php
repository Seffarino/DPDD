<?php

require_once "models/admin.manager.php";
require_once "models/partenaires.manager.php";
require_once "models/carrousel.manager.php";
require_once "models/billetterie.manager.php";

class AdminController
{
    private $adminManager;
    private $partenairesManager;
    private $carrouselManager;
    private $billetManager;
    public function __construct()
    {
        $this->adminManager = new AdminManager();
        $this->partenairesManager = new PartenairesManager();
        $this->carrouselManager = new CarrouselManager();
        $this->billetManager = new BilletManager();
    }

    public function get_page_festival()
    {
        $artistes = $this->adminManager->get_artiste();
        $contacts = $this->adminManager->get_contacts();
        $mep = $this->adminManager->get_mise_en_page();
        $categories = $this->partenairesManager->getCategories();
        $partenaires = $this->partenairesManager->getPartenaires();
        $caroussel_video = $this->carrouselManager->getCarrousel();
        $billetterie = $this->adminManager->get_billets();
        $dates = $this->adminManager->getDates();
        $formated_partenaires = [];
        foreach ($categories as $categorie) {
            $formated_partenaires[$categorie['categorie_libelle']] = [];
        }
        foreach ($partenaires as $partenaire) {
            array_push($formated_partenaires[$partenaire['categorie_libelle']], $partenaire);
        }
        require_once "views/festival/festival.view.php";
    }
    public function get_page_festival2022()
    {
        require_once "views/festival/festival2022.view.php";
    }

    public function get_page_login()
    {
        require_once "views/view.login.php";
    }

    public function connexion()
    {
        if (!empty($_POST['login']) && !empty($_POST['mdp'])) {
            $login = Securite::secureHTML($_POST['login']);
            $password = Securite::secureHTML($_POST['mdp']);
            if ($this->adminManager->isConnexionValid($login, $password)) {
                $_SESSION['access'] = "admin";
                $_SESSION['login'] = $login;
                header('Location: ' . URL . "back/admin");
            } else {
                header('Location: ' . URL . "back/login");
            }
        }
    }

    public function changePassword($login)
    {
        if (Securite::verifAccessSession()) {
        } else {
            header('Location: ' . URL . "back/login");
        }
    }

    public function get_page_admin()
    {
        if (Securite::verifAccessSession()) {
            require "views/view.admin.php";
        } else {
            header('Location: ' . URL . "back/login");
        }
    }

    public function deconnexion()
    {
        session_destroy();
        header('Location: ' . URL . "back/login");
    }
}
