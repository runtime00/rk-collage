<?php
$con=mysqli_connect("localhost","root","","rk_college");
$query="select * from tbl_teacher";
$res=mysqli_query($con,$query);
?>
<table border="1" align="center">
<tr>
<th>s.no</th>
<th>teacher_name</th>
<th>teacher_photo</th>
<th>date</th>
</tr>
<?php
$a=1;
while($row=mysqli_fetch_array($res))
{
	?>
	<tr>
	<td> <?php echo $a;?></td>
	<td><?php echo $row['name'];?></td>
	<td><img src="teach_upload/<?php echo $row['photo'];?>"height="200px" width="200px"/></td>   
	<td><?php echo $row['date'];?></td>
	</tr>
	<?php
	$a++;
}
?>
</table>