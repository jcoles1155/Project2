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
					
		<h2>Your current Password</h2>
			
			Your Password is....<? echo $new_password ?>			
					
		<h2>Generate a new Password!!</h2>
		
		<form method = "POST" action="index.php">
			<p class='options'>
			
				<label name='count'># of Words</label>
				<input maxlength=1 type='text' name='count' id='count' value=''>  (Max 9)
				<br> 
				<label name='symbol'>Use a symbol?</label>
				<input type='checkbox' name='symbol' value = 'symbol' >
				<br>
				<label name='number'>Include a number?</label>
				<input type='checkbox' name='number' value = 'number' >
				<br>
			</p>
		
			<input type='submit' class='btn btn-default' value='Another Password'>
					
		</form>
		
		
			
	</div>
	
	
	
</body>
</html>
	