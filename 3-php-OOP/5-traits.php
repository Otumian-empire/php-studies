<?php
    trait Eat
    {
        public function eat()
        {
            echo "waw, great food";
        }
    }

    class Human
    {
        use Eat;
    }

    $human = new Human();
    $human->eat();
    echo "\n";
?>