<?php
include_once '../bdd/database.php';

class User
{
    private $db;
    private $nom;
    private $prenom;
    private $date_naissance;
    private $adresse_postale;
    private $email;
    private $pseudo;
    private $password;

    public function __construct($nom, $prenom, $date_naissance, $adresse_postale, $email, $pseudo, $password)
    {
        $this->db = (new Database())->getConnection();
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->date_naissance = $date_naissance;
        $this->adresse_postale = $adresse_postale;
        $this->email = $email;
        $this->pseudo = $pseudo;
        $this->password = password_hash($password, PASSWORD_DEFAULT); 
    }

    public function createUser()
    {
        if ($this->emailExists() || $this->pseudoExists()) {
            return false;
        }
        $query = "INSERT INTO utilisateurs (nom, prenom, date_naissance, adresse_postale, email, pseudo, password)
                  VALUES (:nom, :prenom, :date_naissance, :adresse_postale, :email, :pseudo, :password)";

        $stmt = $this->db->prepare($query);

        $stmt->bindParam(':nom', $this->nom);
        $stmt->bindParam(':prenom', $this->prenom);
        $stmt->bindParam(':date_naissance', $this->date_naissance);
        $stmt->bindParam(':adresse_postale', $this->adresse_postale);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':pseudo', $this->pseudo);
        $stmt->bindParam(':password', $this->password);

        return $stmt->execute();
    }
    private function emailExists()
    {
        $query = "SELECT COUNT(*) FROM utilisateurs WHERE email = :email";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':email', $this->email);
        $stmt->execute();
        return $stmt->fetchColumn() > 0;
    }
    private function pseudoExists()
    {
        $query = "SELECT COUNT(*) FROM utilisateurs WHERE pseudo = :pseudo";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':pseudo', $this->pseudo);
        $stmt->execute();
        return $stmt->fetchColumn() > 0;
    }
    public static function authenticateUser($email, $password)
    {
        $db = (new Database())->getConnection();

        $query = "SELECT * FROM utilisateurs WHERE email = :email";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if (password_verify($password, $user['password'])) {
                return $user; 
            }
        }

        return null; 
    }
}
?>
