<?php

// Connexion à la base de données
function getDbConnection() {
    $host = "localhost";
    $db_name = "bdd_hackaton_2025";
    $username = "root";
    $password = "";

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$db_name;charset=utf8", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        die("Erreur de connexion : " . $e->getMessage());
    }
}

// Récupérer la liste des chansons
function getChansons() {
    $pdo = getDbConnection();
    $query = $pdo->query("SELECT id, nom, vote FROM chanson");
    return $query->fetchAll(PDO::FETCH_ASSOC);
}

// Enregistrer un vote
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['vote'])) {
    if (isset($_POST['chanson_id'])) {
        $chansonId = intval($_POST['chanson_id']);
        $pdo = getDbConnection();

        // Mise à jour des votes
        $stmt = $pdo->prepare("UPDATE chanson SET vote = vote + 1 WHERE id = :id");
        $stmt->execute(['id' => $chansonId]);

        // Redirection vers la page de vote
        header('Location: ../../front/composants/vote/vote.php');
        exit();
    }
}