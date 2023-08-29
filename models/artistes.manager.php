<?php

require_once "models/Model.php";
class ArtistesManager extends Model
{

    public function getArtistes()
    {
        $req = "SELECT * from DPDD_artiste ORDER BY `DPDD_artiste`.`artiste_date` ASC";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->execute();
        $artistes = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt->closeCursor();
        return $artistes;
    }
    public function getArtiste($id)
    {
        $req = "SELECT * from DPDD_artiste WHERE `artiste_id`=:id";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":id", $id, PDO::PARAM_INT);
        $stmt->execute();
        $artiste = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt->closeCursor();
        return $artiste;
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
    public function deleteDBArtistes($idArtiste)
    {
        $req = "Delete from DPDD_artiste where artiste_id= :idArtiste";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":idArtiste", $idArtiste, PDO::PARAM_INT);
        $stmt->execute();
        $stmt->closeCursor();
    }

    public function getImageArtiste($idArtiste)
    {
        $req = "SELECT artiste_image from DPDD_artiste where artiste_id = :idArtiste";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":idArtiste", $idArtiste, PDO::PARAM_INT);
        $stmt->execute();
        $image = $stmt->fetch(PDO::FETCH_ASSOC);
        $stmt->closeCursor();
        return $image['artiste_image'];
    }

    public function createArtiste($nom, $date, $style, $video, $provenance, $description, $youtube, $twitter, $instagram, $facebook, $lieu, $image, $siteweb, $spotify, $tarif)
    {
        $req = "INSERT INTO `DPDD_artiste`(`artiste_id`, `artiste_nom`, `artiste_date`, `artiste_style`, `artiste_video`, `artiste_provenance`, `artiste_description`, `artiste_youtube`, `artiste_twitter`, `artiste_instagram`, `artiste_facebook`, `artiste_lieu`, `artiste_image`, `artiste_site_web` , `artiste_spotify` , `artiste_tarif`)
            values (NULL,:nom,:date,:style,:video,:provenance,:description,:youtube,:twitter,:instagram,:facebook,:lieu,:image,:siteweb,:spotify,:tarif)
        ";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":nom", $nom, PDO::PARAM_STR);
        $stmt->bindValue(":date", $date, PDO::PARAM_STR);
        $stmt->bindValue(":style", $style, PDO::PARAM_STR);
        $stmt->bindValue(":video", $video, PDO::PARAM_STR);
        $stmt->bindValue(":provenance", $provenance, PDO::PARAM_STR);
        $stmt->bindValue(":description", $description, PDO::PARAM_STR);
        $stmt->bindValue(":youtube", $youtube, PDO::PARAM_STR);
        $stmt->bindValue(":twitter", $twitter, PDO::PARAM_STR);
        $stmt->bindValue(":instagram", $instagram, PDO::PARAM_STR);
        $stmt->bindValue(":facebook", $facebook, PDO::PARAM_STR);
        $stmt->bindValue(":lieu", $lieu, PDO::PARAM_STR);
        $stmt->bindValue(":image", $image, PDO::PARAM_STR);
        $stmt->bindValue(":siteweb", $siteweb, PDO::PARAM_STR);
        $stmt->bindValue(":spotify", $spotify, PDO::PARAM_STR);
        $stmt->bindValue(":tarif", $tarif, PDO::PARAM_STR);
        $stmt->execute();
        $stmt->closeCursor();
        return $this->getBdd()->lastInsertId();
    }
    public function updateImage($image, $id)
    {
        $req = "UPDATE `DPDD_artiste` SET `artiste_image`=:image WHERE `artiste_id` = :id";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":image", $image, PDO::PARAM_STR);
        $stmt->bindValue(":id", $id, PDO::PARAM_INT);
        $stmt->execute();
        $stmt->closeCursor();
        return $this->getBdd()->affected_rows;
    }
    public function modifyArtiste($id, $nom, $date, $style, $video, $provenance, $description, $youtube, $twitter, $instagram, $facebook, $lieu, $siteweb, $spotify, $tarif, $image)
    {
        $req = "UPDATE `DPDD_artiste` SET `artiste_nom`=:nom,`artiste_date`=:date,`artiste_style`=:style,`artiste_video`=:video,`artiste_provenance`=:provenance,`artiste_description`=:description,`artiste_youtube`=:youtube,`artiste_twitter`=:twitter,`artiste_instagram`=:instagram,`artiste_facebook`=:facebook,`artiste_lieu`=:lieu,`artiste_site_web`=:site_web,`artiste_spotify`=:spotify,`artiste_tarif`=:tarif WHERE `artiste_id` = :id";;
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":nom", $nom, PDO::PARAM_STR);
        $stmt->bindValue(":date", $date, PDO::PARAM_STR);
        $stmt->bindValue(":style", $style, PDO::PARAM_STR);
        $stmt->bindValue(":video", $video, PDO::PARAM_STR);
        $stmt->bindValue(":provenance", $provenance, PDO::PARAM_STR);
        $stmt->bindValue(":description", $description, PDO::PARAM_STR);
        $stmt->bindValue(":youtube", $youtube, PDO::PARAM_STR);
        $stmt->bindValue(":twitter", $twitter, PDO::PARAM_STR);
        $stmt->bindValue(":instagram", $instagram, PDO::PARAM_STR);
        $stmt->bindValue(":facebook", $facebook, PDO::PARAM_STR);
        $stmt->bindValue(":lieu", $lieu, PDO::PARAM_STR);
        $stmt->bindValue(":site_web", $siteweb, PDO::PARAM_STR);
        $stmt->bindValue(":id", $id, PDO::PARAM_INT);
        $stmt->bindValue(":spotify", $spotify, PDO::PARAM_STR);
        $stmt->bindValue(":tarif", $tarif, PDO::PARAM_STR);
        if ($image != "") {
            $this->updateImage($image, $id);
        }
        $stmt->execute();
        $stmt->closeCursor();
        return $this->getBdd()->affected_rows;
    }
}
