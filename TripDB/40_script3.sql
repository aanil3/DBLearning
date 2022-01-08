USE 40_assign2db;

-- Query 1
SELECT tripname FROM bustrip WHERE visitcountry = "Italy";

-- Query 2
SELECT DISTINCT lname FROM passenger;

-- Query 3
SELECT * FROM bustrip
ORDER BY tripname;

-- Query 4
SELECT tripname, visitcountry, startdate FROM bustrip
WHERE startdate > "2022-04-30";

-- Query 5
SELECT passenger.fname, passenger.lname, passport.birthdate FROM passenger
JOIN passport
ON passenger.passengerid = passport.passengerid
WHERE passport.country = "USA";

-- Query 6
SELECT bustrip.tripname, bus.capacity FROM bustrip
JOIN bus
ON bustrip.licenseplate = bus.licenseplate
WHERE bustrip.startdate > "2022-04-01" AND bustrip.startdate < "2022-09-01";

-- Query 7
SELECT * FROM passport
JOIN passenger
ON passport.passengerid = passenger.passengerid
WHERE passport.expirydate > (SELECT ADDDATE(CURDATE(), INTERVAL 365 DAY));

-- Query 8
SELECT passenger.fname, passenger.lname, bustrip.tripname FROM passenger
JOIN tripbooking ON passenger.passengerid = tripbooking.passengerid
JOIN bustrip ON tripbooking.tripid = bustrip.tripid
WHERE passenger.lname LIKE "S%";

-- Query 9
SELECT DISTINCT (SELECT COUNT(passengerid) FROM tripbooking), bustrip.tripid, bustrip.tripname FROM tripbooking, bustrip
WHERE bustrip.tripid = tripbooking.tripid AND bustrip.tripid = "1";

-- Query 10
SELECT DISTINCT SUM(tripbooking.cost), bustrip.visitcountry FROM tripbooking, bustrip
WHERE bustrip.tripid = tripbooking.tripid
GROUP BY bustrip.tripid;

-- Query 11
SELECT passenger.fname, passenger.lname, passport.country, bustrip.tripname, bustrip.visitcountry FROM passenger
JOIN passport ON passenger.passengerid = passport.passengerid
JOIN tripbooking ON passport.passengerid = tripbooking.passengerid
JOIN bustrip ON tripbooking.tripid = bustrip.tripid
WHERE passport.country != bustrip.visitcountry;

-- Query 12
SELECT bustrip.tripid, tripname FROM bustrip
WHERE bustrip.tripid NOT IN (SELECT tripid FROM tripbooking);

-- QUERY 13
SELECT DISTINCT SUM(tripbooking.cost), passenger.fname, passenger.lname, passport.country FROM tripbooking, passenger, passport
WHERE tripbooking.passengerid = passenger.passengerid AND passport.passengerid = passenger.passengerid
GROUP BY passenger.passengerid
ORDER BY SUM(tripbooking.cost) DESC
LIMIT 1;

-- Query 14
SELECT bustrip.tripname, COUNT(tripbooking.tripid) FROM bustrip
LEFT JOIN tripbooking ON bustrip.tripid = tripbooking.tripid
GROUP BY bustrip.tripname
HAVING COUNT(tripbooking.tripid) < 4
ORDER BY COUNT(tripbooking.tripid) DESC;

-- Query 15
SELECT bustrip.tripname as "Bus Trip Name", COUNT(tripbooking.tripid) as "Current Number of Passengers", bus.licenseplate as "Current Bus Assigned License Plate", bus.capacity as "Capacity of Assigned Bus" FROM bustrip
LEFT JOIN tripbooking ON bustrip.tripid = tripbooking.tripid
LEFT JOIN bus ON bustrip.licenseplate = bus.licenseplate
GROUP BY bustrip.tripname;
