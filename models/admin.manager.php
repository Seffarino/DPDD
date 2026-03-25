<?php

require_once "models/Model.php";

class AdminManager extends Model
{
    private function getPasswordUser($login)
    {
        $req = 'SELECT * FROM administrateur WHERE login = :login';
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":login", $login, PDO::PARAM_STR);
        $stmt->execute();

        $admin = $stmt->fetch(PDO::FETCH_ASSOC);
        $stmt->closeCursor();

        if (!$admin || empty($admin['mdp'])) {
            return null;
        }

        return $admin['mdp'];
    }

    public function isConnexionValid($login, $password)
    {
        $passwordBD = $this->getPasswordUser($login);

        if ($passwordBD === null) {
            return false;
        }

        return password_verify($password, $passwordBD);
    }

    public function get_artiste()
    {
        $req = "SELECT * FROM DPDD_artiste ORDER BY `DPDD_artiste`.`artiste_date` ASC";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->execute();
        $artistes = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt->closeCursor();

        return $artistes;
    }

    public function get_contacts()
    {
        $req = "SELECT * FROM contact";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->execute();
        $contacts = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt->closeCursor();

        return $contacts;
    }

    public function get_mise_en_page()
    {
        $req = "SELECT * FROM mise_en_page";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->execute();
        $mise_en_page = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt->closeCursor();

        return $mise_en_page;
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

    public function get_billets()
    {
        $req = "SELECT * FROM billetterie ORDER BY `billetterie`.`billet_date` ASC";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->execute();
        $billets = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt->closeCursor();

        return $billets;
    }
}