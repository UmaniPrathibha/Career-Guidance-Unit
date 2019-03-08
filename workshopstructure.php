<?php

$id=$_GET['id'];

$conn=mysqli_connect('localhost','root','','cgu') or die(mysqli_error($conn));
$query="SELECT * FROM submit WHERE id=$id";

$result= mysqli_query($conn, $query);

$row= mysqli_fetch_assoc($result);

?>

<html>
	<head>
		
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				
			</header>

		<!-- Main -->
			<section id="main">
				<div class="inner">

				<!-- One -->
					<section id="one" class="wrapper style1">

						<div class="image fit flush">
							<img src="<?=$row['image']?>" alt="" />
						</div>
						<header class="special">
							<h2><?=$row['title']?></h2>
							
						</header>
						<div class="content"><?=$row['description']?></div> 
    
    </div>

                                        </html>				