<?php
$con=mysqli_connect("localhost","root","","rk_college");
$query="select * from tbl_teacher";
$res=mysqli_query($con,$query);

session_start();
if($_SESSION['admin']=="")
{
header("location:index.php?msg=3");
}
include("menu.php");
?>
<h1>Add Teacher</h1>
<form action="teach_code.php" method="post" enctype="multipart/form-data">
Teacher Name
<input type="text"name="name"/>
<br/>
<br/>
Higher Qualification
<select name="qualification">
<option value="">select qualification--- </option>
<option>PHD</option>
<option>MCA</option>
<option>PG</option>
</select>
<br/>
<br/>
Department
<select name="department">
<option value="">select department--</option>
<option>Maths Department</option>
<option>Physics Department</option>
<option>Chemistry Department</option>
<option>Biology Department</option>
</select>
<br/>
<br/>
Gender
<input type="radio" name="gender" value="male"/>Male
<input type="radio" name="gender" value="female"/>Female
<br/>
<br/>
Mobile
<input type="number" name="number"/>
<br/>
<br/>
Email
<input type="email" name="email">
<br/>
<br/>
DOB
<input type="date" name="dob"/>
<br/>
<br/>
Photo
<input type="file"name="file">
<br/>
<br/>
Address
<textarea name="address"></textarea>
<br/>
<br/>
<input type="submit"value="Add">
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
		<td><img src="teach_upload/<?php echo $row['photo'];?>"height="150px"width="150px"/></td>
		<td><?php echo $row['date'];?></td>
		</tr>
		
		<?php
		$a++;
		
	}
	?>
		
	</table>
