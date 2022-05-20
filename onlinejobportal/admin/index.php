<?php 
 include("include\config.php");
  session_start();
   if($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form 
     $adminusername = '';
     $adminpassword = '';
     $adminusername = mysqli_real_escape_string($con,$_POST['uname']);
     $adminpassword = mysqli_real_escape_string($con,$_POST['psw']);

     $sql = "SELECT adminid FROM admin WHERE admin_user = '$adminusername' and admin_password = '$adminpassword'";
   	 $result = mysqli_query($con,$sql);
   	 $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

   	 $active = $row['active'];
      
     $count = mysqli_num_rows($result);
     if($count == 1) {
         $_SESSION['admin_user'] = $adminusername;
         header("location: welcome.php");
      }else {
         $error = "Your Username or Password is invalid";
      }

     
   	
   }
?>
<!DOCTYPE html>
<html>
<head>
<title>Admin</title>
<link rel="stylesheet" href="asset\css\style.css">
</head>
	<body>
		<div class="maincontainer">
		<form action="" method="post">
			<div class="imgcontainer">
		    	<img src="asset\image\avtarimage.jpg" alt="Avatar" class="avatar">
		  	</div>
		  	<div class="container">
			    <label for="uname"><b>Username</b></label>
			    <input type="text" placeholder="Enter Username" autocomplete="off" name="uname" required>

			    <label for="psw"><b>Password</b></label>
			    <input type="password" placeholder="Enter Password" autocomplete="off" name="psw" required>

			    <button type="submit">Login</button>
			    <label>
			      <input type="checkbox" checked="checked" name="remember"> Remember me
			    </label>
		    </div>
		    <div class="container" style="background-color:#f1f1f1">
			    <button type="button" class="cancelbtn">Cancel</button>
			    <!-- <span class="psw">Forgot <a href="#">password?</a></span> -->
			</div>
		</form>
		 <?php if(isset($error)){ ?>
          <div style = "font-size:16px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
          <?php } ?>
	</div>
	</body>
</html>