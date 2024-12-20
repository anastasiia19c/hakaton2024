<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include_once '../modeles/User.php';

class InscriptionController
{
    public function handleForm()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $date_naissance = $_POST['date_naissance'];
            $adresse_postale = $_POST['adresse_postale'];
            $email = $_POST['email'];
            $pseudo = $_POST['pseudo'];
            $password = $_POST['password'];

            if (empty($nom) || empty($prenom) || empty($date_naissance) || empty($adresse_postale) || empty($email) || empty($pseudo) || empty($password)) {
                echo "Tous les champs sont obligatoires.";
                return; 
            }

            $user = new User($nom, $prenom, $date_naissance, $adresse_postale, $email, $pseudo, $password);

            if ($user->createUser()) {
                echo "Inscription réussie !";
            } else {
                echo "Erreur lors de l'inscription. Veuillez réessayer.";
            }
        }
    }
}

$inscriptionController = new InscriptionController();
$inscriptionController->handleForm();
?>
