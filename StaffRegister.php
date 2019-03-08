<!DOCTYPE html>
<?php         include './Home.php';?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>student </title>
    </head>
    <style>
        

    
     form {
            max-width: 400px;
            margin: 10px auto;
            padding: 10px 20px;
            background:#cccccc;
            border-radius: 8px;
        }
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
            <form action="<?PHP echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                <h1 align="center" style="color:black;"> REGISTER HERE</h1>
                <lable for="fname" style="color:black;">First Name</lable>
                <input type="text" id="fname" name="FirstName" placeholder="Your First name" pattern="[A-Za-z]{1,15}" title="Please enter texts only "    required>
                <lable for="lname" style="color:black;">Last Name</lable>
                <input type="text" id="lname" name="LastName" placeholder="Your Last name" pattern="[A-Za-z]{1,15}" title="Please enter texts only "  required>
                <lable for="email" style="color:black;">Email</lable>
                <input type="Email" id="email" name="Email" placeholder="Email@Example.Com"required>
                <lable for="gender" style="color:black;">Gender</lable><br>
                <center><input type="radio" id="email" name="gender" value="Male"  required>Male
                    <input type="radio" id="email" name="gender" value="Female"  required>Female</center><br>

                <lable for="batch" style="color:black;">Staff ID</lable>
                <input type="text" id="BatchYear" name="StaffID" placeholder="Your Staff ID"required>
                <lable for="nic" style="color:black;">NIC</lable>
                <input type="text" id="nic" name="NIC" placeholder="Your NIC Number" pattern="([0-9]{9,12})([a-zA-Z]{0,1})" title="Your  NIC number"   required> 

                <lable for="tnumber" style="color:black;">Telephone Number</lable>
                           <input type="text"  name="TelephoneNumber" placeholder="Enter your phone number Eg: 07XXXXXXXXX" pattern="[0-9]{10}" title="Enter phone number only" required>

                <label for="usern" style="color:black;">User Name</label>
                <input type="text" id="usern" name="UserName" placeholder="Your User Name" pattern="[A-Za-z]{1,15}" title="Please enter texts only "     required>
                <lable for="pword" style="color:black;">Password</lable>
                <input type="password" id="pword" name="Password" placeholder="Your Password"  pattern=".{6,}" title="Six or more characters"  required>
                <lable for="pword" style="color:black;">Re-enter Password</lable>
                <input type="password"  name="Password1" placeholder="Re-enter your Password"  pattern=".{6,}" title="Six or more characters"  required>


                <br>

                <input type="submit" value="Submit" name="Reg">    

            </form>
        </div> 
        <?php
        if (isset($_POST["Reg"])) {
            $P = $_POST["Password"];
            $P1 = $_POST["Password1"];
            if ($P == $P1) {
                if (isset($_POST["Reg"])) {

                    $FN = $_POST["FirstName"];
                    $LN = $_POST["LastName"];
                    $E = $_POST["Email"];
                    $Nic = $_POST["NIC"];

                    $T = $_POST["TelephoneNumber"];


                    $Index = $_POST["StaffID"];

                    $UN = $_POST["UserName"];

                    $P1 = $_POST["Password1"];
                    $User = "C";
                    $G = $_POST["gender"];

                    if ($User == "C") {
                        $Q = "Insert into clark(FName,LName,Email,NIC,Username,StaffID,Password,Gender,PhoneNo)values('$FN',  '$LN','$E','$Nic','$UN','$Index','$P1','$G','$T')";
                        $user_check_query = "SELECT * FROM clark WHERE Username='$UN' OR Email='$E' LIMIT 1";
                        $result = mysqli_query($con, $user_check_query);
                        $user = mysqli_fetch_assoc($result);
                        $user_check_query1 = "SELECT * FROM clark WHERE NIC='$Nic' OR StaffID='$Index' LIMIT 1";
                        $result1 = mysqli_query($con, $user_check_query1);
                        $user1 = mysqli_fetch_assoc($result1);
                        $user_check_query2 = "SELECT * FROM staff  WHERE  StaffID='$Index' LIMIT 1";
                        $result2 = mysqli_query($con, $user_check_query2);
                        $user2 = mysqli_fetch_assoc($result2);
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

                            if ($user1['StaffID'] === $Index) {

                                echo '<script language="javascript">';
                                echo 'alert("Staff ID already exists")';
                                echo '</script>';
                            }
                        }
                        if ($user2) {
                            if ($user2['StaffID'] == $Index) {
                                if (mysqli_query($con, $Q)) {
                                  echo '<script language="javascript">';
                                    echo 'alert("Saved Successfully")';
                                    echo '</script>';
                                } else {
                                    echo '<script language="javascript">';
                                    echo 'alert("Not Saved Successfully")';
                                    echo '</script>';
                                }
                            } 
                            }else {
                                echo '<script language="javascript">';
                                echo 'alert("Invalid Staff ID ")';
                                echo '</script>';
                        }
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