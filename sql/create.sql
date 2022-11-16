
DROP DATABASE Boekenwinkel;

CREATE DATABASE Boekenwinkel;

USE Boekenwinkel;

DROP TABLE IF EXISTS boek;

CREATE TABLE Boek (

                         id INT NOT NULL AUTO_INCREMENT,

                         Title VARCHAR(50),

                         Author VARCHAR(50),

                         PRIMARY KEY (id),
   
                         rating VARCHAR(20),

                         prijs VARCHAR(20),

                      Informatie VARCHAR(700),

                    afbeelding VARCHAR(100),

                    published VARCHAR(100),

                    taal VARCHAR(100)
);


