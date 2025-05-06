<?php
require_once __DIR__ . '/../../config/config.php';

abstract class Model {
    protected static ?PDO $db = null;

    public function __construct() {
        if (is_null(self::$db)) {
            self::initDB();
        }
    }

    private static function initDB(): void {
        try {
            self::$db = new PDO(
                'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8mb4_general_ci',
                DB_USER,
                DB_PASS,
                DB_OPTIONS
            );
        } catch (PDOException $e) {
            die('Erreur de connexion à la base de données : ' . $e->getMessage());
        }
    }

}
