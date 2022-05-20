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
      <div>
<table class="table table-bordered" border="2">
<tr> <td colspan="5"><center><h3>Previously Uploaded | <a href="addimage.php" >Add Image</a></td></tr>
  <tr> 
    
      <tr><center><th>Description</th><th>Banner Thumbnail</th><th>Type</th><th>Action</th></center></tr>
    <?php $fetchqry = "SELECT * FROM `image` ORDER BY time DESC"; 
    $result=mysqli_query($con,$fetchqry);
    $num=mysqli_num_rows($result);
    if($num > 0){
    while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){ ?>
        

      <tr><td><p><?php echo $row['id']; ?><?php echo $row['title'];?></p></td><td><img width="auto" src="asset/image/<?php echo $row['imagename']?>" width="450" height="200" /> </td>
      <td><?php echo $row['type']; ?></td><td width="10%"><input type="button" class="btn" value="Delete" id="button" onclick="deleteme(<?php echo $row['id']; ?>)"></td></tr>  
                
                
                                <?php
    }
    }
    ?>
  </tr>
</table>
</div>
<script language="javascript">
                function deleteme(delid) 
                {
                        window.location.href='deleteimage.php?id='+delid+'';
                        return true;
                }
                </script>
</body>
</html>