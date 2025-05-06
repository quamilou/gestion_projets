<?php

require_once __DIR__ . '/../Core/Model.php';
require_once __DIR__ . '/../Core/Interfaces/CrudInterface.php';

class Project extends Model implements CrudInterface {
    public int $id;
    public string $title;
    public string $description;
    public string $start_date;
    public string $end_date;

    public function __construct() {
        parent::__construct(); // Initialise PDO
    }

    public function getAll() {
        $stmt = self::$db->query("SELECT * FROM projects");
        return $stmt->fetchAll();
    }

    public function getById($id) {
        $stmt = self::$db->prepare("SELECT * FROM projects WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public function save() {
        $stmt = self::$db->prepare("INSERT INTO projects (title, description, start_date, end_date) VALUES (?, ?, ?, ?)");
        return $stmt->execute([$this->title, $this->description, $this->start_date, $this->end_date]);
    }

    public function update($id) {
        $stmt = self::$db->prepare("UPDATE projects SET title = ?, description = ?, start_date = ?, end_date = ? WHERE id = ?");
        return $stmt->execute([$this->title, $this->description, $this->start_date, $this->end_date, $id]);
    }

    public function delete($id) {
        $stmt = self::$db->prepare("DELETE FROM projects WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
