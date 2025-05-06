<?php

require_once __DIR__ . '/../Core/Controller.php';
require_once __DIR__ . '/../Models/User.php';

class UserController extends Controller
{
    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $user = new User();
            $user->username = $_POST['username'] ?? '';
            $user->email = $_POST['email'] ?? '';
            $user->password = password_hash($_POST['password'], PASSWORD_DEFAULT);

            if ($user->save()) {
                header('Location: index.php?controller=user&action=login');
                exit;
            } else {
                echo "Erreur lors de l'inscription.";
            }
        }

        $this->render('users/register');
    }

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'] ?? '';
            $password = $_POST['password'] ?? '';

            $model = new User();
            $userData = $model->getByEmail($email);

            if ($userData && password_verify($password, $userData['password'])) {
                $_SESSION['user'] = [
                    'id' => $userData['id'],
                    'username' => $userData['username'],
                    'role' => $userData['role']
                ];
                header('Location: index.php?controller=user&action=dashboard');
                exit;
            } else {
                echo "Identifiants invalides.";
            }
        }

        $this->render('users/login');
    }

    public function logout()
    {
        session_destroy();
        header('Location: index.php?controller=user&action=login');
        exit;
    }

    public function dashboard()
    {
        if (!isset($_SESSION['user'])) {
            header('Location: index.php?controller=user&action=login');
            exit;
        }

        $this->render('users/dashboard', ['user' => $_SESSION['user']]);
    }
}
