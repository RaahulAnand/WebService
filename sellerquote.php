<?php
include "connect.php";
session_start();

$pname = $_REQUEST['pname'];

$brand = $_REQUEST['brand'];

$availablity = $_REQUEST['availablity'];




$result=mysqli_query($con,$sql);
if(!$result)
{
	  die('Error: ' . mysql_error());
  }
else
{

echo "<script>";
echo " alert('Price quoted succesfully.');
        window.location.href='respondinvite.php';
</script>";

}
	mysqli_close($con);

?>