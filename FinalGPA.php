
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
                right: 15%;
            }
            .button:hover{
                background-color: orange;
                color: white;
                cursor:pointer;
                box-shadow: 5px 3px gray;
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
    <h1 style="text-align: center;">  UWU GPA Calculator</h1>
    <hr>
    <?php
    $Semester = $_GET["S"];

    $_SESSION["Semester"] = $Semester;
    $Sem = $_SESSION["Semester"];

    echo "<b>Faculty : </b>" . $_SESSION["Faculty"] . "<br>";
    echo "<b>Course : </b>" . $_SESSION["Course"] . "<br>";
    echo "<b>Level : </b>" . $_SESSION["Level"] . "<br>";
    echo "<b>Semester : </b>" . $_SESSION["Semester"] . "<br>";
    
    $clean="Truncate table semester";
    mysqli_query($con, $clean);
    ?>
    <hr>
    <br>
    <br>
    <center>
        <form action="GpaEnd.php" method="Post">
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
                    $query = "Select * from iit where Level='$LV' and Semester='$Sem'  and SType='Compalsory' ";
                    $result = mysqli_query($con, $query);
                    //$Count = new SplFixedArray(20);
                    $B = 0;
                    $No = 0;
                    $OD = 0;
                    while ($row = mysqli_fetch_assoc($result)) {


                        echo "<tr>";
                        echo "<td>" . $row['CCode'] . "-" . $row['Credit'];
                        echo "<td>" . $row['SName'];

                        echo "<td> <select name=\"Grade$B\">
                <option value=\"A+\">A+</option>
                <option value=\"A\">A</option>
                <option value=\"A-\">A-</option>
                <option value=\"B+\">B+</option>
                <option value=\"B\">B</option>
                <option value=\"B-\">B-</option>
                <option value=\"C+\">C+</option>
                <option value=\"C\">C</option>
                <option value=\"C-\">C-</option>
                <option value=\"D+\">D+</option>
                <option value=\"D\">D</option>
                <option value=\"E\">E</option>
            </select>";

                        echo "</tr>";
                        $B++;
                    }


                    if (mysqli_query($con, $query)) {
                        $query3 = "SELECT * from iit where Level='$LV' and Semester='$Sem'  and SType='Optional' ";

                        $result3 = mysqli_query($con, $query3);
                        while ($row3 = mysqli_fetch_assoc($result3)) {
                            $OD = $row3['OpDivision'];
                        }
                        for ($i = 0; $i < $OD; $i++) {
                            $query1 = "SELECT * from iit where Level='$LV' and Semester='$Sem'  and SType='Optional' ";
                            $result2 = mysqli_query($con, $query1);

                            echo "<tr>";

                            echo "<td> <select name=\"Code$i\">";
                            while ($row2 = mysqli_fetch_assoc($result2)) {
                                $choose = $row['CCode'];
                                echo"  <option value=\"" . $row2['CCode'] . "-" . $row2['Credit'] . " \">" . $row2['CCode'] . "-" . $row2['Credit'] . "</option>";
                            }
                            echo " </select>";
                            //$query4 = "SELECT * from iit where CCode='$choose' ";
                            $query4 = "SELECT * from iit where Level='$LV' and Semester='$Sem'  and SType='Optional' ";
                            $result4 = mysqli_query($con, $query4);
                            echo "<td> <select name=\"OpCourse$i\">";
                            while ($row4 = mysqli_fetch_assoc($result4)) {



                                echo"  <option value=\"" . $row4['SName'] . " \">" . $row4['SName'] . "</option>";
                            }
                            echo " </select>";
                            echo "<td> <select name=\"OpGrade$i\">
                <option value=\"A+\">A+</option>
                <option value=\"A\">A</option>
                <option value=\"A-\">A-</option>
                <option value=\"B+\">B+</option>
                <option value=\"B\">B</option>
                <option value=\"B-\">B-</option>
                <option value=\"C+\">C+</option>
                <option value=\"C\">C</option>
                <option value=\"C-\">C-</option>
                <option value=\"D+\">D+</option>
                <option value=\"D\">D</option>
                <option value=\"E\">E</option>
            </select>";


                            echo "</tr>";
                        }
                    }
                    $No = $No + $B ;
                }

