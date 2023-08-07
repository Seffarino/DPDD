<?php

require_once "models/Model.php";
class CarrouselManager extends Model{

    public function getCarrousel(){
        $req = "SELECT * from aftermovie";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->execute();
        $carrousel = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt->closeCursor();
        return $carrousel;
    }

    public function deleteDBCarrousel($idCarrousel){
        $req ="Delete from aftermovie where aftermovie_id = :idCarrousel";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":idCarrousel",$idCarrousel,PDO::PARAM_INT);
        $stmt->execute();
        $stmt->closeCursor();
    }

    public function createVideo($url){
        $req ="Insert into aftermovie (aftermovie_id,aftermovie_url)
            values (NULL,:url)
        ";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":url",$url,PDO::PARAM_STR);
        $stmt->execute();
        $stmt->closeCursor();
        return $this->getBdd()->lastInsertId();
    }
}