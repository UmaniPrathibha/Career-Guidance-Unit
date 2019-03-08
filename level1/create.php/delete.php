<?php
// include database connection
include 'database.php';
 
try {
     
    // get record ID
    // isset() is a PHP function used to verify if a value is there or not
    //$cv_no=isset($_GET['cv_no']) ? $_GET['cv_no'] : die('ERROR: Record ID not found.');
 $cv_no=$_GET['cv_no'];
    // delete query
    $query = "DELETE FROM cvx WHERE cv_no = ?";
    $stmt = $con->prepare($query);
    $stmt->bindParam(1, $cv_no);
     
    if($stmt->execute()){
        // redirect to read records page and 
        // tell the user record was deleted
        header('Location: view.php?action=deleted');
    }else{
        die('Unable to delete record.');
    }
}
 
// show error
catch(PDOException $exception){
    die('ERROR: ' . $exception->getMessage());
}
?>