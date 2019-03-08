<!DOCTYPE HTML>
  <?php include './dataoperator.php';?>
<html>
    <?php
    include 'database.php';
       
    ?>
    
<head>
    <title>l</title>
     
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
         
    
    <style>
    .m-r-1em{ margin-right:1em; }
    .m-b-1em{ margin-bottom:1em; }
    .m-l-1em{ margin-left:1em; }
    .mt0{ margin-top:0; }
    </style>
 
</head>
<body>
 
    <!-- container -->
    <div class="container">
  
        <div class="page-header">
            <h1>View CVs</h1>
        </div>
     
     
        <?php
       
$action = isset($_GET['action']) ? $_GET['action'] : "";
 
// if it was redirected from delete.php
if($action=='deleted'){
    echo "<div class='alert alert-success'>Record was deleted.</div>";
}
 
// select all data
$query = "SELECT cv_no,reg_no,cv_file,home_town,degree FROM cvx ORDER BY cv_no DESC";
$stmt = $con->prepare($query);
$stmt->execute();
 
// this is how to get number of rows returned
$num = $stmt->rowCount();
 

//check if more than 0 record found
if($num>0){
 
    // data from database will be here
    echo "<table class='table table-hover table-responsive table-bordered'>";//start table
 
    //creating our table heading
    echo "<tr>";
        echo "<th>CV NO</th>";
        echo "<th>REGISTRATION NO</th>";
        echo "<th>CV FILE</th>";
        echo "<th>HOME TOWN</th>";
        echo "<th>DEGREE</th>";
        echo "<th>ACTION</th>";
        
    echo "</tr>";
     
    // table body will be here
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    // extract row
    // this will make $row['firstname'] to
    // just $firstname only
    extract($row);
     
    // creating new table row per record
    echo "<tr>";
       echo "<td>{$cv_no}</td>";
        echo "<td>{$reg_no}</td>";
        echo "<td><a href=\"uploads/$cv_file \" target=\"_blank\"> {$cv_file}</a></td>";
        echo "<td>{$home_town}</td>";
        echo "<td>{$degree}</td>";
        echo "<td>";
           
 
            // we will use this links on next part of this post
            echo "<a href='#' onclick='delete_user({$cv_no});'  class='btn btn-danger'>Delete</a>";
        echo "</td>";
    echo "</tr>";
}
 
// end table
echo "</table>";
     
}
 
// if no records found
else{
    echo "<div class='alert alert-danger'>No records found.</div>";
}
?>
         
    </div> <!-- end .container -->
     
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
   
<!-- Latest compiled and minified Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
<!-- confirm delete record will be here -->
<script type='text/javascript'>
// confirm record deletion
function delete_user( cv_no){
     
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