<?php 
    // Include config file
     include("include\session.php");
     require_once "include\config.php";
     $baseurl = "http://".$_SERVER['SERVER_NAME']."/";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Jobs</title>
    <link rel="stylesheet" href="asset\css\adminhome.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    <style type="text/css">
        .wrapper{
            width: 1200px;
            margin: 0 auto;
        }
        .page-header h2{
            margin-top: 0;
        }
        table tr td:last-child a{
            margin-right: 15px;
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>
<body>
    <div class="imgcontainer">
            <img width ="80px" src="asset\image\avtarimage.jpg" alt="Avatar" class="avatar"><h4>Welcome <?php echo $login_session; ?></h4> 
         </div> 
      <?php include("header.php"); ?>
      <div style="background-color:rgba(100,200,255,0.5);" align="center">
    <form action="uploading.php" method="post" enctype="multipart/form-data">
        <h2>Image Uploading Section | <a href="show.php" >Veiw All Image</a> </h2><br><br>
        <table>                             
        <tr><td height="70" width="100">Title</td><td><input type="text" autocomplete="off" required="required" name="ntitle" class="resizedTextbox"><br><br></td></tr>
        <tr><td height="70" width="100">Type</td><td><select name="ntype" id="ntype"><option vlalue="Banner">Banner</option><option vlalue="Logo">Logo</option></select><br><br></td></tr>
        <tr><td colspan="2"><input type="file" class="cck" name="sfile" id="fileName" accept="image/*"><br><br></td></tr>
        <tr><td colspan="2"><input class="cck" type="submit" name="notification" value="Upload"/></td></tr>
        </table>
</form>
</div>
</body>
</html>