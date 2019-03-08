<!DOCTYPE html>

<html>
    <head>

        <title>student </title>
    </head>

    <style>
        body{background-image: url("Login.jpg");
             background-size:cover; } 

        input[type=Email],input[type=password], input[type=text],input[type=date],select{

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
            margin-bottom: 10px;


        }

        input[type=submit]{
            font-weight: bold;
            font-family: sans-serif;
            font-size: 18px;
            display: block;
            width: 100%;
            background-color:green;
            color: white;
            padding: 14px 20px;
            margin-top: 20px;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            height: 50px;


        }
        input[type=submit]:hover{
            background-color: orange;
        }

        .error{
            color:red; 
        }

        form {
            max-width: 400px;
            margin: 10px auto;
            padding: 10px 20px;
            background: #cccccc;
            border-radius: 8px;
        }


    </style>
    <body>
        <?php
        $ser = "localhost";
        $user = "root";
        $pass = "";
        $db = "CGU";
        $con = mysqli_connect($ser, $user, $pass) or die("connection failed");
        $selected = mysqli_select_db($con, $db) or die("Colud not selected database");
        include './adminhome.php';
        
        ?>



        <div >
            <form action="AddEmployee.php" method="POST">
                <h1 align="center" style="color: black"> Add Here</h1>
                <lable for="fname" style="color: black">Add New Staff ID</lable>
                <input type="text"  name="SID" placeholder="Enter Staff ID"  pattern="[A-Za-z0-9]{1,6}" title="Please enter valid ID only " required>


                <br>

                <input type="submit" value="Submit" name="Reg">    

            </form>
        </div> 
        <?php
        if (isset($_POST["Reg"])) {

            $SID = $_POST["SID"];

            $Q = "Insert into Staff (StaffID) values('$SID')";
            if (mysqli_query($con, $Q)) {
                echo '<script language="javascript">';
                echo 'alert("Saved successfully")';
                echo '</script>';
            } else {
                echo '<script language="javascript">';
                echo 'alert("Not Saved successfully")';
                echo '</script>';
            }
        }
        ?>
    </body>
</html>
<?php include './footer.php';?>