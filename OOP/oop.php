<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP - Classes and Objects</title>
</head>
<body>
        <h1>PHP OOP - Classes and Objects</h1>
        <p>A class is a template for objects and objects are the instance of class</p>

        <?php
        
            class Fruit{
                // properties
                public $name;
                public $color;

                // method
                function set_name($name){
                    $this->name =$name;
                }
                function get_name(){
                    return $this->name;
                }
                function set_color($color){
                    $this->color = $color;
                }
                function get_color(){
                    return $this->color;
                }
            }

            // new Fruit() - this is where the new object is created. The keyword new is used to instantiate the class. 
            // $apple is the object we created here, it is an instance of Fruit class, which means that it has it's own $name and $color properties.
            
            $apple = new Fruit();
            $apple->set_name('Apple');
            $apple->set_color('Red');
            echo $apple->get_name();
            echo "<br>";
            echo $apple->get_color();
        ?>


            <h1>PHP - $this keyword</h1>

            <p>The $this keyword refers to the current object, and is only available inside methods</p>

            <p>There are two ways to change value of the $name property</p>

            <p>1. Inside the class (by adding a set_name() method and use $this)</p>

        <?php

            class Car{

                // properties
                public $model;

                // methods
                function set_model($model){
                    $this->model = $model;
                }
                function get_model(){
                    return $this->model;
                }
            }

            $Toyota = new Car();
            $Toyota->set_model("Toyota");
            echo $Toyota->get_model();
        ?>

        <p>Outside the Class</p>

        <?php

            class laptop{
                // property
                public $company;
            }
            $HP = new laptop();
            $HP->company = "HP";
            echo $HP->company;
        
        ?>
</body>
</html>