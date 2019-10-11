<html>
	<head>
		<link rel="stylesheet" href="../style.css"/>
		<title>Php-Studies - Arrays</title>
	</head>
	<body>
		<div class="container">
			<h1>Arrays</h1>
			<ol>
				<li>Numeric index array</li>
				<li>Key - value pair array</li>
				<li>multi-dimensional array</li>
			</ol>
			
			<h1>Sorting Arrays</h1>
			<ol>
				<li>sort</li>
				<li>rsort</li>
				<li>asort</li>
				<li>arsort</li>
				<li>ksort</li>
				<li>krsort</li>
			</ol>
			
			<?php
				// numeric indexed array
				$num_array = array(10, 2, 3, 1, 5);
				var_dump($num_array);
				echo "<br>";
				
				// sorting
				sort($num_array);
				var_dump($num_array);
				echo "<br>";
				
				// reverse sorting
				rsort($num_array);
				var_dump($num_array); 
				echo "<br>";
				echo "<br>";
				
				// key - value pair array
				$key_value_pair_array = array(
					'one'=> 1, 'three'=>3, 'four'=>4, 'five'=>5, 'two'=>2
				);
				var_dump($key_value_pair_array);
				echo "<br>";
				
				// sorting by key
				ksort($key_value_pair_array);
				var_dump($key_value_pair_array);
				echo "<br>";
				
				krsort($key_value_pair_array);
				var_dump($key_value_pair_array);
				echo "<br>";
				
				asort($key_value_pair_array);
				var_dump($key_value_pair_array);
				echo "<br>";
				
				arsort($key_value_pair_array);
				var_dump($key_value_pair_array);
				echo "<br>";
				echo "<br>";
				
				// multi-dimensional array
				$multi_array = array(
					array(
						array(1,2,3),
						array(4,5,6)
					),
					array('a', 'b', 'c'),
					array('d', 'e', 'f')
				);
				var_dump($multi_array);
				echo "<br>";
				
				ksort($multi_array);
				var_dump($multi_array);
				echo "<br>";
				
				krsort($multi_array);
				var_dump($multi_array);
				echo "<br>";
				echo "<br>";
			
			?>
		</div>
	</body>
</html>