else if ($RQ == "CST") {
                    $LV = $_SESSION["Level"];
                    $query = "Select * from cst where Level='$LV' and Semester='$Sem'    and SType='Compalsory' ";
                    $result = mysqli_query($con, $query);
                    $Count = new SplFixedArray(20);
                    $B = 0;
                    $No = 0;
                    $OD = 0;
                    while ($row = mysqli_fetch_assoc($result)) {

                   
                        echo "<tr>";
                        echo "<td>" . $row['CCode'] . "-" . $row['Credit'];
                        echo "<td>" . $row['SName'];

                        echo "<td> <select name=\"Grade$B\">
                <option value=\"A+\">A+</option>
                <option value=\"A\">A</option>
                <option value=\"A-\">A-</option>
                <option value=\"B+\">B+</option>
                <option value=\"B\">B</option>
                <option value=\"B-\">B-</option>
                <option value=\"C+\">C+</option>
                <option value=\"C\">C</option>
                <option value=\"C-\">C-</option>
                <option value=\"D+\">D+</option>
                <option value=\"D\">D</option>
                <option value=\"E\">E</option>
            </select>";

                        echo "</tr>";
                        $B++;
                    }
                    if (mysqli_query($con, $query)) {
                        $query3 = "SELECT * from cst where Level='$LV' and Semester='$Sem'  and SType='Optional' ";

                        $result3 = mysqli_query($con, $query3);
                        while ($row3 = mysqli_fetch_assoc($result3)) {
                            $OD = $row3['OpDivision'];
                        }
                        for ($i = 0; $i < $OD; $i++) {
                            $query1 = "SELECT * from cst where Level='$LV' and Semester='$Sem'  and SType='Optional' ";
                            $result2 = mysqli_query($con, $query1);

                            echo "<tr>";

                            echo "<td> <select name=\"Code$i\">";
                            while ($row2 = mysqli_fetch_assoc($result2)) {
                                $choose = $row['CCode'];
                                echo"  <option value=\"" . $row2['CCode'] . "-" . $row2['Credit'] . " \">" . $row2['CCode'] . "-" . $row2['Credit'] . "</option>";
                            }
                            echo " </select>";
                            //$query4 = "SELECT * from iit where CCode='$choose' ";
                            $query4 = "SELECT * from cst where Level='$LV' and Semester='$Sem'  and SType='Optional' ";
                            $result4 = mysqli_query($con, $query4);
                            echo "<td> <select name=\"OpCourse$i\">";
                            while ($row4 = mysqli_fetch_assoc($result4)) {



                                echo"  <option value=\"" . $row4['SName'] . " \">" . $row4['SName'] . "</option>";
                            }
                            echo " </select>";
                            echo "<td> <select name=\"OpGrade$i\">
                <option value=\"A+\">A+</option>
                <option value=\"A\">A</option>
                <option value=\"A-\">A-</option>
                <option value=\"B+\">B+</option>
                <option value=\"B\">B</option>
                <option value=\"B-\">B-</option>
                <option value=\"C+\">C+</option>
                <option value=\"C\">C</option>
                <option value=\"C-\">C-</option>
                <option value=\"D+\">D+</option>
                <option value=\"D\">D</option>
                <option value=\"E\">E</option>
            </select>";


                            echo "</tr>";
                        }
                    }

                    $No = $No + $B;
                } else if ($RQ == "MRT") {
                    $LV = $_SESSION["Level"];
                    $query = "Select * from mrt where Level='$LV' and Semester='$Sem'   and SType='Compalsory' ";
                    $result = mysqli_query($con, $query);
                    $Count = new SplFixedArray(20);
                    $B = 0;
                    $No = 0;
                    $OD = 0;
                    while ($row = mysqli_fetch_assoc($result)) {

                        
                        echo "<tr>";
                        echo "<td>" . $row['CCode'] . "-" . $row['Credit'];
                        echo "<td>" . $row['SName'];

                        echo "<td> <select name=\"Grade$B\">
                <option value=\"A+\">A+</option>
                <option value=\"A\">A</option>
                <option value=\"A-\">A-</option>
                <option value=\"B+\">B+</option>
                <option value=\"B\">B</option>
                <option value=\"B-\">B-</option>
                <option value=\"C+\">C+</option>
                <option value=\"C\">C</option>
                <option value=\"C-\">C-</option>
                <option value=\"D+\">D+</option>
                <option value=\"D\">D</option>
                <option value=\"E\">E</option>
            </select>";

                        echo "</tr>";
                        $B++;
                    }
                    if (mysqli_query($con, $query)) {
                        $query3 = "SELECT * from mrt where Level='$LV' and Semester='$Sem'  and SType='Optional' ";

                        $result3 = mysqli_query($con, $query3);
                        while ($row3 = mysqli_fetch_assoc($result3)) {
                            $OD = $row3['OpDivision'];
                        }
                        for ($i = 0; $i < $OD; $i++) {
                            $query1 = "SELECT * from mrt where Level='$LV' and Semester='$Sem'  and SType='Optional' ";
                            $result2 = mysqli_query($con, $query1);

                            echo "<tr>";

                            echo "<td> <select name=\"Code$i\">";
                            while ($row2 = mysqli_fetch_assoc($result2)) {
                                $choose = $row['CCode'];
                                echo"  <option value=\"" . $row2['CCode'] . "-" . $row2['Credit'] . " \">" . $row2['CCode'] . "-" . $row2['Credit'] . "</option>";
                            }
                            echo " </select>";
                            //$query4 = "SELECT * from iit where CCode='$choose' ";
                            $query4 = "SELECT * from mrt where Level='$LV' and Semester='$Sem'  and SType='Optional' ";
                            $result4 = mysqli_query($con, $query4);
                            echo "<td> <select name=\"OpCourse$i\">";
                            while ($row4 = mysqli_fetch_assoc($result4)) {



                                echo"  <option value=\"" . $row4['SName'] . " \">" . $row4['SName'] . "</option>";
                            }
                            echo " </select>";
                            echo "<td> <select name=\"OpGrade$i\">
                <option value=\"A+\">A+</option>
                <option value=\"A\">A</option>
                <option value=\"A-\">A-</option>
                <option value=\"B+\">B+</option>
                <option value=\"B\">B</option>
                <option value=\"B-\">B-</option>
                <option value=\"C+\">C+</option>
                <option value=\"C\">C</option>
                <option value=\"C-\">C-</option>
                <option value=\"D+\">D+</option>
                <option value=\"D\">D</option>
                <option value=\"E\">E</option>
            </select>";


                            echo "</tr>";
                        }
                    }

                    $No = $No + $B;
                } else if ($RQ == "SCT") {
                    $LV = $_SESSION["Level"];
                    $query = "Select * from sct where Level='$LV' and Semester='$Sem'   and SType='Compalsory' ";
                    $result = mysqli_query($con, $query);
                    $Count = new SplFixedArray(20);
                    $B = 0;
                    $No = 0;
                    $OD = 0;
                    while ($row = mysqli_fetch_assoc($result)) {

                      
                        echo "<tr>";
                        echo "<td>" . $row['CCode'] . "-" . $row['Credit'];
                        echo "<td>" . $row['SName'];

                        echo "<td> <select name=\"Grade$B\">
                <option value=\"A+\">A+</option>
                <option value=\"A\">A</option>
                <option value=\"A-\">A-</option>
                <option value=\"B+\">B+</option>
                <option value=\"B\">B</option>
                <option value=\"B-\">B-</option>
                <option value=\"C+\">C+</option>
                <option value=\"C\">C</option>
                <option value=\"C-\">C-</option>
                <option value=\"D+\">D+</option>
                <option value=\"D\">D</option>
                <option value=\"E\">E</option>
            </select>";

                        echo "</tr>";
                        $B++;
                    }
                                      if (mysqli_query($con, $query)) {
                        $query3 = "SELECT * from sct where Level='$LV' and Semester='$Sem'  and SType='Optional' ";

                        $result3 = mysqli_query($con, $query3);
                        while ($row3 = mysqli_fetch_assoc($result3)) {
                            $OD = $row3['OpDivision'];
                        }
                        for ($i = 0; $i < $OD; $i++) {
                            $query1 = "SELECT * from sct where Level='$LV' and Semester='$Sem'  and SType='Optional' ";
                            $result2 = mysqli_query($con, $query1);

                            echo "<tr>";

                            echo "<td> <select name=\"Code$i\">";
                            while ($row2 = mysqli_fetch_assoc($result2)) {
                                $choose = $row['CCode'];
                                echo"  <option value=\"" . $row2['CCode'] . "-" . $row2['Credit'] . " \">" . $row2['CCode'] . "-" . $row2['Credit'] . "</option>";
                            }
                            echo " </select>";
                            //$query4 = "SELECT * from iit where CCode='$choose' ";
                            $query4 = "SELECT * from sct where Level='$LV' and Semester='$Sem'  and SType='Optional' ";
                            $result4 = mysqli_query($con, $query4);
                            echo "<td> <select name=\"OpCourse$i\">";
                            while ($row4 = mysqli_fetch_assoc($result4)) {



                                echo"  <option value=\"" . $row4['SName'] . " \">" . $row4['SName'] . "</option>";
                            }
                            echo " </select>";
                            echo "<td> <select name=\"OpGrade$i\">
                <option value=\"A+\">A+</option>
                <option value=\"A\">A</option>
                <option value=\"A-\">A-</option>
                <option value=\"B+\">B+</option>
                <option value=\"B\">B</option>
                <option value=\"B-\">B-</option>
                <option value=\"C+\">C+</option>
                <option value=\"C\">C</option>
                <option value=\"C-\">C-</option>
                <option value=\"D+\">D+</option>
                <option value=\"D\">D</option>
                <option value=\"E\">E</option>
            </select>";


                            echo "</tr>";
                        }
                    }

                    $No = $No + $B;
                } else if ($RQ == "BET") {
                    $LV = $_SESSION["Level"];
                    $query = "Select * from bet where Level='$LV' and Semester='$Sem'   and SType='Compalsory' ";
                    $result = mysqli_query($con, $query);
                    $Count = new SplFixedArray(20);
                    $B = 0;
                    $No = 0;
                    $OD = 0;
                    while ($row = mysqli_fetch_assoc($result)) {

                   
                        echo "<tr>";
                        echo "<td>" . $row['CCode'] . "-" . $row['Credit'];
                        echo "<td>" . $row['SName'];

                        echo "<td> <select name=\"Grade$B\">
                <option value=\"A+\">A+</option>
                <option value=\"A\">A</option>
                <option value=\"A-\">A-</option>
                <option value=\"B+\">B+</option>
                <option value=\"B\">B</option>
                <option value=\"B-\">B-</option>
                <option value=\"C+\">C+</option>
                <option value=\"C\">C</option>
                <option value=\"C-\">C-</option>
                <option value=\"D+\">D+</option>
                <option value=\"D\">D</option>
                <option value=\"E\">E</option>
            </select>";

                        echo "</tr>";
                        $B++;
                    }
                  if (mysqli_query($con, $query)) {
                        $query3 = "SELECT * from bet where Level='$LV' and Semester='$Sem'  and SType='Optional' ";

                        $result3 = mysqli_query($con, $query3);
                        while ($row3 = mysqli_fetch_assoc($result3)) {
                            $OD = $row3['OpDivision'];
                        }
                        for ($i = 0; $i < $OD; $i++) {
                            $query1 = "SELECT * from bet where Level='$LV' and Semester='$Sem'  and SType='Optional' ";
                            $result2 = mysqli_query($con, $query1);

                            echo "<tr>";

                            echo "<td> <select name=\"Code$i\">";
                            while ($row2 = mysqli_fetch_assoc($result2)) {
                                $choose = $row['CCode'];
                                echo"  <option value=\"" . $row2['CCode'] . "-" . $row2['Credit'] . " \">" . $row2['CCode'] . "-" . $row2['Credit'] . "</option>";
                            }
                            echo " </select>";
                            //$query4 = "SELECT * from iit where CCode='$choose' ";
                            $query4 = "SELECT * from bet where Level='$LV' and Semester='$Sem'  and SType='Optional' ";
                            $result4 = mysqli_query($con, $query4);
                            echo "<td> <select name=\"OpCourse$i\">";
                            while ($row4 = mysqli_fetch_assoc($result4)) {



                                echo"  <option value=\"" . $row4['SName'] . " \">" . $row4['SName'] . "</option>";
                            }
                            echo " </select>";
                            echo "<td> <select name=\"OpGrade$i\">
                <option value=\"A+\">A+</option>
                <option value=\"A\">A</option>
                <option value=\"A-\">A-</option>
                <option value=\"B+\">B+</option>
                <option value=\"B\">B</option>
                <option value=\"B-\">B-</option>
                <option value=\"C+\">C+</option>
                <option value=\"C\">C</option>
                <option value=\"C-\">C-</option>
                <option value=\"D+\">D+</option>
                <option value=\"D\">D</option>
                <option value=\"E\">E</option>
            </select>";


                            echo "</tr>";
                        }
                    }
                    $No = $No + $B;
                } else if ($RQ == "BST") {
                    $LV = $_SESSION["Level"];
                    $query = "Select * from bst where Level='$LV' and Semester='$Sem'   and SType='Compalsory' ";
                    $result = mysqli_query($con, $query);
                    $Count = new SplFixedArray(20);
                    $B = 0;
                    $No = 0;
                    $OD = 0;
                    while ($row = mysqli_fetch_assoc($result)) {

                        
                        echo "<tr>";
                        echo "<td>" . $row['CCode'] . "-" . $row['Credit'];
                        echo "<td>" . $row['SName'];

                        echo "<td> <select name=\"Grade$B\">
                <option value=\"A+\">A+</option>
                <option value=\"A\">A</option>
                <option value=\"A-\">A-</option>
                <option value=\"B+\">B+</option>
                <option value=\"B\">B</option>
                <option value=\"B-\">B-</option>
                <option value=\"C+\">C+</option>
                <option value=\"C\">C</option>
                <option value=\"C-\">C-</option>
                <option value=\"D+\">D+</option>
                <option value=\"D\">D</option>
                <option value=\"E\">E</option>
            </select>";

                        echo "</tr>";
                        $B++;
                    }
                                      if (mysqli_query($con, $query)) {
                        $query3 = "SELECT * from bst where Level='$LV' and Semester='$Sem'  and SType='Optional' ";

                        $result3 = mysqli_query($con, $query3);
                        while ($row3 = mysqli_fetch_assoc($result3)) {
                            $OD = $row3['OpDivision'];
                        }
                        for ($i = 0; $i < $OD; $i++) {
                            $query1 = "SELECT * from bst where Level='$LV' and Semester='$Sem'  and SType='Optional' ";
                            $result2 = mysqli_query($con, $query1);

                            echo "<tr>";

                            echo "<td> <select name=\"Code$i\">";
                            while ($row2 = mysqli_fetch_assoc($result2)) {
                                $choose = $row['CCode'];
                                echo"  <option value=\"" . $row2['CCode'] . "-" . $row2['Credit'] . " \">" . $row2['CCode'] . "-" . $row2['Credit'] . "</option>";
                            }
                            echo " </select>";
                            //$query4 = "SELECT * from iit where CCode='$choose' ";
                            $query4 = "SELECT * from bst where Level='$LV' and Semester='$Sem'  and SType='Optional' ";
                            $result4 = mysqli_query($con, $query4);
                            echo "<td> <select name=\"OpCourse$i\">";
                            while ($row4 = mysqli_fetch_assoc($result4)) {



                                echo"  <option value=\"" . $row4['SName'] . " \">" . $row4['SName'] . "</option>";
                            }
                            echo " </select>";
                            echo "<td> <select name=\"OpGrade$i\">
                <option value=\"A+\">A+</option>
                <option value=\"A\">A</option>
                <option value=\"A-\">A-</option>
                <option value=\"B+\">B+</option>
                <option value=\"B\">B</option>
                <option value=\"B-\">B-</option>
                <option value=\"C+\">C+</option>
                <option value=\"C\">C</option>
                <option value=\"C-\">C-</option>
                <option value=\"D+\">D+</option>
                <option value=\"D\">D</option>
                <option value=\"E\">E</option>
            </select>";


                            echo "</tr>";
                        }
                    }

                    $No = $No + $B;
                } else if ($RQ == "HTE") {
                    $LV = $_SESSION["Level"];
                    $query = "Select * from hte where Level='$LV' and Semester='$Sem'   and SType='Compalsory' ";
                    $result = mysqli_query($con, $query);
                    $Count = new SplFixedArray(20);
                    $B = 0;
                    $No = 0;
                    $OD = 0;
                    while ($row = mysqli_fetch_assoc($result)) {

                  
                        echo "<tr>";
                        echo "<td>" . $row['CCode'] . "-" . $row['Credit'];
                        echo "<td>" . $row['SName'];

                        echo "<td> <select name=\"Grade$B\">
                <option value=\"A+\">A+</option>
                <option value=\"A\">A</option>
                <option value=\"A-\">A-</option>
                <option value=\"B+\">B+</option>
                <option value=\"B\">B</option>
                <option value=\"B-\">B-</option>
                <option value=\"C+\">C+</option>
                <option value=\"C\">C</option>
                <option value=\"C-\">C-</option>
                <option value=\"D+\">D+</option>
                <option value=\"D\">D</option>
                <option value=\"E\">E</option>
            </select>";

                        echo "</tr>";
                        $B++;
                    }

                    $No = $No + $B;
                } else if ($RQ == "ENM") {
                    $LV = $_SESSION["Level"];
                    $query = "Select * from enm where Level='$LV' and Semester='$Sem'   and SType='Compalsory' ";
                    $result = mysqli_query($con, $query);
                    $Count = new SplFixedArray(20);
                    $B = 0;
                    $No = 0;
                    $OD = 0;
                    while ($row = mysqli_fetch_assoc($result)) {

                      
                        echo "<tr>";
                        echo "<td>" . $row['CCode'] . "-" . $row['Credit'];
                        echo "<td>" . $row['SName'];

                        echo "<td> <select name=\"Grade$B\">
                <option value=\"A+\">A+</option>
                <option value=\"A\">A</option>
                <option value=\"A-\">A-</option>
                <option value=\"B+\">B+</option>
                <option value=\"B\">B</option>
                <option value=\"B-\">B-</option>
                <option value=\"C+\">C+</option>
                <option value=\"C\">C</option>
                <option value=\"C-\">C-</option>
                <option value=\"D+\">D+</option>
                <option value=\"D\">D</option>
                <option value=\"E\">E</option>
            </select>";

                        echo "</tr>";
                        $B++;
                    }
                                      if (mysqli_query($con, $query)) {
                        $query3 = "SELECT * from enm where Level='$LV' and Semester='$Sem'  and SType='Optional' ";

                        $result3 = mysqli_query($con, $query3);
                        while ($row3 = mysqli_fetch_assoc($result3)) {
                            $OD = $row3['OpDivision'];
                        }
                        for ($i = 0; $i < $OD; $i++) {
                            $query1 = "SELECT * from enm where Level='$LV' and Semester='$Sem'  and SType='Optional' ";
                            $result2 = mysqli_query($con, $query1);

                            echo "<tr>";

                            echo "<td> <select name=\"Code$i\">";
                            while ($row2 = mysqli_fetch_assoc($result2)) {
                                $choose = $row['CCode'];
                                echo"  <option value=\"" . $row2['CCode'] . "-" . $row2['Credit'] . " \">" . $row2['CCode'] . "-" . $row2['Credit'] . "</option>";
                            }
                            echo " </select>";
                            //$query4 = "SELECT * from iit where CCode='$choose' ";
                            $query4 = "SELECT * from enm where Level='$LV' and Semester='$Sem'  and SType='Optional' ";
                            $result4 = mysqli_query($con, $query4);
                            echo "<td> <select name=\"OpCourse$i\">";
                            while ($row4 = mysqli_fetch_assoc($result4)) {



                                echo"  <option value=\"" . $row4['SName'] . " \">" . $row4['SName'] . "</option>";
                            }
                            echo " </select>";
                            echo "<td> <select name=\"OpGrade$i\">
                <option value=\"A+\">A+</option>
                <option value=\"A\">A</option>
                <option value=\"A-\">A-</option>
                <option value=\"B+\">B+</option>
                <option value=\"B\">B</option>
                <option value=\"B-\">B-</option>
                <option value=\"C+\">C+</option>
                <option value=\"C\">C</option>
                <option value=\"C-\">C-</option>
                <option value=\"D+\">D+</option>
                <option value=\"D\">D</option>
                <option value=\"E\">E</option>
            </select>";


                            echo "</tr>";
                        }
                    }

                    $No = $No + $B;
                } else if ($RQ == "ANS") {
                    $LV = $_SESSION["Level"];
                    $query = "Select * from ans where Level='$LV' and Semester='$Sem'    and SType='Compalsory' ";
                    $result = mysqli_query($con, $query);
                    $Count = new SplFixedArray(20);
                    $B = 0;
                    $No = 0;
                    $OD = 0;
                    while ($row = mysqli_fetch_assoc($result)) {

                   
                        echo "<tr>";
                        echo "<td>" . $row['CCode'] . "-" . $row['Credit'];
                        echo "<td>" . $row['SName'];

                        echo "<td> <select name=\"Grade$B\">
                <option value=\"A+\">A+</option>
                <option value=\"A\">A</option>
                <option value=\"A-\">A-</option>
                <option value=\"B+\">B+</option>
                <option value=\"B\">B</option>
                <option value=\"B-\">B-</option>
                <option value=\"C+\">C+</option>
                <option value=\"C\">C</option>
                <option value=\"C-\">C-</option>
                <option value=\"D+\">D+</option>
                <option value=\"D\">D</option>
                <option value=\"E\">E</option>
            </select>";

                        echo "</tr>";
                        $B++;
                    }
                                      if (mysqli_query($con, $query)) {
                        $query3 = "SELECT * from ans where Level='$LV' and Semester='$Sem'  and SType='Optional' ";

                        $result3 = mysqli_query($con, $query3);
                        while ($row3 = mysqli_fetch_assoc($result3)) {
                            $OD = $row3['OpDivision'];
                        }
                        for ($i = 0; $i < $OD; $i++) {
                            $query1 = "SELECT * from ans where Level='$LV' and Semester='$Sem'  and SType='Optional' ";
                            $result2 = mysqli_query($con, $query1);

                            echo "<tr>";

                            echo "<td> <select name=\"Code$i\">";
                            while ($row2 = mysqli_fetch_assoc($result2)) {
                                $choose = $row['CCode'];
                                echo"  <option value=\"" . $row2['CCode'] . "-" . $row2['Credit'] . " \">" . $row2['CCode'] . "-" . $row2['Credit'] . "</option>";
                            }
                            echo " </select>";
                            //$query4 = "SELECT * from iit where CCode='$choose' ";
                            $query4 = "SELECT * from ans where Level='$LV' and Semester='$Sem'  and SType='Optional' ";
                            $result4 = mysqli_query($con, $query4);
                            echo "<td> <select name=\"OpCourse$i\">";
                            while ($row4 = mysqli_fetch_assoc($result4)) {



                                echo"  <option value=\"" . $row4['SName'] . " \">" . $row4['SName'] . "</option>";
                            }
                            echo " </select>";
                            echo "<td> <select name=\"OpGrade$i\">
                <option value=\"A+\">A+</option>
                <option value=\"A\">A</option>
                <option value=\"A-\">A-</option>
                <option value=\"B+\">B+</option>
                <option value=\"B\">B</option>
                <option value=\"B-\">B-</option>
                <option value=\"C+\">C+</option>
                <option value=\"C\">C</option>
                <option value=\"C-\">C-</option>
                <option value=\"D+\">D+</option>
                <option value=\"D\">D</option>
                <option value=\"E\">E</option>
            </select>";


                            echo "</tr>";
                        }
                    }

                    $No = $No + $B;
                } else if ($RQ == "AQT") {
                    $LV = $_SESSION["Level"];
                    $query = "Select * from aqt where Level='$LV' and Semester='$Sem'    and SType='Compalsory' ";
                    $result = mysqli_query($con, $query);
                    $Count = new SplFixedArray(20);
                    $B = 0;
                    $No = 0;
                    $OD = 0;
                    while ($row = mysqli_fetch_assoc($result)) {

                        
                        echo "<tr>";
                        echo "<td>" . $row['CCode'] . "-" . $row['Credit'];
                        echo "<td>" . $row['SName'];

                        echo "<td> <select name=\"Grade$B\">
                <option value=\"A+\">A+</option>
                <option value=\"A\">A</option>
                <option value=\"A-\">A-</option>
                <option value=\"B+\">B+</option>
                <option value=\"B\">B</option>
                <option value=\"B-\">B-</option>
                <option value=\"C+\">C+</option>
                <option value=\"C\">C</option>
                <option value=\"C-\">C-</option>
                <option value=\"D+\">D+</option>
                <option value=\"D\">D</option>
                <option value=\"E\">E</option>
            </select>";

                        echo "</tr>";
                        $B++;
                    }
                                      if (mysqli_query($con, $query)) {
                        $query3 = "SELECT * from aqt where Level='$LV' and Semester='$Sem'  and SType='Optional' ";

                        $result3 = mysqli_query($con, $query3);
                        while ($row3 = mysqli_fetch_assoc($result3)) {
                            $OD = $row3['OpDivision'];
                        }
                        for ($i = 0; $i < $OD; $i++) {
                            $query1 = "SELECT * from aqt where Level='$LV' and Semester='$Sem'  and SType='Optional' ";
                            $result2 = mysqli_query($con, $query1);

                            echo "<tr>";

                            echo "<td> <select name=\"Code$i\">";
                            while ($row2 = mysqli_fetch_assoc($result2)) {
                                $choose = $row['CCode'];
                                echo"  <option value=\"" . $row2['CCode'] . "-" . $row2['Credit'] . " \">" . $row2['CCode'] . "-" . $row2['Credit'] . "</option>";
                            }
                            echo " </select>";
                            //$query4 = "SELECT * from iit where CCode='$choose' ";
                            $query4 = "SELECT * from aqt where Level='$LV' and Semester='$Sem'  and SType='Optional' ";
                            $result4 = mysqli_query($con, $query4);
                            echo "<td> <select name=\"OpCourse$i\">";
                            while ($row4 = mysqli_fetch_assoc($result4)) {



                                echo"  <option value=\"" . $row4['SName'] . " \">" . $row4['SName'] . "</option>";
                            }
                            echo " </select>";
                            echo "<td> <select name=\"OpGrade$i\">
                <option value=\"A+\">A+</option>
                <option value=\"A\">A</option>
                <option value=\"A-\">A-</option>
                <option value=\"B+\">B+</option>
                <option value=\"B\">B</option>
                <option value=\"B-\">B-</option>
                <option value=\"C+\">C+</option>
                <option value=\"C\">C</option>
                <option value=\"C-\">C-</option>
                <option value=\"D+\">D+</option>
                <option value=\"D\">D</option>
                <option value=\"E\">E</option>
            </select>";


                            echo "</tr>";
                        }
                    }

                    $No = $No + $B;
                } else if ($RQ == "EAG") {
                    $LV = $_SESSION["Level"];
                    $query = "Select * from eag where Level='$LV' and Semester='$Sem'  and SType='Compalsory' ";
                    $result = mysqli_query($con, $query);
                    $Count = new SplFixedArray(20);
                    $B = 0;
                    $No = 0;
                    $OD = 0;
                    while ($row = mysqli_fetch_assoc($result)) {

                        
                        echo "<tr>";
                        echo "<td>" . $row['CCode'] . "-" . $row['Credit'];
                        echo "<td>" . $row['SName'];

                        echo "<td> <select name=\"Grade$B\">
                <option value=\"A+\">A+</option>
                <option value=\"A\">A</option>
                <option value=\"A-\">A-</option>
                <option value=\"B+\">B+</option>
                <option value=\"B\">B</option>
                <option value=\"B-\">B-</option>
                <option value=\"C+\">C+</option>
                <option value=\"C\">C</option>
                <option value=\"C-\">C-</option>
                <option value=\"D+\">D+</option>
                <option value=\"D\">D</option>
                <option value=\"E\">E</option>
            </select>";

                        echo "</tr>";
                        $B++;
                    }
                                      if (mysqli_query($con, $query)) {
                        $query3 = "SELECT * from eag where Level='$LV' and Semester='$Sem'  and SType='Optional' ";

                        $result3 = mysqli_query($con, $query3);
                        while ($row3 = mysqli_fetch_assoc($result3)) {
                            $OD = $row3['OpDivision'];
                        }
                        for ($i = 0; $i < $OD; $i++) {
                            $query1 = "SELECT * from eag where Level='$LV' and Semester='$Sem'  and SType='Optional' ";
                            $result2 = mysqli_query($con, $query1);

                            echo "<tr>";

                            echo "<td> <select name=\"Code$i\">";
                            while ($row2 = mysqli_fetch_assoc($result2)) {
                                $choose = $row['CCode'];
                                echo"  <option value=\"" . $row2['CCode'] . "-" . $row2['Credit'] . " \">" . $row2['CCode'] . "-" . $row2['Credit'] . "</option>";
                            }
                            echo " </select>";
                            //$query4 = "SELECT * from iit where CCode='$choose' ";
                            $query4 = "SELECT * from eag where Level='$LV' and Semester='$Sem'  and SType='Optional' ";
                            $result4 = mysqli_query($con, $query4);
                            echo "<td> <select name=\"OpCourse$i\">";
                            while ($row4 = mysqli_fetch_assoc($result4)) {



                                echo"  <option value=\"" . $row4['SName'] . " \">" . $row4['SName'] . "</option>";
                            }
                            echo " </select>";
                            echo "<td> <select name=\"OpGrade$i\">
                <option value=\"A+\">A+</option>
                <option value=\"A\">A</option>
                <option value=\"A-\">A-</option>
                <option value=\"B+\">B+</option>
                <option value=\"B\">B</option>
                <option value=\"B-\">B-</option>
                <option value=\"C+\">C+</option>
                <option value=\"C\">C</option>
                <option value=\"C-\">C-</option>
                <option value=\"D+\">D+</option>
                <option value=\"D\">D</option>
                <option value=\"E\">E</option>
            </select>";


                            echo "</tr>";
                        }
                    }

                    $No = $No + $B;
                } else if ($RQ == "PLT") {
                    $LV = $_SESSION["Level"];
                    $query = "Select * from plt where Level='$LV' and Semester='$Sem'   and SType='Compalsory' ";
                    $result = mysqli_query($con, $query);
                    $Count = new SplFixedArray(20);
                    $B = 0;
                    $No = 0;
                    $OD = 0;
                    while ($row = mysqli_fetch_assoc($result)) {

                     
                        echo "<tr>";
                        echo "<td>" . $row['CCode'] . "-" . $row['Credit'];
                        echo "<td>" . $row['SName'];

                        echo "<td> <select name=\"Grade$B\">
                <option value=\"A+\">A+</option>
                <option value=\"A\">A</option>
                <option value=\"A-\">A-</option>
                <option value=\"B+\">B+</option>
                <option value=\"B\">B</option>
                <option value=\"B-\">B-</option>
                <option value=\"C+\">C+</option>
                <option value=\"C\">C</option>
                <option value=\"C-\">C-</option>
                <option value=\"D+\">D+</option>
                <option value=\"D\">D</option>
                <option value=\"E\">E</option>
            </select>";

                        echo "</tr>";
                        $B++;
                    }
                                      if (mysqli_query($con, $query)) {
                        $query3 = "SELECT * from plt where Level='$LV' and Semester='$Sem'  and SType='Optional' ";

                        $result3 = mysqli_query($con, $query3);
                        while ($row3 = mysqli_fetch_assoc($result3)) {
                            $OD = $row3['OpDivision'];
                        }
                        for ($i = 0; $i < $OD; $i++) {
                            $query1 = "SELECT * from plt where Level='$LV' and Semester='$Sem'  and SType='Optional' ";
                            $result2 = mysqli_query($con, $query1);

                            echo "<tr>";

                            echo "<td> <select name=\"Code$i\">";
                            while ($row2 = mysqli_fetch_assoc($result2)) {
                                $choose = $row['CCode'];
                                echo"  <option value=\"" . $row2['CCode'] . "-" . $row2['Credit'] . " \">" . $row2['CCode'] . "-" . $row2['Credit'] . "</option>";
                            }
                            echo " </select>";
                            //$query4 = "SELECT * from iit where CCode='$choose' ";
                            $query4 = "SELECT * from plt where Level='$LV' and Semester='$Sem'  and SType='Optional' ";
                            $result4 = mysqli_query($con, $query4);
                            echo "<td> <select name=\"OpCourse$i\">";
                            while ($row4 = mysqli_fetch_assoc($result4)) {



                                echo"  <option value=\"" . $row4['SName'] . " \">" . $row4['SName'] . "</option>";
                            }
                            echo " </select>";
                            echo "<td> <select name=\"OpGrade$i\">
                <option value=\"A+\">A+</option>
                <option value=\"A\">A</option>
                <option value=\"A-\">A-</option>
                <option value=\"B+\">B+</option>
                <option value=\"B\">B</option>
                <option value=\"B-\">B-</option>
                <option value=\"C+\">C+</option>
                <option value=\"C\">C</option>
                <option value=\"C-\">C-</option>
                <option value=\"D+\">D+</option>
                <option value=\"D\">D</option>
                <option value=\"E\">E</option>
            </select>";


                            echo "</tr>";
                        }
                    }

                    $No = $No + $B;
                } else if ($RQ == "TEA") {
                    $LV = $_SESSION["Level"];
                    $query = "Select * from tea where Level='$LV' and Semester='$Sem'   and SType='Compalsory' ";
                    $result = mysqli_query($con, $query);
                    $Count = new SplFixedArray(20);
                    $B = 0;
                    $No = 0;
                    $OD = 0;
                    while ($row = mysqli_fetch_assoc($result)) {

                        
                        echo "<tr>";
                        echo "<td>" . $row['CCode'] . "-" . $row['Credit'];
                        echo "<td>" . $row['SName'];

                        echo "<td> <select name=\"Grade$B\">
                <option value=\"A+\">A+</option>
                <option value=\"A\">A</option>
                <option value=\"A-\">A-</option>
                <option value=\"B+\">B+</option>
                <option value=\"B\">B</option>
                <option value=\"B-\">B-</option>
                <option value=\"C+\">C+</option>
                <option value=\"C\">C</option>
                <option value=\"C-\">C-</option>
                <option value=\"D+\">D+</option>
                <option value=\"D\">D</option>
                <option value=\"E\">E</option>
            </select>";

                        echo "</tr>";
                        $B++;
                    }
                                      if (mysqli_query($con, $query)) {
                        $query3 = "SELECT * from tea where Level='$LV' and Semester='$Sem'  and SType='Optional' ";

                        $result3 = mysqli_query($con, $query3);
                        while ($row3 = mysqli_fetch_assoc($result3)) {
                            $OD = $row3['OpDivision'];
                        }
                        for ($i = 0; $i < $OD; $i++) {
                            $query1 = "SELECT * from tea where Level='$LV' and Semester='$Sem'  and SType='Optional' ";
                            $result2 = mysqli_query($con, $query1);

                            echo "<tr>";

                            echo "<td> <select name=\"Code$i\">";
                            while ($row2 = mysqli_fetch_assoc($result2)) {
                                $choose = $row['CCode'];
                                echo"  <option value=\"" . $row2['CCode'] . "-" . $row2['Credit'] . " \">" . $row2['CCode'] . "-" . $row2['Credit'] . "</option>";
                            }
                            echo " </select>";
                            //$query4 = "SELECT * from iit where CCode='$choose' ";
                            $query4 = "SELECT * from tea where Level='$LV' and Semester='$Sem'  and SType='Optional' ";
                            $result4 = mysqli_query($con, $query4);
                            echo "<td> <select name=\"OpCourse$i\">";
                            while ($row4 = mysqli_fetch_assoc($result4)) {



                                echo"  <option value=\"" . $row4['SName'] . " \">" . $row4['SName'] . "</option>";
                            }
                            echo " </select>";
                            echo "<td> <select name=\"OpGrade$i\">
                <option value=\"A+\">A+</option>
                <option value=\"A\">A</option>
                <option value=\"A-\">A-</option>
                <option value=\"B+\">B+</option>
                <option value=\"B\">B</option>
                <option value=\"B-\">B-</option>
                <option value=\"C+\">C+</option>
                <option value=\"C\">C</option>
                <option value=\"C-\">C-</option>
                <option value=\"D+\">D+</option>
                <option value=\"D\">D</option>
                <option value=\"E\">E</option>
            </select>";


                            echo "</tr>";
                        }
                    }

                    $No = $No + $B;
                }
                ?>
            </table>
            <br>
            <button type="submit" name="sub" class="button" >Calculate GPA</button>
            <?php
