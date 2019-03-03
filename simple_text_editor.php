<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>HTML page editor</title>
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://localhost/funnel_v2/files/editorscript/css/font-awesome.min.css">
	<link rel="stylesheet" href="style.css">
	<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
	<div class="row">
		<div class="col-sm-6">
			<h1 class="edit_me_plz" id="jakir">header</h1>
		</div>
		<div class="col-sm-6">
			<button class="edit_me_plz btn btn-info" id="button2">Button</button>
		</div>
	</div>
	
	
	<script type="text/javascript">
		$(function() {
		    $(".edit_me_plz").dblclick(function(){
		    	make_element_editable(this);
		    });
		});
		function make_element_editable(me){
			$( '<textarea onblur="set_my_new_text_with_tag(\''+$(me)[0].localName+'\',\''+$(me)[0].id+'\',this)" style="display: block; width: 100%;">'+$(me)[0].innerHTML+'</textarea>' ).insertAfter(me);
			$(me).hide();
		}
		function set_my_new_text_with_tag(prev_ele,id,me){
			$(me).remove();
			$("#"+id)[0].innerHTML = $(me)[0].value;
			$("#"+id).show();
		}
	</script>
</body>
</html>