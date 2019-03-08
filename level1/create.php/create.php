<!DOCTYPE HTML>
<html>
    <?php include 'database.php';?>
<head>

     
    <!-- Latest compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
         
</head>
<body>
 
    <!-- container -->
    <div class="container">
  
        <div class="page-header">
            <h1>Upload Your CV</h1>
        </div>
     
    
    <?php
if($_POST){
 

    
 
    try{
     
        // insert query
   
 
        // prepare query for execution
       
 
        // posted values
        $regno=htmlspecialchars(strip_tags($_POST['registrationno']));
        $pdf=!empty($_FILES["pdf"]["name"])
        ? sha1_file($_FILES['pdf']['tmp_name']) . "-" . basename($_FILES["pdf"]["name"])
        : "";
         $cv=htmlspecialchars(strip_tags($pdf));
        $ho=htmlspecialchars(strip_tags($_POST['hometown']));
        $degree=htmlspecialchars(strip_tags($_POST['degree']));
        $query = "INSERT INTO cvx ( reg_no,cv_file,home_town,degree )
   VALUES
   ( '$regno','$cv','$ho','$degree' )";
        $stmt = $con->prepare($query);
 
        // bind the parameters
        $stmt->bindParam(':REGISTRATION NO', $regno);
        $stmt->bindParam(':CV FILE', $cv);
        $stmt->bindParam(':HOME TOWN', $ho);
        $stmt->bindParam(':DEGREE', $degree);
         
        // specify when this record was inserted to the database
        $created=date('Y-m-d H:i:s');
        $stmt->bindParam(':created', $created);
         
        // Execute the query
        if($stmt->execute()){
            echo "<div class='alert alert-success'>Record was saved.</div>";
            if($pdf){
 
    // sha1_file() function is used to make a unique file name
    $target_directory = "uploads/";
    $target_file = $target_directory . $pdf;
    $file_type = pathinfo($target_file, PATHINFO_EXTENSION);
 
    // error message is empty
    $file_upload_error_messages="";
    if(!is_dir($target_directory)){
    mkdir($target_directory, 0777, true);
}
if(empty($file_upload_error_messages)){
    // it means there are no errors, so try to upload the file
    if(move_uploaded_file($_FILES["pdf"]["tmp_name"], $target_file)){
        // it means photo was uploaded
    }else{
        echo "<div class='alert alert-danger'>";
            echo "<div>Unable to upload photo.</div>";
            echo "<div>Update the record to upload photo.</div>";
        echo "</div>";
    }
}
 
// if $file_upload_error_messages is NOT empty
else{
    // it means there are some errors, so show them to user
    echo "<div class='alert alert-danger'>";
        echo "<div>{$file_upload_error_messages}</div>";
        echo "<div>Update the record to upload photo.</div>";
    echo "</div>";
}
 
}
        }else{
            echo "<div class='alert alert-danger'>Unable to save record.</div>";
        }
         
    }
     
    // show error
    catch(PDOException $exception){
        die('ERROR: ' . $exception->getMessage());
    }
}
?>
 
<!-- html form here where the product information will be entered -->
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
    <table class='table table-hover table-responsive table-bordered'>
        <tr>
            <td>REGISTRATION NO</td>
            <td><input type='text' name='registrationno' class='form-control' /></td>
        </tr>
        <tr>
    <td>CV FILE</td>
    <td><input type="file" name="pdf" /></td>
</tr>
        <tr>
            <td>HOME TOWN</td>
            <td><input type='text' name='hometown' class='form-control' /></td>
        </tr>
        <tr>
            <td>DEGREE</td>
            <td><input type='text' name='degree' class='form-control' /></td>
        </tr>
        
        <tr>
            <td></td>
            <td>
                <input type='submit' value='Save' class='btn btn-primary' />
                
            </td>
        </tr>
    </table>
</form>
         
    </div> <!-- end .container -->
     
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  
<!-- Latest compiled and minified Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
</body>
</html>