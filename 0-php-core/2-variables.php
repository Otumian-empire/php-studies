<html>
	<head>
		<link rel="stylesheet" href="../style.css"/>
		<title>Php-Studies - variables</title>
	</head>
	<body>
		<div class="container">
			<h1>Variables</h1>
			<ol>
				<li>variables begin with the $ sign</li>
				<li>variable names may start with an alphabet or an underscore</li>
				<li>followed by a number, letter or underscore</li>
				<li>variable names are case sensitive</li>
			</ol>
			<?php
				// declaration of variables
				$imy_var = 74;
				$smy_name = "variable";
				
				echo "I am not new to PHP, hey look, $smy_name";
				
				// global and local variables
				/** 
				 * this function will produce an error
				 * because we are trying to call a variable in a function
				 */ 
				function get_var_1() {
					// $imy_var and smy_name are global variables
					// but will produce an error here
					echo "<br>$smy_name";
				}
				
				get_var_1();
				
				/**
				 * this fixes the above code
				 */
				function get_var_2() {
					// we can make the variable a global variable using the 
					// global keyword
					global $smy_name;
					
					echo "<br>global $smy_name";
				}
				
				get_var_2();
				
				/**
				 * This also solve the proble
				 * using $GLOBAL[index]
				 */
				 function get_var_3() {
				 	echo "I am a global variable, ".$GLOBAL['smy_name'];
				 }
				 
				 // Static variables
				 
				 
				 function increate_my_weight($by) {
				 	static $fmy_weight = 12.51;
				 	$fmy_weight += $by;
				 	echo "<br>My weight: $fmy_weight lb";
				 }
				 
				 increate_my_weight(1.5);
				 increate_my_weight(3.15);
				 increate_my_weight(1.12);
				 increate_my_weight(-0.5);
				 
				 
			?>
		</div>
	</body>
</html>

