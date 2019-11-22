<html>
	<head>
		<link rel="stylesheet" href="style.css"/>
		<title>Php-Studies</title>
	</head>
	<body>
		<div class="container">
			<h1>Sessions and cookies</h1>
			<ol>
				<li>setcookie(name, value, expire, path, domain, secure, httponly);
</li>
				<li>set the expiration date to one hour ago
setcookie(name, "", time() - 3600);
</li>
				<li></li>
				<li></li>
			</ol>
			
            <?php
                // creating a cookie
                $user = "user";
                setcookie($user, "John Doe", time() + (600), '2-php-advanced/'); // expires after 10mins

                // modifying the cookie
                if (!isset($_COOKIE[$user])) {
                    echo "The cookie value is " . $_COOKIE[$user];

                    print_r($_COOKIE);
                } else {
                    echo "Cookie is not set";
                }

            ?>
		</div>
	</body>
</html>
