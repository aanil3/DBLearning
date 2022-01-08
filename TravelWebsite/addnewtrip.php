<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome to My Trip Manager!</title>
</head>
<body>
<?php
   include 'connectdb.php';
?>
<h1>Here are your trips:</h1>
<ol>
<?php
   $tripid = $_POST["tripid"];
   $name = $_POST["tripname"];
   $startdate =$_POST["tripstart"];
   $enddate = $_POST["tripend"];
   $country = $_POST["tripcountry"];
   $bus = $_POST["assignedbus"];
   $urlImage = $_POST["urlImage"];
   $query1= 'select max(tripid) as maxid from bustrip';
   $result=mysqli_query($connection,$query1);
   if (!$result) {
          die("database max query failed.");
   }
   $query = 'INSERT INTO bustrip values("' . $tripid . '","' . $name . '","' . $startdate . '","' . $enddate . '","' . $country . '","' . $bus . '","' . $urlImage . '")';
   if (!mysqli_query($connection, $query)) {
        die("Error: insert failed" . mysqli_error($connection));
    }
   echo "Your trip was added!";
   mysqli_close($connection);
?>
</ol>
</body>
</html>
