CREATE DATABASE book_db;

USE book_db;

CREATE TABLE books (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    author VARCHAR(255) NOT NULL
);