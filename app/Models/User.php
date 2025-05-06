<?php

require_once __DIR__ . '/../Core/Model.php';
require_once __DIR__ . '/../Core/Interfaces/CrudInterface.php';

class User extends Model implements CrudInterface
{
    public int $id;
    public string $username;
    public string $email;
    public string $password;
    public string $role = 'Collaborateur'; // Valeur par défaut

    public function __construct() {
        parent::__construct();
    }

    public function getAll() {
        $stmt = self::$db->query("SELECT id, username, email, role FROM users");
        return $stmt->fetchAll();
    }

    public function getById($id) {
        $stmt = self::$db->prepare("SELECT id, username, email, role FROM users WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public function getByEmail($email) {
        $stmt = self::$db->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$email]);
        return $stmt->fetch();
    }

    public function save() {
        $stmt = self::$db->prepare(
            "INSERT INTO users (username, email, password, role) VALUES (?, ?, ?, ?)"
        );
        return $stmt->execute([
            $this->username,
            $this->email,
            $this->password,
            $this->role
        ]);
    }

    public function update($id) {
        // Non utiliser ici, à développer plus tard !
        return false;
    }

    public function delete($id) {
        $stmt = self::$db->prepare("DELETE FROM users WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
