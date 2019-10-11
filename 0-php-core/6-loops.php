<html>
	<head>
		<link rel="stylesheet" href="../style.css"/>
		<title>Php-Studies - loops</title>
	</head>
	<body>
		<div class="container">
			<h1>Loops</h1>
			<ol>
				<li>while</li>
				<li>do while</li>
				<li>for</li>
				<li>foreach</li>
			</ol>
			
			<?php
				// while loop
				$a = 0;
				while ($a < 10) {
					echo ($a + 1) ** 2;
					$a++;
					echo "<br>";
				}
				
				echo "<br>";
				
				// do while loop
				$b = 10;
				do {
					echo $b ** 2;
					$b--;
					echo "<br>";
				} while ($b > 0);
				
				echo "<br>";
				
				// for loop
				for ($c = 0; $c < 10; $c++) {
					echo ($c + 1) ** 2;
					echo "<br>";
				}
				
				echo "<br>";
				
				// foreach loop
				$data = array(
					'name'=>"John Doe",
					'age'=>35,
					'job'=>"software developer"
				);
				
				foreach($data as $key=>$value) {
					echo "$key  -- $value";
					echo "<br>";
				}
				
				echo "<br>";
				
			?>
		</div>
	</body>
</html>

