<html>
           <?php
session_start();
include './students.php';

?>
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

            #customers tr:hover {background-color:#c2f0f0;}
            button{
                background-color:orange;border-radius: 10px;width:100px;height:30px;box-shadow: 5px 3px gray; 
            }

            #ch1{
                background-color:green;border-radius: 10px;width:100px;height:30px;box-shadow: 5px 3px gray; 
            }
            #ch1:hover{
                color: white;
                background-color:orange;

            }
            
            #ch:hover{
                color: white;
                background-color:green;

            }
             #ch2{
                background-color:red;border-radius: 10px;width:100px;height:30px;box-shadow: 5px 3px gray; 
            #customers th {
                padding-top: 12px;
                padding-bottom: 12px;
                text-align: left;
                background-color: #4CAF50;
                color: white;
            }
            #customers td {
                padding-top: 12px;
                padding-bottom: 12px;
                font-size: 16px;

            }
            a{
                text-decoration: none;
                color: purple;
            }
        </style>
    </head>

    <body background="z.jpg" style="background-size:cover;">
    <center>
        <b><h1><big><big>Selected Business Proposals</big></big></h1>
        <br>
        <br>
        <div style="background-color:Light Blue;width:60%;">
            <table id="customers" >
                <tr style="font-weight:bold;font-size:22px;">

                    <td>Registration No. </td>
                    <td>Proposal Title</td>
                    <td>Description</td>
                    

                </tr>

                <?php
                include_once 'DB.php';
                $result = mysqli_query($connect, "select * from businessproposal where status='Accept' ");
                while ($row = mysqli_fetch_array($result)) {

                    $proposal_id = $row["proposal_id"];
                    $_reg = $row["reg_no"];
                    $_title = $row["proposal_title"];
                    $_description = $row["description"];
                    $_file = $row["proposal_file"];
                    $status = $row["status"];
                    ?>
                    <tr>
                        <td><?php echo $_reg; ?></td>

                        <td><?php echo $_title; ?></td>
                        <td><?php echo $_description; ?></td>
                      
                            </tr>

                    <?php
                }
                ?>

            </table>
            
            
            <script>
            function conf(){
                
                var b=confirm("Are youe sure you want delete this?");
                if(b){
                    window.location="deleteaction.php?id=<?php echo $proposal_id; ?>";
                }
            }
            </script>
        </div>
    </center>
</body>
</html>
<?php        include './footer.php';?>