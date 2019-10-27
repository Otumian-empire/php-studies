<html>
	<head>
		<link rel="stylesheet" href="style.css"/>
		<title>Php-Studies | file handling</title>
	</head>
	<body>
		<div class="container">
			<h1>Php file handling</h1>
			<ol>
				<li>creating</li>
				<li>reading - The readfile() function reads a file and writes it to the output buffer.</li>
				<li>uploading</li>
				<li>editing</li>
			</ol>
			
            <?php
                $file_content = readfile("../LICENSE.md");
                echo "<div class='container center'>" . $file_content[0] . "</div>";
            ?>
		</div>
	</body>
</html>
