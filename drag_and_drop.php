<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>HTML page editor</title>
	<meta name="viewport" content="width=device-width,intitial-scale=1.0">
	<link rel="shortcut icon" type="image/x-icon" href="https://cdn.shopify.com/s/assets/favicon-4425e7970f1327bc362265f54e8c9c6a4e96385b3987760637977078e28ffe92.png" />
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <style>
	.div_style{
	  padding: 30px;  
	  border:1px solid black;
	  
	}
  
	#side_panel, #editor_preview{ 
		list-style-type: none; 
		margin: 0; 
		padding: 0 0 2.5em; 
		float: left; 
		margin-right: 10px; 
 
		border: solid 1px black; 
	}
	#side_panel div, #editor_preview div{ 
		margin: 0 5px 5px 5px; 
		padding: 5px; 
		font-size: 1.2em; 
		width: 120px; 
	}
 
  </style>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $(function () {
	  var remove_me_position;
      $(".editor_preview").sortable({
			start : function(event, ui){
				console.log('start');
				remove_me_position = ui.item.index();
			},
			receive: function(event, ui) {
				console.log('receive');
				//console.log("[" + this.id + "] received [" + ui.item.attr("id") + "] from [" + ui.sender.attr("id") + "]");
				console.log(this.tagName+" => "+ event.target.id);
				if(ui.item.attr("id") == "header"){
					console.log(ui);
					ui['helper'][0]['outerHTML'] = '<div class="drag_me_panel_to_editor col-sm-4"><h1>hellow world</h1></div>';
				}
			},
			stop : function(event, ui){
				console.log('stop');
				if(remove_me_position <= ui.item.index()){
					$(".editor_preview div:nth-child("+(remove_me_position+1)+")").remove();
				}else{
					$(".editor_preview div:nth-child("+(remove_me_position+2)+")").remove();
					//console.log('me: '+remove_me_position+"rem: ");
				}
			},
			helper: function (event, ui) {
				this.copyHelper = ui.clone().insertAfter(ui);
				$(this).data('copied', false);
				return ui.clone();
			},
			//helper: 'clone', //keeps children visible when pulling out of container
			//~ appendTo: '.editor_preview', //temporarily stores children in hidden div
			//~ revert: "invalid",
			sort: function(event,ui){
				//$(ui.placeholder).html(Number($('#editor_preview > div:visible').index(ui.placeholder)+1));
				$(ui.placeholder).html('<div style="height: 1px; background-color: yellow;" ></div>');
			},
			placeholder: 'sortable-placeholder',
			opacity: 0.6
		}
	 );

       //$("#side_panel").sortable({ });
      $( ".drag_me_panel_to_editor" ).draggable({
            connectToSortable: ".editor_preview",
            helper: "clone",
            revert: "invalid",
            start : function(event, ui){
				console.log('start drag '+event.target.id);
				
			}
        });


  });

	function checkList(listName, newItem){
		var dupl = false;
		$("#" + listName + " > div").each(function(){
			if ($(this)[0] !== newItem[0]){
				if ($(this).html() == newItem.html()){
					dupl = true;
				}
			}
		});
		
		return !dupl;
	}
  </script>
</head>
<body>
	<div>
		<div id="side_panel" class="">
			  <div class="drag_me_panel_to_editor " id="header">Header</div>
			  <div class="drag_me_panel_to_editor " id="pera">pera</div>
			  <div class="drag_me_panel_to_editor " id="img">img</div>
			  <div class="drag_me_panel_to_editor " id="div">div</div>
			  <div class="drag_me_panel_to_editor " id="input">input</div>
		</div>
	</div>

	<div>
		<div class="editor_preview" id="editor_preview">
		  <div id="Item1">Item 1</div>
		  <div id="Item2">Item 2</div>
		  <div id="Item3">Item 3</div>
		  <div id="Item4">Item 4</div>
		  <div id="Item5">Item 5</div>
		</div>
	</div>
</body>
</html>
