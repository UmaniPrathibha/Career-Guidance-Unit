<html>
    <head>
        <title>title</title>
    </head>
    <body>
        
        <?php
        
        $dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$dbname = 'cgu'; 

	$connection = mysqli_connect('localhost', 'root', '', 'cgu');

	// Checking the connection
	if (mysqli_connect_errno()) {
		die('Database connection failed ' . mysqli_connect_error());
	}else{
		
	}
        
        
        $sql ="SELECT * FROM repots";
        $res= mysqli_query($connection, $sql);
        
        
        while ($row= mysqli_fetch_array($connection,$res)){
            
            $id = $row['id'];
            $title = $row['title'];
            $desc = $row['description'];
            $path = $row['path'];
            
            echo $id."".$title."".$desc;
            
        }
        
        
        
        
        
        
        $files = scandir("uploads");
        //print_r($files);
        for($a=2;$a<count($files);$a++){
            
            ?>
        <br><a download="<?php echo $files[$a]?>" href="uploads/<?php echo $files[$a]?>"><?php echo $files[$a]?></a>
        <?php
            
        }
        
        
        
        ?>

    </body>
</html>
