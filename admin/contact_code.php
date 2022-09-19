<?php
$fname=$_POST['fname'];
//echo $fname;
$lname=$_POST['lname'];
//echo $lname;
$email=$_POST['email'];
//echo $email;
$mobile=$_POST['mobile'];
//echo $mobile;
$message=$_POST['message'];
//echo $message;
$con=mysqli_connect("localhost","root","","rk_college");
$query="insert into tbl_contact(fname,lname,email,mobile,message,date) values('$fname','$lname','$email','$mobile','$message',now())";
mysqli_query($con,$query);
header("location:contact.php");
?>