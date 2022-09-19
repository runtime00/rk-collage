<?php
$con=mysqli_connect("localhost","root","","rk_college");
$query="select * from tbl_teacher";
$res=mysqli_query($con,$query);
?>


	<div class="row bg-dark">
	<div class="col-sm-12">
	<table class="table table-borderd text-white">
	<tr>
	<th>s.no</th>
	<th> Name</th>
	<th>Qualification</th>
	<th>Department</th>
	<th>mobile</th>
	<th>pic</th>
	<th>Date</th>
	
	</tr>
	<?php
	while($row=mysqli_fetch_array($res))
	{
		?>
		<tr>
		<td><?php echo $row['t_id']?></td>
		<td><?php echo $row['name']?></td>
		<td><?php echo $row['qualification']?></td>
		<td><?php echo $row['department']?></td>
		<td><?php echo $row['mobile']?></td>
		<td><img src="admin/teach_upload/<?php echo $row['photo'];?>"height="150px"width="150px"/></td>
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