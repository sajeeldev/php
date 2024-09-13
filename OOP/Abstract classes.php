<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Abstract Classes</title>
</head>
<body>
        <h1>Abstract Classes</h1>
        <p>An abstract class or method are when the parent class has named method, but needs its child classes to fill out the tasks</p>
        <p>An abstract class is a class that contains at least one abstract method and abstract method is a method that is declared but not implemented in the code</p>

        <p>When a child class is inherited we have the following rules</p>

        <ul>
            <li>The child class method must be defined with the same name and it redeclares the parent abstract method</li>
            <li>The child class must be defined with the same or a less restricted access modifier</li>
            <li>The number of the required arguments must be the same. However, the child class may have optional arguments in addition.</li>
        </ul>


        <?php

            abstract class car{
                public $name;
                public function __construct($name){
                    $this->name = $name;
                }
                abstract public function intro() : string;
            }

            // child class

            class Audi extends car {
                public function intro() : string {
                    return "Choose German quality! I'm an $this->name";
                }
            }

            class Volvo extends car{
                public function intro() : string {
                    return "Proud to be swedish! I'm a $this->name!";
                }
            }
            class Citroen extends car{
                public function intro() : string {
                    return "French extravagance! I'm a $this->name!";
                }
            }

            // Create objects from the child classes

            $audi = new audi("Audi");
            echo $audi->intro();

            echo "<br>";
            echo "<br>";
            
            $volvo = new volvo("Volvo");
            echo $volvo->intro();

            echo "<br>";
            echo "<br>";
            
            $citreon = new Citroen("Citreon");
            echo $citreon->intro();
            
        ?>

        <br>
        <br>
        <br>

        <?php

            abstract class dogs{
                // properties
                public $name; // first step is to initialize the property by using construct method
                // __construct method to initialize the $name property
                public function __construct($name){
                    $this->name = $name;
                }
                abstract public function breed() : string;
            }
            // now we create the child classes 

            class husky extends dogs {
                public function breed() : string {
                    return "I am $this->name!, I Mostly live in nothern areas";
                }
            }

            class gshepherd extends dogs {
                public function breed() : string {
                    return "The most dangerous one, I am $this->name!";
                }
            }

            class labrador extends dogs {
                public function breed() : string {
                    return "One of the intelligent and pretty one, I am $this->name!";
                }
            }

            // create objects 

            $husky = new husky("Husky");
            echo $husky->breed();

            echo "<br>";
            echo "<br>";

            $gshepherd = new gshepherd("German Shepherd");
            echo $gshepherd->breed();

            echo "<br>";
            echo "<br>";


            $labrador = new labrador("Labrador");
            echo $labrador->breed();

        ?>

        <h3>Example where Abstract method has an arguments</h3>

        <?php
            
            // abstract class ParentClass{
            //     // Abstract method with an argument 
            //     abstract protected function prefixName($name);
            // }

            // // create childclass
            // class ChildClass extends ParentClass{
            //     public function prefixName($name){
            //         if($name == "john Doe") {
            //             $prefix = "Mr . ";
            //         }elseif($name == "jessica Doe"){
            //             $prefix = "Mrs .";
            //         }else{
            //             $prefix = "";
            //         }
            //         return "$prefix  $name";
            //     }
            // }

            // $class = new ChildClass;

            // echo $class->prefixName("john Doe");
            // echo "<br>";
            // echo $class->prefixName("jessica Doe");
        
        ?>


        <?php

            abstract class ParentClass {
                // abstract method with an argument
                abstract protected function prefixName($name);
            }

            class ChildClass extends ParentClass {
                public function prefixName($name){
                    if($name == "john Doe"){
                        $prefix = "Mr. ";
                    }elseif($name == "jessica Doe"){
                        $prefix = "Mrs .";
                    }else{
                        $prefix = "";
                    }
                    return " $prefix $name ";
                }
            }

            // create objects

            $class = new ChildClass();
            echo $class->prefixName("john Doe");
            echo "<br>";
            echo $class->prefixName("jessica Doe");

        ?>
</body>
</html>