<html>
    
    <?php
session_start();
include './Home.php';

?>
    <head>
        
    </head>
<body background="z.jpg" style="background-size:cover;">
<!--    <body style="background-color: #adad85;">-->

<!--    <center><h1><big><big>Our Video Collection</big></big></h1></center>-->

    <table cellspacing="10" border="0">
     


    <?php
    require("DB.php");
    //$video_id = $_GET['video_id'];

    $find_video = mysqli_query($connect, "select * from utube");
  //  echo mysqli_num_rows($find_video);
    while ($row = mysqli_fetch_array($find_video)) {
   echo "<tr>";
            echo "<td style='width:50%;padding:50px'>".$row["link"]."</td>";
            echo "<td><b>".$row["description"]."</td></b>";
      echo" </tr>";         
//           echo "<tr>";   
//            
//       echo" </tr>";

      
         
    }
    ?>

    </table>
</body>
</html>