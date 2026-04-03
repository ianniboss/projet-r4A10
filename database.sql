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

ALTER TABLE messages AUTO_INCREMENT = 1;
ALTER TABLE users AUTO_INCREMENT = 1;

INSERT INTO messages (auteur, contenu, salle) VALUES
('Lucas', 'Bienvenue dans notre messagerie : WhatsDown!', 'general'),
('Ian', 'Slt !', 'general'),
('Lucas', 'Tu aime le basket?', 'sport'),
('Ian', 'Oui, je le fais quasiment chaque soir', 'sport'),
('Lucas', 'Viens jouer Roblox avec moi, Ian', 'gaming'),
('Ian', 'Vas-y', 'gaming');

INSERT INTO users (pseudo, salle) VALUES
('Azlan', 'general'),
('Ian', 'sport');