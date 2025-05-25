CREATE DATABASE stardewLover;
USE stardewLover;

CREATE TABLE users(
    username VARCHAR(30) PRIMARY KEY NOT NULL,
    password VARCHAR(128) NOT NULL,
    name VARCHAR(100) NOT NULL,
    type CHAR(1) NOT NULL,
    status CHAR(1) NOT NULL
);