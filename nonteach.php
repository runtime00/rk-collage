<?php
$con=mysqli_connect("localhost","root","","rk_college");
$query="select * from tbl_non_teacher";
$res=mysqli_query($con,$query);
?>

  <div class="row bg-dark">
	<div class="col-sm-12">
	<table class="table table-borderd text-white">
	<tr>
	<th>s.no</th>
	<th> Name</th>
	
	<th>pic</th>
	<th>Date</th>
	
	</tr>
	<?php
	while($row=mysqli_fetch_array($res))
	{
		?>
		<tr>
		<td><?php echo $row['non_id']?></td>
		<td><?php echo $row['name']?></td>
		
		<td><img src="admin/nonteach_upload/<?php echo $row['photo'];?>"height="150px"width="150px"/></td>
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