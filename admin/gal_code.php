<?php
$title=$_POST['title'];
//echo $title;
$pic=$_FILES['pic']['name'];
//echo $pic;
$tmp_name=$_FILES['pic']['tmp_name'];
//echo $tmp_name;
$location="gallery_upload/";
$con=mysqli_connect("localhost","root","","rk_college");
$query="insert into tbl_gallery(title,pic,date) values('$title','$pic',now())";
mysqli_query($con,$query);
move_uploaded_file($tmp_name,$location.$pic);
header("location:gallery_add.php");
?>