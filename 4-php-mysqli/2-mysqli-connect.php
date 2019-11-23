<?php
    $server_name = "localhost";
    $user_name = "root";
    $password = "";
    $db_name = "";

    // connecting to db, OOP
    $db_conn = new mysqli($server_name, $user_name, $password, $db_name);

    if ($db_conn->connect_error) {
        echo "Unconnected, {$db_conn->connect_error}";
    } else {
        echo "Connected";
    }

    $db_conn->close();

    echo "<br>\n";

    // connecting to db, procedural
    $conn = mysqli_connect($server_name, $user_name, $password, $db_name);

    if (!$conn) {
        echo "Unconnected, " . mysqli_connect_error();
    } else {
        echo "Connected";
    }

    mysqli_close($conn);

    echo "<br>\n";

    try {
        $pdo_conn = new PDO("mysql:host=$server_name;dbname=$db_name", $user_name, $password);
        // set the PDO error mode to exception
        $pdo_conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        echo "Connected";
    } catch (PDOException $e) {
        echo $e->getMessage();
        $pdo_conn = null;
    }

?>

<html>
	<head>
		<link rel="stylesheet" href="style.css"/>
		<title>Php-Studies</title>
	</head>
	<body>
		<div class="container">
			<h1>MySQLi connect</h1>
			<ol>
				<li>MySQLi vs PDO</li>
				<li>new mysqli(server name, user name, password)</li>
				<li></li>
				<li></li>
			</ol>
			
			<?php ?>
		</div>
	</body>
</html>
