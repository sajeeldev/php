<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP $GLOBALS</title>
</head>
<body>
        <h1>Global Variables</h1>

        <p>Global variables are variables that can be accessed from any scope, eg. inside a function</p>

        <p>To use the global variable inside a function, you have to either define them as global with the global keyword, or refer to them by using the $GLOBALS syntax</p>

        <?php

            $x = 70;

            function myfunction(){
                echo $GLOBALS ['x'];
            };
            myfunction();


            echo "<h3>You can also refer to the global variable inside the function by defining them as the global keyword</h3>";

            $x = 100;

            function newfunction(){
                global $x;
                echo $x;
            }
            newfunction();

            echo "<h3>Create a global variable inside a function, and use it outside a function: </h3>";

            function outfunction(){
                $GLOBALS['x'] = 100;
            }
            outfunction();

            echo $GLOBALS['x'];
            echo $x;
            

        ?>
</body>
</html> 