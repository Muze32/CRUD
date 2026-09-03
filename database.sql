CREATE DATABASE IF NOT EXISTS materiasdb;

USE materiasdb;

CREATE TABLE IF NOT EXISTS materias(
    materia_id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    anio INT NOT NULL,
    cuatrimestre varchar(10) NOT NULL,
    estado varchar(25) NOT NULL
);

INSERT INTO 
    materias(nombre, anio, cuatrimestre, estado)
VALUES 
    ('Matemática para Informática', 1, 1, "Finalizada"), 
    ('Elementos de Programación', 1, 1, "Regularizada");
