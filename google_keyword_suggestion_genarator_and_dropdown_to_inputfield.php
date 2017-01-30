<!DOCTYPE html>
<html>
<head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<script>
		function showKeywords(inputid){
			window.location.href = '?userinputkeyword='+$("#"+inputid).val();
		}
		function addtoPrimary(val){
			$("#primary-keyword-input").val(val);
		}
		function addtoSecondary(val){
			var text = document.getElementById("keyword-input").value;
			if(text==""){
				$("#keyword-input").val(val);
			}else{
				$("#keyword-input").val($("#keyword-input").val()+', '+val);
			}
		}
	</script>
</head>
<body >
	<div class="container-fluid">
		<div class="col-sm-4">
			<h4 class="step-heading">Keyword suggestion generator</h4>
			<p style="text-align: left; padding-left: 14%;" class="paragraph-text">
				Keyword suggestion generator
			</p>
		</div>
		 
		<div class="col-sm-8">
			<div class="well">
				<div class="row" id="amount_head">
					<div class="col-xs-12">
						<div class="row form-group">
							<div class="col-xs-12">
								<input type="text" class="col-xs-8 form-control" name="userinputkeyword" id="userinputkeyword">
								<button type="button" class="col-xs-4 btn btn-default" onclick="showKeywords('userinputkeyword');" >Genarate</button>
							</div>
						</div>
						<hr />
						<div class="row">
							<div class="col-xs-12" id="allSuggestion">
						<?php
						
							if (isset($_GET['userinputkeyword'])) {
								$title = $_GET['userinputkeyword'];
								$allSuggestionWord = getKeywordSuggestionsFromGoogle($title);
								if(count($allSuggestionWord)==0){
									$title = clean($title);
									$title = explode("-", $title);
									echo "Nothing found for ".$title;
								}
								for($i=0;$i<count($allSuggestionWord);$i++){ ?>
									<div class="dropdown col-xs-4">
									<label class="suggestion btn btn-info dropdown-toggle" style="margin:1px;padding:1.2px" type="button" data-toggle="dropdown"><?php echo $allSuggestionWord[$i] ?>
									<span class="caret"></span></label>
									<ul class="dropdown-menu">
									  <li><a href="#" onclick="addtoPrimary('<?php echo $allSuggestionWord[$i]; ?>')">Add to Primary</a></li>
									  <li><a href="#" onclick="addtoSecondary('<?php echo $allSuggestionWord[$i]; ?>')">Add to Secondary</a></li>
									</ul>
								  </div>
						<?php
								}
							}
							
						?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div style="border-top: 1px solid #d3dbe2; margin-right: 25px; margin-left: 25px;"><br></div>
	<div class="container-fluid">
		<div class="col-sm-4">
			<h4 class="step-heading">Primary keyword input box</h4>
			<p style="text-align: left; padding-left: 14%;" class="paragraph-text">
				Primary keyword input box
			</p>
		</div>
		 
		<div class="col-sm-8">
			<div class="well">
				<div class="row" id="amount_head">
					<div class="col-xs-12">
						<input  type ="text" class="form-control" id="primary-keyword-input" name="primary-keyword-input" rows="4" placeholder="Primary Keyword"><?php echo $optimi_meta_keywords ?></textarea>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div style="border-top: 1px solid #d3dbe2; margin-right: 25px; margin-left: 25px;"><br></div>
	<div class="container-fluid">
		<div class="col-sm-4">
			<h4 class="step-heading">Secondary keywords input box</h4>
			<p style="text-align: left; padding-left: 14%;" class="paragraph-text">
				Secondary keywords input box
			</p>
		</div>
		 
		<div class="col-sm-8">
			<div class="well">
				<div class="row" id="amount_head">
					<div class="col-xs-12">
						<textarea  type ="text" class="form-control" id="keyword-input" name="keyword-input" rows="4" placeholder="Secondary Keywords"><?php echo $optimi_meta_keywords ?></textarea>
					</div>
				</div>
			</div>
		</div>
	</div>
	
</body>
</html>

<?php 
	//for keyword suggestion start
	function clean($string) {
	   $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
	   $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
	   return preg_replace('/-+/', '-', $string); // Replaces multiple hyphens with single one.
	}
	function getKeywordSuggestionsFromGoogle($keyword) {
		$keywords = array();
		$data = file_get_contents('http://suggestqueries.google.com/complete/search?output=firefox&client=firefox&hl=en-US&q='.urlencode($keyword));
		if (($data = json_decode($data, true)) !== null) {
			$keywords = $data[1];
		}

		return $keywords;
	}
	//for keyword suggestion end
?>
