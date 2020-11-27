DROP DATABASE IF EXISTS `mysteries` ;

CREATE DATABASE mysteries;
USE mysteries;

CREATE TABLE IF NOT EXISTS `tblnebulae` (
    `p_nebID`   INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name`      VARCHAR(255),
    `type`      VARCHAR(255),
    `distance`  FLOAT UNSIGNED,
    `diameter`  FLOAT UNSIGNED,
    `makeup`    VARCHAR(255)
);

CREATE TABLE IF NOT EXISTS `tblquasars` (
  `p_quID` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `name` VARCHAR(255),
  `subType` VARCHAR(255)
);

INSERT INTO `tblnebulae` VALUES
(NULL, "NGC 6611", "Emission", 5700, 20, "No Info"),
(NULL, "Barnard 33", "Dark", 1375, 7, "Dust and Gas"),
(NULL, "NGC 6960 ('Veil Nebula')", "Supernova Remnant", 2400, 100, "Dust and Gas");

INSERT INTO `tblquasars` VALUES
(NULL, "Einstein Cross", "gravitationaly lensed");