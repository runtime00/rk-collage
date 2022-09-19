<?php
$con=mysqli_connect("localhost","root","","rk_college");
$query="select * from tbl_academic where type='Time Table'";
$res=mysqli_query($con,$query);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="accect/css/style.css"/>
    	<link rel="stylesheet" href="accect/css/bootstrap.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
	<script src="accect/js/bootstrap.bundle.js"></script>
  </head>
  <body>
  
  
  <div class="container-fluid">
    <!-- wrapper container start-->
    <!-- top bar start -->
    <div class="row p-1 bg-danger text-white">
      <div class="col-sm-4"><i class="fa-solid fa-phone-flip"></i>Call Us :<a href="tel:9876543210" class="text-light">+9100000000</a>  </div>
      <div class="col-sm-3"><i class="fa-solid fa-envelope"></i>Mail Us:<a href="mailto: gpl@gmail.com" class="text-light">Rk@gmail.com</a></div>
      <div class="col-sm-5 text-end"> <i class="fa-solid fa-location-pin"></i>Ram Krishna College Madhubani,Bihar
        </div>
    </div>
    <!-- top bar end -->

    <!--college logo name and social media icon start  -->
    <div class="container">
      <div class="row">
        <div class="col-sm-3 my-logo" align="left">
          <img src="accect/images/logo.jpg" height="120px" width="120px" alt="">
        </div>

        <div class="col-sm-6 pt-4" align="center">
          <h3>Ram Krishna College Madhubani,Bihar</h3>
          <p><u>Affiliated with Lalit Narayan Mithila University,Darbhanga</u></p>
          <p>Bihar,India</p>
		  <hr color="red"/>
        </div>
        <div class="col-sm-3 ps-1">
          <ul class="s-icon">
            <li><i class="fa-brands fa-facebook"></i></li>
            <li> <i class="fa-brands fa-whatsapp"></i></li>
            <li><i class="fa-brands fa-instagram"></i></li>
            <li><i class="fa-brands fa-twitter"></i></li>
          </ul>
        </div>
      </div>
    </div>
    
  <!-- breadcrumb start -->
  <div class="row breadcrumb-outer">
    <div class="col-sm-12 breadcrumb-inner text-light pt-5">
      <div class="my-div">
       <center> <h1>Time Table</h1></center>
        
        </div>
    </div>
  </div>
  <!-- breadcrumb end -->
  
  <div class="row bg-danger">
	<div class="col-sm-12">
	<table class="table table-borderd text-white">
	<tr>
	<th>s.no</th>
	<th>Scssion</th>
	<th>File</th>
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
		<td><a href="admin/acadmic_upload/<?php echo $row['file_name'];?>">click here to view</a></td>
		<td><?php echo $row['added_on'];?></td>
		</tr>
		
		<?php
		$a++;
		
	}
	?>
		
	</table>
  </body>
</html>
