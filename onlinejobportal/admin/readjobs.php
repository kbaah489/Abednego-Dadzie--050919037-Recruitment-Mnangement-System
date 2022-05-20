<?php

// Include config file
include("include\session.php");

// Check existence of id parameter before processing further
if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
    // Include config file
    require_once "include\config.php";
    
    // Prepare a select statement
    $sql = "SELECT * FROM jobs WHERE id = ?";
    
    if($stmt = mysqli_prepare($con, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        
        // Set parameters
        $param_id = trim($_GET["id"]);
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
    
            if(mysqli_num_rows($result) == 1){
                /* Fetch result row as an associative array. Since the result set contains only one row, we don't need to use while loop */
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                
                // Retrieve individual field value
                
                 $title = $row["title"];
                 $company = $row["company"];
                 $experience = $row["experience"];
                 $description = $row["description"];
                 $opening = $row["opening"];
                 // $image = $row["image"];
                 $location = $row["location"];
                 
            } else{
                // URL doesn't contain valid id parameter. Redirect to error page
                header("location: error.php");
                exit();
            }
            
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);
    
    // Close connection
    mysqli_close($con);
} else{
    // URL doesn't contain id parameter. Redirect to error page
    header("location: error.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Record</title>
     <link rel="stylesheet" href="asset\css\adminhome.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 800px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
	<div class="imgcontainer">
            <img width ="80px" src="asset\image\avtarimage.jpg" alt="Avatar" class="avatar"><h4>Welcome <?php echo $login_session; ?></h4> 
        </div> 
  <?php include("header.php"); ?>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h1>View Record</h1>
                    </div>
                    <div class="form-group">
                        <label>Title</label>
                        <p class="form-control-static"><?php echo $row["title"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Company</label>
                        <p class="form-control-static"><?php echo $row["company"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Experience</label>
                        <p class="form-control-static"><?php echo $row["experience"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <p class="form-control-static"><?php echo $row["description"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Opening</label>
                        <p class="form-control-static"><?php echo $row["opening"]; ?></p>
                    </div>
                    <!-- <div class="form-group">
                        <label>Image</label>
                        <p class="form-control-static"><?php echo $row["image"]; ?></p>
                    </div> -->
                    <div class="form-group">
                        <label>Location</label>
                        <p class="form-control-static"><?php echo $row["location"]; ?></p>
                    </div>
                   
                    <p><a href="addjobs.php" class="btn btn-primary">Back</a></p>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>