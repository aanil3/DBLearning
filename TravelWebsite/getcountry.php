<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Your Selected Trips</title>
</head>
<body>
<?php
include 'connectdb.php';
?>
<h1>Here are your trips:</h1>
<ol>
<?php
   $whichCountry= $_POST["country"];
   $query = 'SELECT * FROM bustrip WHERE bustrip.country="' . $whichCountry . '"';
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("database query2 failed.");
     }
    echo "<ol>";
    while ($row=mysqli_fetch_assoc($result)) {
        echo '<li>';
        echo $row["tripid"] . " -- " . $row["tripname"] . " -- " . $row["startdate"] . " -- " . $row["enddate"] . " -- " . $row["country"] . " -- " . $row["assignedbus"]."</li>";
     }
     mysqli_free_result($result);
     echo "</ol>";
?>
</ol>
<?php
   mysqli_close($connection);
?>
</body>
</html>
