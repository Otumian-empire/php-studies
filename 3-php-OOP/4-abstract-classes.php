<?php
    /**
     * The plane figure abstract class
     */
    abstract class PlaneFigure
    {
        abstract public function calculate_area($param);
        abstract public function calculate_parameter($param1, $param2);
    }

    /**
     * a child class of the plane figure
     */
    class Square extends PlaneFigure
    {
        public function calculate_area($length)
        {
            return $length * $length;
        }

        public function calculate_parameter($length, $breadth)
        {
            return 2 * ($length + $breadth);
        }
    }

    $sqr = new Square();
    echo $sqr->calculate_area(10);
    echo "<br>";
    echo $sqr->calculate_parameter(10, 10);

?>

<html>
	<head>
		<link rel="stylesheet" href="style.css"/>
		<title>Php-Studies</title>
	</head>
	<body>
		<div class="container">
			<h1>Abstract class and methods</h1>
			<ol>
				<li>An abstract class has abstract methods</li>
				<li>this means there a method names but no implementations</li>
				<li>abstract</li>
				<li>extends</li>
			</ol>
			
			<?php echo 3 ** 3;?>
		</div>
	</body>
</html>
