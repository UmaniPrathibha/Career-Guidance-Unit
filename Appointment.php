<?php
session_start();

include './students.php';
?>

<html lang="en">
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

    <body>
        <?php
        $ser = "localhost";
        $user = "root";
        $pass = "";
        $db = "CGU";
        $con = mysqli_connect($ser, $user, $pass) or die("connection failed");
        $selected = mysqli_select_db($con, $db) or die("Colud not selected database");
        ?>
        <div id="container">

            <div id="body_header">

                <h1 style="color:black;">Appointment Request Form</h1>
                <p style="color:black;">Make your appointments more easier</p>

            </div>
            <form action="Appointment.php" method="post">


                <fieldset>
                    <legend style="color:black;"><span class="number">1</span>Appointment Details</legend>
                    <label for="appointment_for" style="color:black;">Appointment for*:</label>
                    <select id="appointment_for" name="appointment" required>

                        <option value="meeting">Meeting</option>
                        <option value="counselling">Counselling</option>
                        <option value="Business">Business</option>
                        <option value="other">Other</option>

                    </select>
                    <label for="appointment_description" style="color:black;">Appointment Description:</label>
                    <textarea id="appointment_description" name="appointmentDes" placeholder="I wish to get an appointment ..." required ></textarea>
                    <label for="date" style="color:black;">Date*:</label>
                    <input type="text" name="date" value="" id="datepicker" required></input>
                    <br>
                    <label for="time" style="color:black;">Time*:</label>
                    <input type="time" name="time" value="" required></input>
                    <br>
                    <label for="duration" style="color:black;">How Long??(Minutes)</label>
                    <input type="radio" name="duration" value="15" checked> 15
                    <input type="radio" name="duration" value="30"> 30
                    <input type="radio" name="duration" value="60"> 60
                    <input type="radio" name="duration" value="more"> more
                </fieldset>
                <button type="submit" name="sub5">Request For Appointment</button>
            </form>
        </div>
    </body>
    <?php
    if (isset($_POST["sub5"])) {
        $UN = $_SESSION["UserName"];
        $A = $_POST["appointment"];
        $AD = $_POST["appointmentDes"];
        $Date = $_POST["date"];
        $Time = $_POST["time"];
        $HL = $_POST["duration"];
        $to = "uwucgu@gmail.com";
        
        $Q3 = "select * from undergraduate where Username= '$UN'  ";
        $result8 = mysqli_query($con, $Q3);
        
        while ($row = mysqli_fetch_assoc($result8)) {

            $N = $row["LName"];
            $D = $row["Degree"];
            $E = $row["Email"];
            $T = $row["PhoneNo"];



            $Q5 = "Insert into appointment(Name,Degree,Email,PhoneNo,Appointment,AppointmentDes,Date,Time,Duration)values('$N','$D','$E','$T','$A','$AD','$Date','$Time','$HL')";
            if (mysqli_query($con, $Q5)) {
                echo '<script language="javascript">';
                echo 'alert("Appointment request sent successfully")';
                echo '</script>';
                $msg = "Name :" . $N . "\n Degree :" . $D . "\n Email Address :" . $E . "\n Phone Number :" . $T . "\n Appointment Description :" . $AD . "\n Requesting Date :" . $Date . "\n Requesting Time :" . $Time . "\n Duration :" . $HL . "Min ";
                mail($to, $A, $msg);
            } else {
                echo '<script language="javascript">';
                echo 'alert("Appointment request Not sent successfully")';
                echo '</script>';
            }
        }
    }
    ?>
</html>