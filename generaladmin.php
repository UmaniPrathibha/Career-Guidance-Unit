<!DOCTYPE html>
<html lang="en" >

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="css/demo.css">
	<link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
	
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
  <meta charset="UTF-8">
  <title>Build Me Home</title>
  <style>
  .mySlides {
  display:none;
  border-radius:20px;
 
  }
* {
  margin: 0;
  padding: 0;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  -ms-box-sizing: border-box;
  box-sizing: border-box;
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
  	<script>
$(document).ready(function(){
		$('.navbar-fostrap').click(function(){
			$('.nav-fostrap').toggleClass('visible');
			$('body').toggleClass('cover-bg');
		});
	});
	</script>
</head>

<body>

  
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
          
          </li>
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



</body>

</html>
