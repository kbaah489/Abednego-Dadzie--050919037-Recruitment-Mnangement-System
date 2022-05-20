<?php
   include('include\config.php');
   session_start();
   
   $user_check = $_SESSION['admin_user'];
   
   $ses_sql = mysqli_query($con,"select admin_user from admin where admin_user = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['admin_user'];
   
   if(!isset($_SESSION['admin_user'])){
      header("location:index.php");
      die();
   }
?>