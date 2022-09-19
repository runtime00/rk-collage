<?php
$session=$_POST['session'];
//echo $session;
$pic=$_FILES['image']['name'];
//echo $pic;
$tmp_name=$_FILES['image']['tmp_name'];
//echo$tmp_name;
$type=$_POST['type'];
//echo $type;
$location="uploaded/";
$con=mysqli_connect("localhost","root","","rk_college");
$query="insert into tbl_naac(session,file_name,type,added_on) values('$session','$pic','$type',now())";
mysqli_query($con,$query);
move_uploaded_file($tmp_name,$location.$pic);
header("location:naac.php");
?>