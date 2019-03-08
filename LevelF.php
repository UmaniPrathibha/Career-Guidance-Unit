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


        </style>
    </head>
    <body  >
            <table style="background-color: #cccccc;color: #000080;position: absolute;left: 10%;font-size: 26px;top:30px;">
            <tr>
                <th><a href="GPA.php"  style="text-decoration: none;color:#000080;"> GPA</a>  |</th>
                <th><a href="FacultyGPA.php"  style="text-decoration: none;color:#000080;">Faculty  </th>
                
  
                
            </tr>
        </table>
        <?php
        $Course = $_GET["C"];
     
        $_SESSION["Course"] = $Course;
      If($Course=="Animal Science"){
          $SC="ANS";
          $_SESSION["ShortC"] = $SC;
      }else If($Course=="Computer Science and Technology"){
          $SC="CST";
          $_SESSION["ShortC"] = $SC;
      }else If($Course=="Industrial Infromation Technology"){
          $SC="IIT";
          $_SESSION["ShortC"] = $SC;
      }else If($Course=="Mineral Resources and Technology"){
          $SC="MRT";
          $_SESSION["ShortC"] = $SC;
      }else If($Course=="Science and Technology"){
          $SC="SCT";
          $_SESSION["ShortC"] = $SC;
      }else If($Course=="Aquatic Resources and Technology"){
          $SC="AQT";
          $_SESSION["ShortC"] = $SC;
      }else If($Course=="Export Agriculture"){
          $SC="EAG";
          $_SESSION["ShortC"] = $SC;
      }else If($Course=="Palm and Latex Technology"){
          $SC="PLT";
          $_SESSION["ShortC"] = $SC;
      }else If($Course=="Tea Technology"){
          $SC="TEA";
          $_SESSION["ShortC"] = $SC;
      }else If($Course=="Hospitality Tourism And Event Management"){
          $SC="HTE";
          $_SESSION["ShortC"] = $SC;
      }else If($Course=="Entrepreneurship And Management"){
          $SC="ENM";
          $_SESSION["ShortC"] = $SC;
      }else If($Course=="Engineering Technology"){
          $SC="BET";
          $_SESSION["ShortC"] = $SC;
      }else If($Course=="Bio-systems Technology"){
          $SC="BST";
          $_SESSION["ShortC"] = $SC;
      }
        ?>
    <center>
        <h1 style="color:black;">Choose Your Level</h1>
        <table>
            <tr>
                <th><div>
                        <img src="FC1.png" style="width:100px;height: 100px;"><br><br>

                        <?php
                        $Y = "100";
                        echo "<a href=\"SemesterF.php?L=" . $Y . " \"  style=\"text-decoration: none;color: black;\" >100 Level</a>";
                        ?>
                    </div>
                <th><div>
                        <img src="FC1.png" style="width:100px;height: 100px;"><br><br>
                        <?php
                        $Y = "200";
                        echo "<a href=\"SemesterF.php?L=" . $Y . " \"  style=\"text-decoration: none;color: black;\" >200 Level</a>";
                        ?>
                    </div>
                <th>  <div>
                        <img src="FC1.png" style="width:100px;height: 100px;"><br><br>
                        <?php
                        $Y = "300";
                        echo "<a href=\"SemesterF.php?L=" . $Y . " \"  style=\"text-decoration: none;color: black;\" >300 Level</a>";
                        ?>
                    </div>
                <th>  <div>
                        <img src="FC1.png" style="width:100px;height: 100px;"><br><br>
                        <?php
                        $Y = "400";
                        echo "<a href=\"SemesterF.php?L=" . $Y . " \"  style=\"text-decoration: none;color: black;\" >400 Level</a>";
                        ?>
                    </div>
            </tr>
        </table>
    </center>

</body>
</html>
