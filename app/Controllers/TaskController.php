<?php

require_once __DIR__ . '/../Core/Controller.php';
require_once __DIR__ . '/../Models/Task.php';
require_once __DIR__ . '/../Models/Project.php'; // Liste des projets

class TaskController extends Controller
{
    public function list()
    {
        $model = new Task();
        $tasks = $model->getAll();

        $this->render('tasks/list', ['tasks' => $tasks]);
    }

    public function detail()
    {
        if (!isset($_GET['id'])) {
            die("ID de la tâche manquant.");
        }

        $model = new Task();
        $task = $model->getById($_GET['id']);

        if (!$task) {
            die("Tâche introuvable.");
        }

        $this->render('tasks/detail', ['task' => $task]);
    }

    public function form()
    {
        $taskModel = new Task();
        $projectModel = new Project();
        $projects = $projectModel->getAll();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $taskModel->project_id = $_POST['project_id'];
            $taskModel->title = $_POST['title'];
            $taskModel->description = $_POST['description'] ?? '';
            $taskModel->status = $_POST['status'] ?? 'A faire';
            $taskModel->due_date = $_POST['due_date'] ?? null;

            $taskModel->save();
            header('Location: index.php?controller=task&action=list');
            exit;
        }

        $this->render('tasks/form', ['projects' => $projects]);
    }
}
