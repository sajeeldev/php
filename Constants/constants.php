<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constants</title>
</head>
<body>
        <h1>Constants</h1>


        <?php
            // Constants - Constants are like variables, except that once they are defined they cannot be changed or undefined. We define constant using define() function 
            
            define('x', 'value of the constant');
            echo x;

            // we can also define contstant using keyword const

            const myCar = 'Audi';
            echo myCar;

            echo "<h1>Note: const vs define()</h1>";
            echo "<h3>const can not be used inside block scope, like inside function or inside if statement</h3>";
            echo "<h3>define can be created inside another block scope</h3>";

            // Constant Arrays: we can create constant array using define() function
            define('cars',['bmw', 'audi', 'toyota']);
            print_r(cars);
        ?>

        <h1>Pre-defined Constants</h1>

        <?php
            echo "<p>php has nine pre-defined constants also called magic constants, they change there value depending on where they are used. That's why they are called magic constants</p>";

            echo "<h2>__Class__</h2>";
            // if __class__ is used inside a function, class name is returned.

            class project{
                public function db(){
                    return __CLASS__;
                }
            }
            $IOT = new project();
            echo $IOT->db();
            // print_r($IOT);

            echo "<h2>__DIR__</h2>";
            // this constant will return the directory of the file. 
            echo __dir__;


            echo "<h2>__FILE__</h2>";
            // this constant function will return the name of the file including full path 
            echo __file__;
            
            echo "<h2>__FUNCTION__</h2>";
            // If inside the function, the function name is returned
            function myFunction(){
                return __FUNCTION__;
            }
            echo myFunction();
            
            
            echo "<h2>__LINE__</h2>";
            // return the current line number
            echo __LINE__;


            echo "<h1>__METHOD__</h1>";
            // if used inside a function that belongs to a class, both the name of the class and function is returned.
            
            class Laptop {
                public function hp_Probook(){
                    return __METHOD__;
                }
            }
            $hp_Elitebook = new Laptop();
            echo $hp_Elitebook->hp_Probook();

            


        ?>

</body>
</html>