<?php

require_once "models/admin.manager.php"; 

class AdminController {

    private $adminManager;

    public function __construct(){
        $this->adminManager = new AdminManager();
    }


    public function get_page_festival(){
        $artistes = $this->adminManager->getArtistes();

        require_once "views/festival/festival.view.php";
    }
    public function get_page_login(){

        require_once "views/view.login.php";
    }


    public function connexion(){
        if($this->adminManager->isCombinaisonValide($_POST['login'],$_POST['password'])){
            $_SESSION['profil'] = [
                "login"=>$_POST['login'],
                "password"=>$_POST['password'],
            ];
            header("Location: " . URL . "back/admin");
        } else {
            throw new Exception("Le login ou le mot de passe est incorrect");
        }
    }

    public function get_page_admin(){
        if(!empty($_SESSION['profil'])){

            require "views/view.admin.php";
        } else {
            throw new Exception("Vous n'avez pas le droit d'acceder à cette page");
        }
    }

    public function deconnexion(){
        unset($_SESSION['profil']);
        header("Location: " . URL . "back/login");
    }
}
