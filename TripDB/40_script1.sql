SHOW DATABASES;
DROP DATABASE IF EXISTS 40_assign2db;
CREATE DATABASE 40_assign2db;
USE 40_assign2db;
SHOW TABLES;
-- USE THE DB THAT YOU CREATED

CREATE TABLE passenger(
	passengerid integer NOT NULL,
	fname varchar(20) NOT NULL,
	lname varchar(20) NOT NULL,
	UNIQUE (passengerid),
	PRIMARY KEY (passengerid));
-- CREATE TABLE PASSENGER WITH GIVEN REQUIREMENTS

CREATE TABLE passport(
	passportno varchar(4) NOT NULL, 
	country varchar(30) NOT NULL,
	expirydate DATE NOT NULL, 
	birthdate DATE NOT NULL,
	passengerid integer NOT NULL,
	FOREIGN KEY (passengerid) REFERENCES passenger(passengerid) ON DELETE CASCADE,
	UNIQUE (passportno), 
	PRIMARY KEY (passportno));
-- CREATE TABLE PASSPORT WITH REQUIREMENTS AS WELL AS REFERENCE PASSENGERID FROM PASSENGER TABLE

CREATE TABLE bus(
	licenseplate varchar(7) NOT NULL,
	capacity integer NOT NULL,
	UNIQUE (licenseplate),
	PRIMARY KEY (licenseplate));
-- CREATE BUS TABLE WITH PROVIDED VARIABLES
	
CREATE TABLE bustrip(
	tripid integer NOT NULL,
	tripname varchar(50) NOT NULL,
	startdate DATE NOT NULL,
	enddate DATE NOT NULL,
	visitcountry varchar(30) NOT NULL,
	licenseplate varchar(7) NOT NULL,
	FOREIGN KEY (licenseplate) REFERENCES bus(licenseplate),
	UNIQUE (tripid),
	PRIMARY KEY (tripid));
-- CREATE BUSTRIP TABLE WITH PROVIDED VARIABLES AND REFERENCE FOREIGN KEY

CREATE TABLE tripbooking(
	passengerid integer NOT NULL,
	tripid integer NOT NULL,
	cost integer NOT NULL,
	FOREIGN KEY (passengerid) REFERENCES passenger(passengerid) ON DELETE CASCADE,
	FOREIGN KEY (tripid) REFERENCES bustrip(tripid),
	PRIMARY KEY (tripid, passengerid));
-- CREATE TRIPBOOKING TABLE WITH PROVIDED VARIABLES AND REFERENCE FOREIGN KEYS

SHOW TABLES;
--SHOW TABLES ONCE MORE
