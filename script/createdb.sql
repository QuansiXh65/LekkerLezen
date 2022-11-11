DROP DATABASE  lekkerlezendb IF EXISTS;
CREATE DATABASE lekkerlezendb;

USE lekkerlezendb;

CREATE TABLE boeken(
                        auteur VARCHAR(50),
                        publishers VARCHAR(50),
                        title VARCHAR(50),
                        languages VARCHAR(50),
                        published VARCHAR(50),
                        commentaar VARCHAR (50),
                        afbeelding VARCHAR(225)
);

ALTER TABLE boeken ADD id INT NOT NULL PRIMARY KEY AUTO_INCREMENT;
ALTER TABLE boeken ADD rating DOUBLE;
ALTER TABLE boeken ADD price VARCHAR(50);