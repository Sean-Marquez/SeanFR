
CREATE DATABASE IF NOT EXISTS dearcandle
    CHARACTER SET utf8mb4
    COLLATE utf8mb4_unicode_ci;

USE dearcandle;

CREATE TABLE IF NOT EXISTS users (
    id         INT AUTO_INCREMENT PRIMARY KEY,
    name       VARCHAR(100) NOT NULL,
    email      VARCHAR(150) NOT NULL UNIQUE,   -- no two accounts can share an email
    password   VARCHAR(255) NOT NULL,          -- stores the random letters of the password, never the real password
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;
