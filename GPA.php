
<!DOCTYPE html>

<html>
    <head>
        <title>GPA UWU</title>

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
  
.Cal{
position:absolute;
right:10%;
top:157%;
margin-bottom:20px;
}
            #but:hover{
                background-color:green;
                color:whitesmoke;
                width: 300px;
                border: 5px double red  ;
                position:relative;
           
               
                border-radius: 25px ;
                font-size: 28px;
                box-shadow: 10px 10px #cccccc;
                padding: 25px;
                margin: 25px;
            }
            #but{
                background-color:orange;color:whitesmoke;width: 300px;
                border: 5px double red  ;
                position:relative;
              
                border-radius: 25px ;
                font-size: 28px;
                box-shadow: 10px 10px black;
                padding: 25px;
                margin: 25px;     
            }
            #GPA {
                font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 70%;
                text-align: center;
            }

            #GPA td, #GPA th {
                border: 1px solid #ddd;
                padding: 8px;

            }

            #GPA tr:nth-child(even){background-color: #f2f2f2;}

            #GPA tr:hover {background-color: #ddd;}

            #GPA th {
                padding-top: 12px;
                padding-bottom: 12px;
                text-align: center;
                background-color: #4CAF50;
                color: white;
            }
            .pos{
              position: absolute;
                top:75%;
                margin: 0;
                left:10%;
            }
        </style>
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
            <li><a href="studenthome.php">Home</a></li>
          
              
              
         
          
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
                <li><a href="download1.php">Survey Report</a></li>
            </ul>
          </li>
		  <li><a href="javascript:void(0)" >Career<span class="arrow-down"></span></a>
            <ul class="dropdown">
                <li><a href="Gpa.php">GPA</a></li>
                <li><a href="create.php">CV</a></li>
            </ul>
          </li>
         <li><a href="index.php">Workshop</a></li>
          
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
        
        <h1>Grade Point Average</h1>

        <p>Grade Point Average (GPA) is the credit-weighted arithmetic mean of the Grade Point Values;<br> it is determined by dividing the total credit-weighted Grade Point Value by the total number of credits.<br> GPA shall be calculated to the second decimal place such as, 3.69, 2.71, 3.00 etc.</p>
        <p> Overall GPA of the students will be calculated by the Examination division of the university accordingly.<br> Every student is given a results sheet for each semester indicating their subjects, grades and semester GPA.</p>
        <h1>Grading System</h1>
        <p> Marks obtained in respect of a course unit will be graded according to the following grading system.<br> A grade point value as indicated below is assigned to each grade.</p>

        <table id="GPA">

            <tr>
                <th>Range of Marks
                <th>Grade
                <th>Grade Point Average
            </tr>

            <tr>
                <td>91-100
                <td>A+
                <td>4.00
            </tr>
            <tr>
                <td>81-90
                <td>A
                <td>4.00
            </tr>
            <tr>
                <td>76-80
                <td>A-
                <td>3.70
            </tr>
            <tr>
                <td>71-75
                <td>B+
                <td>3.30
            </tr>
            <tr>
                <td>66-70
                <td>B
                <td>3.00
            </tr>
            <tr>
                <td>61-65
                <td>B-
                <td>2.70
            </tr>
            <tr>
                <td>56-60
                <td>C+
                <td>2.30
            </tr>
            <tr>
                <td>51-55
                <td>C
                <td>2.00
            </tr>
            <tr>
                <td>46-50
                <td>C-
                <td>1.70
            </tr>
            <tr>
                <td>41-45
                <td>D+
                <td>1.30
            </tr>
            <tr>
                <td>40
                <td>D
                <td>1.00
            </tr>
            <tr>
                <td>0-39
                <td>E
                <td>0.00
            </tr>
        </table>
        <h1>Award of Degree</h1>
        <p>A student will be eligible for Honors (Class Passes) if all requirements for the award of Honors are met within prescribed period for the degree.<br> Furthermore, candidates who are found guilty of an examination offence shall not be eligible for honors.</p>
<p>First Class Honors - GPA should be equivalent or greater than 3.70</p>
<p>Second Class (Upper Division) Honors- GPA should be equivalent or greater than 3.30</p>
<p>Second Class (Lower Division) Honors- GPA should be equivalent or greater than 3.00</p>
<p>Pass - GPA should be equivalent or greater than 2.00</p>
<p>A student must complete a minimum of 120 credits to obtain a degree with no “E” grades. The GPA is calculated on the basis of all the grades;<br> non-credit or audit courses are exempted from GPA. Effective date of the degree will be decided by the Senate. <br>The degree certificate and the academic transcript will be issued after the clearance form is submitted to the Student Affairs division by the student.<br> However, the academic transcript carries the information on all course units taken by the student.<br>
         <div id='but'>
             <a href="FacultyGPA.php" style="text-decoration: none;color: whitesmoke">   <p><b>Calculate Your GPA</b></p></a>
        </div>
    </center>
            <br>

<br>

      </div>
        
</body>
</html>

