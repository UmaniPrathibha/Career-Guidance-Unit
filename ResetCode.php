<?php
session_start();
include './Home.php';
?>
<html>

    <head>
        

        <style>
     
            .loginbox{
                width:320px;
                height:300px;
                background:#000033;
                color:#fff;
                border-radius:12px;
                left:50%;
                top:60%;
                position:absolute;
                transform:translate(-50%,50%);  
                box-sizing:border-box;
                padding:70px 30px;
            }

            .avatar{
                width:100px;
                height:100px;
                position:absolute;
                top:-50px;
                right:35%;
            }

            h1{
                padding:0;
                height:0 0 20px;
                text-align:center;
                font-size:22px;

            }

            .loginbox p{
                padding:0;
                margin:0;
                font-weight:bold;
            }

            .loginbox input{
                width:100%;
                margin-bottom:20px;

            }

            .loginbox input[type="text"]{
                border:none;
                border-bottom:1px solid #fff;
                background:transparent;
                outline:none;
                height:40px;
                color:#fff;
                font-size:16px;

            }

            .loginbox input[type="submit"]{
                border:none;
                outline:none;
                height:40px;
                border-radius:25px;
                background:#ff9900;
                color:#fff;
                font-size:18px;

            }

            .loginbox input[type="submit"]:hover{
                cursor:pointer;
                background:#009900;
                color:#fff;
            }

            .loginbox a{
                text-decoration:none;
                font-size:12px;
                line-height:20px;
                color:darkgrey;

            }
            .loginbox a:hover{

                color:#ffc107;

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
        <div class="loginbox">
            <img src="lock.png" class="avatar">
            <form action="ResetCode.php" method="post">
                <h1>Forget Password </h1>
                <p>Reset Code</p>
                <input type="text" name="Reset" placeholder="Enter the reset code" >

                <input type="submit"  value="Submit" name="reset1">
            </form>
            <?php
            if (isset($_POST["reset1"])) {
                $R = $_POST["Reset"];

                if ($R != "") {
                    $q1 = "select * from forget where ResetCode='$R'";
                    $result1 = mysqli_query($con, $q1);
                    $count1 = mysqli_num_rows($result1);
                    
                    if ($count1 > 0) {
                        echo '<script language="javascript">';
                echo 'alert("Reset Code Submitted succussfully ")';
                echo '</script>';
                echo '<script language="javascript">';
               
                echo "window.location='ResetPassword.php' ";
                echo '</script>';
                    } else {
                        echo"<font color=red>Invalid Reset Code</font><br>";
                    }
                } else {
                    echo "<font color=red>Enter the Reset code</font><br>";
                }
            }
            ?>

        </div> 


    </body>

</html>
