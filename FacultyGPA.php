<!DOCTYPE html>

<?php
session_start();

?>

<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">

<link rel="stylesheet" href="css/demo.css">
	<link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
	
	
  <meta charset="UTF-8">
<title>Calculate GPA</title>
<style>
    
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
    
            #but:hover{
                
                color:whitesmoke;
                
                background-color: green;
                position:relative;
                
                border-radius: 25px ;
                font-size: 28px;
                box-shadow: 10px 10px #cccccc;
               
            }
            #but{
              color: black;
               background-color: #cccccc;
                position:relative;
                width: 230px;
                height: 200px;
                border-radius: 25px ;
                font-size: 28px;
                box-shadow: 10px 10px black;
                padding: 25px;
                margin: 25px;     
            }
               .pos{
              position: absolute;
                top:75%;
                margin: 0;
            }
          
              
.Cal{
position:absolute;
right:10%;
top:157%;
margin-bottom:20px;
}


section {
    padding: 60px 0;
}

section .section-title {
    text-align: center;
    color: #007b5e;
    margin-bottom: 50px;
    text-transform: uppercase;
}
#footer {
    background: #007b5e !important;
}
#footer h5{
  padding-left: 10px;
    border-left: 3px solid #eeeeee;
    padding-bottom: 6px;
    margin-bottom: 20px;
    color:#ffffff;
}
#footer a {
    color: #ffffff;
    text-decoration: none !important;
    background-color: transparent;
    -webkit-text-decoration-skip: objects;
}
#footer ul.social li{
  padding: 3px 0;
}
#footer ul.social li a i {
    margin-right: 5px;
  font-size:25px;
  -webkit-transition: .5s all ease;
  -moz-transition: .5s all ease;
  transition: .5s all ease;
}
#footer ul.social li:hover a i {
  font-size:30px;
  margin-top:-10px;
}
#footer ul.social li a,
#footer ul.quick-links li a{
  color:#ffffff;
}
#footer ul.social li a:hover{
  color:#eeeeee;
}
#footer ul.quick-links li{
  padding: 3px 0;
  -webkit-transition: .5s all ease;
  -moz-transition: .5s all ease;
  transition: .5s all ease;
}
#footer ul.quick-links li:hover{
  padding: 3px 0;
  margin-left:5px;
  font-weight:700;
}
#footer ul.quick-links li a i{
  margin-right: 5px;
}
#footer ul.quick-links li:hover a i {
    font-weight: 700;
}

@media (max-width:767px){
  #footer h5 {
    padding-left: 0;
    border-left: transparent;
    padding-bottom: 0px;
    margin-bottom: 10px;
}
}
        </style>
</head>
<body  background="login.jpg">
     
<div id="main">
  <div class="container">
    <div  style="margin-bottom:30px;text-align:center;">
      <img src="logo.png" style="width: 200px;margin-bottom:5px">
      <h1>Career Guidance Unit of Uva Wellassa University</h1>
    </div>
    <nav>
      <div class="nav-fostrap">
        <ul>
            <li><a href="adminhome.php">Home</a></li>
          
              
              
         
          
          <li><a href="javascript:void(0)" >Services<span class="arrow-down"></span></a>
            <ul class="dropdown">
                <li><a href="acceptlist.php">Accepted Proposal List</a></li>
              <li><a href="Appointment.php">Appointment</a></li>
              <li><a href="startups.php">Start Ups</a></li>
            </ul>
          </li>
          <li><a href="javascript:void(0)" >Survey<span class="arrow-down"></span></a>
            <ul class="dropdown">
                <li><a href="Empsurvey.php">Employability Survey</a></li>
                <li><a href="Stusurvey.php">Student Satisfaction Survey</a></li>
            </ul>
          </li>
		  <li><a href="javascript:void(0)" >Career<span class="arrow-down"></span></a>
            <ul class="dropdown">
                <li><a href="Gpa.php">GPA</a></li>
                <li><a href="level1/create.php/create.php">CV</a></li>
            </ul>
          </li>
          <li><a href="level1/create.php/gellery.php">Images</a></li>
          <li><a href="viewvideo.php">Videos</a></li>
          <li><a href="">Contact Us</a></li>
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
    <div class="pos">
