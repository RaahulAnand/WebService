<?php
include "connect.php";
session_start();


$catogery = $_REQUEST['catogery'];

$location = $_REQUEST['location'];

$pincode = $_REQUEST['pincode'];

$desc = $_REQUEST['desc'];

$date = date('y-m-d');



$result=mysqli_query($con,$sql);
if(!$result)
{
	  die('Error: ' . mysql_error());
  }

echo "<script>";


</script>";





				  						mysqli_close($con);

				  						?>

