-- Create database and set basic determinants
CREATE DATABASE LocationDB;

CREATE USER 'viewer'@'%' IDENTIFIED BY '$MUs8ints1';
CREATE USER 'Cerberus'@'127.0.0.1' IDENTIFIED BY 'R3GZ*Z3tA*Plu5';
GRANT SELECT ON LocationDB.* TO 'Cerberus'@'127.0.0.1';
GRANT INSERT ON LocationDB.* TO 'Cerberus'@'127.0.0.1';
GRANT UPDATE ON LocationDB.* TO 'Cerberus'@'127.0.0.1';
GRANT DELETE ON LocationDB.* TO 'Cerberus'@'127.0.0.1';
GRANT SELECT ON LocationDB.* TO 'viewer'@'%';
FLUSH PRIVILEGES;


-- Select it
USE LocationDB;


-- Create each individual printer table!
CREATE TABLE LocationDB.building (
	name VARCHAR(255),
	address VARCHAR(255),
    longitude DOUBLE PRECISION,
    latitude DOUBLE PRECISION,
    purpose VARCHAR(255),
);
