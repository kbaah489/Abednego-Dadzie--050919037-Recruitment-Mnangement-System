<?php 
 include("include\session.php");
 require_once "include\config.php";
$fetchqry = "delete from `image` where id='".$_GET['id']."'";
$result=mysqli_query($con,$fetchqry);
if($result==TRUE){ ?>
<script> 
	alert("Data deleted!!!");
			window.location = "show.php";
			 </script> <?php
}
?>