<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
include_once __DIR__ . '/../bdd/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['chanson_id']) && isset($_POST['isValid'])) {
        $chanson_id = $_POST['chanson_id'];
        $isValid = $_POST['isValid'];

        $db = (new Database())->getConnection();

        $sql = "UPDATE chanson SET isValid = :isValid WHERE id = :chanson_id";
        $stmt = $db->prepare($sql);

        $stmt->bindParam(':isValid', $isValid, PDO::PARAM_INT);
        $stmt->bindParam(':chanson_id', $chanson_id, PDO::PARAM_INT);

        if ($stmt->execute()) {
            echo "Chanson mise à jour avec succès!";
        } else {
            echo "Erreur lors de la mise à jour de la chanson.";
        }
    }
} else {
    echo "Méthode non autorisée.";
}
