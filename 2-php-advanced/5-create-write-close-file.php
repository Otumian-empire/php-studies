<html>
	<head>
		<link rel="stylesheet" href="style.css"/>
		<title>Php-Studies</title>
	</head>
	<body>
		<div class="container">
			<h1>Creating and writing into files</h1>
			<ol>
				<li>fopen()</li>
				<li>fwrite()</li>
				<li>fclose()</li>
				<li></li>
			</ol>
			
            <?php
                // open file (create file)
                $new_file = fopen("newfile", "w+") or die("Heck yeah");
        
                fwrite($new_file, "Hello there!!!\nI am writing into this file...");
                fclose($new_file);

                $new_file = fopen("newfile", "a+") or die("When couldn't open the file for appending");

                fwrite($new_file, "<?php \$name='daniel'; echo \$name; ?>");
                fclose($new_file);


            ?>
		</div>
	</body>
</html>
