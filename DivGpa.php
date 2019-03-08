



<!DOCTYPE html>

<html>
    <head>
        <style>
            #sho:hover{
                background-color:green;
                color:whitesmoke;
                width: 300px;
                border: 5px double red  ;
                position:relative;
                left: 150px;
                height: 200px;
                top:60%;
                border-radius: 25px ;
                font-size: 28px;
                box-shadow: 10px 10px #cccccc;
                padding: 25px;
                margin: 25px;
            }
            #sho{
                background-color:orange;color:whitesmoke;width: 300px;
                border: 5px double red  ;
                position:relative;
                left: 150px;
                top:60%;
                border-radius: 25px ;
                height: 200px;
                font-size: 28px;
                box-shadow: 10px 10px black;
                padding: 25px;
                margin: 25px;     
            }
             #sho1:hover{
                background-color:green;
                color:whitesmoke;
                width: 300px;
                height: 200px;
                border: 5px double red  ;
                position:relative;
                left: 150px;
                top:70%;
                border-radius: 25px ;
                font-size: 28px;
                box-shadow: 10px 10px #cccccc;
                padding: 25px;
                margin: 25px;
            }
            #sho1{
                background-color:orange;color:whitesmoke;
                width: 300px;
                height: 200px;
                border: 5px double red  ;
                position:relative;
                left: 150px;
                top:70%;
                border-radius: 25px ;
                font-size: 28px;
                box-shadow: 10px 10px black;
                padding: 25px;
                margin: 25px;     
            }
        </style>
    </head>
    <body background="login.jpg">
<?php         include './dataoperator.php';?>
        <div id="sho">
            <a href="GenTable.php" style="text-decoration: none;color: whitesmoke">   <p><b>Add New Semester's Courses </b></p></a>
        </div>
        <div id="sho1">
            <a href="ViewCourse.php" style="text-decoration: none;color: whitesmoke">   <p><b>View Semester's Courses</b></p></a>
        </div>
    </body>
</html>


