<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
include_once '../modeles/User.php';
session_start();

class ConnexionController
{
    public function handleForm()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $authenticatedUser = User::authenticateUser($email, $password);

            if ($authenticatedUser) {
                $_SESSION['id'] = $authenticatedUser['id'];
                $_SESSION['email'] = $authenticatedUser['email'];
                $_SESSION['nom'] = $authenticatedUser['nom'];
                $_SESSION['prenom'] = $authenticatedUser['prenom'];

                header("Location: ../../front/composants/accueil/index.php"); 
                exit;
            } else {
                echo "Email ou mot de passe incorrect.";
            }
        }
    }
}

$controller = new ConnexionController();
$controller->handleForm();
?>
