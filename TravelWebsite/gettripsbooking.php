<?php
$query = "SELECT bustrip.tripid, bustrip.tripname FROM bustrip LEFT JOIN booking ON bustrip.tripid = booking.tripid WHERE booking.tripid IS NULL";
$result = mysqli_query($connection, $query);
if (!$result) {
	die("databases query failed");
}
echo "<ol>";
while ($row = mysqli_fetch_assoc($result)) {
	echo '<li>';
	echo $row["tripname"] . " -- " . $row["tripid"] . '</li>';
}
mysqli_free_result($result);
echo "</ol>";
?>
