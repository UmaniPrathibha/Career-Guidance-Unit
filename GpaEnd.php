<!DOCTYPE html>

<?php
session_start();
?>
<?php include './students.php'; ?>
<html>
    <head>

        <title>Calculate GPA</title>
        <style>
            #GPA {
                font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 70%;
                text-align: left;
            }

            #GPA td, #GPA th {
                border: 1px solid #ddd;
                padding: 8px;

            }

            #GPA tr:nth-child(even){background-color: #f2f2f2;}

            #GPA tr:hover {background-color: #ddd;}

            #GPA th {
                padding-top: 12px;
                padding-bottom: 12px;
                text-align: center;
                background-color: #4CAF50;
                color: white;
            }

            .circle {
                height: 150px;
                width: 150px;
                padding: 5px 5px 5px 5px;
                background-color:#008000;
                color: #ffffff;
                border-radius: 50%;
                box-shadow: 5px 5px gray ;
                text-align: center;
                margin-top: 30px;
            }
            .circle:hover{
                background-color:#33d6ff;
                color: black;
            }
.button3 {
                background-color:orange; 
                border: none;
                border-radius: 5px;
                color: white;
                padding: 15px ;
                text-align: center;
                text-decoration: none;
                width: 150px;
                margin-left: 50px;
              font-weight: bold;
                font-size: 16px;
                margin-bottom: 30px;
            }
            .button3:hover{
                 color: white;
                   background-color:green; 
            }
        </style>
    </head>
    <body  >
        <?php
        $ser = "localhost";
        $user = "root";
        $pass = "";
        $db = "CGU";
        $con = mysqli_connect($ser, $user, $pass) or die("connection failed");
        $selected = mysqli_select_db($con, $db) or die("Colud not selected database");
        ?>
    <center><img src="uwu.jpg" style="width: 100px;height: 100px;margin-right: 25px;" ></center>
    <h1 style="text-align: center;">UWU GPA RESULTS SHEET</h1>
    <hr>
    <?php
    $Sem = $_SESSION["Semester"];

    echo "<b>Faculty : </b>" . $_SESSION["Faculty"] . "<br>";
    echo "<b>Course : </b>" . $_SESSION["Course"] . "<br>";
    echo "<b>Level : </b>" . $_SESSION["Level"] . "<br>";
    echo "<b>Semester : </b>" . $_SESSION["Semester"] . "<br>";
    ?>
    <hr>
    <br>
    <br>
    <center>
        <table id="GPA">
            <tr>

                <th>Course Code</th>
                <th>Subjects</th>
                <th>Grade</th>

            </tr>
            <?php
            $RQ = $_SESSION["ShortC"];

            if ($RQ == "IIT") {
                $LV = $_SESSION["Level"];
                $query = "Select * from iit where Level='$LV' and Semester='$Sem' and SType='Compalsory' ";
                $result = mysqli_query($con, $query);
               // $Count = new SplFixedArray(20);
                $B = 0;
                $No = 0;
                $OD = 0;
                while ($row = mysqli_fetch_assoc($result)) {


                    echo "<tr>";
                    echo "<td>" . $row['CCode'] . "-" . $row['Credit'];
                    echo "<td>" . $row['SName'];
                    $getGrade[$B] = $_POST["Grade$B"];
                    echo "<td>" . $getGrade[$B];
                    echo "</tr>";
                     $Codec = $row['CCode'] . "-" . $row['Credit'];
                    $Cname = $row['SName'];
                    $DownGpa = "insert into semester (CourseCode,Sname,Grade)values('$Codec','$Cname','$getGrade[$B]'    )";
                    mysqli_query($con, $DownGpa);
                    $B++;
                }
                $query1 = "Select * from iit where Level='$LV' and Semester='$Sem' and SType='Optional' ";
                $result1 = mysqli_query($con, $query1);

                while ($row = mysqli_fetch_assoc($result1)) {
                    $OD = $row['OpDivision'];
                }
                for ($i = 0; $i < $OD; $i++) {
                    echo "<tr>";
                    $getCode[$i] = $_POST["Code$i"];
                    echo "<td>" . $getCode[$i];
                    $getSName[$i] = $_POST["OpCourse$i"];
                    echo "<td>" . $getSName[$i];
                    $getOpGrade[$i] = $_POST["OpGrade$i"];
                    echo "<td>" . $getOpGrade[$i];
                    echo "</tr>";
                      $DownGpa1 = "insert into semester (CourseCode,Sname,Grade)values('$getCode[$i]','$getSName[$i]','$getOpGrade[$i]'    )";
        mysqli_query($con, $DownGpa1);
                }
                $No = $No + $B;
            } else if ($RQ == "CST") {
                $LV = $_SESSION["Level"];
                $query = "Select * from cst where Level='$LV' and Semester='$Sem' and SType='Compalsory' ";
                $result = mysqli_query($con, $query);
                $Count = new SplFixedArray(20);
                $B = 0;
                $No = 0;
                $OD = 0;
                while ($row = mysqli_fetch_assoc($result)) {


                    echo "<tr>";
                    echo "<td>" . $row['CCode'] . "-" . $row['Credit'];
                    echo "<td>" . $row['SName'];
                    $getGrade[$B] = $_POST["Grade$B"];
                    echo "<td>" . $getGrade[$B];
                    echo "</tr>";
                       $Codec = $row['CCode'] . "-" . $row['Credit'];
                    $Cname = $row['SName'];
                    $DownGpa = "insert into semester (CourseCode,Sname,Grade)values('$Codec','$Cname','$getGrade[$B]'    )";
                    mysqli_query($con, $DownGpa);
                    $B++;
                }
                $query1 = "Select * from cst where Level='$LV' and Semester='$Sem' and SType='Optional' ";
                $result1 = mysqli_query($con, $query1);

                while ($row = mysqli_fetch_assoc($result1)) {
                    $OD = $row['OpDivision'];
                }
                for ($i = 0; $i < $OD; $i++) {
                    echo "<tr>";
                    $getCode[$i] = $_POST["Code$i"];
                    echo "<td>" . $getCode[$i];
                    $getSName[$i] = $_POST["OpCourse$i"];
                    echo "<td>" . $getSName[$i];
                    $getOpGrade[$i] = $_POST["OpGrade$i"];
                    echo "<td>" . $getOpGrade[$i];
                    echo "</tr>";
                    $DownGpa1 = "insert into semester (CourseCode,Sname,Grade)values('$getCode[$i]','$getSName[$i]','$getOpGrade[$i]'    )";
        mysqli_query($con, $DownGpa1);
                }
                $No = $No + $B;
            } else if ($RQ == "MRT") {
                $LV = $_SESSION["Level"];
                $query = "Select * from mrt where Level='$LV' and Semester='$Sem' and SType='Compalsory' ";
                $result = mysqli_query($con, $query);
                $Count = new SplFixedArray(20);
                $B = 0;
                $No = 0;
                $OD = 0;
                while ($row = mysqli_fetch_assoc($result)) {


                    echo "<tr>";
                    echo "<td>" . $row['CCode'] . "-" . $row['Credit'];
                    echo "<td>" . $row['SName'];
                    $getGrade[$B] = $_POST["Grade$B"];
                    echo "<td>" . $getGrade[$B];
                    echo "</tr>";
                       $Codec = $row['CCode'] . "-" . $row['Credit'];
                    $Cname = $row['SName'];
                    $DownGpa = "insert into semester (CourseCode,Sname,Grade)values('$Codec','$Cname','$getGrade[$B]'    )";
                    mysqli_query($con, $DownGpa);
                    $B++;
                }
                $query1 = "Select * from mrt where Level='$LV' and Semester='$Sem' and SType='Optional' ";
                $result1 = mysqli_query($con, $query1);

                while ($row = mysqli_fetch_assoc($result1)) {
                    $OD = $row['OpDivision'];
                }
                for ($i = 0; $i < $OD; $i++) {
                    echo "<tr>";
                    $getCode[$i] = $_POST["Code$i"];
                    echo "<td>" . $getCode[$i];
                    $getSName[$i] = $_POST["OpCourse$i"];
                    echo "<td>" . $getSName[$i];
                    $getOpGrade[$i] = $_POST["OpGrade$i"];
                    echo "<td>" . $getOpGrade[$i];
                    echo "</tr>";
                    $DownGpa1 = "insert into semester (CourseCode,Sname,Grade)values('$getCode[$i]','$getSName[$i]','$getOpGrade[$i]'    )";
        mysqli_query($con, $DownGpa1);
                }
                $No = $No + $B;
            } else if ($RQ == "SCT") {
                $LV = $_SESSION["Level"];
                $query = "Select * from sct where Level='$LV' and Semester='$Sem' and SType='Compalsory' ";
                $result = mysqli_query($con, $query);
                $Count = new SplFixedArray(20);
                $B = 0;
                $No = 0;
                $OD = 0;
                while ($row = mysqli_fetch_assoc($result)) {


                    echo "<tr>";
                    echo "<td>" . $row['CCode'] . "-" . $row['Credit'];
                    echo "<td>" . $row['SName'];
                    $getGrade[$B] = $_POST["Grade$B"];
                    echo "<td>" . $getGrade[$B];
                    echo "</tr>";
                       $Codec = $row['CCode'] . "-" . $row['Credit'];
                    $Cname = $row['SName'];
                    $DownGpa = "insert into semester (CourseCode,Sname,Grade)values('$Codec','$Cname','$getGrade[$B]'    )";
                    mysqli_query($con, $DownGpa);
                    $B++;
                }
                $query1 = "Select * from sct where Level='$LV' and Semester='$Sem' and SType='Optional' ";
                $result1 = mysqli_query($con, $query1);

                while ($row = mysqli_fetch_assoc($result1)) {
                    $OD = $row['OpDivision'];
                }
                for ($i = 0; $i < $OD; $i++) {
                    echo "<tr>";
                    $getCode[$i] = $_POST["Code$i"];
                    echo "<td>" . $getCode[$i];
                    $getSName[$i] = $_POST["OpCourse$i"];
                    echo "<td>" . $getSName[$i];
                    $getOpGrade[$i] = $_POST["OpGrade$i"];
                    echo "<td>" . $getOpGrade[$i];
                    echo "</tr>";
                    $DownGpa1 = "insert into semester (CourseCode,Sname,Grade)values('$getCode[$i]','$getSName[$i]','$getOpGrade[$i]'    )";
        mysqli_query($con, $DownGpa1);
                }
                $No = $No + $B;
            } else if ($RQ == "HTE") {
                $LV = $_SESSION["Level"];
                $query = "Select * from hte where Level='$LV' and Semester='$Sem' and SType='Compalsory' ";
                $result = mysqli_query($con, $query);
                $Count = new SplFixedArray(20);
                $B = 0;
                $No = 0;
                $OD = 0;
                while ($row = mysqli_fetch_assoc($result)) {


                    echo "<tr>";
                    echo "<td>" . $row['CCode'] . "-" . $row['Credit'];
                    echo "<td>" . $row['SName'];
                    $getGrade[$B] = $_POST["Grade$B"];
                    echo "<td>" . $getGrade[$B];
                    echo "</tr>";
                       $Codec = $row['CCode'] . "-" . $row['Credit'];
                    $Cname = $row['SName'];
                    $DownGpa = "insert into semester (CourseCode,Sname,Grade)values('$Codec','$Cname','$getGrade[$B]'    )";
                    mysqli_query($con, $DownGpa);
                    $B++;
                }
                $query1 = "Select * from hte where Level='$LV' and Semester='$Sem' and SType='Optional' ";
                $result1 = mysqli_query($con, $query1);

                while ($row = mysqli_fetch_assoc($result1)) {
                    $OD = $row['OpDivision'];
                }
                for ($i = 0; $i < $OD; $i++) {
                    echo "<tr>";
                    $getCode[$i] = $_POST["Code$i"];
                    echo "<td>" . $getCode[$i];
                    $getSName[$i] = $_POST["OpCourse$i"];
                    echo "<td>" . $getSName[$i];
                    $getOpGrade[$i] = $_POST["OpGrade$i"];
                    echo "<td>" . $getOpGrade[$i];
                    echo "</tr>";
                    $DownGpa1 = "insert into semester (CourseCode,Sname,Grade)values('$getCode[$i]','$getSName[$i]','$getOpGrade[$i]'    )";
        mysqli_query($con, $DownGpa1);
                }
                $No = $No + $B;
            } else if ($RQ == "ENM") {
                $LV = $_SESSION["Level"];
                $query = "Select * from enm where Level='$LV' and Semester='$Sem' and SType='Compalsory' ";
                $result = mysqli_query($con, $query);
                $Count = new SplFixedArray(20);
                $B = 0;
                $No = 0;
                $OD = 0;
                while ($row = mysqli_fetch_assoc($result)) {


                    echo "<tr>";
                    echo "<td>" . $row['CCode'] . "-" . $row['Credit'];
                    echo "<td>" . $row['SName'];
                    $getGrade[$B] = $_POST["Grade$B"];
                    echo "<td>" . $getGrade[$B];
                    echo "</tr>";
                       $Codec = $row['CCode'] . "-" . $row['Credit'];
                    $Cname = $row['SName'];
                    $DownGpa = "insert into semester (CourseCode,Sname,Grade)values('$Codec','$Cname','$getGrade[$B]'    )";
                    mysqli_query($con, $DownGpa);
                    $B++;
                }
                $query1 = "Select * from enm where Level='$LV' and Semester='$Sem' and SType='Optional' ";
                $result1 = mysqli_query($con, $query1);

                while ($row = mysqli_fetch_assoc($result1)) {
                    $OD = $row['OpDivision'];
                }
                for ($i = 0; $i < $OD; $i++) {
                    echo "<tr>";
                    $getCode[$i] = $_POST["Code$i"];
                    echo "<td>" . $getCode[$i];
                    $getSName[$i] = $_POST["OpCourse$i"];
                    echo "<td>" . $getSName[$i];
                    $getOpGrade[$i] = $_POST["OpGrade$i"];
                    echo "<td>" . $getOpGrade[$i];
                    echo "</tr>";
                    $DownGpa1 = "insert into semester (CourseCode,Sname,Grade)values('$getCode[$i]','$getSName[$i]','$getOpGrade[$i]'    )";
        mysqli_query($con, $DownGpa1);
                }
                $No = $No + $B;
            } else if ($RQ == "BET") {
                $LV = $_SESSION["Level"];
                $query = "Select * from bet where Level='$LV' and Semester='$Sem' and SType='Compalsory' ";
                $result = mysqli_query($con, $query);
                $Count = new SplFixedArray(20);
                $B = 0;
                $No = 0;
                $OD = 0;
                while ($row = mysqli_fetch_assoc($result)) {


                    echo "<tr>";
                    echo "<td>" . $row['CCode'] . "-" . $row['Credit'];
                    echo "<td>" . $row['SName'];
                    $getGrade[$B] = $_POST["Grade$B"];
                    echo "<td>" . $getGrade[$B];
                    echo "</tr>";
                       $Codec = $row['CCode'] . "-" . $row['Credit'];
                    $Cname = $row['SName'];
                    $DownGpa = "insert into semester (CourseCode,Sname,Grade)values('$Codec','$Cname','$getGrade[$B]'    )";
                    mysqli_query($con, $DownGpa);
                    $B++;
                }
                $query1 = "Select * from bet where Level='$LV' and Semester='$Sem' and SType='Optional' ";
                $result1 = mysqli_query($con, $query1);

                while ($row = mysqli_fetch_assoc($result1)) {
                    $OD = $row['OpDivision'];
                }
                for ($i = 0; $i < $OD; $i++) {
                    echo "<tr>";
                    $getCode[$i] = $_POST["Code$i"];
                    echo "<td>" . $getCode[$i];
                    $getSName[$i] = $_POST["OpCourse$i"];
                    echo "<td>" . $getSName[$i];
                    $getOpGrade[$i] = $_POST["OpGrade$i"];
                    echo "<td>" . $getOpGrade[$i];
                    echo "</tr>";
                    $DownGpa1 = "insert into semester (CourseCode,Sname,Grade)values('$getCode[$i]','$getSName[$i]','$getOpGrade[$i]'    )";
        mysqli_query($con, $DownGpa1);
                }
                $No = $No + $B;
            } else if ($RQ == "BST") {
                $LV = $_SESSION["Level"];
                $query = "Select * from bst where Level='$LV' and Semester='$Sem' and SType='Compalsory' ";
                $result = mysqli_query($con, $query);
                $Count = new SplFixedArray(20);
                $B = 0;
                $No = 0;
                $OD = 0;
                while ($row = mysqli_fetch_assoc($result)) {


                    echo "<tr>";
                    echo "<td>" . $row['CCode'] . "-" . $row['Credit'];
                    echo "<td>" . $row['SName'];
                    $getGrade[$B] = $_POST["Grade$B"];
                    echo "<td>" . $getGrade[$B];
                    echo "</tr>";
                       $Codec = $row['CCode'] . "-" . $row['Credit'];
                    $Cname = $row['SName'];
                    $DownGpa = "insert into semester (CourseCode,Sname,Grade)values('$Codec','$Cname','$getGrade[$B]'    )";
                    mysqli_query($con, $DownGpa);
                    $B++;
                }
                $query1 = "Select * from bst where Level='$LV' and Semester='$Sem' and SType='Optional' ";
                $result1 = mysqli_query($con, $query1);

                while ($row = mysqli_fetch_assoc($result1)) {
                    $OD = $row['OpDivision'];
                }
                for ($i = 0; $i < $OD; $i++) {
                    echo "<tr>";
                    $getCode[$i] = $_POST["Code$i"];
                    echo "<td>" . $getCode[$i];
                    $getSName[$i] = $_POST["OpCourse$i"];
                    echo "<td>" . $getSName[$i];
                    $getOpGrade[$i] = $_POST["OpGrade$i"];
                    echo "<td>" . $getOpGrade[$i];
                    echo "</tr>";
                    $DownGpa1 = "insert into semester (CourseCode,Sname,Grade)values('$getCode[$i]','$getSName[$i]','$getOpGrade[$i]'    )";
        mysqli_query($con, $DownGpa1);
                }
                $No = $No + $B;
            } else if ($RQ == "ANS") {
                $LV = $_SESSION["Level"];
                $query = "Select * from ans where Level='$LV' and Semester='$Sem' and SType='Compalsory' ";
                $result = mysqli_query($con, $query);
                $Count = new SplFixedArray(20);
                $B = 0;
                $No = 0;
                $OD = 0;
                while ($row = mysqli_fetch_assoc($result)) {


                    echo "<tr>";
                    echo "<td>" . $row['CCode'] . "-" . $row['Credit'];
                    echo "<td>" . $row['SName'];
                    $getGrade[$B] = $_POST["Grade$B"];
                    echo "<td>" . $getGrade[$B];
                    echo "</tr>";
                       $Codec = $row['CCode'] . "-" . $row['Credit'];
                    $Cname = $row['SName'];
                    $DownGpa = "insert into semester (CourseCode,Sname,Grade)values('$Codec','$Cname','$getGrade[$B]'    )";
                    mysqli_query($con, $DownGpa);
                    $B++;
                }
                $query1 = "Select * from ans where Level='$LV' and Semester='$Sem' and SType='Optional' ";
                $result1 = mysqli_query($con, $query1);

                while ($row = mysqli_fetch_assoc($result1)) {
                    $OD = $row['OpDivision'];
                }
                for ($i = 0; $i < $OD; $i++) {
                    echo "<tr>";
                    $getCode[$i] = $_POST["Code$i"];
                    echo "<td>" . $getCode[$i];
                    $getSName[$i] = $_POST["OpCourse$i"];
                    echo "<td>" . $getSName[$i];
                    $getOpGrade[$i] = $_POST["OpGrade$i"];
                    echo "<td>" . $getOpGrade[$i];
                    echo "</tr>";
                    $DownGpa1 = "insert into semester (CourseCode,Sname,Grade)values('$getCode[$i]','$getSName[$i]','$getOpGrade[$i]'    )";
        mysqli_query($con, $DownGpa1);
                }
                $No = $No + $B;
            } else if ($RQ == "AQT") {
                $LV = $_SESSION["Level"];
                $query = "Select * from aqt where Level='$LV' and Semester='$Sem' and SType='Compalsory' ";
                $result = mysqli_query($con, $query);
                $Count = new SplFixedArray(20);
                $B = 0;
                $No = 0;
                $OD = 0;
                while ($row = mysqli_fetch_assoc($result)) {


                    echo "<tr>";
                    echo "<td>" . $row['CCode'] . "-" . $row['Credit'];
                    echo "<td>" . $row['SName'];
                    $getGrade[$B] = $_POST["Grade$B"];
                    echo "<td>" . $getGrade[$B];
                    echo "</tr>";
                       $Codec = $row['CCode'] . "-" . $row['Credit'];
                    $Cname = $row['SName'];
                    $DownGpa = "insert into semester (CourseCode,Sname,Grade)values('$Codec','$Cname','$getGrade[$B]'    )";
                    mysqli_query($con, $DownGpa);
                    $B++;
                }
                $query1 = "Select * from aqt where Level='$LV' and Semester='$Sem' and SType='Optional' ";
                $result1 = mysqli_query($con, $query1);

                while ($row = mysqli_fetch_assoc($result1)) {
                    $OD = $row['OpDivision'];
                }
                for ($i = 0; $i < $OD; $i++) {
                    echo "<tr>";
                    $getCode[$i] = $_POST["Code$i"];
                    echo "<td>" . $getCode[$i];
                    $getSName[$i] = $_POST["OpCourse$i"];
                    echo "<td>" . $getSName[$i];
                    $getOpGrade[$i] = $_POST["OpGrade$i"];
                    echo "<td>" . $getOpGrade[$i];
                    echo "</tr>";
                    $DownGpa1 = "insert into semester (CourseCode,Sname,Grade)values('$getCode[$i]','$getSName[$i]','$getOpGrade[$i]'    )";
        mysqli_query($con, $DownGpa1);
                }
                $No = $No + $B;
            } else if ($RQ == "EAG") {
                $LV = $_SESSION["Level"];
                $query = "Select * from eag where Level='$LV' and Semester='$Sem' and SType='Compalsory' ";
                $result = mysqli_query($con, $query);
                $Count = new SplFixedArray(20);
                $B = 0;
                $No = 0;
                $OD = 0;
                while ($row = mysqli_fetch_assoc($result)) {


                    echo "<tr>";
                    echo "<td>" . $row['CCode'] . "-" . $row['Credit'];
                    echo "<td>" . $row['SName'];
                    $getGrade[$B] = $_POST["Grade$B"];
                    echo "<td>" . $getGrade[$B];
                    echo "</tr>";
                       $Codec = $row['CCode'] . "-" . $row['Credit'];
                    $Cname = $row['SName'];
                    $DownGpa = "insert into semester (CourseCode,Sname,Grade)values('$Codec','$Cname','$getGrade[$B]'    )";
                    mysqli_query($con, $DownGpa);
                    $B++;
                }
                $query1 = "Select * from eag where Level='$LV' and Semester='$Sem' and SType='Optional' ";
                $result1 = mysqli_query($con, $query1);

                while ($row = mysqli_fetch_assoc($result1)) {
                    $OD = $row['OpDivision'];
                }
                for ($i = 0; $i < $OD; $i++) {
                    echo "<tr>";
                    $getCode[$i] = $_POST["Code$i"];
                    echo "<td>" . $getCode[$i];
                    $getSName[$i] = $_POST["OpCourse$i"];
                    echo "<td>" . $getSName[$i];
                    $getOpGrade[$i] = $_POST["OpGrade$i"];
                    echo "<td>" . $getOpGrade[$i];
                    echo "</tr>";
                    $DownGpa1 = "insert into semester (CourseCode,Sname,Grade)values('$getCode[$i]','$getSName[$i]','$getOpGrade[$i]'    )";
        mysqli_query($con, $DownGpa1);
                }
                $No = $No + $B;
            } else if ($RQ == "PLT") {
                $LV = $_SESSION["Level"];
                $query = "Select * from plt where Level='$LV' and Semester='$Sem' and SType='Compalsory' ";
                $result = mysqli_query($con, $query);
                $Count = new SplFixedArray(20);
                $B = 0;
                $No = 0;
                $OD = 0;
                while ($row = mysqli_fetch_assoc($result)) {


                    echo "<tr>";
                    echo "<td>" . $row['CCode'] . "-" . $row['Credit'];
                    echo "<td>" . $row['SName'];
                    $getGrade[$B] = $_POST["Grade$B"];
                    echo "<td>" . $getGrade[$B];
                    echo "</tr>";
                       $Codec = $row['CCode'] . "-" . $row['Credit'];
                    $Cname = $row['SName'];
                    $DownGpa = "insert into semester (CourseCode,Sname,Grade)values('$Codec','$Cname','$getGrade[$B]'    )";
                    mysqli_query($con, $DownGpa);
                    $B++;
                }
                $query1 = "Select * from plt where Level='$LV' and Semester='$Sem' and SType='Optional' ";
                $result1 = mysqli_query($con, $query1);

                while ($row = mysqli_fetch_assoc($result1)) {
                    $OD = $row['OpDivision'];
                }
                for ($i = 0; $i < $OD; $i++) {
                    echo "<tr>";
                    $getCode[$i] = $_POST["Code$i"];
                    echo "<td>" . $getCode[$i];
                    $getSName[$i] = $_POST["OpCourse$i"];
                    echo "<td>" . $getSName[$i];
                    $getOpGrade[$i] = $_POST["OpGrade$i"];
                    echo "<td>" . $getOpGrade[$i];
                    echo "</tr>";
                    $DownGpa1 = "insert into semester (CourseCode,Sname,Grade)values('$getCode[$i]','$getSName[$i]','$getOpGrade[$i]'    )";
        mysqli_query($con, $DownGpa1);
                }
                $No = $No + $B;
            } else if ($RQ == "TEA") {
                $LV = $_SESSION["Level"];
                $query = "Select * from tea where Level='$LV' and Semester='$Sem' and SType='Compalsory' ";
                $result = mysqli_query($con, $query);
                $Count = new SplFixedArray(20);
                $B = 0;
                $No = 0;
                $OD = 0;
                while ($row = mysqli_fetch_assoc($result)) {


                    echo "<tr>";
                    echo "<td>" . $row['CCode'] . "-" . $row['Credit'];
                    echo "<td>" . $row['SName'];
                    $getGrade[$B] = $_POST["Grade$B"];
                    echo "<td>" . $getGrade[$B];
                    echo "</tr>";
                       $Codec = $row['CCode'] . "-" . $row['Credit'];
                    $Cname = $row['SName'];
                    $DownGpa = "insert into semester (CourseCode,Sname,Grade)values('$Codec','$Cname','$getGrade[$B]'    )";
                    mysqli_query($con, $DownGpa);
                    $B++;
                }
                $query1 = "Select * from tea where Level='$LV' and Semester='$Sem' and SType='Optional' ";
                $result1 = mysqli_query($con, $query1);

                while ($row = mysqli_fetch_assoc($result1)) {
                    $OD = $row['OpDivision'];
                }
                for ($i = 0; $i < $OD; $i++) {
                    echo "<tr>";
                    $getCode[$i] = $_POST["Code$i"];
                    echo "<td>" . $getCode[$i];
                    $getSName[$i] = $_POST["OpCourse$i"];
                    echo "<td>" . $getSName[$i];
                    $getOpGrade[$i] = $_POST["OpGrade$i"];
                    echo "<td>" . $getOpGrade[$i];
                    echo "</tr>";
                    $DownGpa1 = "insert into semester (CourseCode,Sname,Grade)values('$getCode[$i]','$getSName[$i]','$getOpGrade[$i]'    )";
        mysqli_query($con, $DownGpa1);
                }
                $No = $No + $B;
            }

            function gradeCheck($value) {
                if ($value == "A+") {
                    $GC = 4.00;
                } else if ($value == "A") {
                    $GC = 4.00;
                } else if ($value == "A-") {
                    $GC = 3.70;
                } else if ($value == "B+") {
                    $GC = 3.30;
                } else if ($value == "B") {
                    $GC = 3.00;
                } else if ($value == "B-") {
                    $GC = 2.70;
                } else if ($value == "C+") {
                    $GC = 2.30;
                } else if ($value == "C") {
                    $GC = 2.00;
                } else if ($value == "C-") {
                    $GC = 1.70;
                } else if ($value == "D+") {
                    $GC = 1.30;
                } else if ($value == "D") {
                    $GC = 1.00;
                } else if ($value == "E") {
                    $GC = 0.00;
                }
                return $GC;
            }

            if (isset($_POST["sub"])) {
                $getGrade = new SplFixedArray(20);
                $getCode = new SplFixedArray(20);
                $getSName = new SplFixedArray(20);
                $getOpGrade = new SplFixedArray(20);
                $getGradePoint = new SplFixedArray(20);
                $getOpGradePoint = new SplFixedArray(20);
                $getM = new SplFixedArray(20);
                $getOpM = new SplFixedArray(20);
                $getCredit = new SplFixedArray(20);
                $getOpCredit = new SplFixedArray(20);
                $SumCredit = 0;
                $SumGrade = 0;
                $SumOpCredit = 0;
                $SumOpGrade = 0;
                $SumFinalCredit = 0;
                $SumFinalGrade = 0;
                $FinalGpa = 0;
                //get grade
                for ($i = 0; $i < $No; $i++) {
                    $getGrade[$i] = $_POST["Grade$i"];
                }
                for ($i = 0; $i < $OD; $i++) {
                    $getOpGrade[$i] = $_POST["OpGrade$i"];
                }
//get grade point
                for ($i = 0; $i < $No; $i++) {

                    $getGradePoint[$i] = gradeCheck($getGrade[$i]);
                }
                for ($i = 0; $i < $OD; $i++) {
                    $getOpGradePoint[$i] = gradeCheck($getOpGrade[$i]);
                }


                $RQ = $_SESSION["ShortC"];
//get credit
                if ($RQ == "IIT") {
                    $LV = $_SESSION["Level"];
                    $query = "Select * from iit where Level='$LV' and Semester='$Sem'  and SType='Compalsory' ";
                    $result = mysqli_query($con, $query);
                    $C = 0;
                    while ($row = mysqli_fetch_assoc($result)) {
                        $getCredit[$C] = $row['Credit'];
                        $C++;
                    }
                    $query1 = "Select * from iit where Level='$LV' and Semester='$Sem'  and SType='Optional' ";
                    $result = mysqli_query($con, $query1);
                    for ($i = 0; $i < $OD; $i++) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $getOpCredit[$i] = $row['Credit'];
                        }
                    }
                } else if ($RQ == "CST") {
                    $LV = $_SESSION["Level"];
                    $query = "Select * from cst where Level='$LV' and Semester='$Sem'   and SType='Compalsory' ";
                    $result = mysqli_query($con, $query);
                    $C = 0;
                    while ($row = mysqli_fetch_assoc($result)) {
                        $getCredit[$C] = $row['Credit'];
                        $C++;
                    }
                    $query1 = "Select * from cst where Level='$LV' and Semester='$Sem'  and SType='Optional' ";
                    $result = mysqli_query($con, $query1);
                    for ($i = 0; $i < $OD; $i++) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $getOpCredit[$i] = $row['Credit'];
                        }
                    }
                } if ($RQ == "MRT") {
                    $LV = $_SESSION["Level"];
                    $query = "Select * from mrt where Level='$LV' and Semester='$Sem'  and SType='Compalsory' ";
                    $result = mysqli_query($con, $query);
                    $C = 0;
                    while ($row = mysqli_fetch_assoc($result)) {
                        $getCredit[$C] = $row['Credit'];
                        $C++;
                    }
                    $query1 = "Select * from mrt where Level='$LV' and Semester='$Sem'  and SType='Optional' ";
                    $result = mysqli_query($con, $query1);
                    for ($i = 0; $i < $OD; $i++) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $getOpCredit[$i] = $row['Credit'];
                        }
                    }
                } if ($RQ == "SCT") {
                    $LV = $_SESSION["Level"];
                    $query = "Select * from sct where Level='$LV' and Semester='$Sem'  and SType='Compalsory' ";
                    $result = mysqli_query($con, $query);
                    $C = 0;
                    while ($row = mysqli_fetch_assoc($result)) {
                        $getCredit[$C] = $row['Credit'];
                        $C++;
                    }
                    $query1 = "Select * from sct where Level='$LV' and Semester='$Sem'  and SType='Optional' ";
                    $result = mysqli_query($con, $query1);
                    for ($i = 0; $i < $OD; $i++) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $getOpCredit[$i] = $row['Credit'];
                        }
                    }
                } if ($RQ == "BET") {
                    $LV = $_SESSION["Level"];
                    $query = "Select * from bet where Level='$LV' and Semester='$Sem'  and SType='Compalsory' ";
                    $result = mysqli_query($con, $query);
                    $C = 0;
                    while ($row = mysqli_fetch_assoc($result)) {
                        $getCredit[$C] = $row['Credit'];
                        $C++;
                    }
                    $query1 = "Select * from bet where Level='$LV' and Semester='$Sem'  and SType='Optional' ";
                    $result = mysqli_query($con, $query1);
                    for ($i = 0; $i < $OD; $i++) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $getOpCredit[$i] = $row['Credit'];
                        }
                    }
                } if ($RQ == "BST") {
                    $LV = $_SESSION["Level"];
                    $query = "Select * from bst where Level='$LV' and Semester='$Sem'  and SType='Compalsory' ";
                    $result = mysqli_query($con, $query);
                    $C = 0;
                    while ($row = mysqli_fetch_assoc($result)) {
                        $getCredit[$C] = $row['Credit'];
                        $C++;
                    }
                    $query1 = "Select * from bst where Level='$LV' and Semester='$Sem'  and SType='Optional' ";
                    $result = mysqli_query($con, $query1);
                    for ($i = 0; $i < $OD; $i++) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $getOpCredit[$i] = $row['Credit'];
                        }
                    }
                } if ($RQ == "HTE") {
                    $LV = $_SESSION["Level"];
                    $query = "Select * from hte where Level='$LV' and Semester='$Sem'   and SType='Compalsory' ";
                    $result = mysqli_query($con, $query);
                    $C = 0;
                    while ($row = mysqli_fetch_assoc($result)) {
                        $getCredit[$C] = $row['Credit'];
                        $C++;
                    }
                    $query1 = "Select * from hte where Level='$LV' and Semester='$Sem'  and SType='Optional' ";
                    $result = mysqli_query($con, $query1);
                    for ($i = 0; $i < $OD; $i++) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $getOpCredit[$i] = $row['Credit'];
                        }
                    }
                } if ($RQ == "ENM") {
                    $LV = $_SESSION["Level"];
                    $query = "Select * from enm where Level='$LV' and Semester='$Sem'   and SType='Compalsory' ";
                    $result = mysqli_query($con, $query);
                    $C = 0;
                    while ($row = mysqli_fetch_assoc($result)) {
                        $getCredit[$C] = $row['Credit'];
                        $C++;
                    }
                    $query1 = "Select * from enm where Level='$LV' and Semester='$Sem'  and SType='Optional' ";
                    $result = mysqli_query($con, $query1);
                    for ($i = 0; $i < $OD; $i++) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $getOpCredit[$i] = $row['Credit'];
                        }
                    }
                } if ($RQ == "ANS") {
                    $LV = $_SESSION["Level"];
                    $query = "Select * from ans where Level='$LV' and Semester='$Sem'   and SType='Compalsory' ";
                    $result = mysqli_query($con, $query);
                    $C = 0;
                    while ($row = mysqli_fetch_assoc($result)) {
                        $getCredit[$C] = $row['Credit'];
                        $C++;
                    } $query1 = "Select * from ans where Level='$LV' and Semester='$Sem'  and SType='Optional' ";
                    $result = mysqli_query($con, $query1);
                    for ($i = 0; $i < $OD; $i++) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $getOpCredit[$i] = $row['Credit'];
                        }
                    }
                } if ($RQ == "AQT") {
                    $LV = $_SESSION["Level"];
                    $query = "Select * from aqt where Level='$LV' and Semester='$Sem'   and SType='Compalsory' ";
                    $result = mysqli_query($con, $query);
                    $C = 0;
                    while ($row = mysqli_fetch_assoc($result)) {
                        $getCredit[$C] = $row['Credit'];
                        $C++;
                    } $query1 = "Select * from aqt where Level='$LV' and Semester='$Sem'  and SType='Optional' ";
                    $result = mysqli_query($con, $query1);
                    for ($i = 0; $i < $OD; $i++) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $getOpCredit[$i] = $row['Credit'];
                        }
                    }
                } if ($RQ == "EAG") {
                    $LV = $_SESSION["Level"];
                    $query = "Select * from eag where Level='$LV' and Semester='$Sem'   and SType='Compalsory' ";
                    $result = mysqli_query($con, $query);
                    $C = 0;
                    while ($row = mysqli_fetch_assoc($result)) {
                        $getCredit[$C] = $row['Credit'];
                        $C++;
                    } $query1 = "Select * from eag where Level='$LV' and Semester='$Sem'  and SType='Optional' ";
                    $result = mysqli_query($con, $query1);
                    for ($i = 0; $i < $OD; $i++) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $getOpCredit[$i] = $row['Credit'];
                        }
                    }
                } if ($RQ == "PLT") {
                    $LV = $_SESSION["Level"];
                    $query = "Select * from plt where Level='$LV' and Semester='$Sem'  and SType='Compalsory' ";
                    $result = mysqli_query($con, $query);
                    $C = 0;
                    while ($row = mysqli_fetch_assoc($result)) {
                        $getCredit[$C] = $row['Credit'];
                        $C++;
                    } $query1 = "Select * from plt where Level='$LV' and Semester='$Sem'  and SType='Optional' ";
                    $result = mysqli_query($con, $query1);
                    for ($i = 0; $i < $OD; $i++) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $getOpCredit[$i] = $row['Credit'];
                        }
                    }
                } if ($RQ == "TEA") {
                    $LV = $_SESSION["Level"];
                    $query = "Select * from tea where Level='$LV' and Semester='$Sem'   and SType='Compalsory' ";
                    $result = mysqli_query($con, $query);
                    $C = 0;
                    while ($row = mysqli_fetch_assoc($result)) {
                        $getCredit[$C] = $row['Credit'];
                        $C++;
                    } $query1 = "Select * from tea where Level='$LV' and Semester='$Sem'  and SType='Optional' ";
                    $result = mysqli_query($con, $query1);
                    for ($i = 0; $i < $OD; $i++) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $getOpCredit[$i] = $row['Credit'];
                        }
                    }
                }
                
                //multify grade point and credit
                for ($i = 0; $i < $No; $i++) {

                    $getM[$i] = ($getGradePoint[$i] * $getCredit[$i]);
                }
                for ($i = 0; $i < $OD; $i++) {

                    $getOpM[$i] = ($getOpGradePoint[$i] * $getOpCredit[$i]);
                }
                //get total credit and total value of grade point
                for ($i = 0; $i < $No; $i++) {
                    $SumCredit+=$getCredit[$i];
                    $SumGrade+=$getM[$i];
                }
                for ($i = 0; $i < $OD; $i++) {
                    $SumOpCredit+=$getOpCredit[$i];
                    $SumOpGrade+=$getOpM[$i];
                }
                
                $SumFinalCredit = $SumCredit + $SumOpCredit;
                $SumFinalGrade = $SumGrade + $SumOpGrade;
                $FinalGpa = $SumFinalGrade / $SumFinalCredit;
            }
            ?>
        </table>

        <div class="circle">
            <?php echo"<p><b>Your <br>Semester <br> GPA is <br><br>" . round($FinalGpa, 2) . "</p></b>";
            $Gpa=  round($FinalGpa,2);
            ?>
        </div>
    </center>
                <?php echo"<button class='button3'><a href=\"DownloadGpa.php?GP=".$Gpa." \"  \" style=\" text-decoration: none;color:white;\" > Download Result Sheet </a> </button>";      ?>
</body>
</html>
<?php        include './footer.php';?>