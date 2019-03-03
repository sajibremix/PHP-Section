<?php 
	$body_nodes = array(
				array(
	 				'tag'		=>	'div',
	 				'endtag'	=>	1,
	 				'attributes'=>	array(
	 					'class'	=>	'container',
	 					'style'	=>	'padding: 20px; margin: 10px;'
	 					),
	 				'nodes'		=>	array(
						array(
							'tag'		=>	'p',
							'endtag'	=>	1,
							'attributes'=>	array(
								'class'	=>	'alert alert-success'
								),
							'content'	=>	'Hello world! This is the very first text to appear.'
							),
	 					array(
	 						'tag'		=>	'div',
	 						'endtag'	=>	1,
	 						'attributes'=>	array(
	 							'class'	=>	'row'
	 							),
	 						'nodes'		=>	array(
	 							array(
	 								'tag'		=>	'div',
	 								'endtag'	=>	1,
	 								'attributes'=>	array(
	 									'class'	=>	'col-md-4',
	 									'style'	=>	'padding: 15px;'
	 									),
	 								'nodes'		=>	array(
	 									array(
	 										'tag'		=>	'p',
	 										'endtag'	=>	1,
	 										'attributes'=>	array(
	 											'style'	=>	'font-size: 15px; font-weight: bold;'
	 											),
	 										'content'	=>	'This is first paragraph from first column.'
	 										),
	 									array(
	 										'tag'		=>	'p',
	 										'endtag'	=>	1,
	 										'attributes'=>	array(
	 											'style'	=>	'font-size: 15px; font-weight: bold;'
	 											),
	 										'content'	=>	'This is second paragraph from first column.'
	 										),
	 									array(
	 										'tag'		=>	'p',
	 										'endtag'	=>	1,
	 										'attributes'=>	array(
	 											'style'	=>	'font-size: 15px; font-weight: bold;'
	 											),
	 										'content'	=>	'This is third paragraph from first column.'
	 										)
	 									)
	 								),
	 							array(
	 								'tag'		=>	'div',
	 								'endtag'	=>	1,
	 								'attributes'=>	array(
	 									'class'	=>	'col-md-4',
	 									'style'	=>	'padding: 15px;'
	 									),
	 								'nodes'		=>	array(
	 									array(
	 										'tag'		=>	'p',
	 										'endtag'	=>	1,
	 										'attributes'=>	array(
	 											'style'	=>	'font-size: 15px; font-weight: bold;'
	 											),
	 										'content'	=>	'This is first paragraph from second column.'
	 										),
	 									array(
	 										'tag'		=>	'p',
	 										'endtag'	=>	1,
	 										'attributes'=>	array(
	 											'style'	=>	'font-size: 15px; font-weight: bold;'
	 											),
	 										'content'	=>	'This is second paragraph from second column.'
	 										),
	 									array(
	 										'tag'		=>	'p',
	 										'endtag'	=>	1,
	 										'attributes'=>	array(
	 											'style'	=>	'font-size: 15px; font-weight: bold;'
	 											),
	 										'content'	=>	'This is third paragraph from second column.'
	 										),
	 									array(
	 										'tag'		=>	'div',
	 										'endtag'	=>	1,
	 										'attributes'=>	array(
	 											'style'	=>	'font-size: 15px; font-weight: bold;'
	 											),
	 										'content'	=>	'This is second paragraph from second column.'
	 										),
	 									array(
	 										'tag'		=>	'p',
	 										'endtag'	=>	1,
	 										'attributes'=>	array(
	 											'style'	=>	'font-size: 15px; font-weight: bold;'
	 											),
	 										'content'	=>	'This is third paragraph from second column.'
	 										)
	 									)
	 								),
	 							array(
	 								'tag'		=>	'div',
	 								'endtag'	=>	1,
	 								'attributes'=>	array(
	 									'class'	=>	'col-md-4',
	 									'style'	=>	'padding: 10px;'
	 									),
	 								'nodes'		=>	array(
	 									array(
	 										'tag'		=>	'p',
	 										'endtag'	=>	1,
	 										'attributes'=>	array(
	 											'style'	=>	'font-size: 15px; font-weight: bold;'
	 											),
	 										'content'	=>	'This is first paragraph from third column.'
	 										),
	 									array(
	 										'tag'		=>	'p',
	 										'endtag'	=>	1,
	 										'attributes'=>	array(
	 											'style'	=>	'font-size: 15px; font-weight: bold;'
	 											),
	 										'content'	=>	'This is second paragraph from third column.'
	 										),
	 									array(
	 										'tag'		=>	'p',
	 										'endtag'	=>	1,
	 										'attributes'=>	array(
	 											'style'	=>	'font-size: 15px; font-weight: bold;'
	 											),
	 										'content'	=>	'This is third paragraph from third column.'
	 										)
	 									)
	 								)
	 							)
	 						),
	 					array(
	 						'tag'		=>	'div',
	 						'endtag'	=>	1,
	 						'attributes'=>	array(
	 							),
	 						'nodes'		=>	array(
	 							array(
	 								'tag'		=>	'input',
	 								'endtag'	=>	0,
	 								'attributes'=>	array(
	 									'class'			=>	'form-control input-sm',
	 									'type'			=>	'text',
	 									'placeholder'	=>	'Your text here!'
	 									),
	 								'content'		=>	''
	 								)
	 							)
	 						)
	 					)
	 				)
				);
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>HTML page editor</title>
		<meta name="viewport" content="width=device-width,intitial-scale=1.0">
		<link rel="shortcut icon" type="image/x-icon" href="https://cdn.shopify.com/s/assets/favicon-4425e7970f1327bc362265f54e8c9c6a4e96385b3987760637977078e28ffe92.png" />
		<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo BASE ?>/files/editor/css/editor.css">
		<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<script src="<?php echo BASE ?>/files/editor/js/editor.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<script>
			function pageeditor_regenerate_html() {
				var html = '';
				var html_data = document.getElementById('page_editor_data').value;
				if( html_data != '' ) {
					html_data = JSON.parse( html_data );
					html = pageeditor_regenerate_nodes( html_data );
				}
				document.getElementById('page_editor_preview').innerHTML = html;
			}

			function pageeditor_regenerate_nodes( nodes ) {
				var html = '';
				for( var i = 0; i < nodes.length; i++ ) {
					var element = nodes[i];
					html += '<';
					html += element.tag;
					var attrs = array_keys( element.attributes );
					for( var j = 0; j < attrs.length; j++ ) {
						html += ' ' + attrs[j] + '="' + element.attributes[attrs[j]] + '"';
					}
					html += '>';
					
					if( element.endtag == 1 ) {
						if( element.nodes != undefined ) {
							if( element.nodes.length > 0 ) {
								html += pageeditor_regenerate_nodes( element.nodes );
							}
						} else if ( element.content != undefined ) {
							html += element.content;
						}
						html += '</' + element.tag + '>';
					}
				}

				console.log( html );
				return html;
			}

			function array_keys (input, searchValue, argStrict) { // eslint-disable-line camelcase
			  //  discuss at: http://locutus.io/php/array_keys/
			  // original by: Kevin van Zonneveld (http://kvz.io)
			  //    input by: Brett Zamir (http://brett-zamir.me)
			  //    input by: P
			  // bugfixed by: Kevin van Zonneveld (http://kvz.io)
			  // bugfixed by: Brett Zamir (http://brett-zamir.me)
			  // improved by: jd
			  // improved by: Brett Zamir (http://brett-zamir.me)
			  //   example 1: array_keys( {firstname: 'Kevin', surname: 'van Zonneveld'} )
			  //   returns 1: [ 'firstname', 'surname' ]
			  var search = typeof searchValue !== 'undefined'
			  var tmpArr = []
			  var strict = !!argStrict
			  var include = true
			  var key = ''
			  for (key in input) {
			    if (input.hasOwnProperty(key)) {
			      include = true
			      if (search) {
			        if (strict && input[key] !== searchValue) {
			          include = false
			        } else if (input[key] !== searchValue) {
			          include = false
			        }
			      }
			      if (include) {
			        tmpArr[tmpArr.length] = key
			      }
			    }
			  }
			  return tmpArr
			}
			$( function() {
				$( "div" ).sortable();
			} );
		</script>
	</head>
	<body>
		<!-- GENERATE PRVIEW HERE -->
		<div id="page_editor_preview">
		</div>
		<!-- PREVIEW ENDS HERE -->

		<!-- PUT EDITOR HTML HERE -->
	
		<textarea id="page_editor_data"><?php echo json_encode( $body_nodes ) ?></textarea>
		<!-- END EDITOR HTML NOW -->
		<script>pageeditor_regenerate_html();</script>
	</body>
</html>
