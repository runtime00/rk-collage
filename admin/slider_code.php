<?php
$text=$_POST['text1'];
//echo $text;
$text1=$_POST['text2'];
//echo $text1;
$pic=$_FILES['pic']['name'];
//echo $pic;
$size=$_FILES['pic']['size'];
//echo $size;
$type=$_FILES['pic']['type'];
//echo $type;
$tmp_name=$_FILES['pic']['tmp_name'];
//echo $tmp_name;
$location="slider_upload/";
$con=mysqli_connect("localhost","root","","rk_college");
$query="insert into tbl_slider(text1,text2,pic,date) values('$text','$text1','$pic',curdate())";
mysqli_query($con,$query);
move_uploaded_file($tmp_name,$location.$pic);
header("location:slider.php");
?>
