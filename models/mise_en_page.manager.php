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
    public function updateMep($aftermovie_titre, $pratique, $programmation_titre, $presentation,$billetterie)
    {
        $req = "UPDATE `mise_en_page` SET `aftermovie_titre`=:aftermovie_titre,`pratique`=:pratique,`programmation_titre`=:programmation_titre,`presentation`=:presentation,`billetterie`=:billetterie WHERE id=0
        ";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":aftermovie_titre", $aftermovie_titre, PDO::PARAM_STR);
        $stmt->bindValue(":pratique", $pratique, PDO::PARAM_STR);
        $stmt->bindValue(":programmation_titre", $programmation_titre, PDO::PARAM_STR);
        $stmt->bindValue(":presentation", $presentation, PDO::PARAM_STR);
        $stmt->bindValue(":billetterie", $billetterie, PDO::PARAM_STR);

        $stmt->execute();
        $stmt->closeCursor();
        return true;
    }
}
