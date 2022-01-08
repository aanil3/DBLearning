USE 40_assign2db;
-- USE DB YOU CREATED

SELECT * FROM passenger;

INSERT INTO passenger values("11", "Homer", "Simpson");
INSERT INTO passenger values("22", "Marge", "Simpson");
INSERT INTO passenger values("33", "Bart", "Simpson");
INSERT INTO passenger values("34", "Lisa", "Simpson");
INSERT INTO passenger values("35", "Maggie", "Simpson");
INSERT INTO passenger values("44", "Ned", "Flanders");
INSERT INTO passenger values("45", "Todd", "Flanders");
INSERT INTO passenger values("66", "Heidi", "Klum");
INSERT INTO passenger values("77", "Michael", "Scott");
INSERT INTO passenger values("78", "Dwight", "Schrute");
INSERT INTO passenger values("79", "Pam", "Beesly");
INSERT INTO passenger values("80", "Creed", "Bratton");
INSERT INTO passenger values("99", "Edward", "Elric");

SELECT * FROM passenger;

-- SELECT PASSENGER, INPUT VALUES, THEN SHOW THAT IT WAS INSERTED PROPERLY

SELECT * FROM passport;

INSERT INTO passport values("US10", "USA", "2025-01-01", "1970-02-19", "11");
INSERT INTO passport values("US12", "USA", "2025-01-01", "1972-08-12", "22");
INSERT INTO passport values("US13", "USA", "2025-01-01", "2001-05-12", "33");
INSERT INTO passport values("US14", "USA", "2025-01-01", "2004-03-19", "34");
INSERT INTO passport values("US15", "USA", "2025-01-01", "2012-09-17", "35");
INSERT INTO passport values("US22", "USA", "2030-04-04", "1950-06-11", "44");
INSERT INTO passport values("US23", "USA", "2018-03-03", "1940-06-24", "45");
INSERT INTO passport values("GE11", "Germany", "2027-01-01", "1970-07-12", "66");
INSERT INTO passport values("US88", "Canada", "2020-02-13", "1970-04-25", "77");
INSERT INTO passport values("US89", "Canada", "2022-02-02", "1976-04-08", "78");
INSERT INTO passport values("US90", "Italy", "2020-02-28", "1980-04-04", "79");
INSERT INTO passport values("US91", "Germany", "2030-01-01", "1959-02-02", "80");
INSERT INTO passport values("AM01", "Amestris", "2025-01-01", "1899-02-03", "99");

SELECT * FROM passport;

-- SELECT PASSPORT, INPUT VALUES, THEN SHOW THAT IT WAS INSERTED PROPERLY

SELECT * FROM bus;

LOAD DATA LOCAL INFILE 'loaddatafall2021.txt' INTO TABLE bus FIELDS TERMINATED BY ',';

SELECT * FROM bus;

-- LOAD IN THE FILE AS MENTIONED IN THE ASSIGNMENT REQUIREMENTS

SELECT * FROM bustrip;

INSERT INTO bustrip values("1", "Castles of Germany", "2022-01-01", "2022-01-17", "Germany", "VAN1111");
INSERT INTO bustrip values("2", "Tuscany Sunsets", "2022-03-03", "2022-03-14", "Italy", "TAXI222");
INSERT INTO bustrip values("3", "California Wines", "2022-05-05", "2022-05-10", "USA", "VAN2222");
INSERT INTO bustrip values("4", "Beaches Galore", "2022-04-04", "2022-04-14", "Bermuda", "TAXI222");
INSERT INTO bustrip values("5", "Cottage Country", "2022-06-01", "2022-06-22", "Canada", "CAND123");
INSERT INTO bustrip values("6", "Arrivaderci Roma", "2022-07-05", "2022-07-15", "Italy", "TAXI111");
INSERT INTO bustrip values("7", "Shetland and Orkney", "2022-09-09", "2022-09-29", "UK", "TAXI111");
INSERT INTO bustrip values("8", "Disney World and Sea World", "2022-06-10", "2022-06-20", "USA", "VAN2222");
INSERT INTO bustrip values("9", "Merlion Vacation", "2022-07-01", "2022-07-15", "Singapore", "CAND123");
INSERT INTO bustrip values("10", "A Trip To Spider Land", "2022-08-01", "2022-08-15", "Australia", "TAXI333");

SELECT * FROM bustrip;

-- SELECT BUSTRIP, INPUT VALUES, THEN SHOW THAT IT WAS INSERTED PROPERLY

SELECT * FROM tripbooking;

INSERT INTO tripbooking values("11", "1", "500");
INSERT INTO tripbooking values("22", "1", "500");
INSERT INTO tripbooking values("33", "1", "200");
INSERT INTO tripbooking values("34", "1", "200");
INSERT INTO tripbooking values("35", "1", "200");
INSERT INTO tripbooking values("66", "1", "600.99");
INSERT INTO tripbooking values("44", "8", "400");
INSERT INTO tripbooking values("45", "8", "200");
INSERT INTO tripbooking values("78", "4", "600");
INSERT INTO tripbooking values("80", "4", "600");
INSERT INTO tripbooking values("78", "1", "550");
INSERT INTO tripbooking values("33", "8", "300");
INSERT INTO tripbooking values("34", "8", "300");
INSERT INTO tripbooking values("11", "6", "600");
INSERT INTO tripbooking values("22", "6", "600");
INSERT INTO tripbooking values("33", "6", "100");
INSERT INTO tripbooking values("34", "6", "100");
INSERT INTO tripbooking values("35", "6", "100");
INSERT INTO tripbooking values("11", "7", "300");
INSERT INTO tripbooking values("44", "7", "400");
INSERT INTO tripbooking values("77", "7", "500");
INSERT INTO tripbooking values("99", "10", "399");

SELECT * FROM tripbooking;

-- SELECT TRIPBOOKING, INPUT VALUES, THEN SHOW THAT IT WAS INSERTED PROPERLY

SELECT * FROM passport;

UPDATE passport SET country = "Germany" WHERE passengerid = (SELECT passengerid FROM passenger WHERE fname = "Dwight" AND lname = "Schrute");

SELECT * FROM passport;

-- UPDATE DWIGHT SCRUTE TO GERMAN

SELECT * FROM bustrip;

UPDATE bustrip SET licenseplate = "VAN1111" WHERE visitcountry = "USA";

SELECT * FROM bustrip;

-- UPDATE LICENSEPLATES TO VAN1111 FOR USA TRIPS
