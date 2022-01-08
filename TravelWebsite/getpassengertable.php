<?php
$query = "SELECT * FROM passenger INNER JOIN passport ON passenger.passengerid = passport.passengerid ORDER BY lastname ASC";
$result = mysqli_query($connection,$query);
if (!$result) {
     die("databases query failed.");
}
echo "<table>";
echo "<tr><th>Passenger ID</th><th>First Name</th><th>Last Name</th><th>Passport ID</th><th>Nationality</th><th>Expiry Date</th><th>Birth Date</th></tr>";
while ($row = mysqli_fetch_assoc($result)) {
    echo '<tr>';
    echo "<tr>" . "<td>" . $row["passengerid"] . "</td><td>" . $row["firstname"] . "</td><td>" . $row["lastname"] . "</td><td>" . $row["passportnum"] . "</td><td>" . $row["citizenshipcountry"] . "</td><td>" . $row["expireydate"] . "</td><td>" . $row["birthdate"] . "</td></tr>";
}
mysqli_free_result($result);
echo "</table>";
?>
