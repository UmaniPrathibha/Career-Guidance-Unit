<?php
include_once 'DB.php';

$file=$_FILES["proposal"]["tmp_name"];
$name=$_FILES["proposal"]["name"];
$path="uploads/".$name;
move_uploaded_file($file, $path);


     $id=0;
     $status="pending";
        $_reg=$_POST["RN"];
       // $_sname=$_POST["name"];
       
        $_ptitle=$_POST["PT"];
        $_description=$_POST["pdescription"];
       // $_proposal=$_POST["pdf"];
        
    $result =mysqli_query($connect,"insert into businessproposal values('$id','$_ptitle','$_reg','$path','$status','$_description')");

if($result){
    
    echo "<script>";
    echo "alert('Successfully Uploaded');";
echo "window.location='startups.php'";

echo "</script>";
}else{
    
    echo "<script>";
    echo "alert('Something wrong.Pleas Try Again!');";
echo "window.location='startups.php'";

echo "</script>";
}



?>