<?php 
session_start();
?>


 <?php
        $ser = "localhost";
        $user = "root";
        $pass = "";
        $db = "CGU";
        $con = mysqli_connect($ser, $user, $pass) or die("connection failed");
        $selected = mysqli_select_db($con, $db) or die("Colud not selected database");
        
        
        ?>
<?php         include './Home.php';?>
<html>

    <head>
       
        


     
        <title> Login Form</title>

        <style>
    
            .loginbox{
                width:320px;
                height:420px;
                background: #000033;
                color:#fff;
                border-radius:12px;
                left:50%;
                top:50%;
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
       
       
        <div class="loginbox" style="         margin-bottom: 30px;">
            <img src="avatar2.png" class="avatar">
            <form action="login.php" method="post">
                <h1>Login Here </h1>
                <p>Username</p>
                <input type="text" name="UN" placeholder="Enter Username" required>
                <p>Password</p>
                <input type="password" name="PWD" placeholder="Enter Password" required>
                <input type="submit"  value="Login" name="login">
            </form>
            <?php
            if (isset($_POST["login"])) {
                $N = $_POST["UN"];
                $P = $_POST["PWD"];
                if ($N != "" && $P != "") {
                    $q1 = "select * from undergraduate where Username='$N' and Password='$P'";
                    $result1 = mysqli_query($con, $q1);
                    $count1 = mysqli_num_rows($result1);
                    $q2 = "select * from generaladmin where Username='$N' and Password='$P'";
                    $result2 = mysqli_query($con, $q2);
                    $count2 = mysqli_num_rows($result2);
                    $q3 = "select * from systemadmin where Username='$N' and Password='$P'";
                    $result3 = mysqli_query($con, $q3);
                    $count3 = mysqli_num_rows($result3);
                    $q4 = "select * from clark where Username='$N' and Password='$P'";
                    $result4 = mysqli_query($con, $q4);
                    $count4 = mysqli_num_rows($result4);
                    if ($count1 > 0) {
                  //      header("location:studenthome.php");
                           echo '<script language="javascript">';
               
                echo "window.location='studenthome.php' ";
                echo '</script>';
                        $_SESSION["UserName"]=$N;
                    } else if ($count2 > 0) {
                      //  header("location:generaladminhome.php");
                        echo '<script language="javascript">';
               
                echo "window.location='generaladminhome.php' ";
                echo '</script>';
                        $_SESSION["UserName"]=$N;
                    } else if ($count3 > 0) {
                      //  header("location:adminhome.php");
                          echo '<script language="javascript">';
               
                echo "window.location='systemadmin.php' ";
                echo '</script>';
                        $_SESSION["UserName"]=$N;
                    } else if ($count4 > 0) {
                        //header("location:dataentryoperatorhome.php");
                          echo '<script language="javascript">';
               
                echo "window.location='dataentryoperatorhome.php' ";
                echo '</script>';
                        $_SESSION["UserName"]=$N;
                    } else {
                        echo"<font color=red>Invalid Username and Password</font><br>";
                    }
                } else {
                    echo "<font color=red>Enter Username and Password</font><br>";
                }
            }
            ?>
            <a href="forget.php">Lost your password?</a><br>
            <a href="RegisterDiv.php">Don't have an account?</a>
        </div> 


    </body>

</html>
