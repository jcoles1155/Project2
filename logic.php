<?php

	// code to pull data from the form
	// run logic on form responses
	// Update variables to send back
	// Clean-up with any helper functions
	
	if (isset($_POST['count'])) {
		$count = $_POST['count'];
	}

	if (isset($_POST['uppercase'])) {
		$uppercase = true;
	}	else {
		$uppercase = false;
	}
	

	if (isset($_POST['symbol'])) {
		$symbol = true;
	}	else {
		$symbol = false;
	}

	if (isset($_POST['number'])) {
		$number = true;
	}	else {
		$number = false;
	}
     
	if ( $words = file('words.txt') ) {
		echo 'Count: ' . count($words) . '<br />';
	}
