<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>

<html>

<head>

	<meta charset="utf-8"> 

	<title>Password Generator</title>
	
	<?php require 'logic.php'; ?>
	
	<style>
		.container {
			text-align:center;
		}
		
		.password {
			text-align:center;
			font-size:3rem;
			margin-bottom:25px;
			color:#f39c12;
			font-family:consolas,courier;
			background-color:#eee;
			display:inline-block;
			padding:15px;
			font-weight:800;
		}
		
		#number_of_words {
			width:40px;
		}
				
		.details {
			margin-top:25px;
		}
	</style>
		
	
</head>
<body> 

		
		
	<div class='container'>
		<h1>Password Generator</h1>
	
		<p class='password'>
					</p>
		
		<form>
			<p class='options'>
			
				<label for='number_of_words'># of Words</label>
				<input maxlength=1 type='text' name='number_of_words' id='number_of_words' value=''>  (Max 9)
				<br>
					
				<input type='checkbox' name='add_number' id='add_number' > 
				<label for='add_number'>Add a number</label>
				<br>
				<input type='checkbox' name='add_symbol' id='add_symbol' > 
				<label for='add_symbol'>Add a symbol</label>
			</p>
		
			<input type='submit' class='btn btn-default' value='Another Password'>
					
		</form>
		
		
			
	</div>
	
	
	
</body>
</html>
	