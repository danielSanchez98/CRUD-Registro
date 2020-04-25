CREATE DATABASE crud_registro CHARACTER SET utf8 COLLATE utf8_unicode_ci;

USE crud_registro;

CREATE TABLE registros(
    idRegistro INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    apellido VARCHAR(255) NOT NULL,
    direccion VARCHAR(255) NOT NULL,
    telefono VARCHAR(255) NOT NULL,
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP

);

INSERT INTO registros (nombre,apellido,direccion,telefono) VALUES 
('Daniel', 'Sanchez','Casa','3051234'),
('Alejandro', 'Bermudez','Apto','123456'),
('Pepe', 'pepito','Avenida 50','123'),
('Ana', 'Gomez','Calle 100','4045'),
('Luis', 'Rodriguez','Calle 26','90745'),
('Andres', 'Rincon','Carrera 30','65428');
