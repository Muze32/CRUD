CREATE DATABASE IF NOT EXISTS materiasdb;

USE materiasdb;

CREATE TABLE IF NOT EXISTS materias(
    materia_id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    anio INT NOT NULL,
    cuatrimestre varchar(10) NOT NULL,
    estado varchar(25) NOT NULL,
    oculta BOOLEAN NOT NULL DEFAULT FALSE
);

INSERT INTO 
    materias (nombre, anio, cuatrimestre, estado) 
VALUES
    ('Elementos de Programación', 1, '1', 'Finalizada'),
    ('Matemática para Informática', 1, '1', 'Finalizada'),
    ('Análisis Matemático I', 1, '2', 'Finalizada'),
    ('Algebra Lineal y G. Analítica', 1, '2', 'Finalizada'),
    ('Programación', 1, '2', 'Finalizada'),
    ('Sistemas de Computación', 2, '1', 'Finalizada'),
    ('Programación Orientada a Objetos', 2, '1', 'Finalizada'),
    ('Algoritmos y Estructuras de Datos', 2, '1', 'Finalizada'),
    ('Programación Numérica', 2, '2', 'Regularizada'),
    ('Paradigmas y Lenguajes', 2, '2', 'Finalizada'),
    ('Introducción al Desarrollo de Videojuegos', 2, '2', 'Regularizada'),
    ('Inglés', 2, 'Anual', 'Finalizada'),
    ('Probabilidades y Estadística', 3, '1', 'Regularizada'),
    ('Bases de Datos', 3, '1', 'Regularizada'),
    ('Introducción al Desarrollo Móvil', 3, '1', 'Regularizada');
