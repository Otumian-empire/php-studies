<html>
	<head>
		<link rel="stylesheet" href="style.css"/>
		<title>Php-Studies</title>
	</head>
	<body>
		<div class="container">
			<h1>PHP and JSON</h1>
			<ol>
				<li>JSON stands for JavaScript Object Notation</li>
				<li>json_encode()</li>
				<li>json_decode(obj, bool)</li>
				<li></li>
			</ol>
			
            <?php
                // encode a data
                $profile = array(
                    "first_name"=>"John",
                    "last_name"=>"Doe",
                    "age"=>45,
                    "email"=>"doejohn11@programming.code"
                );

                echo json_encode($profile);

                echo "<br>";

                $items = array("rice", "sugar", "water", "trumpet");
                echo json_encode($items);

                echo "<br>";
                echo "<br>";

                $enc_pro = json_encode($profile);

                print_r(json_decode($enc_pro, true));

                echo "<br>";
                echo "<br>";

                $enc_items = json_encode($items);
                print_r(json_decode($enc_items, true));

                echo "<br>";
                echo "<br>";

                echo "<br>";
                echo "<br>";


                $obj = json_decode($enc_pro, true);
                echo "first name: " . $obj['first_name'];

                echo "<br>";
                echo "<br>";

                $obj = json_decode($enc_pro);
                echo "first name: " . $obj->first_name;



            ?>
		</div>
	</body>
</html>
