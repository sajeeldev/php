<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - OOP Inheritance</title>
</head>
<body>
        <h1>PHP - What is inheritance?</h1>
        <h3>Inheritance in OOP is when a class is derived from another class</h3>

        <p>The child class will inherit all the public and protected properties and methods from the parent class.</p>
        <p>An inherited class is defined by using extends keyword</p>

        <?php

            class car{
                public $model;
                public $year;

                public function __construct($model, $year){
                    $this->model = $model;
                    $this->year = $year;
                }
                public function intro(){
                    echo "The model of the car is: $this->model The year is: $this->year";
                }
            }
            class newcar extends car{
                public function message(){
                    echo "This is my new car";
                }
            }

            $newcar = new newcar("bmw", "1997");
            $newcar->intro();
            $newcar->message();

        ?>

        <h2>PHP - Inheritance and the protected Access Modifier</h2>

        <?php

            class Fruit{
                public $name;
                public $color;
               
                public function __construct($name, $color){
                    $this->name = $name;
                    $this->color = $color;
                }

                protected function intro(){
                    echo "The name of fruit is: $this->name  and the color is : $this->color ";
                }
                
            }    
            class strawberry extends Fruit{
                public function message(){
                    echo "am i a fruit or a berry: ";
                    $this->intro();
                }
            }

            $strawberry = new strawberry("strawberry", "red");
            $strawberry->message();
            echo "<br>";
           // $strawberry->intro(); // give an error while executing this 
        ?>


            <h2>PHP - Overriding Inherited Methods</h2>

            <p>Inherited methods can be overriden by redefining the methods ( use the same name ) in the child class</p>


            <?php

                class grade10{
                    public $students;
                    public $section;

                    public function __construct($students, $section){
                        $this->students = $students;
                        $this->section = $section;
                    }

                    public function intro(){
                        echo "The students of grade 10 are: $this->students & the section is $this->section";
                    }
                }
                class grade9 extends grade10{
                    public $subject;
                    public function __construct($subjects,  $section, $subject){
                        $this->students = $students;
                        $this->section = $section;
                        $this->subject = $subject;
                    }
                    public function intro(){
                        echo "The total students are $this->students and section is $this->section and the subject is $this->subject ";
                    }
                }

                $classobj = new grade9('48', 'I2-17', 'Maths');
                $classobj->intro();
            
            
            ?>


                <h2>PHP - The final keyword</h2>

                <p>The final keyword is used to prevent the class inheritance or to prevent method overriding </p>

                

                <?php

                    // we cannot inherit class with the class defined with the final keyword

                    final class accessories{
                        public $list;
                    }
                    // class chargers extends accessories{  
                    //     public $price;
                    // }
                
                ?>

                <?php
                
                    
                
                
                ?>

            
        


</body>
</html>