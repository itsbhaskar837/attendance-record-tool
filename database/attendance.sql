CREATE DATABASE attendance_db;

USE attendance_db;

CREATE TABLE students (
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(100),
class VARCHAR(50)
);

CREATE TABLE teachers (
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(100),
subject VARCHAR(100)
);

CREATE TABLE attendance (
id INT AUTO_INCREMENT PRIMARY KEY,
person_type VARCHAR(20),
person_id INT,
status VARCHAR(10),
date DATE
);
