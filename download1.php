
<?php  include './students.php';?>

<html>
    <head>
        <style>

            #customers {
                font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 100%;

            }

            #customers td, #customers th {
                border: 1px solid #ddd;
                padding: 8px;

            }

            #customers tr:nth-child(even){background-color: #f2f2f2;}

            #customers tr:hover {background-color: #ddd;}
            button{
                background-color:orange;border-radius: 10px;width:100px;height:30px;box-shadow: 5px 3px gray; 
            }

            #ch1{
                background-color:cadetblue;border-radius: 10px;width:100px;height:30px;box-shadow: 5px 3px gray; 
            }
            #ch1:hover{
                color: white;
                background-color:orange;

            }
            
            #ch:hover{
                color: white;
                background-color:#999999;

            }
             #ch2{
                background-color:red;border-radius: 10px;width:100px;height:30px;box-shadow: 5px 3px gray; 
            #customers th {
                padding-top: 12px;
                padding-bottom: 12px;
                text-align: left;
                background-color:#999999;
                color: white;
            }
            #customers td {
                padding-top: 12px;
                padding-bottom: 12px;
                font-size: 16px;

            }
            
        </style>
    </head>

    <body background="k.jpg" style="background-size:cover;">
    <center>
        <h1><big><big>Reports</big></big></h1>
        <br>
        <br>
        <div style="background-color:#999999;width:60%;">
            <table id="customers" >
                <tr style="font-weight:bold;font-size:22px;">

                    <td></td>
                    <td>Download Here</td>
                     <td>Description</td>
                    
                    
                    
                     <td>Title</td>
               
                </tr>

                <?php
                require_once('include/connection.php');
               
                $result = mysqli_query($connection, "select * from reports");
                while ($row = mysqli_fetch_array($result)) {

                    $title = $row["title"];
                    $description = $row["description"];
                    
                    $_file = $row["report_file"];
                    
                    ?>
                    <tr>
                        <td></td>

                        <td><a download="<?php echo $_file; ?>" href="<?php echo $_file; ?>" ><?php echo $_file ; ?></a></td>
                        <td><?php echo $description; ?></td>
                        <td style=""><?php echo $title; ?></td>
                        <td>

                                   </tr>

                    <?php
                }
                
                
                ?>

            </table>
        </div>
    </center>
</body>
</html>
<?php include './footer.php'; ?>