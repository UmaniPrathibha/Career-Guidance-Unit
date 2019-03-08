<?php

require("DB.php");

echo $description= $_POST['vdescription'];
echo $link= $_POST['vlink'];


$id=0;


$result=mysqli_query($connect, "insert into utube values('$id','$description','$link')");
////$result = 
//header("location:addvideo.php?");
//
if ($result) {
//
 echo "<script>";
 echo "alert('Successfully Added');";
echo "window.location='addvideo.php'";
//
 echo "</script>";
} else {
echo "<script>";
echo "alert('Something wrong.Pleas Try Again!');";
 //echo "window.location='addvideo.php'";
   echo "</script>";
}
?>
