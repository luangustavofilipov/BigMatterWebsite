CREATE DATABASE users;

use users;

create table
    usuarios (
        id_usuario int AUTO_INCREMENT PRIMARY KEY,
        nome VARCHAR(30),
        telefone VARCHAR(30),
        email VARCHAR(40),
        senha VARCHAR(32)
    );