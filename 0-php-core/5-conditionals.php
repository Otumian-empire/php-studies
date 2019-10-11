<html>
	<head>
		<link rel="stylesheet" href="../style.css"/>
		<title>Php-Studies - conditionals</title>
	</head>
	<body>
		<div class="container">
			<h1>Conditionals</h1>
			<ol>
				<li>if-else</li>
				<li>switch</li>
				<li>ternary</li>
				<li>coalescing - check if the an expr exist or is not null, or otherwise</li>
			</ol>
			
			<?php
				// if and else
				$name = "John Doe";
				
				if (strlen($name) >= 7) {
					echo "Name is valid";
				} else {
					echo "Name is invalid";
				}
				echo "<br>";
				
				// switch
				$number = 12;
				switch($number % 5) {
					case 1:
						echo "guessed 1";
						break;
					case 2:
						echo "guessed 2";
						break;
					case 3:
						echo "guessed 3";
						break;
					default:
						echo "can you please help me??";
						break;
				}
				
				echo "<br>";
				
				// ternary
				$mod = $number % 5? "is not a multiple of 5":"is a multiple of 5";
				echo "$number % 5 mean, $mod";
				echo "<br>";
				
				// coalescing
				$user_name = $us_name?? $name;
				echo "the user available is $user_name";
				echo "<br>";
				
				
			
			?>
		</div>
	</body>
</html>
