<?php
//index.php



?>
<!DOCTYPE html>
<html>
    
 <head>
     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>Workshop Calandar </title>
  <link rel="stylesheet" href="css/fullcalendar.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
  <script>
   
  $(document).ready(function() {
   var calendar = $('#calendar').fullCalendar({
    editable:true,
    header:{
     left:'prev,next today',
     center:'title',
     right:'month,agendaWeek,agendaDay'
    },
    events: 'load.php',
    selectable:true,
    selectHelper:true,
    select: function(start, end, allDay)
    {/*
     var title = prompt("Enter Event Title");
     if(title)
     {
      var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
      var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");
      $.ajax({
       url:"insert.php",
       type:"POST",
       data:{title:title, start:start, end:end},
       success:function()
       {
        calendar.fullCalendar('refetchEvents');
        alert("Added Successfully");
       }
      })
     }
   */ },
    editable:true,
    eventResize:function(event)
    {
     var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
     var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
     var title = event.title;
     var id = event.id;
     $.ajax({
      url:"update.php",
      type:"POST",
      data:{title:title, start:start, end:end, id:id},
      success:function(){
       calendar.fullCalendar('refetchEvents');
       alert('Event Update');
      }
     })
    },

    eventDrop:function(event)
    {
     var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
     var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
     var title = event.title;
     var id = event.id;
     $.ajax({
      url:"update.php",
      type:"POST",
      data:{title:title, start:start, end:end, id:id},
      success:function()
      {
       calendar.fullCalendar('refetchEvents');
       alert("Event Updated");
      }
     });
    },

    eventClick:function(event)
    {/*
     if(confirm("Are you sure you want to remove it?"))
     {
      var id = event.id;
      $.ajax({
       url:"view.php",
       type:"POST",
       data:{id:id},
       /*success:function()
       {
        calendar.fullCalendar('refetchEvents');
        alert("Event Removed");
       }
      })
     }
     window.open("view.php");

    */},

   });
  });
   
  </script>
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
  <br />
  <a href='workshopstructure.php?id=16'></a>
  <h2 align="center"><a href="#">Workshop Calandar</a></h2>
  <br />
  <div class="container">
   <div id="calendar"></div>
  </div>
 </body>
</html>
