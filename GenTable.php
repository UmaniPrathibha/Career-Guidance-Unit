<!DOCTYPE html>
<?php
session_start();

include './dataoperator.php';
?>

<?php
$ser = "localhost";
$user = "root";
$pass = "";
$db = "CGU";
$con = mysqli_connect($ser, $user, $pass) or die("connection failed");
$selected = mysqli_select_db($con, $db) or die("Colud not selected database");
?>
<?php
if (isset($_POST["sub"])) {
    $C = $_POST["Course"];
    $_SESSION["Course"] = $C;
    $L = $_POST["Level"];
    $_SESSION["Level"] = $L;
    $S = $_POST["Semester"];
    $_SESSION["Semester"] = $S;
    $ComSub = $_POST["CS"];
    $_SESSION["CS"] = $ComSub;
    $OpSub = $_POST["OS"];
    $_SESSION["OS"] = $OpSub;
    $DOS = $_POST["OD"];
    $_SESSION["OD"] = $DOS;
    $Q1 = "select * from iit where Level='$L' and Semester='$S'";
    $Q2 = "select * from cst where Level='$L' and Semester='$S'";
    $Q3 = "select * from mrt where Level='$L' and Semester='$S'";
    $Q4 = "select * from sct where Level='$L' and Semester='$S'";
    $Q5 = "select * from hte where Level='$L' and Semester='$S'";
    $Q6 = "select * from enm where Level='$L' and Semester='$S'";
    $Q7 = "select * from ans where Level='$L' and Semester='$S'";
    $Q8 = "select * from aqt where Level='$L' and Semester='$S'";
    $Q9 = "select * from eag where Level='$L' and Semester='$S'";
    $Q10 = "select * from plt where Level='$L' and Semester='$S'";
    $Q11= "select * from tea where Level='$L' and Semester='$S'";
    $Q12 = "select * from bst where Level='$L' and Semester='$S'";
    $Q13 = "select * from bet where Level='$L' and Semester='$S'";
    if ($C == "IIT") {
        $result = mysqli_query($con, $Q1);
        while ($row = mysqli_fetch_assoc($result)) {
            $Check1 = $row["Level"];
            $Check2 = $row["Semester"];
        }
        if ($Check1 == $L && $Check2 == $S) {
            echo '<script language="javascript">';
            echo 'alert("Sorry Already Have Records ")';
            echo '</script>';
        }else{
         
                echo '<script language="javascript">';
               
                echo "window.location='GpaTable.php' ";
                echo '</script>';
        }
    } else if ($C == "CST") {
        $result = mysqli_query($con, $Q2);
        while ($row = mysqli_fetch_assoc($result)) {
            $Check1 = $row["Level"];
            $Check2 = $row["Semester"];
        }
        if ($Check1 == $L && $Check2 == $S) {
            echo '<script language="javascript">';
            echo 'alert("Sorry Already Have Records ")';
            echo '</script>';
        }else{
               echo '<script language="javascript">';
               
                echo "window.location='GpaTable.php' ";
                echo '</script>';
              
        }
    } else if ($C == "MRT") {
        $result = mysqli_query($con, $Q3);
        while ($row = mysqli_fetch_assoc($result)) {
            $Check1 = $row["Level"];
            $Check2 = $row["Semester"];
        }
        if ($Check1 == $L && $Check2 == $S) {
            echo '<script language="javascript">';
            echo 'alert("Sorry Already Have Records ")';
            echo '</script>';
        }else{
             echo '<script language="javascript">';
               
                echo "window.location='GpaTable.php' ";
                echo '</script>';
        }
    } else if ($C == "SCT") {
         $result =mysqli_query($con, $Q4);
        while ($row = mysqli_fetch_assoc($result)) {
            $Check1 = $row["Level"];
            $Check2 = $row["Semester"];
        }
        if ($Check1 == $L && $Check2 == $S) {
            echo '<script language="javascript">';
            echo 'alert("Sorry Already Have Records ")';
            echo '</script>';
        }else{
               echo '<script language="javascript">';
               
                echo "window.location='GpaTable.php' ";
                echo '</script>';
        }
    } else if ($C == "HTE") {
         $result =mysqli_query($con, $Q5);
        while ($row = mysqli_fetch_assoc($result)) {
            $Check1 = $row["Level"];
            $Check2 = $row["Semester"];
        }
        if ($Check1 == $L && $Check2 == $S) {
            echo '<script language="javascript">';
            echo 'alert("Sorry Already Have Records ")';
            echo '</script>';
        }else{
               echo '<script language="javascript">';
               
                echo "window.location='GpaTable.php' ";
                echo '</script>';
        }
    } else if ($C == "ENM") {
         $result =mysqli_query($con, $Q6);
        while ($row = mysqli_fetch_assoc($result)) {
            $Check1 = $row["Level"];
            $Check2 = $row["Semester"];
        }
        if ($Check1 == $L && $Check2 == $S) {
            echo '<script language="javascript">';
            echo 'alert("Sorry Already Have Records ")';
            echo '</script>';
        }else{
            echo '<script language="javascript">';
               
                echo "window.location='GpaTable.php' ";
                echo '</script>';
        }
    } else if ($C == "ANS") {
         $result =mysqli_query($con, $Q7);
        while ($row = mysqli_fetch_assoc($result)) {
            $Check1 = $row["Level"];
            $Check2 = $row["Semester"];
        }
        if ($Check1 == $L && $Check2 == $S) {
            echo '<script language="javascript">';
            echo 'alert("Sorry Already Have Records ")';
            echo '</script>';
        }else{
             echo '<script language="javascript">';
               
                echo "window.location='GpaTable.php' ";
                echo '</script>';
        }
    } else if ($C == "AQT") {
         $result =mysqli_query($con, $Q8);
        while ($row = mysqli_fetch_assoc($result)) {
            $Check1 = $row["Level"];
            $Check2 = $row["Semester"];
        }
        if ($Check1 == $L && $Check2 == $S) {
            echo '<script language="javascript">';
            echo 'alert("Sorry Already Have Records ")';
            echo '</script>';
        }else{
             echo '<script language="javascript">';
               
                echo "window.location='GpaTable.php' ";
                echo '</script>';
        }
    } else if ($C == "EAG") {
         $result =mysqli_query($con, $Q9);
        while ($row = mysqli_fetch_assoc($result)) {
            $Check1 = $row["Level"];
            $Check2 = $row["Semester"];
        }
        if ($Check1 == $L && $Check2 == $S) {
            echo '<script language="javascript">';
            echo 'alert("Sorry Already Have Records ")';
            echo '</script>';
        }else{
              echo '<script language="javascript">';
               
                echo "window.location='GpaTable.php' ";
                echo '</script>';
        }
    } else if ($C == "PLT") {
         $result =mysqli_query($con, $Q10);
        while ($row = mysqli_fetch_assoc($result)) {
            $Check1 = $row["Level"];
            $Check2 = $row["Semester"];
        }
        if ($Check1 == $L && $Check2 == $S) {
            echo '<script language="javascript">';
            echo 'alert("Sorry Already Have Records ")';
            echo '</script>';
        }else{
               echo '<script language="javascript">';
               
                echo "window.location='GpaTable.php' ";
                echo '</script>';
        }
    } else if ($C == "TEA") {
         $result =mysqli_query($con, $Q11);
        while ($row = mysqli_fetch_assoc($result)) {
            $Check1 = $row["Level"];
            $Check2 = $row["Semester"];
        }
        if ($Check1 == $L && $Check2 == $S) {
            echo '<script language="javascript">';
            echo 'alert("Sorry Already Have Records ")';
            echo '</script>';
        }else{
               echo '<script language="javascript">';
               
                echo "window.location='GpaTable.php' ";
                echo '</script>';
        }
    } else if ($C == "BST") {
         $result =mysqli_query($con, $Q12);
        while ($row = mysqli_fetch_assoc($result)) {
            $Check1 = $row["Level"];
            $Check2 = $row["Semester"];
        }
        if ($Check1 == $L && $Check2 == $S) {
            echo '<script language="javascript">';
            echo 'alert("Sorry Already Have Records ")';
            echo '</script>';
        }else{
               echo '<script language="javascript">';
               
                echo "window.location='GpaTable.php' ";
                echo '</script>';
        }
    } else if ($C == "BET") {
        $result = mysqli_query($con, $Q13);
        while ($row = mysqli_fetch_assoc($result)) {
            $Check1 = $row["Level"];
            $Check2 = $row["Semester"];
        }
        if ($Check1 == $L && $Check2 == $S) {
            echo '<script language="javascript">';
            echo 'alert("Sorry Already Have Records ")';
            echo '</script>';
        }else{
              echo '<script language="javascript">';
               
                echo "window.location='GpaTable.php' ";
                echo '</script>';
        }
    }

  
}
?>

