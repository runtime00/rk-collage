<?php
$not=$_POST['noti'];
//echo $not;
$upload_file=$_FILES['file']['name'];
//echo $upload_file;
$tmp_name=$_FILES['file']['tmp_name'];
//echo $tmp_name;
$location="notification_upload/";
$con=mysqli_connect("localhost","root","","rk_college");
$query="insert into tbl_notification (notification,upload_file,date) values('$not','$upload_file',now())";
mysqli_query($con,$query);
move_uploaded_file($tmp_name,$location.$upload_file);
header("location:notification.php");
?>