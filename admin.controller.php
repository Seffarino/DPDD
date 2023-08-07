<?php

require_once "models/admin.manager.php"; 

class AdminController{
    private $adminManager;

    public function __construct()
    {
        $this->adminManager = new AdminManager();
    }

    public function get_page_festival(){
        $artists = $this->adminManager->get_artiste();
        require_once "views/festival/festival.view.php";
    }

    /* public function get_page_login(){
        require_once "/htdocs/DPDD/views/view.login.php";
    }

    public function connexion(){
        if(!empty($_POST['login']) && !empty($_POST['mdp'])){
            $login = Securite::secureHTML($_POST['login']);
            $password = Securite::secureHTML($_POST['mdp']);
            if($this->adminManager->isConnexionValid($login,$password)){
                $_SESSION['access'] = "admin";
                header('Location: '.URL."back/admin");
            } else {
                header('Location: '.URL."back/login");
            }
        }
    }

    public function get_page_admin(){
        if(Securite::verifAccessSession()){
            require "/htdocs/DPDD/views/view.admin.php";
        } else {
            header('Location: '.URL."back/login");
        } 
    }
    
    public function deconnexion(){
        session_destroy();
        header('Location: '.URL."back/login");
    } */
}