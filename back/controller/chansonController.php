<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
session_start();
include_once '../modeles/Chanson.php';

class ChansonController
{
    public function handlePost()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['file']) && isset($_POST['nomChanson'])) {
            if (!isset($_SESSION['id']) || !is_numeric($_SESSION['id'])) {
                echo "Erreur : ID utilisateur invalide ou non défini.";
                exit();
            }
            $userId = (int) $_SESSION['id']; 
            $file = $_FILES['file'];
            $nomChanson = $_POST['nomChanson']; 
            $uploadDir = '../../uploads/';
            if (!is_dir($uploadDir)) {
                if (!mkdir($uploadDir, 0777, true)) {
                    echo "Erreur : Impossible de créer le répertoire de téléchargement.";
                    exit();
                }
            }

            $fileName = uniqid() . '-' . basename($file['name']);
            $targetFilePath = $uploadDir . $fileName;
            $fileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));
            $allowedTypes = ['mp3', 'wav', 'ogg', 'mp4', 'webm'];

            if (!in_array($fileType, $allowedTypes)) {
                echo "Erreur : Format de fichier non autorisé. Types acceptés : mp3, wav, ogg, mp4, webm.";
                exit();
            }

            if ($file['size'] > 10 * 1024 * 1024) { // 10MB
                echo "Erreur : Le fichier est trop volumineux.";
                exit();
            }

            if ($file['error'] !== UPLOAD_ERR_OK) {
                $this->handleFileError($file['error']);
                exit();
            }

            if (move_uploaded_file($file['tmp_name'], $targetFilePath)) {
                try {
                    $chanson = new Chanson();
                    $chanson->ajouterChanson($nomChanson, $fileName, $userId); 
                    echo "Succès : La chanson a été téléchargée et enregistrée avec succès.";
                } catch (Exception $e) {
                    echo "Erreur : " . $e->getMessage();
                }
            } else {
                echo "Erreur : Échec lors du déplacement du fichier.";
            }
        } else {
            echo "Erreur : Aucun fichier n'a été téléchargé ou nom de chanson manquant.";
        }
    }

    private function handleFileError($errorCode)
    {
        switch ($errorCode) {
            case UPLOAD_ERR_INI_SIZE:
                echo "Erreur : Le fichier dépasse la taille maximale autorisée par php.ini.";
                break;
            case UPLOAD_ERR_FORM_SIZE:
                echo "Erreur : Le fichier dépasse la taille maximale spécifiée dans le formulaire.";
                break;
            case UPLOAD_ERR_PARTIAL:
                echo "Erreur : Le fichier n'a été que partiellement téléchargé.";
                break;
            case UPLOAD_ERR_NO_FILE:
                echo "Erreur : Aucun fichier sélectionné.";
                break;
            case UPLOAD_ERR_NO_TMP_DIR:
                echo "Erreur : Dossier temporaire manquant.";
                break;
            case UPLOAD_ERR_CANT_WRITE:
                echo "Erreur : Échec de l'écriture du fichier sur le disque.";
                break;
            case UPLOAD_ERR_EXTENSION:
                echo "Erreur : Une extension PHP a arrêté le téléchargement.";
                break;
            default:
                echo "Erreur : Une erreur inconnue est survenue lors du téléchargement.";
        }
    }
}

$controller = new ChansonController();
$controller->handlePost();
