<?php
session_start();
$email=$_POST['email'];
//echo$email;
$password=$_POST['password'];
//echo$password;
include("connection.php");
$query="select * from tbl_admin where email='$email' and password='$password'";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_array($res))
{
	$_SESSION['admin']=$email;
	header("Location:dashboard.php");
}
else
{
	header("Location:index.php?msg=1");
}
?>