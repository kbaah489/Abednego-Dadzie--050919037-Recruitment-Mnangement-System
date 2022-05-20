<?php
   require_once('include\config.php');
   session_start();
   if(isset($_SESSION['username'])){
   $user_check = $_SESSION['username'];
   
   $ses_sql = mysqli_query($con,"select email from registered_users where email = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['email'];
}
   
   // if(!isset($_SESSION['username'])){
   //    header("location:index.php");
   //    //die();
   // }
?>