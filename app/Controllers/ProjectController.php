<?php

require_once __DIR__ . '/../Core/Controller.php';
require_once __DIR__ . '/../Models/Project.php';

class ProjectController extends Controller
{
    public function list()
    {
        $model = new Project();
        $projects = $model->getAll();

        // Affiche la vue avec les données
        $this->render('projects/list', ['projects' => $projects]);
    }

    public function detail()
    {
        if (!isset($_GET['id'])) {
            die("ID du projet manquant.");
        }

        $model = new Project();
        $project = $model->getById($_GET['id']);

        if (!$project) {
            die("Projet introuvable.");
        }

        $this->render('projects/detail', ['project' => $project]);
    }

    public function form()
    {
        // Formulaire 
        $model = new Project();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $model->title = $_POST['title'] ?? '';
            $model->description = $_POST['description'] ?? '';
            $model->start_date = $_POST['start_date'] ?? null;
            $model->end_date = $_POST['end_date'] ?? null;

            $model->save();
            header('Location: index.php?controller=project&action=list');
            exit;
        }

        $this->render('projects/form');
    }
}
