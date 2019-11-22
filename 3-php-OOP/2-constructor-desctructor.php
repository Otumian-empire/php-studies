<?php

    class Student
    {
        // two properties
        private $full_name;
        private $id;

        // constructor method
        function __construct($name, $id) {
            $this->full_name = $name;
            $this->id = $id;
        }

        // destructor
        function __destruct() {
            echo "THE END";
        }

        // methods for set and get
        public function get_full_name() : string
        {
            return $this->full_name;
        }

        public function get_id() : string
        {
            return $this->id;
        }
    }

    $studen_1 = new Student("Daniel Danny", "38");
    $name = $studen_1->get_full_name();
    $id = $studen_1->get_id();
    echo "The name is $name with id, $id";
    echo "<br><br>";

    $student_2 = new Student("John Doe", "34564");

    echo "This students name is " . $student_2->get_full_name() . " and the id is " . $student_2->get_id();
?>

<html>
	<head>
		<link rel="stylesheet" href="style.css"/>
		<title>Php-Studies</title>
	</head>
	<body>
		<div class="container">
			<h1>OOP - constructors, destructors and access modifiers</h1>
			<ol>
				<li>contructors - function __contructor</li>
				<li>destructor</li>
				<li></li>
				<li></li>
			</ol>
			
			<?php ?>
		</div>
	</body>
</html>
