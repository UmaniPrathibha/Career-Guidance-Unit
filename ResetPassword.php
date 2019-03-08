<?php
session_start();

include './Home.php';
?>


<html>

    <head>


        <style>

            .loginbox{
                width:320px;
                height:390px;
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

            .loginbox input[type="text"],input[type="password"]{
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
            <form action="ResetPassword.php" method="post">
                <h1>Forget Password </h1>
                <p>New Password</p>
                <input type="password" name="PWD1" placeholder="Enter New Password" required>
                <p>Re-enter Password</p>
                <input type="password" name="PWD2" placeholder="Re-enter Password" required>
                <input type="submit"  value="Submit" name="Reset3">
            </form>
            <?php
            if (isset($_POST["Reset3"])) {
                $P1 = $_POST["PWD1"];
                $P2 = $_POST["PWD2"];
                if ($P1 != "" && $P2 != "") {
                     if ($P1  == $P2 ){
                         $E=$_SESSION['Email'];
                         
                         $q1 = "select * from undergraduate where Email='$E'";
                    $result1 = mysqli_query($con, $q1);
                    $count1 = mysqli_num_rows($result1);
                    $q2 = "select * from generaladmin where  Email='$E'";
                    $result2 = mysqli_query($con, $q2);
                    $count2 = mysqli_num_rows($result2);
                    $q3 = "select * from systemadmin where  Email='$E'";
                    $result3 = mysqli_query($con, $q3);
                    $count3 = mysqli_num_rows($result3);
                    $q4 = "select * from clark where  Email='$E'";
                    $result4 = mysqli_query($con, $q4);
                    $count4 = mysqli_num_rows($result4);
                    if ($count1 > 0) {
                         $Q1="UPDATE undergraduate SET Password = '$P2' WHERE Email='$E'";
                  
                         if(mysqli_query($con, $Q1)){
                              echo '<script language="javascript">';
                echo 'alert("Password updated succussfully...")';
                echo '</script>';
                echo '<script language="javascript">';
               
                echo "window.location='Login.php' ";
                echo '</script>';
                         }
                        
                    }else if ($count2 > 0) {
                         $Q1="UPDATE generaladmin SET Password = '$P2' WHERE Email='$E'";
                         if(mysqli_query($con, $Q1)){
                                     echo '<script language="javascript">';
                echo 'alert("Password updated succussfully...")';
                echo '</script>';
                echo '<script language="javascript">';
               
                echo "window.location='Login.php' ";
                echo '</script>';
                         }
                    }else if ($count3 > 0) {
                         $Q1="UPDATE systemadmin SET Password = '$P2' WHERE Email='$E'";
                        if(mysqli_query($con, $Q1)){
                                     echo '<script language="javascript">';
                echo 'alert("Password updated succussfully...")';
                echo '</script>';
                echo '<script language="javascript">';
               
                echo "window.location='Login.php' ";
                echo '</script>';
                         }
                    } else if ($count4 > 0) {
                         $Q1="UPDATE clark SET Password = '$P2' WHERE Email='$E'";
                 if(mysqli_query($con, $Q1)){
                              echo '<script language="javascript">';
                echo 'alert("Password updated succussfully...")';
                echo '</script>';
                echo '<script language="javascript">';
               
                echo "window.location='Login.php' ";
                echo '</script>';
                         }
                    }
                    
                     }else {
                    echo"<font color=red> Password Mismatched</font><br>";
                }
                }else {
                echo "<font color=red>Enter New Password</font><br>";
            }
            } 
            ?>
            
        </div> 


    </body>

</html>
