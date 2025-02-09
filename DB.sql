-- Crear la base de datos
CREATE DATABASE IF NOT EXISTS futbol_db;
USE futbol_db;

-- Crear la tabla de entrenadores
CREATE TABLE entrenadores (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL
);

-- Crear la tabla de equipos
CREATE TABLE equipos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    id_entrenador INT,
    FOREIGN KEY (id_entrenador) REFERENCES entrenadores(id) ON DELETE SET NULL
);

-- Crear la tabla de jugadores
CREATE TABLE jugadores (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    id_equipo INT,
    FOREIGN KEY (id_equipo) REFERENCES equipos(id) ON DELETE SET NULL
);

-- Insertar entrenadores de prueba
INSERT INTO entrenadores (nombre) VALUES 
('Pep Guardiola'), 
('Carlo Ancelotti'), 
('Jurgen Klopp'), 
('Xavi Hernández'), 
('Diego Simeone');

-- Insertar equipos de prueba
INSERT INTO equipos (nombre, id_entrenador) VALUES 
('Barcelona', 1), 
('Real Madrid', 2), 
('Liverpool', 3), 
('Atlético de Madrid', 5), 
('PSG', NULL);

-- Insertar jugadores de prueba
INSERT INTO jugadores (nombre, id_equipo) VALUES 
('Lionel Messi', 1), 
('Karim Benzema', 2), 
('Robert Lewandowski', 1), 
('Kylian Mbappé', 5), 
('Mohamed Salah', 3), 
('Antoine Griezmann', 4), 
('Vinicius Jr', 2), 
('Kevin De Bruyne', NULL);


INSERT INTO entrenadores (id, nombre) VALUES (1, 'Pep Guardiola'), (2, 'Carlo Ancelotti');

INSERT INTO equipos (id, nombre, id_entrenador) VALUES (1, 'Barcelona', 1), (2, 'Real Madrid', 2);

INSERT INTO jugadores (id, nombre, id_equipo) VALUES 
(1, 'Messi', 1), (2, 'Benzema', 2), (3, 'Xavi', 1), (4, 'Modric', 2);
