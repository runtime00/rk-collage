<?php
$con=mysqli_connect("localhost","root","","rk_college");
$query="select * from  tbl_commites";
$res=mysqli_query($con,$query);

session_start();
if($_SESSION['admin']=="")
{
	header("location:index.php?msg=3");
}
include("menu.php");
?>
<form  action="com_code.php" method="post">
Commite
<input type="text" name="name"/>
<br/>
<br/>
<input type="submit"value="Add"/>
</form>
<div class="row bg-danger">
	<div class="col-sm-12">
	<table class="table table-borderd text-white">
	<tr>
	<th>s.no</th>
	<th>commites name</th>
	<th>date</th>
	</tr>
	<?php
	$a=1;
	while($row=mysqli_fetch_array($res))
	{
		?>
		<tr>
		<td><?php echo $a;?></td>
		<td><?php echo $row['commities_name']?></td>
		<td><?php echo $row['created_at'];?></td>
		</tr>
		
		<?php
		$a++;
		
	}
	?>
	</table>