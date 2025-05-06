<?php
class Router {
    public static function routeRequest(): void {
        $controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) . 'Controller' : 'HomeController';
        $action = $_GET['action'] ?? 'index';

        $controllerFile = __DIR__ . '/../Controllers/' . $controllerName . '.php';

        if (file_exists($controllerFile)) {
            require_once $controllerFile;

            if (class_exists($controllerName)) {
                $controller = new $controllerName();

                if (method_exists($controller, $action)) {
                    $controller->$action();
                } else {
                    echo "Méthode '$action' introuvable dans $controllerName.";
                }
            } else {
                echo "Classe contrôleur '$controllerName' introuvable.";
            }
        } else {
            echo "Fichier contrôleur '$controllerFile' introuvable.";
        }
    }
}
