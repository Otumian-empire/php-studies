<html>
	<head>
		<link rel="stylesheet" href="style.css"/>
		<title>Php-Studies</title>
	</head>
	<body>
		<div class="container">
			<h1>Php - Open, read and close file</h1>
			<ol>
				<li>Open File - fopen()</li>
				<li>Read File - fread()</li>
				<li>close File - fclose()</li>
				<li>read a line - fgets()</li>
                <li>read a char - fgetc()</li>
                <li>check end of file - feof()</li>
			</ol>
			
            <?php
                // reading the entire content of a file
                $file = fopen("../LICENSE.md", "r") or die("Couldn't open file");
                $file_size = filesize("../LICENSE.md");
                $file_content = fread($file, $file_size);
                echo $file_content;
                fclose($file);

                echo "<br>";
                echo "<br>";

                // read the first line of a file
                $first_line = fgets(fopen("../LICENSE.md", "r"));
                echo "THIS IS THE FIRST LINE - " . $first_line . "<br>";

                echo "<br>";
                echo "<br>";

                // read the content a file line by line
                $new_file = fopen("../style.css", 'r');
                echo "<ol>";
                while (!feof($new_file)) {
                    echo "<li>". fgets($new_file) ."</li>";
                }
                echo "</ol>";
                fclose($new_file);

                echo "<br>";
                echo "<br>";

                // read the content of a file char by char
                $new_file = fopen("../style.css", 'r');
                $no = 0;
                while (!feof($new_file)) {
                    $no++;
                    echo $no . "| " . fgetc($new_file) . "<br>";
                }

                echo "<br>";
                echo "<br>";

            ?>
		</div>
	</body>
</html>
