DROP DATABASE IF EXISTS planets;
CREATE DATABASE planets;
USE planets;

CREATE TABLE IF NOT EXISTS tblstars(
    p_starID INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    starName VARCHAR(20)
);

CREATE TABLE IF NOT EXISTS tblplanets(
    p_planetKey INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    pname       VARCHAR(20) NOT NULL,
    diameter    INT UNSIGNED NOT NULL,
    year_length FLOAT NOT NULL,
    life        BOOLEAN,
    ptype       VARCHAR(20) NOT NULL,
    star        VARCHAR(20) NOT NULL,
    age         FLOAT NOT NULL,
    f_starID    INT UNSIGNED NOT NULL,
    FOREIGN KEY(f_starID) REFERENCES tblstars(p_starID) 
);

INSERT INTO tblstars(starName) VALUES
("Sun");

INSERT INTO tblplanets(pname,diameter,year_length,life,ptype,star,age,f_starID) VALUES
("Mercury", 4880, 0.24, false, "Exo", "Sun", 4.503, 1),
("Venus", 12100, 0.615, false, "Exo", "Sun", 4.503, 1),
("Earth", 12800, 1, true, "Exo", "Sun", 4.543, 1),
("Mars", 6780, 1.88, true, "Exo", "Sun", 4.603, 1),
("Jupiter", 140000, 11.862, false, "Gas", "Sun", 4.503, 1),
("Saturn", 119000, 29, false, "Gas", "Sun", 4.503, 1),
("Uranus", 50724, 84.0205, false, "Ice Giant", "Sun", 4.503, 1),
("Neptune", 59200, 165, false, "Ice Giant", "Sun", 4.503, 1);