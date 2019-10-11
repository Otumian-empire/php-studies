<html>
	<head>
		<link rel="stylesheet" href="../style.css"/>
		<title>Php-Studies - Data tpes</title>
	</head>
	<body>
		<div class="container">
			<h1>Data types in php</h1>
			<ol>
				<li>String</li>
				<li>Integer</li>
				<li>Float</li>
				<li>Boolean</li>
				<li>Array</li>
				<li>Object</li>
				<li>NULL</li>
				<li>Resource</li>
			</ol>
			<div>
				<?php
					$var_string = "I am a string";
					$var_int = 123;
					$var_float = 3.143;
					$var_bool = true;
					$var_array = array($var_string, $var_int, $var_float,
					 $var_bool);
					// object
					class obj {
						function get_name() {
							return $this->name;
						}
						
						function set_name($name) {
							$this->name = $name;
						}
						
					}
					 
					var_dump($var_string);
					echo "<br>";
					var_dump($var_int);
					echo "<br>";
					var_dump($var_float);
					echo "<br>";
					var_dump($var_bool);
					echo "<br>";
					var_dump($var_array);
					echo "<br>";
					$myobj = new obj();
					$myobj->set_name('John Doe');
					var_dump($myobj->get_name());
					echo "<br>";
					var_dump($myobj);
					echo "<br>";
					echo "A resource could be a db_link or file_link";
				?>
			</div>
		</div>
	</body>
</html>

