<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>

<html>

<head>

	<meta charset="utf-8"> 

	<title>Memory</title>
	
	

	
	<?php require 'logic.php'; ?>
	
</head>
<body> 

	<?php foreach($Passwords as $key => $value): ?>
	
		<?php echo $key ?> is a <?php echo $value ?> <br>
	
	<?php endforeach; ?>
	
	
	
	
</body>
</html>
	