<?php
session_start();
 include './dataoperator.php';
$ser = "localhost";
$user = "root";
$pass = "";
$db = "CGU";
$con = mysqli_connect($ser, $user, $pass) or die("connection failed");
$selected = mysqli_select_db($con, $db) or die("Colud not selected database");
$CS = $_SESSION["CourseV"];
$CourseV = $_SESSION["CourseV"];
$LevelV = $_SESSION["LevelV"];
$SemesterV = $_SESSION["SemesterV"];
$_SESSION["CourseC"] = $CourseV;
if (isset($_POST["sub2"])) {

    $IDD = $_POST['idd'];

    if ($CS == "IIT") {
        $update = "delete from iit   where ID='$IDD'  ";
        if (mysqli_query($con, $update)) {
               echo '<script language="javascript">';
                echo 'window.confirm("Are you want to Deleted this ?")';
                echo '</script>';
                echo '<script language="javascript">';
               
                echo "window.location='ViewUpdate.php' ";
                echo '</script>';
           
        } else {
            echo '<script language="javascript">';
            echo 'alert("Deleted Not Successfully")';
            echo '</script>';
        }
    } else if ($CS == "CST") {
        $update = "delete from cst   where ID='$IDD'  ";
        if (mysqli_query($con, $update)) {
             echo '<script language="javascript">';
                echo 'window.confirm("Are you want to Deleted this ?")';
                echo '</script>';
                echo '<script language="javascript">';
               
                echo "window.location='ViewUpdate.php' ";
                echo '</script>';
        } else {
            echo '<script language="javascript">';
            echo 'alert("Deleted Not Successfully")';
            echo '</script>';
        }
    } else if ($CS == "MRT") {
        $update = "delete from mrt   where ID='$IDD'  ";
        if (mysqli_query($con, $update)) {
             echo '<script language="javascript">';
                echo 'window.confirm("Are you want to Deleted this ?")';
                echo '</script>';
                echo '<script language="javascript">';
               
                echo "window.location='ViewUpdate.php' ";
                echo '</script>';
        } else {
            echo '<script language="javascript">';
            echo 'alert("Deleted Not Successfully")';
            echo '</script>';
        }
    } else if ($CS == "SCT") {
        $update = "delete from sct   where ID='$IDD'  ";
        if (mysqli_query($con, $update)) {
             echo '<script language="javascript">';
                echo 'window.confirm("Are you want to Deleted this ?")';
                echo '</script>';
                echo '<script language="javascript">';
               
                echo "window.location='ViewUpdate.php' ";
                echo '</script>';
        } else {
            echo '<script language="javascript">';
            echo 'alert("Deleted Not Successfully")';
            echo '</script>';
        }
    } else if ($CS == "HTE") {
        $update = "delete from hte   where ID='$IDD'  ";
        if (mysqli_query($con, $update)) {
            echo '<script language="javascript">';
                echo 'window.confirm("Are you want to Deleted this ?")';
                echo '</script>';
                echo '<script language="javascript">';
               
                echo "window.location='ViewUpdate.php' ";
                echo '</script>';
        } else {
            echo '<script language="javascript">';
            echo 'alert("Deleted Not Successfully")';
            echo '</script>';
        }
    } else if ($CS == "ENM") {
        $update = "delete from enm   where ID='$IDD'  ";
        if (mysqli_query($con, $update)) {
            echo '<script language="javascript">';
                echo 'window.confirm("Are you want to Deleted this ?")';
                echo '</script>';
                echo '<script language="javascript">';
               
                echo "window.location='ViewUpdate.php' ";
                echo '</script>';
        } else {
            echo '<script language="javascript">';
            echo 'alert("Deleted Not Successfully")';
            echo '</script>';
        }
    } else if ($CS == "ANS") {
        $update = "delete from ans  where ID='$IDD'  ";
        if (mysqli_query($con, $update)) {
            echo '<script language="javascript">';
                echo 'window.confirm("Are you want to Deleted this ?")';
                echo '</script>';
                echo '<script language="javascript">';
               
                echo "window.location='ViewUpdate.php' ";
                echo '</script>';
        } else {
            echo '<script language="javascript">';
            echo 'alert("Deleted Not Successfully")';
            echo '</script>';
        }
    } else if ($CS == "AQT") {
        $update = "delete from aqt   where ID='$IDD'  ";
        if (mysqli_query($con, $update)) {
            echo '<script language="javascript">';
                echo 'window.confirm("Are you want to Deleted this ?")';
                echo '</script>';
                echo '<script language="javascript">';
               
                echo "window.location='ViewUpdate.php' ";
                echo '</script>';
        } else {
            echo '<script language="javascript">';
            echo 'alert("Deleted Not Successfully")';
            echo '</script>';
        }
    } else if ($CS == "EAG") {
        $update = "delete from eag  where ID='$IDD'  ";
        if (mysqli_query($con, $update)) {
            echo '<script language="javascript">';
                echo 'window.confirm("Are you want to Deleted this ?")';
                echo '</script>';
                echo '<script language="javascript">';
               
                echo "window.location='ViewUpdate.php' ";
                echo '</script>';
        } else {
            echo '<script language="javascript">';
            echo 'alert("Deleted Not Successfully")';
            echo '</script>';
        }
    } else if ($CS == "PLT") {
        $update = "delete from plt   where ID='$IDD'  ";
        if (mysqli_query($con, $update)) {
            echo '<script language="javascript">';
                echo 'window.confirm("Are you want to Deleted this ?")';
                echo '</script>';
                echo '<script language="javascript">';
               
                echo "window.location='ViewUpdate.php' ";
                echo '</script>';
        } else {
            echo '<script language="javascript">';
            echo 'alert("Deleted Not Successfully")';
            echo '</script>';
        }
    } else if ($CS == "TEA") {
        $update = "delete from tea   where ID='$IDD'  ";
        if (mysqli_query($con, $update)) {
          echo '<script language="javascript">';
                echo 'window.confirm("Are you want to Deleted this ?")';
                echo '</script>';
                echo '<script language="javascript">';
               
                echo "window.location='ViewUpdate.php' ";
                echo '</script>';
        } else {
            echo '<script language="javascript">';
            echo 'alert("Deleted Not Successfully")';
            echo '</script>';
        }
    } else if ($CS == "BST") {
        $update = "delete from bst   where ID='$IDD'  ";
        if (mysqli_query($con, $update)) {
           echo '<script language="javascript">';
                echo 'window.confirm("Are you want to Deleted this ?")';
                echo '</script>';
                echo '<script language="javascript">';
               
                echo "window.location='ViewUpdate.php' ";
                echo '</script>';
        } else {
            echo '<script language="javascript">';
            echo 'alert("Deleted Not Successfully")';
            echo '</script>';
        }
    } else if ($CS == "BET") {
        $update = "delete from bet  where ID='$IDD'  ";
        if (mysqli_query($con, $update)) {
           echo '<script language="javascript">';
                echo 'window.confirm("Are you want to Deleted this ?")';
                echo '</script>';
                echo '<script language="javascript">';
               
                echo "window.location='ViewUpdate.php' ";
                echo '</script>';
        } else {
            echo '<script language="javascript">';
            echo 'alert("Deleted Not Successfully")';
            echo '</script>';
        }
    }
}
if (isset($_POST["sub1"])) {
    $IDD = $_POST['idd'];
    $CD = $_POST["code"];
    $CT = $_POST["credit"];
    $SN = $_POST["sname"];
    $T = $_POST["type"];

    if ($CS == "IIT") {
        $update = "update iit set SName='$SN' ,CCode='$CD',Credit='$CT'  where ID='$IDD'  ";
        if (mysqli_query($con, $update)) {
            echo '<script language="javascript">';
                    echo 'alert("Saved Successfully")';
                    echo '</script>';
                    echo '<script language="javascript">';

                    echo "window.location='ViewUpdate.php' ";
                    echo '</script>';
        } else {
            echo '<script language="javascript">';
            echo 'alert("Not Updated Successfully")';
            echo '</script>';
        }
    } else if ($CS == "CST") {
        $update = "update cst set SName='$SN'   ,CCode='$CD',Credit='$CT'  where ID='$IDD'  ";
        if (mysqli_query($con, $update)) {
             echo '<script language="javascript">';
                    echo 'alert("Saved Successfully")';
                    echo '</script>';
                    echo '<script language="javascript">';

                    echo "window.location='ViewUpdate.php' ";
                    echo '</script>';
        } else {
            echo '<script language="javascript">';
            echo 'alert("Not Updated Successfully")';
            echo '</script>';
        }
    } else if ($CS == "MRT") {
        $update = "update mrt set SName='$SN'    ,CCode='$CD',Credit='$CT'  where ID='$IDD'  ";
        if (mysqli_query($con, $update)) {
            echo '<script language="javascript">';
                    echo 'alert("Saved Successfully")';
                    echo '</script>';
                    echo '<script language="javascript">';

                    echo "window.location='ViewUpdate.php' ";
                    echo '</script>';
        } else {
            echo '<script language="javascript">';
            echo 'alert("Not Updated Successfully")';
            echo '</script>';
        }
    } else if ($CS == "SCT") {
        $update = "update sct set SName='$SN'   ,CCode='$CD',Credit='$CT'  where ID='$IDD'  ";
        if (mysqli_query($con, $update)) {
             echo '<script language="javascript">';
                    echo 'alert("Saved Successfully")';
                    echo '</script>';
                    echo '<script language="javascript">';

                    echo "window.location='ViewUpdate.php' ";
                    echo '</script>';
        } else {
            echo '<script language="javascript">';
            echo 'alert("Not Updated Successfully")';
            echo '</script>';
        }
    } else if ($CS == "HTE") {
        $update = "update hte set SName='$SN'    ,CCode='$CD',Credit='$CT'  where ID='$IDD'  ";
        if (mysqli_query($con, $update)) {
            echo '<script language="javascript">';
                    echo 'alert("Saved Successfully")';
                    echo '</script>';
                    echo '<script language="javascript">';

                    echo "window.location='ViewUpdate.php' ";
                    echo '</script>';
        } else {
            echo '<script language="javascript">';
            echo 'alert("Not Updated Successfully")';
            echo '</script>';
        }
    } else if ($CS == "ENM") {
        $update = "update enm set SName='$SN'   ,CCode='$CD',Credit='$CT'  where ID='$IDD'  ";
        if (mysqli_query($con, $update)) {
            echo '<script language="javascript">';
                    echo 'alert("Saved Successfully")';
                    echo '</script>';
                    echo '<script language="javascript">';

                    echo "window.location='ViewUpdate.php' ";
                    echo '</script>';
        } else {
            echo '<script language="javascript">';
            echo 'alert("Not Updated Successfully")';
            echo '</script>';
        }
    } else if ($CS == "ANS") {
        $update = "update ans set SName='$SN'    ,CCode='$CD',Credit='$CT'  where ID='$IDD'  ";
        if (mysqli_query($con, $update)) {
           echo '<script language="javascript">';
                    echo 'alert("Saved Successfully")';
                    echo '</script>';
                    echo '<script language="javascript">';

                    echo "window.location='ViewUpdate.php' ";
                    echo '</script>';
        } else {
            echo '<script language="javascript">';
            echo 'alert("Not Updated Successfully")';
            echo '</script>';
        }
    } else if ($CS == "AQT") {
        $update = "update aqt set SName='$SN'    ,CCode='$CD',Credit='$CT'  where ID='$IDD'  ";
        if (mysqli_query($con, $update)) {
            echo '<script language="javascript">';
                    echo 'alert("Saved Successfully")';
                    echo '</script>';
                    echo '<script language="javascript">';

                    echo "window.location='ViewUpdate.php' ";
                    echo '</script>';
        } else {
            echo '<script language="javascript">';
            echo 'alert("Not Updated Successfully")';
            echo '</script>';
        }
    } else if ($CS == "EAG") {
        $update = "update eag set SName='$SN'   ,CCode='$CD',Credit='$CT'  where ID='$IDD'  ";
        if (mysqli_query($con, $update)) {
            echo '<script language="javascript">';
                    echo 'alert("Saved Successfully")';
                    echo '</script>';
                    echo '<script language="javascript">';

                    echo "window.location='ViewUpdate.php' ";
                    echo '</script>';
        } else {
            echo '<script language="javascript">';
            echo 'alert("Not Updated Successfully")';
            echo '</script>';
        }
    } else if ($CS == "PLT") {
        $update = "update plt set SName='$SN'    ,CCode='$CD',Credit='$CT'  where ID='$IDD'  ";
        if (mysqli_query($con, $update)) {
           echo '<script language="javascript">';
                    echo 'alert("Saved Successfully")';
                    echo '</script>';
                    echo '<script language="javascript">';

                    echo "window.location='ViewUpdate.php' ";
                    echo '</script>';
        } else {
            echo '<script language="javascript">';
            echo 'alert("Not Updated Successfully")';
            echo '</script>';
        }
    } else if ($CS == "TEA") {
        $update = "update tea set SName='$SN'    ,CCode='$CD',Credit='$CT'  where ID='$IDD'  ";
        if (mysqli_query($con, $update)) {
            echo '<script language="javascript">';
                    echo 'alert("Saved Successfully")';
                    echo '</script>';
                    echo '<script language="javascript">';

                    echo "window.location='ViewUpdate.php' ";
                    echo '</script>';
        } else {
            echo '<script language="javascript">';
            echo 'alert("Not Updated Successfully")';
            echo '</script>';
        }
    } else if ($CS == "BST") {
        $update = "update bst set SName='$SN'    ,CCode='$CD',Credit='$CT'  where ID='$IDD'  ";
        if (mysqli_query($con, $update)) {
             echo '<script language="javascript">';
                    echo 'alert("Saved Successfully")';
                    echo '</script>';
                    echo '<script language="javascript">';

                    echo "window.location='ViewUpdate.php' ";
                    echo '</script>';
        } else {
            echo '<script language="javascript">';
            echo 'alert("Not Updated Successfully")';
            echo '</script>';
        }
    } else if ($CS == "BET") {
        $update = "update bet set SName='$SN'    ,CCode='$CD',Credit='$CT'  where ID='$IDD'  ";
        if (mysqli_query($con, $update)) {
             echo '<script language="javascript">';
                    echo 'alert("Saved Successfully")';
                    echo '</script>';
                    echo '<script language="javascript">';

                    echo "window.location='ViewUpdate.php' ";
                    echo '</script>';
        } else {
            echo '<script language="javascript">';
            echo 'alert("Not Updated Successfully")';
            echo '</script>';
        }
    }
}

