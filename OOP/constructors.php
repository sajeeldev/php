<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - OOP Constructors</title>
</head>
<body>
        <h1>PHP - The _construct Function</h1>
        <p>A constructor allows you to initialize an object's properties</p>

        <?php

            class drink{
                public $name;
                // A constructor allows you to initialize an object's properties. 
                function __construct($name){
                    $this->name = $name;
                }
                function get_name(){
                    return $this->name;
                }
            }

            $obj = new drink('gin & tonic');
            echo "On the rock : " . $obj->get_name();

            echo "<br>";
            echo "<br>";
        
        ?>

        <?php

                class Fruit{
                    // properties
                    public $name;
                    public $color;

                    //__construct to initiazlize object's properties and php automatically call the object properties
                    function __construct($name, $color){
                        $this->name = $name;
                        $this->color = $color;
                    }
                    // to get/call the object name and color
                    function get_name(){
                        return $this->name;
                    }
                    function get_color(){
                        return $this->color;
                    }
                }

                $object = new Fruit('Apple','Red');
                echo "Fruit name is: " . $object->get_name();
                echo "<br>";
                echo "Fruit color is: " .  $object->get_color();

                echo "<br>";
                echo "<br>";

        ?>

        <?php
        
                // practise - __constructor

                class city{
                    // properties
                    public $name;
                    public $street;

                    // method
                    function __construct($name, $street){
                        $this->name = $name;
                        $this->street = $street;
                    }
                    function get_name(){
                        return $this->name;

                    }
                    function get_street(){
                        return $this->street;

                    }
                }

                $isbdobj = new city('Islamabad', 'I8/4');
                echo $isbdobj->get_name();
                echo "<br>";
                echo $isbdobj->get_street();
        ?>

        

</body>
</html>