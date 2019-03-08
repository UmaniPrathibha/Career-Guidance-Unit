<?php

 include_once 'DB.php';
 $status=$_GET["status"];
 $id=$_GET["id"];
$result =mysqli_query($connect,"update businessproposal set status='$status' where proposal_id='$id'");
          
echo "<script>";
echo "window.location='viewProposal.php'";

echo "</script>";

?>