if (isset($_POST["sub3"])) {



    if ($CS == "IIT") {
        $update = "delete from iit   where  Level='$LevelV' and Semester='$SemesterV' ";
        if (mysqli_query($con, $update)) {
            echo '<script language="javascript">';
                echo 'window.confirm("Are you want to Deleted all ?")';
                echo '</script>';
                echo '<script language="javascript">';
               
                echo "window.location='ViewUpdate.php' ";
                echo '</script>';
        } else {
            echo '<script language="javascript">';
            echo 'alert("Deleted Not Successfully")';
            echo '</script>';
        }
    } else if ($CS == "CST") {
        $update = "delete from cst   where  Level='$LevelV' and Semester='$SemesterV' ";
        if (mysqli_query($con, $update)) {
             echo '<script language="javascript">';
                echo 'window.confirm("Are you want to Deleted all ?")';
                echo '</script>';
                echo '<script language="javascript">';
               
                echo "window.location='ViewUpdate.php' ";
                echo '</script>';
        } else {
            echo '<script language="javascript">';
            echo 'alert("Deleted Not Successfully")';
            echo '</script>';
        }
    } else if ($CS == "MRT") {
        $update = "delete from mrt   where  Level='$LevelV' and Semester='$SemesterV' ";
        if (mysqli_query($con, $update)) {
            echo '<script language="javascript">';
                echo 'window.confirm("Are you want to Deleted all ?")';
                echo '</script>';
                echo '<script language="javascript">';
               
                echo "window.location='ViewUpdate.php' ";
                echo '</script>';
        } else {
            echo '<script language="javascript">';
            echo 'alert("Deleted Not Successfully")';
            echo '</script>';
        }
    } else if ($CS == "SCT") {
        $update = "delete from sct   where  Level='$LevelV' and Semester='$SemesterV' ";
        if (mysqli_query($con, $update)) {
            echo '<script language="javascript">';
                echo 'window.confirm("Are you want to Deleted all ?")';
                echo '</script>';
                echo '<script language="javascript">';
               
                echo "window.location='ViewUpdate.php' ";
                echo '</script>';
        } else {
            echo '<script language="javascript">';
            echo 'alert("Deleted Not Successfully")';
            echo '</script>';
        }
    } else if ($CS == "HTE") {
        $update = "delete from hte   where Level='$LevelV' and Semester='$SemesterV' ";
        if (mysqli_query($con, $update)) {
            echo '<script language="javascript">';
                echo 'window.confirm("Are you want to Deleted all ?")';
                echo '</script>';
                echo '<script language="javascript">';
               
                echo "window.location='ViewUpdate.php' ";
                echo '</script>';
        } else {
            echo '<script language="javascript">';
            echo 'alert("Deleted Not Successfully")';
            echo '</script>';
        }
    } else if ($CS == "ENM") {
        $update = "delete from enm   where Level='$LevelV' and Semester='$SemesterV' ";
        if (mysqli_query($con, $update)) {
             echo '<script language="javascript">';
                echo 'window.confirm("Are you want to Deleted all ?")';
                echo '</script>';
                echo '<script language="javascript">';
               
                echo "window.location='ViewUpdate.php' ";
                echo '</script>';
        } else {
            echo '<script language="javascript">';
            echo 'alert("Deleted Not Successfully")';
            echo '</script>';
        }
    } else if ($CS == "ANS") {
        $update = "delete from ans  where  Level='$LevelV' and Semester='$SemesterV' ";
        if (mysqli_query($con, $update)) {
            echo '<script language="javascript">';
                echo 'window.confirm("Are you want to Deleted all ?")';
                echo '</script>';
                echo '<script language="javascript">';
               
                echo "window.location='ViewUpdate.php' ";
                echo '</script>';
        } else {
            echo '<script language="javascript">';
            echo 'alert("Deleted Not Successfully")';
            echo '</script>';
        }
    } else if ($CS == "AQT") {
        $update = "delete from aqt   where Level='$LevelV' and Semester='$SemesterV' ";
        if (mysqli_query($con, $update)) {
             echo '<script language="javascript">';
                echo 'window.confirm("Are you want to Deleted all ?")';
                echo '</script>';
                echo '<script language="javascript">';
               
                echo "window.location='ViewUpdate.php' ";
                echo '</script>';
        } else {
            echo '<script language="javascript">';
            echo 'alert("Deleted Not Successfully")';
            echo '</script>';
        }
    } else if ($CS == "EAG") {
        $update = "delete from eag  where  Level='$LevelV' and Semester='$SemesterV' ";
        if (mysqli_query($con, $update)) {
           echo '<script language="javascript">';
                echo 'window.confirm("Are you want to Deleted all ?")';
                echo '</script>';
                echo '<script language="javascript">';
               
                echo "window.location='ViewUpdate.php' ";
                echo '</script>';
        } else {
            echo '<script language="javascript">';
            echo 'alert("Deleted Not Successfully")';
            echo '</script>';
        }
    } else if ($CS == "PLT") {
        $update = "delete from plt   where  Level='$LevelV' and Semester='$SemesterV' ";
        if (mysqli_query($con, $update)) {
           echo '<script language="javascript">';
                echo 'window.confirm("Are you want to Deleted all ?")';
                echo '</script>';
                echo '<script language="javascript">';
               
                echo "window.location='ViewUpdate.php' ";
                echo '</script>';
        } else {
            echo '<script language="javascript">';
            echo 'alert("Deleted Not Successfully")';
            echo '</script>';
        }
    } else if ($CS == "TEA") {
        $update = "delete from tea   where  Level='$LevelV' and Semester='$SemesterV' ";
        if (mysqli_query($con, $update)) {
            echo '<script language="javascript">';
                echo 'window.confirm("Are you want to Deleted all ?")';
                echo '</script>';
                echo '<script language="javascript">';
               
                echo "window.location='ViewUpdate.php' ";
                echo '</script>';
        } else {
            echo '<script language="javascript">';
            echo 'alert("Deleted Not Successfully")';
            echo '</script>';
        }
    } else if ($CS == "BST") {
        $update = "delete from bst   where  Level='$LevelV' and Semester='$SemesterV' ";
        if (mysqli_query($con, $update)) {
          echo '<script language="javascript">';
                echo 'window.confirm("Are you want to Deleted all ?")';
                echo '</script>';
                echo '<script language="javascript">';
               
                echo "window.location='ViewUpdate.php' ";
                echo '</script>';
        } else {
            echo '<script language="javascript">';
            echo 'alert("Deleted Not Successfully")';
            echo '</script>';
        }
    } else if ($CS == "BET") {
        $update = "delete from bet  where  Level='$LevelV' and Semester='$SemesterV' ";
        if (mysqli_query($con, $update)) {
           echo '<script language="javascript">';
                echo 'window.confirm("Are you want to Deleted all ?")';
                echo '</script>';
                echo '<script language="javascript">';
               
                echo "window.location='ViewUpdate.php' ";
                echo '</script>';
        } else {
            echo '<script language="javascript">';
            echo 'alert("Deleted Not Successfully")';
            echo '</script>';
        }
    }
}
?>

