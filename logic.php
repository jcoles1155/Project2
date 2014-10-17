<?php

	// code to pull data from the form
	// run logic on form responses
	// Update variables to send back
	// Clean-up with any helper functions
	
	$new_password = " ";
	$count = '0';
	
	//pulled in variables
	
	
	$count = $_POST['count'];
	
	

	if (isset($_POST['symbol'])) {
		$symbol = 1;
	}	else {
		$symbol = 0;
	}
	

	if (isset($_POST['number'])) {
		$number = 1;
	}	else {
		$number = 0;
	}
	
	
	
	//take text file and turn it into an array
	
	$words = file_get_contents('words2.txt');
	$word_array = explode( ", ", $words);
	$symbols = array('!','@','#','$','%');
	
	//use $count to generate $count # of words
	
	for ($i = 0; $i < $count; $i++){
		shuffle($word_array);
		$new_password .= $word_array[0];
	}
	
	//set random symbol to end of password
	
	if ($symbol == 1){
		$s = rand(0, 4);
		$symbol = $symbols[$s];
		$new_password .= $symbol;
		}
	
	//set number to end of password (what would allow me to put to beginning?
	if ($number == 1){
		$n = rand(0, 8);
		$new_password .= $n;
		}
	
	
     
	