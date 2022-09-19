<?php
error_reporting(0);
$msg=$_REQUEST['msg'];
//echo $msg;
if($msg==1)
{
	$msgerr1="Invalid Email &Password";
}
if($msg==2)
{
	$msgerr1="logout Succfully";
}
if($msg==3)
{
	$msgerr1="Don't try to to full me";
}
?>
<html>
<head>
<style>
body
{
background-color:grey;
}
</style>
</head>
<body>
<form action="logcode.php"method="post">
<center><h1>Admin Panel</h1>
<h4><?php echo $msgerr1;?></h4>
<!--<h4><?php echo $msgerr1;?></h4>
<h4><?php echo $msgerr1;?></h4>--->
Email 
<input type="email" name="email"/>
<br/>
<br/>1
Password
<input type="password" name="password"/>
<br/>
<br/>
<input type="submit" value="Login"/>
<br/>
<br/>
<h4><spam style="color:red">Desigend & Developed By Aman Somvanshi<spam></h4>
</form></center>
</body>
</html>