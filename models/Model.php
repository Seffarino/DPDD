<?php
abstract class Model
{
    private static $pdo;

    private static function setBdd()
    {
        $dbHost = getenv('DB_HOST') ?: 'db';
        $dbPort = getenv('DB_PORT') ?: '3306';
        $dbName = getenv('DB_NAME') ?: 'DPDD';
        $dbUser = getenv('DB_USER') ?: 'dpdd';
        $dbPassword = getenv('DB_PASSWORD') ?: 'dpdd';

        $dsn = "mysql:host={$dbHost};port={$dbPort};dbname={$dbName};charset=utf8mb4";

        try {
            self::$pdo = new PDO($dsn, $dbUser, $dbPassword);
            self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        } catch (Exception $e) {
            die('Erreur de connexion à la base de données : ' . $e->getMessage());
        }
    }

    protected function getBdd()
    {
        if (self::$pdo === null) {
            self::setBdd();
        }
        return self::$pdo;
    }

    public static function sendJSON($info)
    {
        header("Access-Control-Allow-Origin: *");
        header("Content-Type: application/json");
        echo json_encode($info);
    }
}
