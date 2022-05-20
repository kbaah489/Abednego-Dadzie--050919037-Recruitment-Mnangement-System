<?php 
// Include config file
 include("include\session.php");
 require_once "include\config.php";
 $_SESSION['firstname'] = "Techone";
if(isset($_POST['notification'])){
	$title = $_POST['ntitle'];
	$type = $_POST['ntype'];
	$uploadtime = date("Y-m-d H:i:s");
	$cname = $_FILES['sfile']['name'];
}
if(!empty($cname))	{	
				$tname = $_FILES['sfile']['tmp_name'];
				$tname = $_FILES['sfile']['tmp_name'];
				$size	= $_FILES['sfile']['size'];
				$name = $_SESSION['firstname'].date("his");
				$fext = pathinfo($cname, PATHINFO_EXTENSION);
				$fire = pathinfo($name,PATHINFO_FILENAME);
				$savename = $fire.".".$fext;
				$finalfile = "asset/image/$savename";
														}
		if(!empty($cname)){
	 if($size < 500000){
				$check = move_uploaded_file($tname,$finalfile);
				if($check){
$qry1 = "INSERT INTO `image`(`title`, `imagename`, `type`,`time`) VALUES ('$title','$savename','$type','$uploadtime')";
$test =	mysqli_query($con,$qry1);
if($test = TRUE){?>
				<script>
				if(confirm("File Uploaded Sucessfully!!!"))
				{	document.location = 'show.php';
				}
				else
				{
					document.location = 'show.php';
				}
				</script>
				<?php
											}
					else {?>
					<script>
					if(confirm("file is not uploaded"))
			
				{	document.location = 'show.php';
				}
				else
				{
					document.location = 'show.php';
				}
				</script>
				<?php
													//echo "file is not uploaded";
				}
			}
	 }
	 else{
		 echo "file size is too large";	
	 }
 }else
 {	
	echo "Please select an file to upload";
 }												
 ?>