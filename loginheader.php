<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<!--<link rel="stylesheet" href="css/marquee.css">
      <link rel="stylesheet" href="css/example.css"> -->

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script type="text/javascript" src="js/eae.js"></script>
<script type="text/javascript" src="js/jquery.easy-ticker.min.js"></script> 
<script type="text/javascript">
$(document).ready(function(){

	var dd = $('.vticker').easyTicker({
		direction: 'up',
		easing: 'easeInOutBack',
		speed: 'slow',
		interval: 2000,
		height: 'auto',
                
		visible: 1,
		mousePause: 0,
		controls: {
			up: '.up',
			down: '.down',
			toggle: '.toggle',
			stopText: 'Stop !!!'
		}
	}).data('easyTicker');
	
	cc = 1;
	$('.aa').click(function(){
		$('.vticker ul').append('<li>' + cc + ' Triangles can be made easily using CSS also without any images. This trick requires only div tags and some</li>');
		cc++;
	});
	
	$('.vis').click(function(){
		dd.options['visible'] = 3;
		
	});
	
	$('.visall').click(function(){
		dd.stop();
		dd.options['visible'] = 0 ;
		dd.start();
	});
	
});
</script>

<style>
.vticker{
	border: 1px solid red;
	width:auto;
}
.vticker ul{
	padding: 0;
        width:auto;
}
.vticker li{
	list-style: none;
	border-bottom: 1px solid green;
	padding: 10px;
        width:auto;
}
.et-run{
	background: red;
}
</style>
        <style type="text/css">


    

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
    <body>


        <nav class="navbar navbar-expand-lg navbar-light bg-light">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="Home.php">Home <span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            About CGU
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="objectives.php">Objectives</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="visionmission.php">Vision/Mission</a>

                            

                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Survey Report</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Services
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Workshop</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Appointment</a>

                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Start Ups</a>


                        </div>

                    </li>


                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Survey
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item">Employability Survey</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item">Student Satisfaction Survey</a>




                        </div>

                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Carrier
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">GPA</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">CV</a>

                            


                        </div>

                    </li>




<li class="nav-item">
                        <a class="nav-link disabled" href="level1/create.php/gellery.php">Images</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="viewvideo.php">Videos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Contact Us</a>
                    </li>

                


                </ul>
                
            </div>
        </nav>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>