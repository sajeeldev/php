<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP - Interfaces</title>
</head>
<body>
        <h2>OOP - Interfaces</h2>

        <h3>What are interfaces</h3>
        <p>Interfaces allow you to specify what methods a class should implement</p>
        <p>To implement an interface, a class must use the keyword implements</p>

        <?php
        
            // interfaces class example
            interface Animal {
                public function makesound();
            }

            class cats implements Animal {
                public function makesound(){
                    echo "Meow";
                }
            }

            $animal = new cats();
            $animal->makesound();
        ?>
         
            <?php

            // Note: difference between the interface and class - Cars is an interface and Audi is the class. and the class Audi is derived from the interface cars 

                interface cars {
                    public function model();
                }

                class Audi implements cars {   // "implements" keyword implements the interface on class "Audi"
                    public function model(){
                        echo "Audi A6";
                    }
                }

                $car = new Audi();
                $car->model();

            ?>

                <br>
                <br>
                

            <!-- Suppose if we have group of animals we have to write a software to manage there actions that all animals can do -->

                <?php
                

                    interface animals {
                        public function sound();
                    }

                    class Dog implements animals {
                        public function sound() {
                            echo "bark";
                        }
                    }

                    class Cat implements animals {
                        public function sound() {
                            echo "Meow";
                        }
                    }

                    class Mouse implements animals {
                        public function sound(){
                            echo "squeak";
                        }
                    }

                    $dogs = new Dog();

                    $cats = new Cat();

                    $mouse = new Mouse();

                    $animalsounds = [$dogs, $cats, $mouse];

                    foreach($animalsounds as $key){
                        echo " " .  $key->sound();
                    }
                
                
                ?>


</body>
</html>