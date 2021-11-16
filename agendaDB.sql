CREATE DATABASE agenda;
USE agenda;
DROP DATABASE agenda;

CREATE TABLE utilizator(
	id TINYINT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nume VARCHAR(50) NOT NULL,
    prenume VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    parola VARCHAR(50) NOT NULL
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