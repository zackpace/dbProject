<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    </head> 
    
   <?php
    	$conn = new mysqli("cs3350.cdgm0mqfoggp.us-east-1.rds.amazonaws.com", "Zackary", "cs4330_db", "Zackary_Project");//mysql only
    	// Check connection
    	if ($conn->connect_error) {
        	die("Connection failed: " . $conn->connect_error);
    	}
    ?>
    
    <body> 
    

