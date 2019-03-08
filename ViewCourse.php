
<?php
session_start();

 include './dataoperator.php';
?>

<?php
if (isset($_POST["sub1"])) {
    $C = $_POST["CourseV"];
    $L = $_POST["LevelV"];
    $S = $_POST["SemesterV"];
    $_SESSION["CourseV"] = $C;
    $_SESSION["LevelV"] = $L;
    $_SESSION["SemesterV"] = $S;

    
     echo '<script language="javascript">';
               
                echo "window.location='ViewUpdate.php' ";
                echo '</script>';
  
}
?>
<html>
    <head>

        <style>
            body
            {

                background: url(B3.jpg);
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
                background: #cccccc;
                border-radius: 8px;
                color: black;
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
    </head>
    <body  background="login.jpg">

        <h1 style="color:black;">View Semester Table</h1>
        <form action="ViewCourse.php" method="post">
            <label >Course:</label>
            <select name="CourseV">
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

            <label >Course Level:</label><br>
            <input type="radio" name="LevelV" value="100" >100 Level<br>
            <input type="radio" name="LevelV" value="200" >200 Level<br>
            <input type="radio" name="LevelV" value="300" >300 Level<br>
            <input type="radio" name="LevelV" value="400" >400 Level<br>
            <br>   <br>    
            <label >Semester:</label><br>
            <input type="radio" name="SemesterV" value="1" >Semester 1<br>
            <input type="radio" name="SemesterV" value="2" >Semester 2<br><br>

            <button type="submit" name="sub1" >View Semester</button>














        </select>



    </form>

</center>

</body>
</html>

<?php include './footer.php';?>