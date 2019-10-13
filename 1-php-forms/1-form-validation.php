<html>
	<head>
		<link rel="stylesheet" href="style.css"/>
		<title>Php-Studies - form validation</title>
	</head>
	<body>
		<div class="container">
			<h1>Form Validation</h1>
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
						<input type="email" value="" name="email" placeholder="email"/>
						<input type="password" value="" name="password" placeholder="password"/>
					</div>
					
					<div>
						gender : <input type="radio" value="male" name="gender" placeholder="" checked="true"/> male
						<input type="radio" value="female" name="gender" placeholder="" /> female
					</div>
					
					<div>
						<textarea name="message" placeholder="message" cols="60%" rows="10%"></textarea>
					</div>
					
					
					<input type="submit" value="Send" name="post_form" />
				</form>
			</div>
			
			<?php
				if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				
					$email = validate_input($_POST['email']);
					$password = validate_input($_POST['password']);
					$gender = validate_input($_POST['gender']);
					$message = validate_input($_POST['message']);
					
					
					if (!empty($email)) {
						echo "<p>email : $email</p>";
					}
					
					if (!empty($password)) {
						echo "<p>password : $password</p>";
					}
					
					if (!empty($gender)) {
						echo "<p>gender : $gender</p>";
					}
					
					if (!empty($message)) {
						echo "<p>message : $message</p>";
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
		</div>
	</body>
</html>
