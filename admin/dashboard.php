<?PHP
session_start();
if($_SESSION['admin']=="")
{
header("location:index.php?msg=3");
}

include("menu.php");
?>
<?php

include("footer.php");

?>