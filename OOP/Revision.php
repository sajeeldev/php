<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP</title>
</head>
<body>
        <h1>PHP OOP</h1>
        <p>OOP is Object Oriented Programming</p>
        <h3>Classes and Objects</h3>
        <p>Classes and objects are the main aspects of OOP. A class is the template for Object and Object is the instance of class.</p>

        <h3>Class and Object example</h3>
        
        <?php
                // Example

            class students{
                // properties
                public $rollno;
                public $class;

                // method 
                public function edu($rollno, $class){
                    $this->rollno = $rollno;
                    $this->class = $class;
                    return "The roll no. of student is: " . $this->rollno. " and the class is: " . $this->class;
                }
                
            }

            $stuObj = new students();
            echo $stuObj->edu("21", "I2-17");
        ?>

        <h3>Example 2 - Using set and get method</h3>

        <?php

            class student{
                public $name;
                public $id;

                function set_details($name, $id){
                    $this->name = $name;
                    $this->id = $id;                    
                }
                function get_details(){
                    return $this->name . " . " . $this->id;
                }
            }

            $stu_details = new student();
            $stu_details->set_details("Nick", "2020-GCUF-057442");
            echo $stu_details->get_details();
        
        ?>

        <h1>PHP Constructor</h1>
        <p>Constructor allows us to initialize object's properties upon creation of the object.</p>
        <p>When we create a construct function, PHP will automatically call this function when we create an object</p>

        <?php

            // Constructor Example 

            class cities{
                public $name;

                function __construct($name){
                    $this->name = $name;
                }
                function get_name(){
                    return $this->name;
                }
            }

            $citObj = new cities("Islamabad");
            echo $citObj->get_name();

        ?>

        <h3>PHP Destructor</h3>

        <p>A destructor is called when the object is destructed or the script is exited.</p>
        <p>If you create a destruct function, PHP will automatically call this function at the end of the script</p>

        
        <?php

            class cold_drinks{
                public $brand;
                public $name;

                public function __construct($brand, $name){
                    $this->brand = $brand;
                    $this->name = $name;
                }
                // a destructor cleans up after an object is destroyed by releasing resources and performing necassary clean up.
                public function __destruct(){
                    echo "The brand name is $this->brand and the drink name is:  $this->name";
                }
            }

            $drinks = new cold_drinks("coca-cola", "sprite");

            
            
        ?>

        <h3>PHP Inheritance</h3>

        <p>Inheritance means a class derived from another class</p>
        <p>The child class inherit all the public and protected properties and methods from the parent class.</p>



</body>
</html>