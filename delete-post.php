<?php require_once('include/connection.php');?>


<?php 



if(isset($_GET['user_id'])){
  //getting the post information
  $user_id = mysqli_real_escape_string($connection,$_GET['user_id']);

  $query ="UPDATE submit SET is_deleted = 1 WHERE id = {$user_id} LIMIT 1";

  $result = mysqli_query($connection,$query);

  if($result){

    // post deleted

    header('Location:workshopdetails.php?msg=post_deleted');

  }else{
    header('Location:workshopdetails.php?err=delete_failed');
  }
  

}else{
  header('Location:workshopdetails.php');
}



?>

