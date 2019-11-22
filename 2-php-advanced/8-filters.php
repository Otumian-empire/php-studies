<html>
	<head>
		<link rel="stylesheet" href="style.css"/>
		<title>Php-Studies</title>
	</head>
	<body>
		<div class="container">
			<h1>Php Filters</h1>
			<ol>
				<li>filter_var(data, type of filter)</li>
				<li>FILTER_SANITIZE_STRING</li>
				
                <p>Validating data = Determine if the data is in proper form.</p>
                <p>Sanitizing data = Remove any illegal character from the data.</p>
			</ol>
			
            <?php
                $name = "<hello>John 'Doe";
                $new_name = filter_var($name, FILTER_SANITIZE_STRING);
                echo $new_name;
                echo "<br>";

                $int = 12;

                if (!filter_var($int, FILTER_VALIDATE_INT) === false) {
                    echo "this is an int";
                } else {
                    echo "this is not an int";
                }
                echo "<br>";

                $my_email = "Helloworld@babycoding.code";
                $sanitized_email = filter_var($my_email, FILTER_SANITIZE_EMAIL);

                if (!filter_var($sanitized_email, FILTER_VALIDATE_EMAIL) === false) {
                    echo "This email is valid";
                } else {
                    echo "this email is not valid";
                }
                echo "<br>";

            ?>
		</div>
	</body>
</html>
