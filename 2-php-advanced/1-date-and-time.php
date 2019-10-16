<html>
	<head>
		<link rel="stylesheet" href="../style.css"/>
		<title>Php-Studies | Date and Time</title>
	</head>
	<body>
		<div class="container">
			<h1>Php - Date and time</h1>
			<ol>
				<li>what is - date() function formats a timestamp to a readable date and time</li>
				<li>how to - date(format,timestamp) </li>
				<li>
					<h4>some characters that are commonly used for dates</h4>
					<ul>
						<li>d - Represents the day of the month (01 to 31)</li>
						<li>m - Represents a month (01 to 12)</li>
						<li>Y - Represents a year (in four digits)</li>
						<li>l (lowercase 'L') - Represents the day of the week</li>
						<li>H - 24-hour format of an hour (00 to 23)</li>
						<li>h - 12-hour format of an hour with leading zeros (01 to 12)</li>
						<li>i - Minutes with leading zeros (00 to 59)</li>
						<li>s - Seconds with leading zeros (00 to 59)</li>
						<li>a - Lowercase Ante meridiem and Post meridiem (am or pm)</li>
						<li>A - Lowercase Ante meridiem and Post meridiem (am or pm)</li>
					</ul>
				</li>
				<li>strtotime(h, i, s, m, d, Y) - convert string to time</li>
				
			</ol>
			
			<?php
				echo "Todays date is " . date('l, M d, Y') . "<br>";
				date_default_timezone_set("Africa/Accra");
				echo "The current time is " . date('H : i : s - a') . "<br>";
				echo "<br>";
				
				// strtotime
				echo date('l - d m, Y - h:i:s-a', strtotime('Dec 2, 1996'));
				echo "<br>";
				echo "Another version of the current data and time: " . date('l, d m, Y - h:i:sa', strtotime('now'));
				echo "<br>";
				echo "The next day's date will be, " . date('l, d m, Y - h:i:sa', strtotime('tomorrow'));
				echo "<br>";
				echo "Yesterdays date was " . date('l, d m, Y - h:i:sa', strtotime('yesterday'));
				echo "<br>";
				echo "next moday will be " . date('l, d m, Y - h:i:sa', strtotime('next monday'));
				echo "<br>";
				echo "next +3 months will be " . date('l- d m, Y - H:i:sa', strtotime("+3 Months"));
				echo "<br>";
				echo "<br>";
			?>
			
		</div>
	</body>
</html>

    
    
    
    
    