//
//            function gradeCheck($value) {
//                if ($value == "A+") {
//                    $GC = 4.00;
//                } else if ($value == "A") {
//                    $GC = 4.00;
//                } else if ($value == "A-") {
//                    $GC = 3.70;
//                } else if ($value == "B+") {
//                    $GC = 3.30;
//                } else if ($value == "B") {
//                    $GC = 3.00;
//                } else if ($value == "B-") {
//                    $GC = 2.70;
//                } else if ($value == "C+") {
//                    $GC = 2.30;
//                } else if ($value == "C") {
//                    $GC = 2.00;
//                } else if ($value == "C-") {
//                    $GC = 1.70;
//                } else if ($value == "D+") {
//                    $GC = 1.30;
//                } else if ($value == "D") {
//                    $GC = 1.00;
//                } else if ($value == "E") {
//                    $GC = 0.00;
//                }
//                return $GC;
//            }
//
//            if (isset($_POST["sub"])) {
//                $getGrade = new SplFixedArray(20);
//                $getGradePoint = new SplFixedArray(20);
//                $getM = new SplFixedArray(20);
//                $getCredit = new SplFixedArray(20);
//                $SumCredit = 0;
//                $SumGrade = 0;
//                $FinalGpa = 0;
//                for ($i = 0; $i < $No; $i++) {
//                    $getGrade[$i] = $_POST["Grade$i"];
//
//
//                    //echo  $getCount[$i];
//                    // $getGradePoint[$i] = gradeCheck($getCount[$i]);
//                }
//                for ($i = 0; $i < $No; $i++) {
//
//                    $getGradePoint[$i] = gradeCheck($getGrade[$i]);
//                }
//                $RQ = $_SESSION["ShortC"];
//
//                if ($RQ == "IIT") {
//                    $LV = $_SESSION["Level"];
//                    $query = "Select * from iit where Level='$LV' and Semester='$Sem'   ";
//                    $result = mysqli_query($con, $query);
//                    $C = 0;
//                    while ($row = mysqli_fetch_assoc($result)) {
//                        $getCredit[$C] = $row['Credit'];
//                        $C++;
//                    }
//                } else if ($RQ == "CST") {
//                    $LV = $_SESSION["Level"];
//                    $query = "Select * from cst where Level='$LV' and Semester='$Sem'   ";
//                    $result = mysqli_query($con, $query);
//                    $C = 0;
//                    while ($row = mysqli_fetch_assoc($result)) {
//                        $getCredit[$C] = $row['Credit'];
//                        $C++;
//                    }
//                } if ($RQ == "MRT") {
//                    $LV = $_SESSION["Level"];
//                    $query = "Select * from mrt where Level='$LV' and Semester='$Sem'   ";
//                    $result = mysqli_query($con, $query);
//                    $C = 0;
//                    while ($row = mysqli_fetch_assoc($result)) {
//                        $getCredit[$C] = $row['Credit'];
//                        $C++;
//                    }
//                } if ($RQ == "SCT") {
//                    $LV = $_SESSION["Level"];
//                    $query = "Select * from sct where Level='$LV' and Semester='$Sem'   ";
//                    $result = mysqli_query($con, $query);
//                    $C = 0;
//                    while ($row = mysqli_fetch_assoc($result)) {
//                        $getCredit[$C] = $row['Credit'];
//                        $C++;
//                    }
//                } if ($RQ == "BET") {
//                    $LV = $_SESSION["Level"];
//                    $query = "Select * from bet where Level='$LV' and Semester='$Sem'   ";
//                    $result = mysqli_query($con, $query);
//                    $C = 0;
//                    while ($row = mysqli_fetch_assoc($result)) {
//                        $getCredit[$C] = $row['Credit'];
//                        $C++;
//                    }
//                } if ($RQ == "BST") {
//                    $LV = $_SESSION["Level"];
//                    $query = "Select * from bst where Level='$LV' and Semester='$Sem'   ";
//                    $result = mysqli_query($con, $query);
//                    $C = 0;
//                    while ($row = mysqli_fetch_assoc($result)) {
//                        $getCredit[$C] = $row['Credit'];
//                        $C++;
//                    }
//                } if ($RQ == "HTE") {
//                    $LV = $_SESSION["Level"];
//                    $query = "Select * from hte where Level='$LV' and Semester='$Sem'   ";
//                    $result = mysqli_query($con, $query);
//                    $C = 0;
//                    while ($row = mysqli_fetch_assoc($result)) {
//                        $getCredit[$C] = $row['Credit'];
//                        $C++;
//                    }
//                } if ($RQ == "ENM") {
//                    $LV = $_SESSION["Level"];
//                    $query = "Select * from enm where Level='$LV' and Semester='$Sem'   ";
//                    $result = mysqli_query($con, $query);
//                    $C = 0;
//                    while ($row = mysqli_fetch_assoc($result)) {
//                        $getCredit[$C] = $row['Credit'];
//                        $C++;
//                    }
//                } if ($RQ == "ANS") {
//                    $LV = $_SESSION["Level"];
//                    $query = "Select * from ans where Level='$LV' and Semester='$Sem'   ";
//                    $result = mysqli_query($con, $query);
//                    $C = 0;
//                    while ($row = mysqli_fetch_assoc($result)) {
//                        $getCredit[$C] = $row['Credit'];
//                        $C++;
//                    }
//                } if ($RQ == "AQT") {
//                    $LV = $_SESSION["Level"];
//                    $query = "Select * from aqt where Level='$LV' and Semester='$Sem'   ";
//                    $result = mysqli_query($con, $query);
//                    $C = 0;
//                    while ($row = mysqli_fetch_assoc($result)) {
//                        $getCredit[$C] = $row['Credit'];
//                        $C++;
//                    }
//                } if ($RQ == "EAG") {
//                    $LV = $_SESSION["Level"];
//                    $query = "Select * from eag where Level='$LV' and Semester='$Sem'   ";
//                    $result = mysqli_query($con, $query);
//                    $C = 0;
//                    while ($row = mysqli_fetch_assoc($result)) {
//                        $getCredit[$C] = $row['Credit'];
//                        $C++;
//                    }
//                } if ($RQ == "PLT") {
//                    $LV = $_SESSION["Level"];
//                    $query = "Select * from plt where Level='$LV' and Semester='$Sem'   ";
//                    $result = mysqli_query($con, $query);
//                    $C = 0;
//                    while ($row = mysqli_fetch_assoc($result)) {
//                        $getCredit[$C] = $row['Credit'];
//                        $C++;
//                    }
//                } if ($RQ == "TEA") {
//                    $LV = $_SESSION["Level"];
//                    $query = "Select * from tea where Level='$LV' and Semester='$Sem'   ";
//                    $result = mysqli_query($con, $query);
//                    $C = 0;
//                    while ($row = mysqli_fetch_assoc($result)) {
//                        $getCredit[$C] = $row['Credit'];
//                        $C++;
//                    }
//                }
//                for ($i = 0; $i < $No; $i++) {
//
//                    $getM[$i] = ($getGradePoint[$i] * $getCredit[$i]);
//                }
//                for ($i = 0; $i < $No; $i++) {
//                    $SumCredit+=$getCredit[$i];
//                    $SumGrade+=$getM[$i];
//                }
//
//                $FinalGpa = $SumGrade / $SumCredit;
//                echo $FinalGpa;
//            }
            ?>
        </form>
    </center>



</body>
</html>
<?php        include './footer.php';?>

