<?php

 include_once 'DB.php';
 //$status=$_GET["status"];
 $id=$_GET["id"];
$result =mysqli_query($connect,"delete from businessproposal where proposal_id='$id'");
          
echo "<script>";
echo "window.location='viewProposal.php'";

echo "</script>";

?>