<?php
$id=$_REQUEST['id'];
//echo $id;
include("connection.php");
$query="select * from tbl_notification where no_id='$id'";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_array($res))
{
	$upload_file=$row['upload_file'];
}
$location="notification_upload/";
$con=mysqli_connect("localhost","root","","rk_college");
$query2="delete from tbl_notification where no_id='$id'";
mysqli_query($con,$query2);
unlink($location.$upload_file);
header("location:notification.php");
echo "Data deleted successfully";
?>