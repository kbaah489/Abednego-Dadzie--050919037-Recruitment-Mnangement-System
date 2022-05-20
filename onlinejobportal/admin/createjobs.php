<?php
// Include config file
include("include\session.php");
require_once "include\config.php";
$baseurl = "http://".$_SERVER['SERVER_NAME']."/";
 
// Define variables and initialize with empty values
$title = $company = $experience = $description = $opening = $location = "";
$title_err = $company_err = $experience_err = $description_err = $opening_err =  $location_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate title
    $input_title = trim($_POST["title"]);
    if(empty($input_title)){
        $title_err = "Please enter a title.";
    } else{
        $title = $input_title;
    }
    
    // Validate company
    $input_company = trim($_POST["company"]);
    if(empty($input_company)){
        $company_err = "Please enter an company.";     
    } else{
        $company = $input_company;
    }

    // Validate experience
    $input_experience = trim($_POST["experience"]);
    if(empty($input_experience)){
        $experience_err = "Please enter an experience.";     
    } else{
        $experience = $input_experience;
    }

    // Validate description
    $input_description = trim($_POST["description"]);
    if(empty($input_description)){
        $description_err = "Please enter an description.";     
    } else{
        $description = $input_description;
    }

    // Validate opening
    $input_opening = trim($_POST["opening"]);
    if(empty($input_opening)){
        $opening_err = "Please enter an opening.";     
    } else{
        $opening = $input_opening;
    }

    //  // Validate image
    // $input_image = trim($_POST["fileToUpload"]);
    // if(empty($input_image)){
    //     $image_err = "Please enter an image.";     
    // } else{
    //     $image = $input_image;
    // }

    // $target_dir = "asset/image/";
    // $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    // $uploadOk = 1;
    // $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // // Check if image file is a actual image or fake image
    // if(isset($_POST["submit"])) {
    //   $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    //   if($check !== false) {
    //     $image_err = "File is an image - " . $check["mime"] . ".";
    //     $uploadOk = 1;
    //   } else {
    //     $image_err = "File is not an image.";
    //     $uploadOk = 0;
    //   }
    // }

    // // Check if file already exists
    // if (file_exists($target_file)) {
    //   $image_err = "Sorry, file already exists.";
    //   $uploadOk = 0;
    // }

    // // Check file size
    // if ($_FILES["fileToUpload"]["size"] > 500000) {
    //   $image_err = "Sorry, your file is too large.";
    //   $uploadOk = 0;
    // }

    // // Allow certain file formats
    // if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    // && $imageFileType != "gif" ) {
    //   $image_err = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    //   $uploadOk = 0;
    // }

    // // Check if $uploadOk is set to 0 by an error
    // if ($uploadOk == 0) {
    //  $image_err = "Sorry, your file was not uploaded.";
    // // if everything is ok, try to upload file
    // } else {
    //   if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    //     $image_success =  "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    //   } else {
    //     $image_err  = "Sorry, there was an error uploading your file.";
    //   }
    // }

    //  // Validate location
    $input_location = trim($_POST["location"]);
    if(empty($input_location)){
        $location_err = "Please enter an location.";     
    } else{
        $location = $input_location;
    }
    
    // Check input errors before inserting in database
    if(empty($title_err) && empty($company_err) && empty($experience_err) && empty($description_err) && empty($opening_err)  && empty($location_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO jobs (title, company, experience,  description, opening,location) VALUES (?, ?, ?,?,?,?)";
         
        if($stmt = mysqli_prepare($con, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssssss", $param_title, $param_company, $param_experience , $param_description, $param_opening, $param_location);
            
            // Set parameters
            $param_title = $title;
            $param_company = $company;
            $param_experience = $experience;
            $param_description = $description;
            $param_opening = $opening;
            // $param_image = $target_file;
            $param_location = $location;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("location:addjobs.php");
                exit();
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($con);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
     <link rel="stylesheet" href="asset\css\adminhome.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
      <script>tinymce.init({selector:'textarea'});</script>
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
                        <h2>Add Jobs Details</h2>
                    </div>
                   
                    <p>Please fill this form and submit to add Jobs record to the database.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group <?php echo (!empty($title_err)) ? 'has-error' : ''; ?>">
                            <label>Title</label>
                            <input type="text" name="title" autocomplete="off" class="form-control" value="<?php echo $title; ?>">
                            <span class="help-block"><?php echo $title_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($company_err)) ? 'has-error' : ''; ?>">
                            <label>Company</label>
                            <input type="text" name="company" autocomplete="off" class="form-control" value="<?php echo $company; ?>">
                            <span class="help-block"><?php echo $company_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($experience_err)) ? 'has-error' : ''; ?>">
                            <label>Experience</label>
                            <input type="text" name="experience" autocomplete="off" class="form-control" value="<?php echo $experience; ?>">
                            <span class="help-block"><?php echo $experience_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($description_err)) ? 'has-error' : ''; ?>">
                            <label>Description</label>
                            <textarea type="text" name="description"  class="form-control" ><?php echo $description; ?></textarea>
                            <span class="help-block"><?php echo $description_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($opening_err)) ? 'has-error' : ''; ?>">
                            <label>Opening</label>
                            <input type="text" name="opening" autocomplete="off" class="form-control" value="<?php echo $opening; ?>">
                            <span class="help-block"><?php echo $opening_err;?></span>
                        </div>

                        <!--  <div class="form-group <?php echo (!empty($image_err)) ? 'has-error' : ''; ?>">
                            <label>Image</label>
                            <input type="text" name="image" autocomplete="off" class="form-control" value="<?php echo $image; ?>">
                            <input type="file" name="fileToUpload" id="fileToUpload">
                            <span class="help-block"><?php echo $image_err;?></span>
                        </div>
 -->
                         <div class="form-group <?php echo (!empty($location_err)) ? 'has-error' : ''; ?>">
                            <label>Location</label>
                            <input type="text" name="location" autocomplete="off" class="form-control" value="<?php echo $location; ?>">
                            <span class="help-block"><?php echo $location_err;?></span>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="addjobs.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>