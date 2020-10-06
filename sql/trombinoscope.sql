/*Supprimer la BDD*/
DROP DATABASE IF EXISTS trombinoscope;

/*Créer la BDD*/
CREATE DATABASE trombinoscope;

ALTER DATABASE trombinoscope charset UTF8;


USE trombinoscope;

/*Création des tables*/
CREATE TABLE  sections
(
    codeSec VARCHAR(10) PRIMARY KEY NOT NULL,
    libSec  VARCHAR(50),
    dateDebSec DATE,
    obsvSec TEXT

);

-- ALTER TABLE sections CONVERT TO CHARACTER SET utf8;

CREATE TABLE  stagiaires
(
    codeSta VARCHAR(10) NOT NULL,
    codeSec VARCHAR(10) NOT NULL,
    nomSta VARCHAR(32),
    preSta VARCHAR(32),
    datNaisSta DATE,
    villeSta VARCHAR(40),
    interneSta VARCHAR(3),
    gsmSta VARCHAR(20),
    mailSta VARCHAR(50),
    obsvSta TEXT,

    PRIMARY KEY (codeSta, codeSec)

);

-- ALTER TABLE stagiaires CONVERT TO CHARACTER SET utf8;


CREATE TABLE  users
(
    log VARCHAR (50) PRIMARY KEY NOT NULL,
    pwd VARCHAR(30),
    rol VARCHAR (30),
    nom VARCHAR (20) 
);

-- ALTER TABLE users CONVERT TO CHARACTER SET utf8;

CREATE TABLE  news
(
    dat DATE PRIMARY KEY NOT NULL,
    titre VARCHAR (50),
    lib TEXT
);

-- ALTER TABLE news CONVERT TO CHARACTER SET utf8;

ALTER TABLE stagiaires
    ADD CONSTRAINT stagiaires_FK
    FOREIGN KEY (codeSec) REFERENCES sections (codeSec)
    ON DELETE RESTRICT
    ON UPDATE RESTRICT;