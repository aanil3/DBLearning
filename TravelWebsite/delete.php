<?php
$mysqli = mysqli_connect('localhost', 'root', 'cs3319', 'lreid2assign2db');
$id = $_GET['id']; // get id through query string
$query2 = "DELETE FROM bustrip WHERE tripid='$id'";
$qry2 = $mysqli->query($query2);

if($qry2)
{
    mysqli_close($mysqli); // Close connection
    header("location:index2.php"); // redirects to all records page
    exit;	
}

else 
{
    echo "Row cannot be deleted as it has bookings"; // display error message if not delete
}
?>
