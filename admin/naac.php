<?php
$con=mysqli_connect("localhost","root","","rk_college");
$query="select * from tbl_naac";
$res=mysqli_query($con,$query);

session_start();
if($_SESSION['admin']=="")
{
header("location:index.php?msg=3");
}
include("menu.php");
?>
<form action="naac_code.php" method="post" enctype="multipart/form-data">
Session
<input type="text"name="session"/>
<br/>
<br/>
file name
<input type="file" name="image"/>
type
<select name="type">
<option value="">select type--- </option>
<option>AQAR</option>
<option>SSR</option>
</select>
<input type="submit" value="add"/>
</form>
<div class="row bg-dark">
	<div class="col-sm-12">
	<table class="table table-borderd text-white">
	<tr>
	<th>s.no</th>
	<th>Session</th>
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
		<td><?php echo $row['session']?></td>
		<td><a href="uploaded/<?php echo $row['file_name'];?>">click here to view</a></td>
		<td><?php echo $row['added_on'];?></td>
		</tr>
		
		<?php
		$a++;
		
	}
	?>
		
	</table>