<!DOCTYPE html>
<html>
    <head>

        <style>


            #appoint {
                font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 100%;

            }

            #appoint td, #appoint th {
                border: 1px solid #ddd;
                padding: 8px;
            }

            #appoint tr:nth-child(even){background-color: #f2f2f2;}

            #appoint tr:hover {background-color: #ddd;}
            #appoint tr {
                text-align: center;

            }
            #appoint th {
                padding-top: 12px;
                padding-bottom: 12px;
                text-align: center;
                background-color: #4CAF50;
                color: white;
            }
            .button {
                background-color: #008CBA; 
                border: none;
                border-radius: 5px;
                color: white;
                padding: 5px ;
                text-align: center;
                text-decoration: none;
                width:90px; 
                font-size: 14px;
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
                padding: 5px ;
                margin-left: 5px;
                text-align: center;
                text-decoration: none;
                width: 90px;
                font-size: 14px;
            }
       .button3:hover{
                background-color: orange;
                color: white;
                cursor:pointer;
                box-shadow: 5px 3px gray;
            }
            .button3 {
                background-color:#f44336; 
                border: none;
                border-radius: 5px;
                color: white;
                padding: 5px ;
                margin-left: 5px;
                text-align: center;
                text-decoration: none;
                width: 200px;
                font-size: 18px;
                margin-top: 20px;
                position: absolute;
                right: 5%;
            }
                       .button4 {
                background-color:green; 
                border: none;
                border-radius: 5px;
                color: white;
                padding: 5px ;
                text-align: center;
                text-decoration: none;
                width: 110px;
                font-size: 16px;
                   margin-top: 20px;
                position: absolute;
                left: 5%;
            }
            a{
                text-decoration: none;
                color: white;
            }
        </style>
    </head>
    <body>

        <div id="body_header">

            <center>      <h1 style="color:black;">View Semester's Subjects</h1>
            </center>
        </div>
        <?php
        if ($CourseV == "IIT") {
            $query = "Select * from iit where Level='$LevelV' and Semester='$SemesterV' ";
            $result = mysqli_query($con, $query);
        } else if ($CourseV == "CST") {
            $query = "Select * from cst where Level='$LevelV' and Semester='$SemesterV' ";
            $result = mysqli_query($con, $query);
        } else if ($CourseV == "MRT") {
            $query = "Select * from mrt where Level='$LevelV' and Semester='$SemesterV' ";
            $result = mysqli_query($con, $query);
        } else if ($CourseV == "SCT") {
            $query = "Select * from sct where Level='$LevelV' and Semester='$SemesterV' ";
            $result = mysqli_query($con, $query);
        } else if ($CourseV == "HTE") {
            $query = "Select * from hte where Level='$LevelV' and Semester='$SemesterV' ";
            $result = mysqli_query($con, $query);
        } else if ($CourseV == "ENM") {
            $query = "Select * from enm where Level='$LevelV' and Semester='$SemesterV' ";
            $result = mysqli_query($con, $query);
        } else if ($CourseV == "ANS") {
            $query = "Select * from ans where Level='$LevelV' and Semester='$SemesterV' ";
            $result = mysqli_query($con, $query);
        } else if ($CourseV == "AQT") {
            $query = "Select * from aqt where Level='$LevelV' and Semester='$SemesterV' ";
            $result = mysqli_query($con, $query);
        } else if ($CourseV == "EAG") {
            $query = "Select * from eag where Level='$LevelV' and Semester='$SemesterV' ";
            $result = mysqli_query($con, $query);
        } else if ($CourseV == "PLT") {
            $query = "Select * from plt where Level='$LevelV' and Semester='$SemesterV' ";
            $result = mysqli_query($con, $query);
        } else if ($CourseV == "TEA") {
            $query = "Select * from tea where Level='$LevelV' and Semester='$SemesterV' ";
            $result = mysqli_query($con, $query);
        } else if ($CourseV == "BST") {
            $query = "Select * from bst where Level='$LevelV' and Semester='$SemesterV' ";
            $result = mysqli_query($con, $query);
        } else if ($CourseV == "BET") {
            $query = "Select * from bet where Level='$LevelV' and Semester='$SemesterV' ";
            $result = mysqli_query($con, $query);
        }



        echo "<table id=\"appoint\">";
        echo "<tr>";
        echo "<th>Course Code";
        echo "<th>Credit";
        echo "<th>Subject Name";
        echo "<th>Type";

        echo "<th>Action";
        echo "</tr>";
        while ($row = mysqli_fetch_assoc($result)) {

            echo "<form action=\"ViewUpdate.php\" method=\"post\">";


            echo "<tr>";

            echo "<td><input type=\"text\" name=\"code\" value=\" " . $row['CCode'] . "\" size=10 >";
            echo "<td><input type=\"text\" name=\"credit\" value=\" " . $row['Credit'] . "\" size=5>";
            echo "<td ><input type=\"text\" name=\"sname\" value=\" " . $row['SName'] . "\" size=50 >";
            echo "<td><input type=\"text\" name=\"type\" value=\" " . $row['SType'] . "\" size=15>";

            $Id = $row['ID'];
            echo " <input type='hidden' name='idd' value='" . $Id . "'>";
            echo "<td><button type=\"submit\" name=\"sub1\" class='button' id='" . $row['ID'] . "' >Update</button><button type=\"submit\" name=\"sub2\" class='button1'   id='" . $row['ID'] . "'>Detele</button>";
            echo "</tr>";
            echo "</form>";
        }
        echo "</table>";
        echo "<form action=\"ViewUpdate.php\" method=\"post\">";

        echo" <button type=\"submit\" name=\"sub3\" class='button3'  >Detele All Records</button>";
        echo "</form>";
        
        echo" <button type=\"submit\" name=\"sub4\" class='button4'  ><a href=\"dataentryoperatorhome.php\" >   Back to Home </a></button>";
        ?>

    </body>
</html>
<?php include './footer.php';?>