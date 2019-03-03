<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>HTML page editor</title>
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="style.css">
	<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
<?php
	$url = "http://www.amrabachelor.com/";
	$image = file_get_contents("https://www.googleapis.com/pagespeedonline/v1/runPagespeed?url=".$url."&screenshot=true");
	$image = json_decode($image, true); 
	$image = $image['screenshot']['data'];
	$image = str_replace(array('_','-'),array('/','+'),$image); 	
	echo "<img src=\"data:image/jpeg;base64,".$image."\" border='1'/>";
?>
</body>
</html>


