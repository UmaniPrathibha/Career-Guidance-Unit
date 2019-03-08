<!DOCTYPE html>

<?php
session_start();
?>
<html>
    <head>

        <title>Calculate GPA</title>
        <style>
            div:hover{

                color:whitesmoke;

                background-color: green;
                position:relative;

                border-radius: 25px ;
                font-size: 28px;
                box-shadow: 10px 10px #cccccc;

            }
            div{
                color: black;
                background-color: #cccccc;
                position:relative;
                width: 230px;
                height: 200px;
                border-radius: 25px ;
                font-size: 28px;
                box-shadow: 10px 10px black;
                padding: 25px;
                margin: 25px;     
            }


         body {
  background: #F0F0F0;
  font-size: 15px;
  color: #666;
  font-family: 'Roboto', sans-serif;
    
}   

        </style>
    </head>
    <body  >
        
        <?php
        $Faculty = $_GET["F"];

        $_SESSION["Faculty"] = $Faculty;
        
        
        ?>
    <center>
            
    <table style="background-color: #cccccc;color: #000080;position: absolute;left: 10%;font-size: 26px;top:30px;">
            <tr>
                <th><a href="GPA.php"  style="text-decoration: none;color:#000080;"> GPA</a>  |</th>
                <th><a href="FacultyGPA.php"  style="text-decoration: none;color:#000080;">Faculty  </th>
                
  
                
            </tr>
        </table>
        <h1 style="color:black;">Choose Your Degree</h1>
        <table>
            <tr>
                <th><div>
                        <img src="FC1.png" style="width:100px;height: 100px;"><br><br>
                        
                         <?php 
    $T="Animal Science";
    echo "<a href=\"LevelF.php?C=".$T." \"  style=\"text-decoration: none;color: black;\" >Animal Science</a>";
    ?>
                    </div>
                <th><div>
                        <img src="FC1.png" style="width:100px;height: 100px;"><br>
                        
                        <?php 
    $T="Aquatic Resources and Technology";
    echo "<a href=\"LevelF.php?C=".$T." \"  style=\"text-decoration: none;color: black;\" >Aquatic Resources and Technology</a>";
    ?>
                    </div>
                <th>  <div>
                        <img src="FC1.png" style="width:100px;height: 100px;"><br>
                        
                                               <?php 
    $T="Export Agriculture";
    echo "<a href=\"LevelF.php?C=".$T." \"  style=\"text-decoration: none;color: black;\" >Export Agriculture</a>";
    ?>
                    </div>

            </tr>
            <tr>
                <th>  <div>
                        <img src="FC1.png" style="width:100px;height: 100px;"><br>
                        
                                               <?php 
    $T="Palm and Latex Technology";
    echo "<a href=\"LevelF.php?C=".$T." \"  style=\"text-decoration: none;color: black;\" >Palm and Latex Technology</a>";
    ?>
                    </div>
                <th>  <div>
                        <img src="FC1.png" style="width:100px;height: 100px;"><br><br>
                       
                                               <?php 
    $T="Tea Technology";
    echo "<a href=\"LevelF.php?C=".$T." \"  style=\"text-decoration: none;color: black;\" > Tea Technology</a>";
    ?>
                    </div>
            </tr>
        </table>
    </center>

</body>
</html>

