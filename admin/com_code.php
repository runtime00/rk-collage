<?php
$com=$_POST['name'];
echo $com;
$con=mysqli_connect("localhost","root","","rk_college");
$query="insert into tbl_commites(commities_name,created_at) values('$com',now())";
mysqli_query($con,$query);
header("location:com.php");
?>