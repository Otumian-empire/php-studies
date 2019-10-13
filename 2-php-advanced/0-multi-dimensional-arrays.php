<html>
	<head>
		<link rel="stylesheet" href="../style.css"/>
		<title>Php-Studies | multi-dimensional arrays</title>
	</head>
	<body>
		<div class="container">
			<h1>Multi-dimensional array</h1>
			
			<?php
				// creating a multi-dimension array of key-value pair
				$ms_combo = array(
					"CS"=>array(
						"101"=>"introduction to Computer science in general",
						"103"=>"introduction to proffesional offices tools"
					),
					"MATHS"=>array(
						"121"=>"Algebra and Geometry",
						"123"=>"Vector and Geometry"
					),
					"STATS"=>array(
						"111"=>"Introduction to Statistics"
					)
				);
				
				// looping
				foreach($ms_combo as $program => $course) {
					echo "Program: " . $program . "<br>";
					
					foreach($course as $unit => $desc) {
						echo "UNIT: " . $unit . " ----- " . "DESCRIPTION: " . $desc . "<br>";
					}
					
					echo "<br>";
				}
				
			?>
		</div>
	</body>
</html>
