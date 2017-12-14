<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>input validation</title>
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="style.css">
	<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
	<input type="text" class="validate_input_special_character">
	<script type="text/javascript">
		$( document ).ready(function() {
			$('.validate_input_special_character').keyup(function () {
                validate_input_special_character(this);
            });
		});
		//just set a class name 'validate_input_special_character'
		function validate_input_special_character(me){
			console.log($(me));
		    var TCode = $(me)[0].value;
		    if (/[^a-zA-Z0-9\-_ \/]/.test(TCode)) {
		        $(me)[0].value = (TCode).replace(/[^a-zA-Z0-9\-_ ]/g, '');
		        console.log("false");
		    }    
		}
	</script>
</body>
</html>