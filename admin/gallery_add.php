<?php
$con=mysqli_connect("localhost","root","","rk_college");
$query="select * from tbl_gallery";
$res=mysqli_query($con,$query);

session_start();
if($_SESSION['admin']=="")
{
header("location:index.php?msg=3");
}
include("menu.php");
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
    <div class="container">
	<div class="row bg-dark">
	<div class="col-sm-12">
	<form action="gal_code.php" method="post" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Title</label>
    <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Image</label>
    <input type="file"name="pic" class="form-control" id="exampleInputPassword1">
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form></div>
	</div>
	<div class="row">
	<div class="col-sm-12">
	<table class="table table-borderd text-white">
	<tr>
	<th>s.no</th>
	<th>title</th>
	<th>image</th>
	<th>Date</th>
	</tr>
	<?php
	while($row=mysqli_fetch_array($res))
	{
		?>
		<tr>
		<td><?php echo $row['id']?></td>
		<td><?php echo $row['title']?></td>
		<td><img src="gallery_upload/<?php echo $row['pic'];?>" height="150px" width="150px"/></td>
		<td><?php echo $row['date'];?></td>
		</tr>
		
		<?php
		
	}
	?>
		
	</table>
	
	</div>
	
	</div>
	</div>
  </body>
</html>