
CREATE DATABASE IF NOT EXISTS student_db;


USE student_db;


CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    course VARCHAR(50) NOT NULL,
    year_enrolled INT NOT NULL,
    birthday DATE NOT NULL
);
