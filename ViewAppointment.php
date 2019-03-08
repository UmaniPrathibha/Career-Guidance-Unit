       <?php
        $ser = "localhost";
        $user = "root";
        $pass = "";
        $db = "CGU";
        $con = mysqli_connect($ser, $user, $pass) or die("connection failed");
        $selected = mysqli_select_db($con, $db) or die("Colud not selected database");
        ?>

  <?php
session_start();


?>

<?php
 if (isset($_POST["B1"])) {
          
            $id_director = $_POST['id_director'];
            $Q = "Select * from appointment where AppointmentID='$id_director'";

            $result = mysqli_query($con, $Q);
           
            while ($row = mysqli_fetch_assoc($result)) {
                $to = $row['Email'];
                $N = $row['Name'];
                $d = $row['Date'];
                $t = $row['Time'];
                $subject = "Appointment Request";
                $Msq = "Dear " . $N . "\n Your Appointment request is granted.so come to the Career Guidence Unit  on " . $d . " " . $t . " \n Thank you  ";
                mail($to, $subject, $Msq);
            }
            $act = "Approved";
            $Q1 = "Update appointment set Action='$act' where AppointmentID='$id_director'";
             if ($result1 = mysqli_query($con, $Q1)) {
                 
                  echo '<script language="javascript">';
                echo 'alert("Appointment request granted")';
                echo '</script>';
                echo '<script language="javascript">';
               
                echo "window.location='ViewAppointment.php' ";
                echo '</script>';
               
            }
        } else if (isset($_POST["B2"])) {
            $id_director = $_POST['id_director'];
            $Q = "Select * from appointment where AppointmentID='$id_director'";

            $result = mysqli_query($con, $Q);



            while ($row = mysqli_fetch_assoc($result)) {
                $to = $row['Email'];
                $N = $row['Name'];
                $d = $row['Date'];
                $t = $row['Time'];
                $subject = "Appointment Request";
                $Msq = "Dear " . $N . "\n Your Appointment request is not granted due the busy schedule  on " . $d . " " . $t . " .Sorry for that.Please give another date and time again when you possible to meet me \n Thank you  ";
                mail($to, $subject, $Msq);
            }


            $Q1 = "Delete from appointment where AppointmentID='$id_director'";
            if ($result1 = mysqli_query($con, $Q1)) {

               echo '<script language="javascript">';
                echo 'window.confirm("Are you want to Reject this ?")';
                echo '</script>';
                echo '<script language="javascript">';
               
                echo "window.location='ViewAppointment.php' ";
                echo '</script>';
            }
        } else if (isset($_POST["B3"])) {
            $id_director = $_POST['id_director'];

            $Q1 = "Delete from appointment where AppointmentID='$id_director'";
            if ($result1 = mysqli_query($con, $Q1)) {
                
                  echo '<script language="javascript">';
                echo 'window.confirm("Are you want to Deleted this ?")';
                echo '</script>';
                echo '<script language="javascript">';
               
                echo "window.location='ViewAppointment.php' ";
                echo '</script>';

               // header("location:ViewAppointment.php");
            }
        }

?>

<!DOCTYPE html>

<html>
    <head>

        <style>


            #appoint {
                font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 100%;
position: absolute;
top:90%;

            }

            #appoint td, #appoint th {
                border: 1px solid #ddd;
                padding: 8px;
            }

            #appoint tr:nth-child(even){background-color: #f2f2f2;
                                        width: auto;
            }

            #appoint tr:hover {background-color: #ddd;}

            #appoint th {
                padding-top: 12px;
                padding-bottom: 12px;
                text-align: center;
                font-size: 16px;
                background-color: #4CAF50;
                color: white;
                width: auto;
            }
            .button {
                background-color: #008CBA; 
                border: none;
                border-radius: 5px;
                color: white;
                padding: 5px ;
                text-align: center;
                text-decoration: none;
                width:80px; 
                font-size: 16px;
            }
            .button:hover{
                background-color: orange;
                color: white;
                cursor:pointer;
                box-shadow: 5px 3px gray;
            }
            .button1:hover{
                background-color: orange;
                color: white;
                cursor:pointer;
                box-shadow: 5px 3px gray;
            }
            .button1 {
                background-color:#f44336; 
                border: none;
                border-radius: 5px;
                color: white;
                padding: 5px ;
                text-align: center;
                text-decoration: none;
                width: 80px;
                font-size: 16px;
            }
            .button3 {
                background-color:green; 
                border: none;
                border-radius: 5px;
                color: white;
                padding: 5px ;
                text-align: center;
                text-decoration: none;
                width: 80px;
                font-size: 16px;
            }
            body {
  background: #F0F0F0;
  font-size: 15px;
  color: #666;
  font-family: 'Roboto', sans-serif;
    
}
.content {
  height: 200px;
}
a { text-decoration: none; }


