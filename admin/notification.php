<?PHP
$con=mysqli_connect("localhost","root","","rk_college");
$query="select * from tbl_notification";
$res=mysqli_query($con,$query);

session_start();
if($_SESSION['admin']=="")
{
header("location:index.php?msg=3");
}
include("menu.php");
?>

<form action="not_code.php" method="post"enctype="multipart/form-data">
Notification
<input type="text" name="noti">
<br/>
<br/>
Upload Photo
<input type="file" name="file"/>
<br/>
<br/>
<input type="submit" value="Add"/>
</form>
<table border="1" align="center">
<tr>
<th>s.no</th>
<th>Notification</th>
<th>NOT Images</th>
<th>date</th>
</tr>
<?php
$a=1;
while($row=mysqli_fetch_array($res))
{
	?>
	<tr>
	<td> <?php echo $a;?></td>
	<td><?php echo $row['notification'];?></td>
	<td><img src="notification_upload/<?php echo $row['upload_file'];?>"height="200px" width="200px"/></td>   
    <td><a href="not_delete.php?id=<?php echo $row['no_id'];?>">Delete</a></td>
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
