<?php

require_once "models/Model.php";
class BilletManager extends Model{

    public function getBillets(){
        $req = "SELECT * from billetterie ORDER BY `billetterie`.`billet_date` ASC";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->execute();
        $billets = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt->closeCursor();
        return $billets;
    }
    public function getBillet($id)
    {
        $req = "SELECT * from billetterie WHERE `billet_id`=:id";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":id", $id, PDO::PARAM_INT);
        $stmt->execute();
        $billet = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt->closeCursor();
        return $billet;
    }
    public function deleteDBbillet($idBillet){
        $req ="DELETE FROM billetterie where billet_id= :idBillet";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":idBillet",$idBillet,PDO::PARAM_INT);
        $stmt->execute();
        $stmt->closeCursor();
    }

    public function createBillet($date,$libelle,$description,$lien){
        $req ="Insert into billetterie (billet_id,billet_date,billet_libelle,billet_description,billet_lien)
            values (NULL,:date,:libelle,:description,:lien)
        ";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":date",$date,PDO::PARAM_STR);
        $stmt->bindValue(":libelle",$libelle,PDO::PARAM_STR);
        $stmt->bindValue(":description",$description,PDO::PARAM_STR);
        $stmt->bindValue(":lien",$lien,PDO::PARAM_STR);
        $stmt->execute();
        $stmt->closeCursor();
        return $this->getBdd()->lastInsertId();
    }

    public function modifyBillet($id,$date,$libelle,$description,$lien){
        $req ="UPDATE `billetterie` SET `billet_date`=:date,`billet_description`=:description,`billet_libelle`=:libelle,`billet_lien`=:lien WHERE `billet_id` = :id";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":date",$date,PDO::PARAM_STR);
        $stmt->bindValue(":libelle",$libelle,PDO::PARAM_STR);
        $stmt->bindValue(":description",$description,PDO::PARAM_STR);
        $stmt->bindValue(":lien",$lien,PDO::PARAM_STR);
        $stmt->bindValue(":id",$id,PDO::PARAM_INT);
        $stmt->execute();
        $stmt->closeCursor();
        return $this->getBdd()->lastInsertId();
    }

    public function getDates()
    {
        $req = "SELECT DISTINCT `artiste_date` FROM `DPDD_artiste` WHERE 1 ORDER BY `DPDD_artiste`.`artiste_date` ASC";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->execute();
        $dates = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt->closeCursor();
        return $dates; 
    }
}