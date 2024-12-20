<?php
include_once '../bdd/database.php';

class Chanson
{
    private $db;

    public function __construct()
    {
        $this->db = (new Database())->getConnection();
    }

    public function ajouterChanson($nom, $chemin, $utilisateurId)
    {
        try {
            $query = "INSERT INTO chanson (nom, chemin, utilisateur_id) VALUES (:nom, :chemin, :utilisateur_id)";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(':nom', $nom);
            $stmt->bindParam(':chemin', $chemin);
            $stmt->bindParam(':utilisateur_id', $utilisateurId);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            throw new Exception("Erreur lors de l'enregistrement : " . $e->getMessage());
        }
    }
}
