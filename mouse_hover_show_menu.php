<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Git Test</title>
		<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	</head>
	
	
	
	<body>
		<!-- GENERATE PRVIEW HERE -->
		<div id="page_editor_preview"></div>
		<!-- PREVIEW ENDS HERE -->
		
		<div id="main_editor" style="margin-top: 50px;">
			<div class="row">
				<div class="col-sm-12">
					<div class="col-sm-8" onmouseover="this_is_me(this,event);" id="this-IS-col8" style="background-color: red;">
						<div onmouseover="this_is_me(this,event);" id="this-IS-apple" style="display:inline-block;"><img src="https://staticdelivery.nexusmods.com/mods/110/images/74627-0-1459502036.jpg" alt="HTML5 Icon" width="128" height="128"></div>
					</div>
					<div class="col-sm-4" onmouseover="this_is_me(this,event);" id="this-IS-imgdiv2parent" style="background-color: yellow;">
						<div style="display:inline-block;" onmouseover="this_is_me(this,event);"  id="this-IS-orange"> <img src="http://alternativa-za-vas.com/images/uploads/naranca.jpg" alt="HTML5 Icon" width="128" height="128"></div>
					</div>
				</div>
			</div>
			<p onmouseover="this_is_me(this,event);" id="this-IS-para">hellow world</p>
			<li onmouseover="this_is_me(this,event);" id="this-IS-li">li world</li>
			<button class="form-control" type="button" onmouseover="this_is_me(this,event);" id="this-IS-button">Button world</button>
			<div style="display:inline-block;" onmouseover="this_is_me(this,event);" id="this-IS-input" ><input class="form-control" type="text"></div>
			
		</div>
		<!-- PUT EDITOR HTML HERE -->
		<textarea id="page_editor_data" hidden></textarea>
		<!-- END EDITOR HTML NOW -->
		
		<script>
			function this_is_me(e,eve){
				var me = e;
				eve.stopPropagation();
				$("#main_editor").find("*").removeClass('show_my_border');
				$('.my_settings').remove();
				$(e).addClass('show_my_border');
				
				var settings_div ="";
				settings_div = settings_div +'<div  class="my_settings">';
				settings_div = settings_div +'<i onclick="show_settings_panel(\''+me.id+'\')" class="glyphicon glyphicon-cog" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Settings"></i>';
				settings_div = settings_div +'<i onclick="show_clone_panel(\''+me.id+'\')" class="glyphicon glyphicon-copy" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Clone"></i>';
				settings_div = settings_div +'<i onclick="show_save_panel(\''+me.id+'\')" class="glyphicon glyphicon-floppy-disk" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Save"></i>';
				settings_div = settings_div +'<i onclick="show_remove_panel(\''+me.id+'\')" class="glyphicon glyphicon-trash" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Remove"></i>';
				settings_div = settings_div +'</div>';
				
				$(e).append(settings_div);
				$('.my_settings').mouseenter(
				
					function(event){
						event.stopPropagation();
						$("#main_editor").find("*").removeClass('show_my_border');
						$(me).addClass('show_my_border');
						console.log(me.tagName+" => "+ me.id);
					}
				);
				$('.my_settings').mouseleave(
					function(){
						$("#main_editor").find("*").removeClass('show_my_border');
						$('.my_settings').remove();
					}
				);
				$(e).mouseleave(
					function(){
						$(e).removeClass('show_my_border');
						$('.my_settings').remove();
					}
				);
				
			}
		function show_settings_panel(text){
			alert(text);
		}
		function show_clone_panel(text){
			alert(text);
		}
		function show_save_panel(text){
			alert(text);
		}
		function show_remove_panel(text){
			alert(text);
			$("#"+text).remove();
		}
			
		</script>
		<style>
			.show_my_border{
				border: 2px solid #0060A5;
				position: relative;
			}
			.my_settings i:hover{
				cursor: pointer;
			}
			.my_settings i{
				padding: 3px;
				color: white;
			}
			.my_settings{
				display: _none;
				width: 93px;
				position: absolute;
				top: -30px; right: -2px;
				background-color: rgba(0, 96, 165, 1);
				padding: 3px;
			}
		</style>
	</body>
</html>
