DROP DATABASE IF EXISTS ehc_sqli;
CREATE DATABASE ehc_sqli;

USE ehc_sqli;

CREATE TABLE accounts (
    id varchar(100) PRIMARY KEY,
    pw varchar(100) NOT NULL
);

INSERT INTO accounts (id, pw)
VALUES ('Jimmaphy', 'abcdefghiklmnopqrstuvWxyz');
