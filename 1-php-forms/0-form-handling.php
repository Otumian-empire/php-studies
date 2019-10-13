<html>
	<head>
		<link rel="stylesheet" href="style.css"/>
		<title>Php-Studies - form handling</title>
	</head>
	<body>
		<div class="container">
			<h1>Form handling with GET and POST</h1>
			<ol>
				<li>GET</li>
				<li>POST</li>
			</ol>
			
			<!-- get form -->
			<div>
				<form method="GET" action="">
					<input type="text" value="" name="first_name" placeholder="first name"/>
					<input type="text" value="" name="last_name" placeholder="last name"/>
					<input type="submit" value="Send" name="get_form" />
				</form>
			</div>
			
			<?php
				if ($_SERVER['REQUEST_METHOD'] == 'GET') {
					if (isset($_GET['first_name'])) {
						echo "<p>first name: {$_GET['first_name']}</p>";
					}
					
					if (isset($_GET['last_name'])) {
						echo "<p>last name: {$_GET['last_name']}</p>";
					}
				}
			
			?>
			
			<!-- post form -->
			<div>
				<form method="POST" action="">
					<input type="email" value="" name="email" placeholder="email"/>
					<input type="password" value="" name="password" placeholder="password"/>
					<input type="submit" value="Send" name="post_form" />
				</form>
			</div>
			
			<?php
				if ($_SERVER['REQUEST_METHOD'] == 'POST') {
					if (isset($_POST['email'])) {
						echo "<p>email : {$_POST['email']}</p>";
					}
					
					if (isset($_POST['password'])) {
						echo "<p>password : {$_POST['password']}</p>";
					}
				}
			
			?>
		</div>
	</body>
</html>
