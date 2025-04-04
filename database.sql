CREATE DATABASE IF NOT EXISTS school_form;
USE school_form;

CREATE TABLE IF NOT EXISTS responses (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL,
    name VARCHAR(255) NOT NULL,
    surname VARCHAR(255) NOT NULL,
    class VARCHAR(255) NOT NULL,
    subject VARCHAR(255) NOT NULL,
    leader VARCHAR(50) NOT NULL,
    improvements TEXT
);
