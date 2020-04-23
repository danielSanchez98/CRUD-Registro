CREATE DATABASE crud_registro CHARACTER SET utf8 COLLATE utf8_unicode_ci;

USE crud_registro;

CREATE TABLE registros(
    idRegistro INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    apellido VARCHAR(255) NOT NULL,
    direccion VARCHAR(255) NOT NULL,
    telefono VARCHAR(255) NOT NULL,
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP

);

