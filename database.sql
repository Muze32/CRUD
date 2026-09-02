CREATE DATABASE IF NOT EXISTS materiasdb;

USE materiasdb;

CREATE TABLE IF NOT EXISTS materias(
    materia_id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    anio INT NOT NULL,
    cuatrimestre INT NOT NULL,
    regularizada BOOL NOT NULL DEFAULT FALSE,
    finalizada BOOLEAN NOT NULL DEFAULT FALSE
);

INSERT INTO 
    materias(nombre, anio, cuatrimestre, regularizada, finalizada)
VALUES 
    ('Matemática para Informática', 1, 1, TRUE, TRUE), 
    ('Elementos de Programación', 1, 1, TRUE, TRUE);
