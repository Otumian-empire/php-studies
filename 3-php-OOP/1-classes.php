<?php

    class Student
    {
        // two properties
        private $full_name;
        private $id;

        // methods for set and get
        public function get_full_name() : string
        {
            return $this->full_name;
        }

        public function get_id() : string
        {
            return $this->id;
        }

        public function set_full_name(string $name) : void
        {
            $this->full_name = $name;
        }

        public function set_id(string $id) : void
        {
            $this->id = $id;
        }
    }

    $studen_1 = new Student(); 
    $studen_1->set_full_name("Daniel Danny");
    $studen_1->set_id("10825744");
    $name = $studen_1->get_full_name();
    $id = $studen_1->get_id();
    echo "The name is $name with id, $id";
    echo "<br><br>";

    $student_2 = new Student();
    $student_2->set_full_name("John Doe");
    $student_2->set_id("10811643");

    echo "This students name is " . $student_2->get_full_name() . " and the id is " . $student_2->get_id();
?>

<html>
	<head>
		<link rel="stylesheet" href="style.css"/>
		<title>Php-Studies</title>
	</head>
	<body>
		<div class="container">
			<h1>OOP - classes</h1>
			<ol>
				<li>class</li>
				<li>object</li>
				<li>new</li>
				<li>$this->property/method</li>
                <li>instanceof</li>
			</ol>
			
			<?php ?>
		</div>
	</body>
</html>
