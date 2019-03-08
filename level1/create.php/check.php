<!DOCTYPE html>
   <?php include 'C:\wamp64\www\CGU\dataoperator.php';?>
<html>
    <?php include 'database.php';?>
    
<head>
    
     
    <!-- Latest compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
       
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
    <table class='table table-hover table-responsive table-bordered'>
       
        <tr>
 
    <td><input name="uploads[]" type="file" multiple="multiple"/></td>
</tr>
        
        
        
        <tr>
            <td></td>
            <td>
                <input type="submit" value="Upload Image" name="submit"/>
                
            </td>
        </tr>
    </table>
</form>

<?php
 $con=mysqli_connect("localhost","root","","cgu")or die("Site is down");
if(isset($_POST['submit'])){

   
$total = count($_FILES['uploads']['name']);
$count=0;
// Loop through each file
for( $i=0 ; $i < $total ; $i++ ) {

  //Get the temp file path
  $tmpFilePath = $_FILES['uploads']['tmp_name'][$i];

  //Make sure we have a file path
  if ($tmpFilePath != ""){
    //Setup our new file path
    $temp = explode(".", $_FILES["uploads"]["name"][$i]);
    $newfilename = round(microtime(true)) . '.' . end($temp);
    $newFilePath = "uploads/" . $newfilename;
    
    //Upload the file into the temp dir
    if(move_uploaded_file($tmpFilePath, $newFilePath)) {
        $query="INSERT INTO `images` (`id`, `images`) VALUES (NULL, '$newfilename')";
        if(mysqli_query($con,$query)){
            $count++;
        }else{
            echo 'Error';
        }
      //Handle other code here
     
    }
    
  }
}
if($count==$total){
    echo 'File Moved';

}
}
?>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  
<!-- Latest compiled and minified Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
