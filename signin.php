<?php

		$host="localhost";
		$username="root";
		$password= "";


$password =$_REQUEST['password'];


 $sql = "SELECT `Email`,`Pass` from `buyer` where `Email` = '$email' and  `Pass` = '$password'";

$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);

if($count == 0)
{
echo "<script>";
echo " alert('Incorrect Password or Email.');
        window.location.href='signin.html';
</script>";

}
else
{
session_Start();
$_SESSION['email']=$email;
header("location:quote.php");
}


?>
