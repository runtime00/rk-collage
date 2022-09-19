<?php
$name=$_POST['name'];
//echo $name;
$qualification=$_POST['qualification'];
//echo $qualification;
$department=$_POST['department'];
//echo $department;
$gender=$_POST['gender'];
//echo $gender;
$mobile=$_POST['number'];
//echo $mobile;
$email=$_POST['email'];
//echo $email;
$dob=$_POST['dob'];
//echo $dob;
$photo=$_FILES['file']['name'];
//echo $photo;
$tmp_name=$_FILES['file']['tmp_name'];
//echo $tmp_name;
$address=$_POST['address'];
//echo $address;
$location="teach_upload/";
$con=mysqli_connect("localhost","root","","rk_college");
$query="insert into tbl_teacher (name,qualification,department,gender,mobile,email,dob,photo,address,date) values('$name','$qualification','$department','$gender','$mobile','$email','$dob','$photo','$address',now())";
mysqli_query($con,$query);
move_uploaded_file($tmp_name,$location.$photo);
header("location:teacher.php");
?>