<?php
$con=mysqli_connect("localhost","root","","rk_college");
$query="select * from tbl_non_teacher";
$res=mysqli_query($con,$query);

session_start();
if($_SESSION['admin']=="")
{
header("location:index.php?msg=3");
}
include("menu.php");
?>
<h1>Non Teaching</h1> 
<form action="non_teach_code.php" method="post" enctype="multipart/form-data">

Name
<input type="text"name="name">
<br/></br>
Post
<input type="text"name="post">
<br/></br>
Mobile
<input type="text"name="mobile">
<br/></br>
Gender
<input type="radio" name="gender" value="male"/>Male
<input type="radio" name="gender" value="female"/>Female
<br/></br>
Dob
<input type="date"name="dob">
<br/></br>
Photo
<input type="file" name="file"/>
<br/>
<br/>
Address
<textarea name="address"></textarea>
<input type="submit" value="Add">
<br/></br>
</form>
<div class="row">
	<div class="col-sm-12">
	<table class="table table-borderd text-white">
	<tr>
	<th>s.no</th>
	<th>Name</th>
	<th>image</th>
	<th>Date</th>
	</tr>
	<?php
	$a=1;
	while($row=mysqli_fetch_array($res))
	{
		?>
		<tr>
		<td><?php echo $a;?></td>
		<td><?php echo $row['name']?></td>
		<td><img src="nonteach_upload/<?php echo $row['photo'];?>"height="150px"width="150px"/></td>
		<td><?php echo $row['date'];?></td>
		</tr>
		
		<?php
		$a++;
		
	}
	?>
		
	</table>
	
	</div>
	
	</div>
	</div>
  </body>
</html>