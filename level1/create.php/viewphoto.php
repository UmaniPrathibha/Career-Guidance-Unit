<!DOCTYPE HTML>
<html>
<head>
    <title>CGU UWU</title>
     
    <!-- Latest compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
         
    <!-- custom css -->
    <style>
    .m-r-1em{ margin-right:1em; }
    .m-b-1em{ margin-bottom:1em; }
    .m-l-1em{ margin-left:1em; }
    .mt0{ margin-top:0; }
    </style>
 
</head>
<body>
  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">CGU</a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="#">Home</a></li>
      <li><a href="image_upload.php">Image Upload</a></li>
      <li class="active"><a href="£">Gellery</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav> 
    <!-- container -->
    <div class="container">
  
        <div class="page-header">
            <h1>Image Gellery</h1>
        </div>
        
     <img src="uploads/1543993845.jpg" class="img-thumbnail" width="25%"><img src="uploads/1543994014.jpg" class="img-thumbnail" width="25%"><img src="uploads/1543994086.jpg" class="img-thumbnail" width="25%"><img src="uploads/1543994086.jpg" class="img-thumbnail" width="25%"><img src="uploads/1543994086.jpg" class="img-thumbnail" width="25%"><img src="uploads/1543995573.jpg" class="img-thumbnail" width="25%"><img src="uploads/1543997159.jpg" class="img-thumbnail" width="25%"><img src="uploads/1543997212.jpg" class="img-thumbnail" width="25%"><img src="uploads/1543998241.jpg" class="img-thumbnail" width="25%"><img src="uploads/1543998321.jpg" class="img-thumbnail" width="25%">        
         
    </div> <!-- end .container -->
     
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
   
<!-- Latest compiled and minified Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
<!-- confirm delete record will be here -->
<script type='text/javascript'>
// confirm record deletion
function delete_user( cv_no ){
     
    var answer = confirm('Are you sure?');
    if (answer){
        // if user clicked ok, 
        // pass the id to delete.php and execute the delete query
        window.location = 'delete.php?cv_no=' + cv_no;
    } 
}
</script>
 
</body>
</html>