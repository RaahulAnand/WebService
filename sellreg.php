<?php

	$host="localhost";


$name = $_REQUEST['name'];

$email = $_REQUEST['email'];

$contact = $_REQUEST['contact'];



$pincode = $_REQUEST['pincode'];

$tin = $_REQUEST['tin'];

$tin = $_REQUEST['tin'];

$catogery = $_POST['catogery'];

$date = date('y-m-d');

if($catogery)
{
 foreach($catogery as $c)
 {

}
if(!$result)
{
	  die('Error: ' . mysql_error());
  }
else
{

echo "<script>";
echo " alert('Seller is registered succesfully.');
        window.location.href='seller-login.html';
</script>";

}
}
	mysqli_close($con);

?>

