<?php
$con=mysqli_connect("localhost","root","","rk_college");
$query="select * from  tbl_contact";
$res=mysqli_query($con,$query);

session_start();
if($_SESSION['admin']=="")
{
	header("location:index.php?msg=3");
	
}
include("menu.php");
?>
<form action="contact_code.php" method="post">
fname
<input type="text" name="fname"/>
<br/>
<br/>
lname
<input type="text" name="lname"/>
<br/>
<br/>
email
<input type="email" name="email"/>
<br/>
<br/>
mobile
<input type="number" name="mobile"/>
<br/>
<br/>
message
<textarea name="message"></textarea>
<br/>
<br/>
<input type="submit" value="Add"/>
</form>
</form>
<div class="row bg-dark">
	<div class="col-sm-12">
	<table class="table table-borderd text-white">
	<tr>
	<th>s.no</th>
	<th>First name</th>
	<th>Last name</th>
	<th>Email </th>
	<th>Mobile</th>
	<th>Message</th>
	<th>date</th>
	</tr
	<?php
	$a=1;
	while($row=mysqli_fetch_array($res))
	{
		?>
		<tr>
		<td><?php echo $a;?></td>
		<td><?php echo $row['fname']?></td>
		<td><?php echo $row['lname'];?></td>
		<td><?php echo $row['email']?></td>
		<td><?php echo $row['mobile'];?></td>
		<td><?php echo $row['message']?></td>
		<td><?php echo $row['date'];?></td>
		</tr>
		
		<?php
		$a++;
		
	}
	?>
	</table>