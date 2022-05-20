<?php	
   include("include\session.php");
?>
<html>
   <head>
      <title>Welcome Admin</title>
      <link rel="stylesheet" href="asset\css\adminhome.css">
   </head>
   
   <body>
      <div class="imgcontainer">
		    	<img width ="80px" src="asset\image\avtarimage.jpg" alt="Avatar" class="avatar"><h4>Welcome <?php echo $login_session; ?></h4> 
		  	</div> 
      <?php include("header.php"); ?>
      <img  src="asset\image\infographics2.jpg" alt="infographics" class="infographics" width="1300px">
   </body>
   
</html>