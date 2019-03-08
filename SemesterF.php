<!DOCTYPE html>

<?php
session_start();
?>
<html>
    <head>

        <title>Calculate GPA</title>
        <style>
                         body {
  background: #F0F0F0;
  font-size: 15px;
  color: #666;
  font-family: 'Roboto', sans-serif;
    
}   
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


        </style>
    </head>
    <body  >
            <table style="background-color: #cccccc;color: #000080;position: absolute;left: 10%;font-size: 26px;top:30px;">
            <tr>
                <th><a href="GPA.php"  style="text-decoration: none;color:#000080;"> GPA</a>  |</th>
                <th><a href="FacultyGPA.php"  style="text-decoration: none;color:#000080;">Faculty  |</th>
                
                <th><a href="LevelF.php"  style="text-decoration: none;color:#000080;">Level  </th>
                
            </tr>
        </table>
           <?php
        $Level = $_GET["L"];

        $_SESSION["Level"] = $Level;
   
        ?>
    <center>
        <h1 style="color:black;">Choose Your Semester</h1>
        <table>
            <tr>
                <th><div>
                        <img src="FC1.png" style="width:100px;height: 100px;"><br><br>
                        
                         <?php
                        $SM = "1";
                        echo "<a href=\"FinalGpa.php?S=" . $SM . " \"  style=\"text-decoration: none;color: black;\" >Semester 1</a>";
                        ?>
                    </div>
                <th><div>
                        <img src="FC1.png" style="width:100px;height: 100px;"><br><br>
                        <?php
                        $SM = "2";
                        echo "<a href=\"FinalGpa.php?S=" . $SM . " \"  style=\"text-decoration: none;color: black;\" >Semester 2</a>";
                        ?>
                    </div>
                
            </tr>
        </table>
    </center>

</body>
</html>


