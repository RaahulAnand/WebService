<?php

		$host="localhost";

$email =$_REQUEST['email'];

$password =$_REQUEST['password'];


if($count == 0)
{
echo "<script>";
echo " alert('Incorrect Password or Email.');
        window.location.href='seller-login.html';
</script>";

}
else
{
session_Start();
$_SESSION['email']=$email;
header("location:respondinvite.php");
}


?>