.container {
  max-width: 1200px;
  margin: 0 auto;
  width: 100%;
}

.nav-fostrap {
  display: block;
  margin-bottom: 15px 0;
  background: #03A9F4;
  -webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.26);
  -moz-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.26);
  -ms-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.26);
  -o-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.26);
  box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.26);
  border-radius: 3px;
}

.nav-fostrap ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  display: block;
}

.nav-fostrap li {
  list-style-type: none;
  margin: 0;
  padding: 0;
  display: inline-block;
  position: relative;
  font-size: 14;
  color: #def1f0;
}

.nav-fostrap li a {
  padding: 15px 20px;
  font-size: 14;
  color: #def1f0;
  display: inline-block;
  outline: 0;
  font-weight: 400;
}

.nav-fostrap li:hover ul.dropdown { display: block; }

.nav-fostrap li ul.dropdown {
  position: absolute;
  display: none;
  width: 200px;
  background: #2980B9;
  -webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.26);
  -moz-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.26);
  -ms-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.26);
  -o-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.26);
  box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.26);
  padding-top: 0;
}

.nav-fostrap li ul.dropdown li {
  display: block;
  list-style-type: none;
}

.nav-fostrap li ul.dropdown li a {
  padding: 15px 20px;
  font-size: 15px;
  color: #fff;
  display: block;
  font-weight: 400;
}

.nav-fostrap li ul.dropdown li:last-child a { border-bottom: none; }

.nav-fostrap li:hover a {
  background: #2980B9;
  color: #fff !important;
}

.nav-fostrap li:first-child:hover a { border-radius: 3px 0 0 3px; }

.nav-fostrap li ul.dropdown li:hover a { background: rgba(0,0,0, .1); }

.nav-fostrap li ul.dropdown li:first-child:hover a { border-radius: 0; }

.nav-fostrap li:hover .arrow-down { border-top: 5px solid #fff; }

.arrow-down {
  width: 0;
  height: 0;
  border-left: 5px solid transparent;
  border-right: 5px solid transparent;
  border-top: 5px solid #def1f0;
  position: relative;
  top: 15px;
  right: -5px;
  content: '';
}
.title-mobile {
  display: none;
}
 @media only screen and (max-width:900px) {

.nav-fostrap {
  background: #fff;
  width: 200px;
  height: 100%;
  display: block;
  position: fixed;
  left: -200px;
  top: 0px;
  -webkit-transition: left 0.25s ease;
  -moz-transition: left 0.25s ease;
  -ms-transition: left 0.25s ease;
  -o-transition: left 0.25s ease;
  transition: left 0.25s ease;
  margin: 0;
  border: 0;
  border-radius: 0;
  overflow-y: auto;
  overflow-x: hidden;
  height: 100%;
}
.title-mobile {
  position: fixed;
  display: block;
    top: 10px;
    font-size: 20px;
    left: 100px;
    right: 100px;
    text-align: center;
    color: #FFF;
}
.nav-fostrap.visible {
  left: 0px;
  -webkit-transition: left 0.25s ease;
  -moz-transition: left 0.25s ease;
  -ms-transition: left 0.25s ease;
  -o-transition: left 0.25s ease;
  transition: left 0.25s ease;
}

.nav-bg-fostrap {
  display: inline-block;
  vertical-align: middle;
  width: 100%;
  height: 50px;
  margin: 0;
  position: absolute;
  top: 0px;
  left: 0px;
  background: #03A9F4;
  padding: 12px 0 0 10px;
  -webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.26);
  -moz-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.26);
  -ms-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.26);
  -o-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.26);
  box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.26);
}

.navbar-fostrap {
  display: inline-block;
  vertical-align: middle;
  height: 50px;
  cursor: pointer;
  margin: 0;
    position: absolute;
    top: 0;
    left: 0;
    padding: 12px;
}

.navbar-fostrap span {
  height: 2px;
  background: #fff;
  margin: 5px;
  display: block;
  width: 20px;
}

.navbar-fostrap span:nth-child(2) { width: 20px; }

.navbar-fostrap span:nth-child(3) { width: 20px; }

.nav-fostrap ul { padding-top: 50px; }

.nav-fostrap li { display: block; }

