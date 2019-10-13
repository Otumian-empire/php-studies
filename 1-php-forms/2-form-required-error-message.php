<?php
	// email, password, gender, mesage and there respective error messages
	$emailError = $passwordError = $genderError = $messageError = "";
	$email = $password = $gender = $message = "";
	
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		// check if an field is empty
		// else parse it
		
		if (!empty($_POST['email'])) {
			$email = validate_input($_POST['email']);
		} else {
			$emailError = "Email error";
		}
			
		if (!empty($_POST['password'])) {
			$password = validate_input($_POST['password']);
		} else {
			$passwordError = "Password error";
		}
		
		if (!empty($_POST['gender'])) {
			$gender = validate_input($_POST['gender']);
		} else {
			$genderError = "Gender error";
		}
		
		if (!empty($_POST['message'])) {
			$message = validate_input($_POST['message']);
		} else {
			$messageError = "Message error";
		}
		
		
		
		
	}
	
	// function that validates the user input
	function validate_input($data) {
		$data = htmlspecialchars($data);
		$data = trim($data);
		$data = stripslashes($data);
		
		return $data;
		
	}

?>
			
<?php ?>
<html>
	<head>
		<link rel="stylesheet" href="style.css"/>
		<title>Php-Studies - Form Validation | required and error messages</title>
	</head>
	<body>
		<div class="container">
			<h1>Form Validation | required and error messages</h1>
			<ol>
				<li>htmlspecialchars - for html characters</li>
				<li>trim - remove whitespaces</li>
				<li>stripslashes - remove slashes</li>
			</ol>
			
			<!-- post form -->
			<div>
				<!-- using htmlspecialchars to avoid xss -->
				<form method="POST" action="<?=htmlspecialchars($_SERVER['PHP_SELF']);?>">
					<div>
						Email: <input type="email" value="" name="email" placeholder="email"/>
						<br>
						<?php echo "<span>$emailError</span>";?>
						<br>
						
						password: <input type="password" value="" name="password" placeholder="password"/>
						<br>
						<?php echo "<span>$passwordError</span>";?>
						<br>
					</div>
					
					<div>
						gender : <input type="radio" value="male" name="gender" placeholder="" checked="true"/> male
						<input type="radio" value="female" name="gender" placeholder="" /> female
						<br>
						<?php echo "<span>$genderError</span>";?>
					</div>
					
					<div>
						message: <textarea name="message" placeholder="message" cols="60%" rows="10%"></textarea>
						<br>
						<?php echo "<span>$messageError</span>";?>
					</div>
					
					
					<input type="submit" value="Send" name="post_form" />
				</form>
			</div>
			
			
		</div>
	</body>
</html>

