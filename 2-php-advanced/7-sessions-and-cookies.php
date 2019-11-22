<?php
session_start();
$_SESSION['name'] = $user;

$message = isset($_SESSION['name'])? $_SESSION['name'] : "Sorry, session isn't set";
echo $message;

session_unset();
session_destroy();
?>
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
				<li>session_start()</li>
				<li>session_unset() and session_destroy()</li>
			</ol>
			
            <?php
                // creating a cookie
                $user = "John Doe";
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
