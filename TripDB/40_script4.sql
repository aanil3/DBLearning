USE 40_assign2db;

SELECT * FROM passenger;
SELECT * FROM passport;
SELECT * FROM bustrip;
SELECT * FROM bus;
SELECT * FROM tripbooking;
-- SELECT ALL THE TABLES BEFORE CREATING VIEW

CREATE VIEW passenger_db
AS SELECT passenger.fname, passenger.lname, bustrip.tripname, bustrip.visitcountry, tripbooking.cost FROM passenger, bustrip, tripbooking
WHERE passenger.passengerid = tripbooking.passengerid AND bustrip.tripid = tripbooking.tripid
ORDER BY passenger.fname;
-- SHOW PASSENDER_DB VIEW

SELECT * FROM passenger_db
WHERE passenger_db.tripname IN 
(SELECT tripname FROM passenger_db WHERE tripname LIKE "%Castles%")
ORDER BY passenger_db.cost ASC;
-- SELECT ALL COLUMNS WHERE TRIP NAME HAS SOMETHING TO DO WITH CASTLES

SELECT * FROM bus;
DELETE FROM bus WHERE licenseplate LIKE "%UWO%";
SELECT * FROM bus;
-- DELETE BUS WITH UWO IN IT

SELECT * FROM passport;
SELECT * FROM passenger;
DELETE FROM passport WHERE country = "Canada";
SELECT * FROM passport;
SELECT * FROM passenger;
-- Only passport was affected as I did not set up a trigger to delete from passenger if passport is deleted as passport is a child to passenger

SELECT * FROM bustrip;
DELETE FROM bustrip WHERE tripname = "California Wines";
SELECT * FROM bustrip;
-- DELETE BUS TRIP WHERE TRIP IS CALIFORNIA WINES

DELETE FROM bustrip WHERE tripname = "Arrivaderci Roma";
-- This fails as the trip is used as a foreign key in the tripbooking table

SELECT * FROM passenger;
DELETE FROM passenger WHERE fname = "Pam";
SELECT * FROM passenger;
-- DELETE PASSENGERS CALLED PAM

SELECT * FROM passenger_db;
DELETE FROM passenger WHERE lname = "Simpson";
SELECT * FROM passenger_db;
-- DELETE FROM PASSENGER DB WHERE LAST NAME IS SIMPSON