.nav-fostrap li a {
  display: block;
  color: #505050;
  font-weight: 600;
}

.nav-fostrap li:first-child:hover a { border-radius: 0; }

.nav-fostrap li ul.dropdown { position: relative; }

.nav-fostrap li ul.dropdown li a {
  background: #2980B9 !important;
  border-bottom: none;
  color: #fff !important;
}

.nav-fostrap li:hover a {
  background: #03A9F4;
  color: #fff !important;
}

.nav-fostrap li ul.dropdown li:hover a {
  background: rgba(0,0,0,.1);
  color: #fff !important;
}

.nav-fostrap li ul.dropdown li a { padding: 10px 10px 10px 30px; }

.nav-fostrap li:hover .arrow-down { border-top: 5px solid #fff; }

.arrow-down {
  border-top: 5px solid #505050;
  position: absolute;
  top: 20px;
  right: 10px;
}

.cover-bg {
  background: rgba(0,0,0,0.5);
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
}
}
 @media only screen and (max-width:1199px) {

.container { width: 96%; }
}

.fixed-top {
  position: fixed;
  top: 0;
  right: 0;
  left: 0;
}
  .PO{
  position:absolute;
  top:70%;
  left:10%;
  
  
  }
  
.Cal{
position:absolute;
right:10%;
top:157%;
margin-bottom:20px;
}
        </style>
    </head>
    <body >
  
<div id="main">
  <div class="container">
    <div  style="margin-bottom:30px;text-align:center;">
      <img src="logo.png" style="width: 200px;margin-bottom:5px">
      <h1>Career Guidance Unit of Uva Wellassa University</h1>
    </div>
    <nav>
      <div class="nav-fostrap">
        <ul>
            <li><a href="generaladminhome.php">Home</a></li>
        
          <li><a href="javascript:void(0)" >Services<span class="arrow-down"></span></a>
            <ul class="dropdown">
                <li><a href="index2.php">Workshop</a></li>
              <li><a href="ViewAppointment.php">Appointment</a></li>
              
            </ul>
          </li>
       
<li><a href="viewProposal.php">Business Proposal</a></li>
          
          <li><a href="download2.php">Survey Report</a></li>
          <li><a href="HomeHeader.php">Logout</a></li>
        </ul>
      </div>
      <div class="nav-bg-fostrap">
        <div class="navbar-fostrap"> <span></span> <span></span> <span></span> </div>
        <a href="" class="title-mobile">Fostrap</a>
      </div>
    </nav>
    <div class='content'>
    </div>
</div>
</div>

    <center  >
        <h1 style="position: absolute;top: 80%;left:40%;">Appointment Requests</h1>
    </center>

    <br>
    <br>
    <table id="appoint">
        <tr>
            <th>Name</th>
            <th>Degree</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Appointment For</th>
            <th>Appointment Description</th>
            <th>Date</th>
            <th Style=\"width:150px;\">Time (24-hour) </th>
            <th>Duration</th>
            <th>Action</th>
        </tr>
        <?php
        $query = "Select * from appointment";
        $result = mysqli_query($con, $query);

        while ($row = mysqli_fetch_assoc($result)) {



            echo "<tr>";
            echo "<td>" . $row['Name'];
            echo "<td>" . $row['Degree'];
            echo "<td>" . $row['Email'];
            echo "<td>" . $row['PhoneNo'];
            echo "<td>" . $row['Appointment'];
            echo "<td>" . $row['AppointmentDes'];
            echo "<td Style=\"width:90px;\">" . $row['Date'];
            echo "<td >" . $row['Time'];
            echo "<td>" . $row['Duration'] . " Minutes";
            $act = $row['Action'];
            if ($act === "Approved") {
                echo "<form action='ViewAppointment.php' method='post'>  ";
                $Id = $row['AppointmentID'];
                echo " <input type='hidden' name='id_director' value='" . $Id . "'>";
                echo "<td><button class='button3'>Approved   </button> " . " " . "<button type='submit'  name='B3'   class='button1' >Delete </button> </form> ";
            } else {
                echo "<form action='ViewAppointment.php' method='post'>  ";
                $Id = $row['AppointmentID'];
                echo " <input type='hidden' name='id_director' value='" . $Id . "'>";
                echo "<td><button type='submit' name='B1'    class='button' >Approval </button>" . " " . "<button type='submit'  name='B2'   class='button1' >Reject </button> </form> ";
            }


            echo "</tr>";
        }

       
        ?>


    </table>

</body>
</html>
<?php    include './footer.php';?>