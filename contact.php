<?php
$con=mysqli_connect("localhost","root","","rk_college");
$query="select * from tbl_contact";
$res=mysqli_query($con,$query);
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
<form action="contact_code.php" method="post">
<div class= "container">
<div class="row bg-info">
<div class="col-sm-12">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">first Name</label>
    <input type="text" name="fname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Last Name</label>
    <input type="text" name="lname" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email ID</label>
    <input type="email"  name="email"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Mobile</label>
    <input type="number" name="mobile" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Message</label>
  <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
  <button type="submit" class="btn btn-primary">Submit</button>
  </div>
  </div>
  </div>
</form>
