<?php
require_once __DIR__ . '/../Core/Model.php';
require_once __DIR__ . '/../Core/Interfaces/CrudInterface.php';

class Task extends Model implements CrudInterface
{
    public int $id;
    public int $project_id;
    public string $title;
    public string $description;
    public string $status;
    public ?string $due_date;

    public function __construct() {
        parent::__construct();
    }

    public function getAll() {
        $stmt = self::$db->query("SELECT * FROM tasks");
        return $stmt->fetchAll();
    }

    public function getById($id) {
        $stmt = self::$db->prepare("SELECT * FROM tasks WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public function save() {
        $stmt = self::$db->prepare(
            "INSERT INTO tasks (project_id, title, description, status, due_date) VALUES (?, ?, ?, ?, ?)"
        );
        return $stmt->execute([
            $this->project_id,
            $this->title,
            $this->description,
            $this->status,
            $this->due_date
        ]);
    }

    public function update($id) {
        $stmt = self::$db->prepare(
            "UPDATE tasks SET project_id = ?, title = ?, description = ?, status = ?, due_date = ? WHERE id = ?"
        );
        return $stmt->execute([
            $this->project_id,
            $this->title,
            $this->description,
            $this->status,
            $this->due_date,
            $id
        ]);
    }

    public function delete($id) {
        $stmt = self::$db->prepare("DELETE FROM tasks WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
