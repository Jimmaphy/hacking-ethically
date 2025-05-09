DROP DATABASE IF EXISTS ehc_bfa;
CREATE DATABASE ehc_bfa;

USE ehc_bfa;

CREATE TABLE accounts (
    id varchar(100) PRIMARY KEY,
    pw varchar(100) NOT NULL
);

INSERT INTO accounts (id, pw)
VALUES ('Jimmaphy', 'pikachu');
