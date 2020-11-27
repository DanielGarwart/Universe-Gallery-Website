DROP DATABASE IF EXISTS galaxies;
CREATE DATABASE IF NOT EXISTS galaxies;
USE galaxies;

CREATE TABLE tblgalaxies(
    galaxyName VARCHAR(50),
    galaxyDiameter INT UNSIGNED,
    galaxyType VARCHAR(20),
    galaxyDistance FLOAT UNSIGNED,
    galaxyNumStars FLOAT UNSIGNED,
    galaxyBlackholes VARCHAR(50)
);

INSERT INTO tblgalaxies VALUES
("Milky Way",100000,"Spiral", 0.05,250000000,"Sagittarius A*"),
("Andromeda",220000,"Spiral",2.5,POWER(10,12),"J0045, 41"),
("Messier 87",49000000,"Elliptical",53.0,POWER(10,12),"M87*"),
("Arp-Madore 2026-424", 0, "Ring", 704.0, 0, "N/A");