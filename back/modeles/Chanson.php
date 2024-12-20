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
}