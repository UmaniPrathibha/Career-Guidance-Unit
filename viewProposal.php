<html>
    <?php
session_start();
include './generaladmin.php';

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

            #customers tr:hover {background-color: #ddd;}
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
                background-color:#b3cccc;
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
<!--         <body style="background-color:#9999ff;">-->
    <center>
        <h1><big><big>Business Proposals</big></big></h1>
        <br>
        <br>
        <div style="background-color:#00cccc;width:80%;">
            <table id="customers">
                <tr style="font-weight:bold;font-size:22px;">

                    <td> Reg No:</td>
                    <td>Download Here:</td>
                    <td>Description</td>
                    <td>Status</td>
                    <td>Action</td>
                    <td>Delete Proposals</td>

                </tr>

                <?php
                include_once 'DB.php';
                $result = mysqli_query($connect, "select * from businessproposal ");
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

                        <td><a href="<?php echo $_file; ?>" target="_blank"><?php echo $_title; ?></a></td>
                        <td><?php echo $_description; ?></td>
                        <td><?php echo $status; ?></td>
                        <td>

                            <?php
                            if ($status == "Accept") {
                                ?>
                                <a href="changeStatus.php?status=Reject&id=<?php echo $proposal_id; ?>"><button id="ch" ><font color=white>Reject</button></a></font>
                                <?php
                            } else if ($status == "Reject") {
                                ?>

                                <a href="changeStatus.php?status=Accept&id=<?php echo $proposal_id; ?>"><button id="ch1"><font color=white>Accept</button></a></font>


                                <?php
                            } else {
                                ?>

                                <a href="changeStatus.php?status=Accept&id=<?php echo $proposal_id; ?>" ><button id="ch1"><font color=white>Accept</button></a></font>  <a href="changeStatus.php?status=Reject&id=<?php echo $proposal_id; ?>"><button id="ch" ><font color=white>Reject</button></font></a>

                                <?php
                            }
                            ?>

                        </td>
                        <td><button onclick="conf()" id="ch2"><font color=white>Delete</font></button></td>
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