<?php require_once('include/connection.php'); ?>
<?php 

if(isset($_POST['submit'])){

  $title = $_POST['title'];
  $decription = $_POST['description'];
  $date = $_POST['date'];
  $time = $_POST['time'];
  //$img = $_POST['img'];
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


  $query = "INSERT INTO news(";
  $query .= "title, description, date, time, image";
  $query .= ") VALUES (";
  $query .="'{$title}','{$decription}','{$date}','{$time}','{$imageDestination}'";
  $query .=")";

  $result = mysqli_query($connection,$query);

  if($result){

    header('Location:dataentryoperatorhome.php');

  }else{
    echo "failed";
  }







  



  








}





 ?>






 


<html lang="en">
<head>
<style>
body
{

	background: url(img/s.jpg);
background-size: cover;
}
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
  background: #f4f7f8;
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
      <h1 style="color:#ff0000;"> News Center</h1>

    </div>
    <form action="newspost.php" method="post" enctype="multipart/form-data">
  
        <label for="name">News Title:</label>
		
        <input type="text"  name="title" placeholder="Enter the workshop title">
		<label for="name">News Description:</label>
		
        <input type="text"  name="description" placeholder="Enter the description">
        
        <label for="name">Date:</label>
        <input type="date"  name="date" placeholder="Enter the Date">
	
         <label for="name">Time:</label>
        <input type="time"  name="time" placeholder="Enter the time">
        
        <label for="name">Image</label>
        <input type="file"  name="img" placeholder="Enter the image">
       


<br><br>
                <button type="submit" name="submit">Add</button>
                
    </form>
  </div>
    
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.2.0/js/bootstrap.min.js'></script>

  

    <script  src="js/index.js"></script>

</body>

</html>



