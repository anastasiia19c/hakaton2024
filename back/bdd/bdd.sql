DROP DATABASE IF EXISTS bdd_hackaton_2025;
CREATE DATABASE IF NOT EXISTS bdd_hackaton_2025;
USE bdd_hackaton_2025;

CREATE TABLE IF NOT EXISTS utilisateurs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255) NOT NULL,
    prenom VARCHAR(255) NOT NULL,
    date_naissance DATE NOT NULL,
    adresse_postale VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    pseudo VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS chanson (
    id INT AUTO_INCREMENT PRIMARY KEY,
    chemin VARCHAR(255) NOT NULL,
    vote INT DEFAULT 0,
    utilisateur_id INT NOT NULL,
    isValid BOOLEAN DEFAULT false,
    FOREIGN KEY (utilisateur_id) REFERENCES utilisateurs(id) ON DELETE CASCADE
);

