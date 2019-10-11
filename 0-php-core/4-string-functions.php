<html>
	<head>
		<link rel="stylesheet" href="../style.css"/>
		<title>Php-Studies - String function</title>
	</head>
	<body>
		<div class="container">
			<h1>Some string functions</h1>
			<ol>
				<li>strlen</li>
				<li>str_word_count</li>
				<li>strpos</li>
				<li>strrev</li>
				<li>str_replace</li>
				<li> ... </li>
			</ol>
			
			<?php
				$my_var = "I am a string variable";
				echo "$my_var <br>";
				
				$len = strlen($my_var);
				if ($len > 10) {
					echo "The length, $len is greater than 10<br>";
				} else {
					echo "The length, $len is less than or equal to 10<br>";
				}
				
				$word_count = str_word_count($my_var);
				echo "There are $word_count words in the above string<br>";
				
				$pos_of_string = strpos($my_var, "string");
				echo "\"string\" is the $pos_of_string th word in the string<br>";
				
				$rev_my_var = strrev($my_var);
				echo "$rev_my_var<br>";
				
				$pos_of_string_rev = strpos($rev_my_var, strrev("string"));
				echo "now the rev \"string\" is the $pos_of_string_rev th word in the string<br>";
				
				$repl_str = str_replace("string", "gnirts", $my_var);
				echo "$repl_str<br>";
				
			?>
		</div>
	</body>
</html>
