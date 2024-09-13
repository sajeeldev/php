<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Class Constant</title>
</head>
<body>
        <h1>PHP - Class Constants</h1>

        <p>Class constant can be useful if you need to define the some constant data within a class</p>
        <p>A class constant is declared inside a class using const keyword</p>
        <p>A constant can not be changed once it's declared</p>
        <p>We can access a constant from outside the class by using the class name followed by the scoper resolution operator followed by the constant name</p>


        <?php

            class goodbye{
                const leaving_message = "Thank you for visiting my portfolio";
            }
            echo goodbye::leaving_message;
        
        ?>

        <p>Or we can access constant from inside the class by using self keyword followed by the scope resolution followed by the name of the constant</p>

        <?php
        
            class welcome{
                const welcome_msg = "Welcome to my portfolio";

                public function greetings(){
                    echo self::welcome_msg;
                }
            }

            $obj = new welcome();
            $obj->greetings();
        
        ?>


</body>
</html>