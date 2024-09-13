<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Inheritance + Constant</title>
</head>
<body>
        <h1>PHP - Inheritance</h1>
        <p>inheritance means the a class is derived from another class</p>

        <?php
        
            class Fruit {
                public $name;
                public $color;

                public function __construct($name, $color){
                    $this->name = $name;
                    $this->color = $color;
                }
                public function intro(){
                    echo "the fruit name is  $this->name and the color is:  $this->color ";
                }
            }
            class DryFruits extends Fruit {
                public function message(){
                    echo "Is this a dry fruit or fresh fruit";
                }
            }

            $dryfruits = new DryFruits("apple", "red");
            $dryfruits->intro();
            $dryfruits->message();

        ?>

        <h1>Constant</h1>

        <p>A constant can be useful when you need to define some constant data within a class</p>
        <p>A class constant is declared inside the class with const keyword</p>

        <?php
            
            class myClass{
                const leaving_msg = "My class strength is 48";
                public function strength(){
                    echo self::leaving_msg;
                }
            }
            $nObj = new myClass();
            $nObj->strength();
        ?>

        <?php

            class laptop{
                const HP = "This laptop is in good condition";
                public function bye(){
                    echo self::HP;  
                }
            }

            $newlaptop = new laptop();
            $newlaptop->bye();
        
        ?>
</body>
</html>