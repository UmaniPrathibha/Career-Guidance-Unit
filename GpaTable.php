

<!DOCTYPE html>
<?php
session_start();
include './dataoperator.php';
?>

<html>
    <head>

        <title>Calculate GPA</title>
        <style>

            #GPA {
                font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 70%;
                text-align: center;
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
            .button {
                background-color: #008CBA; 
                border: none;
                margin-right: 10px;
                border-radius: 5px;
                margin-bottom: 10px;
                color: white;
                padding: 15px ;
                text-align: center;
                text-decoration: none;
                width:200px; 
                font-size: 16px;
                position: absolute;
                right: 30%;
            }
            .button:hover{
                background-color: orange;
                color: white;
                cursor:pointer;
                box-shadow: 5px 3px gray;
            }
            .button1:hover{
                background-color: orange;
                color: white;
                cursor:pointer;
                box-shadow: 5px 3px gray;
            }
            .button1 {
                background-color:#f44336; 
                border: none;
                border-radius: 5px;
                color: white;
                padding: 15px ;
                text-align: center;
                text-decoration: none;
                width:200px; 
                font-size: 16px;
                position: absolute;
                right: 15%;
                margin-bottom: 10px;
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
    <center>
        <h1>Adding New Records</h1>

        <?php
        $CS = $_SESSION["Course"];

        $LL = $_SESSION["Level"];

        $SS = $_SESSION["Semester"];
//compulsary subject
        $Com = $_SESSION["CS"];
//optional subject
        $Op = $_SESSION["OS"];
//
        $DOS = $_SESSION["OD"];


        echo "<form action=\"GpaTable.php\" method=\"post\" >";
        echo "<table id=\"GPA\">";
        echo "<tr>";
        echo "<th>Subject Name</th>";
        echo "<th>Course Code</th>";
        echo "<th>No of Credit</th>";
        echo "<th>Subject Type</th>";
//echo "<th>Action</th>";
        echo "</tr>";

        for ($i = 0; $i < $Com; $i++) {
            echo "<tr>";

            echo "<td><input type=\"text\"  name=\"Subject" . $i . "\" pattern=\"[A-Za-z\s]{1,15}\" title=\"Please enter texts only \" required></td> ";
            echo "<td><input type=\"text\"  name=\"CourseCode" . $i . "\"   required> </td>";
            echo "<td><input type=\"text\"  name=\"Credit" . $i . "\" pattern=\"[0-9]{1}\" title=\"Enter the number only\"  required></td> ";
            echo "<td><input type=\"text\"  name=\"Type" . $i . "\"  value=\"Compalsory\"></td> ";
            //  echo "<td><button type=\"submit\" name=\"sub1\" class=\"button\" onclick=\"this.disabled='disabled'; \">Add </button><button type=\"Reset\"  class=\"button1\" >Reset </button>";
            echo "</tr>";
            //echo "</form>";
        }


        for ($i = 0; $i < $Op; $i++) {
            echo "<tr>";
            //  echo "<form action=\"GpaTable\" method=\"post\" >";
            echo "<td><input type=\"text\"  name=\"OpSubject" . $i . "\" pattern=\"[A-Za-z\s]{1,15}\" title=\"Please enter texts only \"  required></td> ";
            echo "<td><input type=\"text\"  name=\"OpCourseCode" . $i . "\"  required> </td>";
            echo "<td><input type=\"text\"  name=\"OpCredit" . $i . "\" pattern=\"[0-9]{1}\" title=\"Enter the number only\" required ></td> ";
            echo "<td><input type=\"text\"  name=\"OpType" . $i . "\"  value=\"Optional\"></td> ";

            echo "</tr>";
        }
        echo "</table>";
        echo "<br>";
        echo "<br>";
        echo "<button type=\"submit\" name=\"sub1\" class=\"button\" >Add New Record</button><button type=\"Reset\" class=\"button1\" >Reset New Record</button>";
        echo "<br>";
        echo "</form>";
        if (isset($_POST["sub1"])) {

            $ComCourse = new SplFixedArray(20);
            $ComCode = new SplFixedArray(20);
            $ComCredit = new SplFixedArray(20);
            $ComType = new SplFixedArray(20);
            for ($i = 0; $i < $Com; $i++) {
                $ComCourse[$i] = $_POST["Subject$i"];
                $ComCode[$i] = $_POST["CourseCode$i"];
                $ComCredit[$i] = $_POST["Credit$i"];
                $ComType[$i] = $_POST["Type$i"];

                $Q1 = "Insert into iit(SName,CCode,Credit,Level,Semester,Stype)values('$ComCourse[$i]','$ComCode[$i]','$ComCredit[$i]','$LL','$SS','$ComType[$i]')";
                $Q2 = "Insert into cst(SName,CCode,Credit,Level,Semester,Stype)values('$ComCourse[$i]','$ComCode[$i]','$ComCredit[$i]','$LL','$SS','$ComType[$i]')";
                $Q3 = "Insert into mrt(SName,CCode,Credit,Level,Semester,Stype)values('$ComCourse[$i]','$ComCode[$i]','$ComCredit[$i]','$LL','$SS','$ComType[$i]')";
                $Q4 = "Insert into sct(SName,CCode,Credit,Level,Semester,Stype)values('$ComCourse[$i]','$ComCode[$i]','$ComCredit[$i]','$LL','$SS','$ComType[$i]')";
                $Q5 = "Insert into hte(SName,CCode,Credit,Level,Semester,Stype)values('$ComCourse[$i]','$ComCode[$i]','$ComCredit[$i]','$LL','$SS','$ComType[$i]')";
                $Q6 = "Insert into enm(SName,CCode,Credit,Level,Semester,Stype)values('$ComCourse[$i]','$ComCode[$i]','$ComCredit[$i]','$LL','$SS','$ComType[$i]')";
                $Q7 = "Insert into ans(SName,CCode,Credit,Level,Semester,Stype)values('$ComCourse[$i]','$ComCode[$i]','$ComCredit[$i]','$LL','$SS','$ComType[$i]')";
                $Q8 = "Insert into aqt(SName,CCode,Credit,Level,Semester,Stype)values('$ComCourse[$i]','$ComCode[$i]','$ComCredit[$i]','$LL','$SS','$ComType[$i]')";
                $Q9 = "Insert into eag(SName,CCode,Credit,Level,Semester,Stype)values('$ComCourse[$i]','$ComCode[$i]','$ComCredit[$i]','$LL','$SS','$ComType[$i]')";
                $Q10 = "Insert into plt(SName,CCode,Credit,Level,Semester,Stype)values('$ComCourse[$i]','$ComCode[$i]','$ComCredit[$i]','$LL','$SS','$ComType[$i]')";
                $Q11 = "Insert into tea(SName,CCode,Credit,Level,Semester,Stype)values('$ComCourse[$i]','$ComCode[$i]','$ComCredit[$i]','$LL','$SS','$ComType[$i]')";
                $Q12 = "Insert into bst(SName,CCode,Credit,Level,Semester,Stype)values('$ComCourse[$i]','$ComCode[$i]','$ComCredit[$i]','$LL','$SS','$ComType[$i]')";
                $Q13 = "Insert into bet(SName,CCode,Credit,Level,Semester,Stype)values('$ComCourse[$i]','$ComCode[$i]','$ComCredit[$i]','$LL','$SS','$ComType[$i]')";

                if ($CS == "IIT") {
                    mysqli_query($con, $Q1);
                      echo '<script language="javascript">';
                    echo 'alert("Saved Successfully")';
                    echo '</script>';
                    echo '<script language="javascript">';

                    echo "window.location='GenTable.php' ";
                    echo '</script>';
                } else if ($CS == "CST") {
                    mysqli_query($con, $Q2);
                      echo '<script language="javascript">';
                    echo 'alert("Saved Successfully")';
                    echo '</script>';
                    echo '<script language="javascript">';

                    echo "window.location='GenTable.php' ";
                    echo '</script>';
                } else if ($CS == "MRT") {
                    mysqli_query($con, $Q3);
                      echo '<script language="javascript">';
                    echo 'alert("Saved Successfully")';
                    echo '</script>';
                    echo '<script language="javascript">';

                    echo "window.location='GenTable.php' ";
                    echo '</script>';
                } else if ($CS == "SCT") {
                    mysqli_query($con, $Q4);
                      echo '<script language="javascript">';
                    echo 'alert("Saved Successfully")';
                    echo '</script>';
                    echo '<script language="javascript">';

                    echo "window.location='GenTable.php' ";
                    echo '</script>';
                } else if ($CS == "HTE") {
                    mysqli_query($con, $Q5);
                      echo '<script language="javascript">';
                    echo 'alert("Saved Successfully")';
                    echo '</script>';
                    echo '<script language="javascript">';

                    echo "window.location='GenTable.php' ";
                    echo '</script>';
                } else if ($CS == "ENM") {
                    mysqli_query($con, $Q6);
                      echo '<script language="javascript">';
                    echo 'alert("Saved Successfully")';
                    echo '</script>';
                    echo '<script language="javascript">';

                    echo "window.location='GenTable.php' ";
                    echo '</script>';
                } else if ($CS == "ANS") {
                    mysqli_query($con, $Q7);
                      echo '<script language="javascript">';
                    echo 'alert("Saved Successfully")';
                    echo '</script>';
                    echo '<script language="javascript">';

                    echo "window.location='GenTable.php' ";
                    echo '</script>';
                } else if ($CS == "AQT") {
                    mysqli_query($con, $Q8);
                      echo '<script language="javascript">';
                    echo 'alert("Saved Successfully")';
                    echo '</script>';
                    echo '<script language="javascript">';

                    echo "window.location='GenTable.php' ";
                    echo '</script>';
                } else if ($CS == "EAG") {
                    mysqli_query($con, $Q9);
                      echo '<script language="javascript">';
                    echo 'alert("Saved Successfully")';
                    echo '</script>';
                    echo '<script language="javascript">';

                    echo "window.location='GenTable.php' ";
                    echo '</script>';
                } else if ($CS == "PLT") {
                    mysqli_query($con, $Q10);
                      echo '<script language="javascript">';
                    echo 'alert("Saved Successfully")';
                    echo '</script>';
                    echo '<script language="javascript">';

                    echo "window.location='GenTable.php' ";
                    echo '</script>';
                } else if ($CS == "TEA") {
                    mysqli_query($con, $Q11);
                      echo '<script language="javascript">';
                    echo 'alert("Saved Successfully")';
                    echo '</script>';
                    echo '<script language="javascript">';

                    echo "window.location='GenTable.php' ";
                    echo '</script>';
                } else if ($CS == "BST") {
                    mysqli_query($con, $Q12);
                      echo '<script language="javascript">';
                    echo 'alert("Saved Successfully")';
                    echo '</script>';
                    echo '<script language="javascript">';

                    echo "window.location='GenTable.php' ";
                    echo '</script>';
                } else if ($CS == "BET") {
                    mysqli_query($con, $Q13);
                      echo '<script language="javascript">';
                    echo 'alert("Saved Successfully")';
                    echo '</script>';
                    echo '<script language="javascript">';

                    echo "window.location='GenTable.php' ";
                    echo '</script>';
                }
            }
            $OPCourse = new SplFixedArray(20);
            $OPCode = new SplFixedArray(20);
            $OPCredit = new SplFixedArray(20);
            $OPType = new SplFixedArray(20);
            for ($i = 0; $i < $Op; $i++) {
                $OPCourse[$i] = $_POST["OpSubject$i"];
                $OPCode[$i] = $_POST["OpCourseCode$i"];
                $OPCredit[$i] = $_POST["OpCredit$i"];
                $OPType[$i] = $_POST["OpType$i"];

                $Q11 = "Insert into iit(SName,CCode,Credit,Level,Semester,Stype,OpDivision)values('$OPCourse[$i]','$OPCode[$i]','$OPCredit[$i]','$LL','$SS','$OPType[$i]','$DOS')";
                $Q12 = "Insert into cst(SName,CCode,Credit,Level,Semester,Stype,OpDivision)values('$OPCourse[$i]','$OPCode[$i]','$OPCredit[$i]','$LL','$SS','$OPType[$i]','$DOS')";
                $Q13 = "Insert into mrt(SName,CCode,Credit,Level,Semester,Stype,OpDivision)values('$OPCourse[$i]','$OPCode[$i]','$OPCredit[$i]','$LL','$SS','$OPType[$i]','$DOS')";
                $Q14 = "Insert into sct(SName,CCode,Credit,Level,Semester,Stype,OpDivision)values('$OPCourse[$i]','$OPCode[$i]','$OPCredit[$i]','$LL','$SS','$OPType[$i]','$DOS')";
                $Q15 = "Insert into hte(SName,CCode,Credit,Level,Semester,Stype,OpDivision)values('$OPCourse[$i]','$OPCode[$i]','$OPCredit[$i]','$LL','$SS','$OPType[$i]','$DOS')";
                $Q16 = "Insert into enm(SName,CCode,Credit,Level,Semester,Stype,OpDivision)values('$OPCourse[$i]','$OPCode[$i]','$OPCredit[$i]','$LL','$SS','$OPType[$i]','$DOS')";
                $Q17 = "Insert into ans(SName,CCode,Credit,Level,Semester,Stype,OpDivision)values('$OPCourse[$i]','$OPCode[$i]','$OPCredit[$i]','$LL','$SS','$OPType[$i]','$DOS')";
                $Q18 = "Insert into aqt(SName,CCode,Credit,Level,Semester,Stype,OpDivision)values('$OPCourse[$i]','$OPCode[$i]','$OPCredit[$i]','$LL','$SS','$OPType[$i]','$DOS')";
                $Q19 = "Insert into eag(SName,CCode,Credit,Level,Semester,Stype,OpDivision)values('$OPCourse[$i]','$OPCode[$i]','$OPCredit[$i]','$LL','$SS','$OPType[$i]','$DOS')";
                $Q110 = "Insert into plt(SName,CCode,Credit,Level,Semester,Stype,OpDivision)values('$OPCourse[$i]','$OPCode[$i]','$OPCredit[$i]','$LL','$SS','$OPType[$i]','$DOS')";
                $Q111 = "Insert into tea(SName,CCode,Credit,Level,Semester,Stype,OpDivision)values('$OPCourse[$i]','$OPCode[$i]','$OPCredit[$i]','$LL','$SS','$OPType[$i]','$DOS')";
                $Q112 = "Insert into bst(SName,CCode,Credit,Level,Semester,Stype,OpDivision)values('$OPCourse[$i]','$OPCode[$i]','$OPCredit[$i]','$LL','$SS','$OPType[$i]','$DOS')";
                $Q113 = "Insert into bet(SName,CCode,Credit,Level,Semester,Stype,OpDivision)values('$OPCourse[$i]','$OPCode[$i]','$OPCredit[$i]','$LL','$SS','$OPType[$i]','$DOS')";

                if ($CS == "IIT") {
                    mysqli_query($con, $Q11);
                  
                } else if ($CS == "CST") {
                    mysqli_query($con, $Q12);
                } else if ($CS == "MRT") {
                    mysqli_query($con, $Q13);
                } else if ($CS == "SCT") {
                    mysqli_query($con, $Q14);
                } else if ($CS == "HTE") {
                    mysqli_query($con, $Q15);
                } else if ($CS == "ENM") {
                    mysqli_query($con, $Q16);
                } else if ($CS == "ANS") {
                    mysqli_query($con, $Q17);
                } else if ($CS == "AQT") {
                    mysqli_query($con, $Q18);
                } else if ($CS == "EAG") {
                    mysqli_query($con, $Q19);
                } else if ($CS == "PLT") {
                    mysqli_query($con, $Q110);
                } else if ($CS == "TEA") {
                    mysqli_query($con, $Q111);
                } else if ($CS == "BST") {
                    mysqli_query($con, $Q112);
                } else if ($CS == "BET") {
                    mysqli_query($con, $Q113);
                }
            }
        }
        ?>
    </body>
</html>
<?php include './footer.php';?>