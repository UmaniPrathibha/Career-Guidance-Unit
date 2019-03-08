<!DOCTYPE html>
<?php         include './Home.php';?>
<html>
    <head>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script>
            $(function () {
                $("#datepicker").datepicker({dateFormat: 'dd-mm-yy'});
            });
        </script>
        <meta charset="UTF-8">
        <title>student </title>
    </head>

    <style>
 

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
        ?>


        <div style="position: absolute;top: 70%;left: 35%;">
        <div>
            <form action="Register.php" method="POST">
                <h1 align="center" style="color:black;"> Register Here</h1>
                <lable for="fname" style="color:black;">First Name</lable>
                <input type="text"  name="FirstName" placeholder="Your First Name"  pattern="[A-Za-z]{1,15}" title="Please enter texts only " required>
                <lable for="lname" style="color:black;">Last Name</lable>
                <input type="text"  name="LastName" placeholder="Your Last Name" pattern="[A-Za-z]{1,15}" title="Please enter texts only "required>
                <lable for="email" style="color:black;">Email</lable>
                <input type="Email"  name="Email" placeholder="Email@Example.Com"required>
                <lable for="gender" style="color:black;">Gender</lable><br>
                <center><input type="radio"  name="gender" value="Male"  required>Male
                    <input type="radio"  name="gender" value="Female"  required>Female</center><br>
                <lable for="batch" style="color:black;">Batch year</lable>
                <input type="text"  name="BatchYear" placeholder="Your Batch Year Eg:2014/2015" pattern="[0-9]{4}" title="Enter batch year only"     required>
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
                <lable for="nic" style="color:black;">NIC</lable>
                <input type="text"  name="NIC" placeholder="Your NIC Number" pattern="([0-9]{9,12})([a-zA-Z]{0,1})" title="Your  NIC number"required> 
                <lable for="dob" style="color:black;">Date of Birth</lable>

                <input type="text" name="DateofBirth" value="" id="datepicker" placeholder="Your Date of Birth" required></input>
                <lable for="tnumber" style="color:black;">Telephone Number</lable>
                <input type="text"  name="TelephoneNumber" placeholder="Enter your phone number Eg: 07XXXXXXXXX" pattern="[0-9]{10}" title="Enter phone number only" required>
                <label for="usern" style="color:black;">User Name</label>
                <input type="text"  name="UserName" placeholder="Your User Name"  pattern="[A-Za-z]{1,15}" title="Please enter texts only "       required>
                <lable for="pword" style="color:black;">Password</lable>
                <input type="password"  name="Password" placeholder="Your Password" pattern=".{6,}" title="Six or more characters"   required>
                <lable for="pword" style="color:black;">Re-enter Password</lable>
                <input type="password"  name="Password1" placeholder="Re-enter your Password"  pattern=".{6,}" title="Six or more characters"     required>

                <br>

                <input type="submit" value="Submit" name="Reg">    

            </form>
        </div> 
        <?php
        if (isset($_POST["Reg"])) {

            $P = $_POST["Password"];
            $P1 = $_POST["Password1"];
            if ($P == $P1) {

                $FN = $_POST["FirstName"];
                $LN = $_POST["LastName"];
                $E = $_POST["Email"];
                $Nic = $_POST["NIC"];
                $DOB = $_POST["DateofBirth"];
                $T = $_POST["TelephoneNumber"];
                $BY = $_POST["BatchYear"];
                $D = $_POST["Course"];


                $UN = $_POST["UserName"];

                $P1 = $_POST["Password1"];
                $User = "Student";
                $G = $_POST["gender"];
                if (isset($_POST["Reg"])) {
                    $Q = "Insert into undergraduate(FName,LName,Email,NIC,Username,Password,User,Gender,Degree,DOB,PhoneNo,BatchYear)values('$FN',  '$LN','$E','$Nic','$UN','$P1','$User','$G','$D','$DOB','$T','$BY')";
                    $user_check_query = "SELECT * FROM undergraduate WHERE Username='$UN' OR Email='$E' LIMIT 1";
                    $result = mysqli_query($con, $user_check_query);
                    $user = mysqli_fetch_assoc($result);
                    $user_check_query1 = "SELECT * FROM undergraduate WHERE NIC='$Nic' LIMIT 1";
                    $result1 = mysqli_query($con, $user_check_query);
                    $user1 = mysqli_fetch_assoc($result1);

                    if ($user) { // if user exists
                        if ($user['Username'] === $UN) {

                            echo '<script language="javascript">';
                            echo 'alert("Username already exists")';
                            echo '</script>';
                        }

                        if ($user['Email'] === $E) {

                            echo '<script language="javascript">';
                            echo 'alert("Email already exists")';
                            echo '</script>';
                        }
                    }

                    if ($user1) { // if NIC exists
                        if ($user1['NIC'] === $Nic) {

                            echo '<script language="javascript">';
                            echo 'alert("NIC already exists")';
                            echo '</script>';
                        }
                    } else if (mysqli_query($con, $Q)) {
                      //  header("Location:Saved.php");
                          echo '<script language="javascript">';
                        echo 'alert("Saved Successfully")';
                        echo '</script>';
                    } else {
                        echo '<script language="javascript">';
                        echo 'alert("Not Saved Successfully")';
                        echo '</script>';
                    }
                }
            } else {
                echo '<script language="javascript">';
                echo 'alert("Re-entered password not matched")';
                echo '</script>';
            }
        }
        ?>
        </div>
    </body>
</html>