<html>
    <head>

        <title>Calculate GPA</title>
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
                color: #000000;
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
    </head>
    <body  background="login.jpg">

        <h1 style="color:black;">Generate Semester Table</h1>
        <form action="GenTable.php" method="post">
            <label style="color:black;">Course:</label>
            <select name="Course">
                <option value="ANS">Animal Science</option>
                <option value="AQT">Aquatic Resources and Technology</option>
                <option value="EAG">Export Agriculture</option>
                <option value="PLT">Palm and Latex Technology</option>
                <option value="TEA">Tea Technology</option>
                <option value="HTE">Hospitality Tourism & Event Management</option>
                <option value="ENM">Entrepreneurship & Management</option>
                <option value="CST">Computer Science & Technology</option>
                <option value="IIT">Industrial Infromation Technology</option>
                <option value="MRT">Mineral Resources & Technology</option>
                <option value="SCT">Science & Technology</option>
                <option value="BET">Engineering Technology (BET)</option>
                <option value="BST">Bio-systems Technology (BST)</option>

            </select>
            <br>       <br>              

            <label style="color:black;">Course Level:</label><br>
            <input type="radio" name="Level" value="100" >100 Level<br>
            <input type="radio" name="Level" value="200" >200 Level<br>
            <input type="radio" name="Level" value="300" >300 Level<br>
            <input type="radio" name="Level" value="400" >400 Level<br>
            <br>   <br>    
            <label style="color:black;">Semester:</label><br>
            <input type="radio" name="Semester" value="1" >Semester 1<br>
            <input type="radio" name="Semester" value="2" >Semester 2<br><br>
            <label style="color:black;" >Total No of Compulsory subjects :</label>
            <input type="text" name="CS" placeholder="Enter the No of Compulsory subjects " pattern="[0-9]{1,2}" title="Enter the number only" required ><br>   <br>    
            <label  style="color:black;">Total No of Optional subjects :</label>
            <input type="text" name="OS" placeholder="Enter the No of Optional subjects " pattern="[0-9]{1,2}" title="Enter the number only"> 
            <label  style="color:black;">  Optional Division </label><input type="text" name="OD" placeholder="Enter the Divison of Optional subjects "pattern="[0-9]{1,2}" title="Enter the number only"><br><br>

            <button type="submit" value="Generate Table" name="sub">Generate Table</button>














        </select>



    </form>

</center>

</body>
</html>

<?php include './footer.php';?>