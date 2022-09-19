<?php
//session_start();
//if($_SESSION['admin']=="")
//{
//header("location:index.php?msg=3");
//}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="accect/css/bootstrap.css" rel="stylesheet"/>
   <script href="accect/js/bootstrap.bundle.js" rel="stylesheet"></script>
    <title>Bootstrap demo</title>
  </head>
  <body>
    <div class="container-fluid">

   <div class="row bg-info">
   <div class="col-sm-12 bg-warning ">
 
<h1>Welcome Admin !</h1>
<a href="logout.php"><h2 align="right"> Logout<h2></a>

</div>
</div>
<div class="row">
<div class="col-sm-12">
<img src="accect/images/user2.jpg"height="150px" width="150px" />
</div>
</div>
<div class="row" style="min-height:500px;">
<div class="col-sm-3 bg-light">



 <a href="dashboard.php"><h3>Dashboard</h3></a>
 <a href="notification.php"><h3>Notification<h3/></a>
 <a href="manage_departement"><h3>Manage department</h3></a>
 <a href="teacher.php"><h3>Manage teacher</h3></a>
 <a href="non_teach.php"><h3>Manage non-teaching</h3></a>
 <a href="slider.php"><h3>Manage slider</h3></a>
 <a href="gallery_add.php"><h3>manage gallery</h3></a>
 <a href="com.php"><h3>Manage commities</h3></a>
 <a href="naac.php"><h3>NAAC</h3></a>
<a href="contact.php"> <h3>contact us</h3></a>
<a href="acad.php"> <h3>Acadmic</h3></a>
<a href="change_pass.php"><h3>Change password</h3></a>
</div>
<div class="col-sm-9 bg-danger">
