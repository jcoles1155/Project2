<?php

	$Passwords = Array(
       1    => 'apple', 
       2	=> 'dog', 
       3    => 'bannana', 
       4    => 'joan',
       5    => 'paper',
       6    => 'tree',
       7    => 'gorilla',
       8    => 'giraffe',
       9    => 'tangerine',
       10   => 'temptation',
       11   => 'trample',
       12   => 'stanley',
       13   => 'seeds',
       14   => 'david',
       15   => 'rockstar',
       16   => 'macbook',
       17   => 'bayern',
       18   => 'turkey',
       19   => 'clock',
       20   => 'computer',
           
    );
    
    
    	$Password = "";
    	$random_number = rand(0,count($Passwords));
    	
    	
    	$count = 0;
    	foreach($Passwords as $key => $value) {
    		
    		if($count == $random_number) {
    			$Passwords[$value] = $Password; 
    		}
    	
    		$count++;
    	
    	}
	
		
		foreach( $_POST as $key => $value )  {
		
			if ($value == 1) {
				$word1 = $Passwords[$random_number];
				$word1 = $Password;
			}
			
			else if ($value == 2) {
				$word1 = array_rand($Passwords);
				$word2 = array_rand($Passwords);
				$word1 + $word2 = $Password;
			}
			
			else if ($value == 3) {
				$word1 = array_rand($Passwords);
				$word2 = array_rand($Passwords);
				$word3 = array_rand($Passwords);
				$word1 + $word2 + $word3 = $Password;
			}
			
			else if ($value == 4) {
				$word1 = array_rand($Passwords);
				$word2 = array_rand($Passwords);
				$word3 = array_rand($Passwords);
				$word4 = array_rand($Passwords);
				$word1 + $word2 + $word3 + $word4 = $Password;
			}
			
			else if ($value == 5) {
				$word1 = array_rand($Passwords);
				$word2 = array_rand($Passwords);
				$word3 = array_rand($Passwords);
				$word4 = array_rand($Passwords);
				$word5 = array_rand($Passwords);
				$word1 + $word2 + $word3 + $word4 + $word5 = $Password;
			}
			
			else if ($value == 6) {
				$word1 = array_rand($Passwords);
				$word2 = array_rand($Passwords);
				$word3 = array_rand($Passwords);
				$word4 = array_rand($Passwords);
				$word5 = array_rand($Passwords);
				$word6 = array_rand($Passwords);
				$word1 + $word2 + $word3 + $word4 + $word5 + $word6 = $Password;
			}
			
			else if ($value == 7) {
				$word1 = array_rand($Passwords);
				$word2 = array_rand($Passwords);
				$word3 = array_rand($Passwords);
				$word4 = array_rand($Passwords);
				$word5 = array_rand($Passwords);
				$word6 = array_rand($Passwords);
				$word7 = array_rand($Passwords);
				$word1 + $word2 + $word3 + $word4 + $word5 + $word6 + $word7 = $Password;
			}
			
			else if ($value == 8) {
				$word1 = array_rand($Passwords);
				$word2 = array_rand($Passwords);
				$word3 = array_rand($Passwords);
				$word4 = array_rand($Passwords);
				$word5 = array_rand($Passwords);
				$word6 = array_rand($Passwords);
				$word7 = array_rand($Passwords);
				$word8 = array_rand($Passwords);
				$word1 + $word2 + $word3 + $word4 + $word5 + $word6 + $word7 + $word8 = $Password;
			}
			
			else {
				$word1 = array_rand($Passwords);
				$word2 = array_rand($Passwords);
				$word3 = array_rand($Passwords);
				$word4 = array_rand($Passwords);
				$word5 = array_rand($Passwords);
				$word6 = array_rand($Passwords);
				$word7 = array_rand($Passwords);
				$word8 = array_rand($Passwords);
				$word9 = array_rand($Passwords);
				$word1 + $word2 + $word3 + $word4 + $word5 + $word6 + $word7 + $word8 + $word9 = $Password;
			}
			
			echo $random_number;
			echo $Password;
			
		
		}

	

     
?>