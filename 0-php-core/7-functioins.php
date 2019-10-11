<?php declare(strict_types=1); ?>
<html>
	<head>
		<link rel="stylesheet" href="../style.css"/>
		<title>Php-Studies - functions</title>
	</head>
	<body>
		<div class="container">
			<h1>Functions</h1>
			<ol>
				<li>user defined</li>
				<li>in-built</li>
			</ol>
			
			<?php
				
				// user defined functions
				function say_hello() {
					echo "Hello<br>";
				}
				
				say_hello();
				
				// function with an argument
				function say_hello_name($name) {
					echo "Hello $name<br>";
				}
				
				say_hello_name("John Doe");
				
				
				function add($num1, $num2) {
					$result = $num1 + $num2;
					echo "$result<br>";
				}
				
				add(2, "4 people");
				
				// declaring the type of an argument
				function mult(int $num1, int $num2) {
					$result = $num1 * $num2;
					echo "$result<br>";
				}
				
				// mult(2, "-1 3");
			
				function add_3(int $num) {
					echo "adding 3 to $num";
					$num += 3;
					echo " to result in $num<br>";
				}
				
				add_3(4);
				/* add_3('4');
				add_3(4.0); */
				
				// default arguments
				function add_4(int $num = 0) {
					echo ($num + 4) . "<br>";
				}
				
				add_4(3);
				add_4();
				
				function display(int $num1, int $num2, string $func) {
					echo "The result of $num1 and $num2 by $func is {$func($num1, $num2)}<br>";
				}
				
				function add_new(int $num1, int $num2) : int {
					$result = $num1 + $num2;
					return $result;
				}
				
				display(1,2,"add_new");
				
			?>
		</div>
	</body>
</html>
