<?Php
include("admin/connection.php");
$query="select * from tbl_commites";
$res=mysqli_query($con,$query);
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="accect/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" />
  <link rel="shortcut icon" href="accect/images/ncc1-nobg.png" type="image/x-icon">
  <link rel="stylesheet" href="accect/css/style.css">
 
 
  <script src="accect/js/bootstrap.bundle.js"></script>
  </head>
  <div class="container">
  <div class="row">
  <div class="col-sm-12">
  
  <div class="accordion accordion-flush" id="accordionFlushExample">
  <?php
  
  
  
  while($row=mysqli_fetch_array($res)){
	  $cc_id=$row['cc_id'];
	  //echo $cc_id;
	  $query2="select * from tbl_commmites_member where cc_id='$cc_id'";
	  $res2 = mysqli_query($con, $query2);
	  
  ?>
  
  
  
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne<?php echo $row['cc_id'];?>" aria-expanded="false" aria-controls="flush-collapseOne">
        <?php echo $row['commities_name'];?>
      </button>
    </h2>
    <div id="flush-collapseOne<?php echo $row['cc_id'];?>" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
	  <table class="table table-bordered">
	  <tr>
	  <th>S.no</th>
	  <th>Name</th>
	  <th>Designation</th>
	  <th>Department</th>
	  </tr>
	  <?php
	  $a = 1;
	  while($row2=mysqli_fetch_array($res2)){
		  ?>
	  <tr>
	  <td><?php echo $a;?></td>
	  <td><?php echo $row2['mem_name'];?></td>
	  <td><?php echo $row2['mem_deg'];?></td>
	  <td><?php echo $row2['dept_id'];?></td>
	  </tr>
	  <?php
	  $a++;
  }
	  ?>
	  </table>
	  </div>
    </div>
  </div>
  <?php
  }
  ?>
</div>
  
  
  
  </div>
  </div>
  </div>