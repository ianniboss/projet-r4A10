CREATE DATABASE projetR4A10;

USE projetR4A10;

CREATE TABLE messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    auteur VARCHAR(50),
    contenu TEXT,
    date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- pour gerer la liste des users connectees
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    pseudo VARCHAR(50),
    last_active TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- pour les salles de chat
ALTER TABLE messages ADD salle VARCHAR(50);
ALTER TABLE users ADD salle VARCHAR(50);