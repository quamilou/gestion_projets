<?php

abstract class Controller {
    protected function render(string $view, array $data = []): void {
        // $data accessibles dans la vue
        extract($data);

        $viewPath = __DIR__ . '/../Views/' . $view . '.php';

        // Vérification de la vue
        if (file_exists($viewPath)) {
            require_once $viewPath;
        } else {
            echo "Vue '$view' introuvable.";
        }
    }
}
