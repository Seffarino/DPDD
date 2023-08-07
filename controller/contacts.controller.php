<?php
require_once "controller/securite.php";
require_once "models/contacts.manager.php"; 
require_once "controller/utiles.php";

class ContactsController{
    private $contactsManager;

    public function __construct(){
        $this->contactsManager = new ContactsManager();
    }

    public function visualisation(){
        if(Securite::verifAccessSession()){
            $contacts = $this->contactsManager->getContacts();
            require_once "views/view.contactsVisualisation.php";
        } else {
            throw new Exception("Vous n'avez pas le droit d'être là ! ");
        }
    }

    public function suppression(){
        if(Securite::verifAccessSession()){
            $idContact = (int)Securite::secureHTML($_POST['contact_id']);
            $this->contactsManager->deleteDBContact($idContact);
            $_SESSION['alert'] = [
                "message" => "Le contact est supprimé",
                "type" => "alert-success"
            ];
           
            header('Location: '.URL.'back/contacts/visualisation');
        } else {
            throw new Exception("Vous n'avez pas le droit d'être là ! ");
        }
    }

    public function get_creation(){
        if(Securite::verifAccessSession()){
            require_once "views/view.contacts.creation.php";
        } else {
            throw new Exception("Vous n'avez pas le droit d'être là ! ");
        }
    }

    public function haut(){
        $idContact = (int)Securite::secureHTML($_POST['contact_id']);
        $ordre = (int)Securite::secureHTML($_POST['contact_ordre']);
        $this->contactsManager->haut($idContact,$ordre);
        header('Location: '.URL.'back/contacts/visualisation');
    }

    public function bas(){
        $idContact = (int)Securite::secureHTML($_POST['contact_id']);
        $ordre = (int)Securite::secureHTML($_POST['contact_ordre']);
        $this->contactsManager->bas($idContact,$ordre);
        header('Location: '.URL.'back/contacts/visualisation');
    }

    public function creationValidation(){
        if(Securite::verifAccessSession()){
            $contenu = $_POST['contact_contenu'];
            
            $idContact = $this->contactsManager->createContact($contenu);

            $_SESSION['alert'] = [
                "message" => "Le contact est créé avec l'id : ".$idContact,
                "type" => "is-success"
            ];
            header('Location: '.URL.'back/contacts/visualisation');
        } else {
            throw new Exception("Vous n'avez pas le droit d'être là ! ");
        }
    }
}