<?php
$query = "SELECT * FROM bustrip";
$result = mysqli_query($connection,$query);
if (!$result) {
     die("databases query failed.");
}
echo "<table>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>" . $row["tripid"] . "</td><td>" . $row["tripname"] . "</td><td>" . $row["startdate"] . "</td><td>" . $row["enddate"] . "</td><td>" . $row["country"] . "</td><td>" . $row["assignedbus"] . "</td><td>" . $row["urlImage"] . "</td>";
}
mysqli_free_result($result);
echo "</ol>";
?>
