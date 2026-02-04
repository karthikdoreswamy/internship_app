CREATE DATABASE internship_db;
USE internship_db;

-- 1. Create Users Table
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL
);

-- 2. Create Applications Table
CREATE TABLE applications (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    role VARCHAR(50),
    resume_link VARCHAR(255),
    submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- 3. Insert a Dummy Admin User (Password: "admin123")
-- We use MD5 for simplicity in this sample, but use password_hash() in production.
INSERT INTO users (username, password) VALUES ('admin', MD5('admin123'));