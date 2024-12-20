<?php
include_once __DIR__ . '/../bdd/database.php';

class Chanson
{
    private $db;
    private $id;
    private $chemin;
    private $isValid;
    private $vote;
    private $utilisateur_id;

    public function __construct()
    {
        $this->db = (new Database())->getConnection();
    }

    public function ajouterChanson($nom, $chemin, $utilisateurId){
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

    public function delete()
    {
        $sql = "DELETE FROM chanson WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$this->id]);
    }

    /**
     * @return array
     */
    public function getValidSongs()
    {
        $sql = "SELECT * FROM chanson WHERE isValid = true";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getVote(){
        $sql = "SELECT vote FROM chanson WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$this->id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAllChansons()
    {
        $sql = "SELECT * FROM chanson";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function trouverChansonParUtilisateur($userId)
    {
        $pdo = (new Database())->getConnection(); 
        $sql = "SELECT * FROM chanson WHERE utilisateur_id = :userId LIMIT 1";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':userId', $userId, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

}