<?php
$name=$_POST['name'];
//echo $name;
$post=$_POST['post'];
//echo $post;
$mobile=$_POST['mobile'];
//echo $mobile;
$gender=$_POST['gender'];
//echo $gender;
$dob=$_POST['dob'];
//echo $dob;
$photo=$_FILES['file']['name'];
//echo $photo;
$tmp_name=$_FILES['file']['tmp_name'];
//echo $tmp_name;
$address=$_POST['address'];
//echo $address;
$location="nonteach_upload/";
$con=mysqli_connect("localhost","root","","rk_college");
$query="insert into tbl_non_teacher (name,post,mobile,gender,dob,photo,address,date) values('$name','$post','$mobile','$gender','$dob','$photo','$address',now())";
mysqli_query($con,$query);
move_uploaded_file($tmp_name,$location.$photo);
header("location:non_teach.php");
?>