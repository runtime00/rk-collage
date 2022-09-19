<?php
$department=$_POST['dname'];
//echo $department;
$con=mysqli_connect("localhost","root","","rk_college");
$query="insert into tbl_department(department,date) values('$department',now())";
mysqli_query($con,$query);
?>