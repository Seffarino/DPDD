<?php

require_once "models/Model.php";
class PartenairesManager extends Model
{

    public function getPartenaires()
    {
        $req = "SELECT * from partenaires NATURAL JOIN categorie_partenaires ORDER BY `partenaires`.`partenaire_ordre` ASC";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->execute();
        $partenaires = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt->closeCursor();
        return $partenaires;
    }
    public function getCategories()
    {
        $req = "SELECT * from categorie_partenaires  ORDER BY `categorie_partenaires`.`categorie_ordre` ASC";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->execute();
        $categories = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt->closeCursor();
        return $categories;
    }
    public function deleteDBPartenaires($idPartenaire)
    {
        $req = "Delete from partenaires where partenaire_id = :idPartenaire";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":idPartenaire", $idPartenaire, PDO::PARAM_INT);
        $stmt->execute();
        $stmt->closeCursor();
    }

    public function deleteDBCategorie($categorie_id)
    {
        $req = "Delete from categorie_partenaires where categorie_id = :categorie_id";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":categorie_id", $categorie_id, PDO::PARAM_INT);
        $stmt->execute();
        $stmt->closeCursor();
    }

    public function getImagePartenaires($idPartenaire)
    {
        $req = "SELECT partenaire_image from partenaires where partenaire_id = :idPartenaire";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":idPartenaire", $idPartenaire, PDO::PARAM_INT);
        $stmt->execute();
        $image = $stmt->fetch(PDO::FETCH_ASSOC);
        $stmt->closeCursor();
        return $image['partenaire_image'];
    }

    public function createPartenaire($url, $image, $categorie)
    {
        $req = "Insert into partenaires (partenaire_id,partenaire_url,partenaire_image,categorie_id)
            values (NULL,:url,:image,:categorie)
        ";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":url", $url, PDO::PARAM_STR);
        $stmt->bindValue(":image", $image, PDO::PARAM_STR);
        $stmt->bindValue(":categorie", $categorie, PDO::PARAM_INT);
        $stmt->execute();
        $stmt->closeCursor();
        return $this->getBdd()->lastInsertId();
    }
    public function createCategorie($libelle)
    {
        $req = "Insert into categorie_partenaires (categorie_id,categorie_libelle)
            values (NULL,:libelle)
        ";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":libelle", $libelle, PDO::PARAM_STR);
        $stmt->execute();
        $stmt->closeCursor();
        return $this->getBdd()->lastInsertId();
    }

    public function categorieHaut($idCategorie, $ordre)
    {
        $req = "UPDATE `categorie_partenaires` SET `categorie_ordre`=:ordre WHERE `categorie_id`=:id";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":id", $idCategorie, PDO::PARAM_INT);
        $stmt->bindValue(":ordre", $ordre - 1, PDO::PARAM_INT);
        $stmt->execute();
        $stmt->closeCursor();
    }
    public function categorieBas($idCategorie, $ordre)
    {
        $req = "UPDATE `categorie_partenaires` SET `categorie_ordre`=:ordre WHERE `categorie_id`=:id";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":id", $idCategorie, PDO::PARAM_INT);
        $stmt->bindValue(":ordre", $ordre + 1, PDO::PARAM_INT);
        $stmt->execute();
        $stmt->closeCursor();
    }

    public function partenaireBas($idPartenaire, $ordre)
    {
        $req = "UPDATE `partenaires` SET `partenaire_ordre`=:ordre WHERE `partenaire_id`=:id";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":id", $idPartenaire, PDO::PARAM_INT);
        $stmt->bindValue(":ordre", $ordre + 1, PDO::PARAM_INT);
        $stmt->execute();
        $stmt->closeCursor();
    }
    public function partenaireHaut($idPartenaire, $ordre)
    {
        $req = "UPDATE `partenaires` SET `partenaire_ordre`=:ordre WHERE `partenaire_id`=:id";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":id", $idPartenaire, PDO::PARAM_INT);
        $stmt->bindValue(":ordre", $ordre - 1, PDO::PARAM_INT);
        $stmt->execute();
        $stmt->closeCursor();
    }
}