<center>
    <h1 style="color:black;">Choose Your Faculty</h1>
<table>
    <tr>
    <th><div id='but'>
    <img src="FC.png" style="width:100px;height: 100px;"><br>
    <?php 
    $A="Faculty of Animal Science and Export Agriculture";
    echo "<a href=\"AnimalF.php?F=".$A." \"  style=\"text-decoration: none;color: black;font-size:18px;\" >Faculty of Animal Science & Export Agriculture</a>";
    ?>
</div>
    <th><div id='but'>
    <img src="FC.png" style="width:100px;height: 100px;"><br>
    
 <?php 
    $M="Faculty of Management";
    echo "<a href=\"ManageF.php?F=".$M." \"  style=\"text-decoration: none;color: black;font-size:18px;\" >Faculty of Management</a>";
    ?>
</div>
    <th>  <div id='but'>
    <img src="FC.png" style="width:100px;height: 100px;"><br>
    
 <?php 
    $S="Faculty of Science and Technology";
    echo "<a href=\"ScinceF.php?F=".$S." \"  style=\"text-decoration: none;color: black;font-size:18px;\" >Faculty of Science & Technology</a>";
    ?>
</div>
    <th>  <div id='but'>
    <img src="FC.png" style="width:100px;height: 100px;"><br>

     <?php 
    $T="Faculty of Technological Studies";
    echo "<a href=\"TechF.php?F=".$T." \"  style=\"text-decoration: none;color: black;font-size:18px;\" >Faculty of Technological Studies</a>";
    ?>
</div>
    </tr>
</table>
</center>
        <br>

<br>
<!-- The content of your page would go here. -->

		<footer class="footer-distributed" style="background-color:#03A9F4;width:1200px;margin-left:60px;margin-bottom:20px;border-radius:8px;">

			<div class="footer-left">

				<h3>Career Guidance Unit of Uva Wellassa University</h3>

				<p class="footer-links">
					<a href="#">Home</a>
					-
					
					<a href="#">Services</a>
					-

					<a href="#">Career</a>
					-
					<a href="#">Gallery</a>
					-
					<a href="#">Contact US</a>
				</p>

				<p class="footer-company-name" style="color:white;">Build Me &copy; 2019</p>
			</div>

			<div class="footer-center" >

			<li style="color:white;"><a href="javascript:void();" style="text-decoration:none;color:white;"><i class="fa fa-facebook"></i>Facebook</a></li>
            <li style="color:white;"><a href="javascript:void();" style="text-decoration:none;color:white;"><i class="fa fa-twitter" ></i>Twitter</i></a></li>
            <li style="color:white;"><a href="javascript:void();" style="text-decoration:none;color:white;"><i class="fa fa-envelope"></i>uwucgu@gmail.com</a></li>
            <li style="color:white;"><a href="javascript:void();" style="text-decoration:none;color:white;"><i class="fa fa-star"></i>Uva Wellassa University,Badulla</a></li>
            <li style="color:white;"><a href="javascript:void();" style="text-decoration:none;color:white;"><i class="fa fa-phone"></i>0552288187</a></li>
			</div>

			<div class="footer-right">

				   <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.231731221263!2d81.07405661412618!3d6.981958494956169!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae4618a1a9fec37%3A0x1dd900702229654b!2sUva+Wellassa+University!5e0!3m2!1sen!2slk!4v1539621174050" width="300" height="290" frameborder="0" style="border:0" allowfullscreen></iframe></p>
        

			

			</div>

		</footer>
     </div>
</body>
</html>
