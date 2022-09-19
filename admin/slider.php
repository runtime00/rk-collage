<?php
$con=mysqli_connect("localhost","root","","rk_college");
$query="select * from tbl_slider";
$res=mysqli_query($con,$query);

session_start();
if($_SESSION['admin']=="")
{
header("location:index.php?msg=3");
}

include("menu.php");
?>
<form action="slider_code.php" method="post" enctype="multipart/form-data">
Text1
<input type="text" name="text1"/>
<br/>
<br/>
Text2
<input type="text" name="text2"/>
<br/>
<br/>
pic
<input type="file"name="pic"/>
<br/>
<br/>
<input type="submit" value="Add"/>
</form>
<div class="row">
	<div class="col-sm-12">
	<table class="table table-borderd text-white">
	<tr>
	<th>s.no</th>
	<th>text1</th>
	<th>Text2</th>
	<th>slider pic</th>
	<th>Date</th>
	</tr>
	<?php
	$a=1;
	while($row=mysqli_fetch_array($res))
	{
		?>
		<tr>
		<td><?php echo $a;?></td>
		<td><?php echo $row['text1']?></td>
		<td><?php echo $row['text2']?></td>
		<td><img src="slider_upload/<?php echo $row['pic'];?>"height="150px"width="150px"/></td>
		<td><?php echo $row['date'];?></td>
		</tr>
		
		<?php
		$a++;
		
	}
	?>
		
	</table>