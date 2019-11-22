<?php
    /**
     * This is the template for any four sided figure
     */
    class Quadrilateral
    {
        protected $side1;
        protected $side2;
        protected $side3;
        protected $side4;
        public const PI = 3.143;

        public function __construct(int $s1, int $s2, int $s3, int $s4)
        {
            $this->side1 = $s1;
            $this->side2 = $s2;
            $this->side3 = $s3;
            $this->side4 = $s4;
        }

        /**
         * return all the sides of the quadrilateral in a form of an array
         */
        public function get_sides() : array
        {
            return array(
                "s1"=>$this->side1,
                "s2"=>$this->side2,
                "s3"=>$this->side3,
                "s4"=>$this->side4
            );
        }

        final public function get_type()
        {
            return "A quadrilateral and we are making use of " . self::PI;
        }
    }

    /**
     * This is a four sided plane figure with two of it opposite sides, equal
     */
    class Rectangle extends Quadrilateral
    {
        public function __construct(int $side1, int $side2)
        {
            $this->side1 = $this->side3 = $side1;
            $this->side2 = $this->side4 = $side2;
        }
    }


    $quad = new Quadrilateral(1, 2, 3, 4);
    print_r($quad->get_sides());
    echo "<br>";echo "<br>";echo "<br>";


    $rect = new Rectangle(4, 100);
    print_r($rect->get_sides());
    echo "<br>";echo "<br>";echo "<br>";

    echo $rect->get_type();
    echo "<br>";
    echo "We have our PI to be " . $rect::PI;
    echo "<br>";echo "<br>";


?>
<html>
	<head>
		<link rel="stylesheet" href="style.css"/>
		<title>Php-Studies</title>
	</head>
	<body>
		<div class="container">
			<h1>Inheritance</h1>
			<ol>
				<li>extends</li>
				<li>parent/super</li>
				<li>child</li>
                <li>final</li>
                <li>constant</li>
                <li>$this</li>
                <li>self - for constants along side :: in the class</li>
                <li>-></li>
                <li>::</li>
			</ol>
			
			<?php ?>
		</div>
	</body>
</html>
