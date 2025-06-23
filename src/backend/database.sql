CREATE DATABASE littleFarm;
USE littleFarm;

CREATE TABLE users(
    username VARCHAR(30) PRIMARY KEY NOT NULL,
    password VARCHAR(128) NOT NULL,
    name VARCHAR(100) NOT NULL,
    type CHAR(1) NOT NULL,
    status CHAR(1) NOT NULL,
    acess int not null
);

ALTER TABLE users ADD failed_attempts INT DEFAULT 0; -- adicionado p ajudara bloquear após três vezes consecutivas

-- Em type, se o usuário é um administrador, será 0 e se for apenas um usuário comum, será 1.

-- Em status, se o usuário estiver inativo será 0, ativo será 1 e bloqueado 2.

-- Todas as senhas do banco que já tiveram o primeiro acesso, são '1234'.
