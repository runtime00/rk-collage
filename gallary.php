<?php
$con=mysqli_connect("localhost","root","","rk_college");
$query="select * from tbl_gallery";
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
	<div class="row bg-dark">
	<div class="col-sm-12">
	
	
	<div class="row ">
	<?php
	while($row=mysqli_fetch_array($res))
	{
		?>
		
		<div class="col-sm-3 text-center">
		
			<img src="admin/gallery_upload/<?php echo $row['pic'];?>"height="300px"width="300px"/>
		</div>
		<?php
		
	}
	?>
		
	</div>
	
	</div>
	
	</div>
	</div>
</body>
</html>
