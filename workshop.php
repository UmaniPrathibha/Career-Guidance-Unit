<?php require_once('include/connection.php');
 include './dataoperator.php';

?>


<?php 

if(isset($_POST['submit'])){

  $title = $_POST['workshop'];
  $decription = $_POST['description'];
  $place = $_POST['place'];
  $sdate = $_POST['sdate'].' '.$_POST['stime'];
  $edate = $_POST['edate'].' '.$_POST['etime'];
  $conductor = $_POST['conductor'];
  
  $image=$_FILES['img'];
  
  $imageName = $_FILES['img']['name'];
  $imageTmpName = $_FILES['img']['tmp_name'];
  $imageSize = $_FILES['img']['size'];
  $imageError = $_FILES['img']['error'];
  $imageType = $_FILES['img']['type'];
  
  $imageExt = explode('.', $imageName);
  $imageActualExt = strtolower(end($imageExt));
  
  $allowed = array('jpg','jpeg','png','pdf');
  
  
  if(in_array($imageActualExt, $allowed)){
      if($imageError===0){
          
          if($imageSize<1000000){
              $imageNameNew = uniqid('',true).".".$imageActualExt;
              $imageDestination ='uploads/'.$imageNameNew;
              move_uploaded_file($imageTmpName, $imageDestination);
              
          }else{
              echo "file is too big";
          }
          
          
      }else{
          echo "There was an error uploading";
      }
      
      
  }else{
      echo "you cannot upload";
  }
  
  
  
 


  //$workshop=mysqli_real_escape_string($connection,$_POST['workshop']);

  //$place=mysqli_real_escape_string($connection,$_POST['place']);

  //$date=mysqli_real_escape_string($connection,$_POST['date']);

  //$time=mysqli_real_escape_string($connection,$_POST['time']);

 // $conduct=mysqli_real_escape_string($connection,$_POST['conductor']);


  $query = "INSERT INTO submit(";
  $query .= "title, description, start_event,end_event, place,conduct,image";
  $query .= ") VALUES (";
  $query .="'{$title}','{$decription}','{$sdate}','{$edate}','{$place}','{$conductor}','{$imageDestination}'";
  $query .=")";

  $result = mysqli_query($connection,$query);

  if($result){

    header('Location:HomeHeader.php');

  }else{
    echo "failed";
  }







  



  








}





 ?>



 


<html lang="en">
<head>
<style>

#body_header
{

	width:auto;
	margin:0px auto;
	text-align:center;
	font-size:25px;
}
form {
  max-width: 300px;
  margin: 10px auto;
  padding: 10px 20px;
  background: #cccccc;
  border-radius: 8px;
}

h1 {
  margin: 0 0 30px 0;
  text-align: center;
}

input[type="text"],
input[type="password"],
input[type="date"],
input[type="datetime"],
input[type="email"],
input[type="number"],
input[type="search"],
input[type="tel"],
input[type="time"],
input[type="url"],
textarea,
select {
  background: rgba(255,255,255,0.1);
  border: none;
  padding: 8px;
  font-size: 16px;
  height: auto;
  margin: auto;
  outline: 0;
  width: 100%;
  background-color: #e8eeef;
  color: black;
  box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
  margin-bottom: 30px;
}

input[type="radio"],
input[type="checkbox"]

{
  margin: 0 4px 8px 0;
}

select {
  padding: 6px;
  height: 32px;
  border-radius: 2px;
}

button {
  padding: 19px 39px 18px 39px;
  color: #FFF;
  background-color: #ff9900;
  font-size: 18px;
  text-align: center;
  font-style: normal;
  border-radius: 5px;
  width: 100%;
  border: 1px solid #ff9900;
  border-width: 1px 1px 3px;
  box-shadow: 0 -1px 0 rgba(255,255,255,0.1) inset;
  margin-bottom: 10px;
}
button:hover{
  color: #FFF;
  background-color: #009933;
border: 1px solid #4bc970;
  border-width: 1px 1px 3px;
}
fieldset {
  margin-bottom: 30px;
  border: none;
}

legend {
  font-size: 1.4em;
  margin-bottom: 10px;
}

label {
  display: block;
  margin-bottom: 8px;
}

label.light {
  font-weight: 300;
  display: inline;
}

.number {
  background-color:#009900;
  color: #fff;
  height: 30px;
  width: 30px;
  display: inline-block;
  font-size: 0.8em;
  margin-right: 4px;
  line-height: 30px;
  text-align: center;
  text-shadow: 0 1px 0 rgba(255,255,255,0.2);
  border-radius: 100%;
}



  form {
    max-width: 480px;
  }



</style>
<link rel='stylesheet' href='http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.2.0/css/bootstrap.min.css'>

</head>


<body>
  <div id="container">
    <!--This is a division tag for body container-->
    <div id="body_header">
      <!--This is a division tag for body header-->
      <h1 style="color:black;"> Student Workshop Management</h1>

    </div>
    <form action="workshop.php" method="post" enctype="multipart/form-data">
  
        <label for="name">Workshop Title:</label>
		<input type="text"  name="workshop" placeholder="Enter workshop title">
                
                 <label for="name">Workshop Description:</label>
		<input type="text"  name="description" placeholder="Enter description">
                
    
                
                <label for="place_for">Place for:</label>
                
                <select id="place_for" name="place" required>

                        <option value="mcl">MCL</option>
                        <option value="mlt">MLT</option>
                        <option value="c_block">C_BLOCK</option>
                        <option value="other">D_BLOCK</option>
                         <option value="other">E_BLOCK</option>

                    </select>
                
                <br>
                <br>
                <br>
              
       
        <label for="name">Start Date:</label>
        <input type="date"  name="sdate" placeholder="Enter the Date">
        
         <label for="name"> End Date:</label>
        <input type="date"  name="edate" placeholder="Enter the Date">
	
         <label for="name">Start Time:</label>
        <input type="time"  name="stime" placeholder="Enter the time">
        
          <label for="name">End Time:</label>
        <input type="time"  name="etime" placeholder="Enter the time">
        
        <label for="name">Organize By:</label>
        <input type="text"  name="conductor" placeholder="Enter the organizer">
        
         <label for="name">Image</label>
        <input type="file"  name="img" placeholder="Enter the image">
        <br>
        <label for="name">Send a tweet:</label>
       <a href="https://twitter.com/intent/tweet?screen_name=h_rathnakumara&ref_src=twsrc%5Etfw" class="twitter-mention-button" data-show-count="false">Tweet to @h_rathnakumara</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>





<br><br>
                <button type="submit" name="submit">Add</button>
                
                
    </form>
  </div>
    
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.2.0/js/bootstrap.min.js'></script>

  

    <script  src="js/index.js"></script>

</body>

</html>


<?php include './footer.php';?>


