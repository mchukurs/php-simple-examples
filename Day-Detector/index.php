<!DOCTYPE html>
<html lang="en">
	<head>
		<title> Day detector  </title>
		<link href="styles/main.css" rel="stylesheet" type="text/css"/>

	</head>

	<body> 
		<?php
		$dayofweek = date("w");
		switch ($dayofweek){	
			case 1: 
				echo "It's Monday";
				break;
			case 2: 
				echo "<p>It's Tuesday</p>";
				break;
			case 3: 
				echo "It's Wednesday";
				break;
			case 4: 
				echo "It's Thursday";
				break;
			case 5: 
				echo "It's Friday";
				break;
			case 6: 
				echo "It's Saturday";
					break;
			case 7: 
				echo "It's Sunday";
				break;
		}


		?>
		
	</body>




</html>