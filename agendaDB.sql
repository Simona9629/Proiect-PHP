CREATE DATABASE agenda;
USE agenda;
DROP DATABASE agenda;

CREATE TABLE utilizator(
	id TINYINT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nume VARCHAR(100) NOT NULL,
    prenume VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    parola TEXT NOT NULL,
    poza_profil TEXT
);

CREATE TABLE task(
	id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    titlu VARCHAR(100) NOT NULL,
    data DATE NOT NULL,
    descriere TEXT,
    status BOOLEAN,
    id_utilizator TINYINT,
    FOREIGN KEY(id_utilizator) REFERENCES utilizator(id)
);

SELECT * FROM utilizator;
