<?php
    class StaticClass
    {
        public function __construct()
        {
            self::static_method();
        }

        public static function static_method()
        {
            echo "I am a static method\n";
        }
    }

    class UseStaticMethod
    {
        public function __construct()
        {
            StaticClass::static_method();
        }
    }

    class ExtendStaticClass extends StaticClass
    {
        // class ExtendStaticClass extends StaticClass
        public static $x = 124;
    }

    class ExtendESC extends ExtendStaticClass
    {
        public function get_sv()
        {
            return parent::$x;
        }
    }


    StaticClass::static_method();
    new StaticClass();
    new UseStaticMethod();
    $esc = new ExtendStaticClass();
    echo "{$esc::$x}\n";

    echo "I am from the parent: ";
    $y = new ExtendESC();
    echo $y->get_sv();



?>

<html>
	<head>
		<link rel="stylesheet" href="style.css"/>
		<title>Php-Studies</title>
	</head>
	<body>
		<div class="container">
			<h1>Static methods and properties</h1>
			<ol>
				<li>static</li>
				<li>class_name::method_name</li>
				<li>make static method/property protected or public</li>
				<li>parent::static_var in the child class</li>
			</ol>
			
			<?php ?>
		</div>
	</body>
</html>
