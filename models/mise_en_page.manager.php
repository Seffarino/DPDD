<?php

require_once "models/Model.php";
class MepManager extends Model
{

    public function getMep()
    {
        $req = "SELECT * from  mise_en_page";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->execute();
        $mep = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt->closeCursor();
        return $mep[0];
    }
    public function updateImage($image)
    {
        $req = "UPDATE `mise_en_page` SET `image_entete`=:image_entete WHERE id=0
        ";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":image_entete", $image, PDO::PARAM_STR);
        $stmt->execute();
        $stmt->closeCursor();
        return true;
    }
    public function getImageMep()
    {
        $req = "SELECT image_entete from mise_en_page WHERE id=0";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->execute();
        $image = $stmt->fetch(PDO::FETCH_ASSOC);
        $stmt->closeCursor();
        return $image['image_entete'];
    }
    public function updateMep($aftermovie_titre, $pratique, $programmation_titre, $presentation, $billetterie, $titre_entete, $image, $playlist)
    {
        $req = "UPDATE `mise_en_page` SET `aftermovie_titre`=:aftermovie_titre,`pratique`=:pratique,`programmation_titre`=:programmation_titre,`presentation`=:presentation,`billetterie`=:billetterie,`titre_entete`=:titre_entete,`playlist`=:playlist WHERE id=0
        ";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":aftermovie_titre", $aftermovie_titre, PDO::PARAM_STR);
        $stmt->bindValue(":pratique", $pratique, PDO::PARAM_STR);
        $stmt->bindValue(":programmation_titre", $programmation_titre, PDO::PARAM_STR);
        $stmt->bindValue(":presentation", $presentation, PDO::PARAM_STR);
        $stmt->bindValue(":billetterie", $billetterie, PDO::PARAM_STR);
        $stmt->bindValue(":titre_entete", $titre_entete, PDO::PARAM_STR);
        $stmt->bindValue(":image_entete", $image, PDO::PARAM_STR);
        $stmt->bindValue(":playlist", $playlist, PDO::PARAM_STR);
        if ($image != "") {
            $this->updateImage($image);
        }
        $stmt->execute();
        $stmt->closeCursor();
        return true;
    }
}
