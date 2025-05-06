# Contexte:

Dans un environnement personnel et professionnel, la gestion des projets et des tâches est essentielle pour
organiser le travail, respecter les délais et favoriser la collaboration. L’objectif de ce TP est de développer une
application back-end en PHP pour la Gestion Collaborative de Tâches et de Projets. Ce système doit mettre
en œuvre les concepts clés de la programmation orientée objet (POO) : héritage, polymorphisme et
interfaces, ainsi que l’utilisation de PDO pour un accès sécurisé à la base de données MySQL (ou compatible),
tout en respectant l’architecture MVC.


# Plan de Développement

## 1 - Infrastructure

> - [x] Créer l’arborescence du projet (`app/`, `config/`, `public/`, `vendor/`)
> - [x] Créer la base de données `gestion_projets`
> - [x] Configurer la BDD et créer `config/config.php` (connexion)
> - [x] Créer `Core/Model.php` : classe abstraite pour la connexion PDO
> - [x] Créer `Core/Controller.php` : classe de base pour les contrôleurs (chargement des vues)
> - [x] Créer `Core/Interfaces/CrudInterface.php` : interface avec les méthodes CRUD
> - [x] Créer `Core/Router.php` : analyse les URLs et appelle le bon contrôleur
> - [x] Créer le fichier `public/index.php` : front-controller, inclut le routeur

## 2 – Développement des modules

### Module Projets
> - [x] Créer `Models/Project.php` (implémente CrudInterface)
> - [x] Créer `Controllers/ProjectController.php`
> - [x] Créer les vues dans `Views/projects/` (`list.php`, `form.php`, `detail.php`)

### Module Tâches
> - [x] Créer `Models/Task.php` (implémente CrudInterface)
> - [x] Créer `Controllers/TaskController.php`
> - [x] Créer les vues dans `Views/tasks/` (`list.php`, `form.php`, `detail.php`)

### Module Utilisateurs
> - [x] Créer `Models/User.php` (implémente CrudInterface)
> - [x] Créer `Controllers/UserController.php`
> - [X] Créer les vues dans `Views/users/` (`login.php`, `register.php`, `dashboard.php`)
> - [x] Implémenter l’inscription et la connexion avec `password_hash` et `password_verify`
> - [x] Gérer les rôles : Admin, Chef de projet, Collaborateur

## 3 – Sécurisation & tests

> - [ ] Valider les entrées utilisateur
> - [x] Sécuriser les requêtes avec PDO préparé
> - [ ] Vérifier la gestion des sessions et accès selon les rôles
> - [-] Tester toutes les actions (CRUD, navigation, connexions)
> 
## 4 – (Bonus) API RESTful

> - [ ] Créer des endpoints REST pour Projets & Tâches (`GET`, `POST`, `PUT`, `DELETE`)
> - [ ] Ajouter un contrôleur `ApiController.php`
> - [ ] Rédiger la documentation API (ex: Swagger, Postman collection)
> 
---
