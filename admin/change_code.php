<?php
session_start();
//$email=$_SESSION['user'];
include("connection.php");
$query="select password from tbl_admin";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_array($res))
{
    $pp=$row['0'];
}
$op=$_POST['op'];
//echo $op;
$np=$_POST['np'];
//echo $np;
$cnp=$_POST['cnp'];
//echo $cnp;
if($pp==$op)
{
    if($op==$np)
    {
        echo"Your old $ new password is matched";
    }
    else if($np==$cnp)
    {
        $query3="update tbl_admin set password='$np'";
        mysqli_query($con,$query3);
        header("location:index.php");        
        
    }
    else
    {
        echo"Your new password & old password are not matched";
    }
}
else
{
    echo"Your old password is wrong";
}

?>