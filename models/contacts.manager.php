<?php

require_once "models/Model.php";
class ContactsManager extends Model{

    public function getContacts(){
        $req = "SELECT * from contact ORDER BY `contact`.`contact_ordre` ASC";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->execute();
        $artistes = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt->closeCursor();
        return $artistes;
    }

    public function deleteDBContact($idContact){
        $req ="Delete from contact where contact_id= :idContact";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":idContact",$idContact,PDO::PARAM_INT);
        $stmt->execute();
        $stmt->closeCursor();
    }
    public function haut($idContact,$ordre){
        $req ="UPDATE `contact` SET `contact_ordre`=:ordre WHERE `contact_id`=:id";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":id",$idContact,PDO::PARAM_INT);
        $stmt->bindValue(":ordre",$ordre-1,PDO::PARAM_INT);
        $stmt->execute();
        $stmt->closeCursor();
    }

    public function bas($idContact,$ordre){
        $req ="UPDATE `contact` SET `contact_ordre`=:ordre WHERE `contact_id`=:id";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":id",$idContact,PDO::PARAM_INT);
        $stmt->bindValue(":ordre",$ordre+1,PDO::PARAM_INT);
        $stmt->execute();
        $stmt->closeCursor();
    }

    public function createContact($contenu){
        $req ="Insert into contact (contact_id,contact_contenu,contact_ordre)
            values (NULL,:contenu,2)
        ";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":contenu",$contenu,PDO::PARAM_STR);
        $stmt->execute();
        $stmt->closeCursor();
        return $this->getBdd()->lastInsertId();
    }
}