<?php
$message = "";

if (isset($_POST['upload_file']) && $_SERVER['REQUEST_METHOD'] === "POST") {
    if (isset($_FILES['file_to_upload'])) {
        $file = $_FILES['file_to_upload'];

        $file_name = $file['name'];
        $file_type = $file['type'];
        $file_size = $file['size'];
        $file_temp_name = $file['tmp_name'];
        $file_error = $file['error'];
        
        if ($file_error) {
            $message = "There was an error";
        } else {
			if ($file_size <= 500000) {
				if (move_uploaded_file($file_temp_name, './'.$file_name)) {
					$message = "You have upload a file called $file_name with extension $file_type";
				}
			} else {
				$message = "File size is too large";
			}
        }
    } else {
        $message = "FILE is not set";
    }
}

?>
<html>
	<head>
		<link rel="stylesheet" href="style.css"/>
		<title>Php-Studies</title>
	</head>
	<body>
		<div class="container">
			<h1>Php file upload</h1>
			<p>Message <?php if ($message) echo " - " . $message; ?></p>
			<ol>
				<li>enctype="multipart/form-data"</li>
			</ol>
			
            <div>
                <form action="" method="POST" enctype="multipart/form-data">
                    <input type="file" name="file_to_upload">
                    <input type="submit" value="upload" name="upload_file">
                </form>
            </div>
			<?php ?>
		</div>
	</body>
</html>
