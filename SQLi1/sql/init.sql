DROP DATABASE IF EXISTS ehc_sqli;
CREATE DATABASE ehc_sqli;

USE ehc_sqli;

CREATE TABLE Subjects (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    teacher VARCHAR(255)
);

CREATE TABLE Students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    age INT
);

CREATE TABLE Grades (
    id INT AUTO_INCREMENT PRIMARY KEY,
    student_id INT,
    subject_id INT,
    grade DECIMAL(3,1)
);

INSERT INTO Subjects (name, teacher) VALUES 
('Math', 'Dr. Johnson'),
('English', 'Ms. Smith'),
('History', 'Mr. Brown');

INSERT INTO Students (name, age) VALUES 
('Alice', 20),
('Bob', 22),
('Charlie', 21);

INSERT INTO Grades (student_id, subject_id, grade) VALUES 
(1, 1, 8.5),
(2, 2, 7.2),
(3, 3, 6.8),
(1, 3, 9.0),
(2, 1, 5.5),
(3, 2, 7.8);
