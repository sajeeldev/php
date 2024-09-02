<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables</title>
</head>
<body>
        <h1>Variables</h1>

        <h4>Declaring variables</h4>

        <?php
        // Variable - a variable starts with $ sign, must start with a letter or underscore and have a short name like $car, $age

        $x = 10;
        $y = 20;
        $sum = $x + $y;
        echo $sum;
        ?>

        <h1>Variables Scope</h1>

        <?php
        
        echo "<h1>Local Variable</h1>";

        // Local Variable declared inside the function and can only be accessed inside the function.

        function local($x, $y){
            $sum = $x + $y;
            echo "The sum of 10 + 20 is: " . $sum;
        }

        local(10, 20);


        echo "<h1>Global Variable</h1>";

        // Global variable declared outside the function and can only be accessed outside the function

        $val1 = 250;
        $val2 = 50;
        $result = $val1 + $val2;
        function global_var(){

        }

        echo $result;
        global_var();


        echo "<h1>Use global keyword to access a global variable inside the function</h1>";

        $a = 10;
        $b = 15;
        function global_inside(){
            global $a, $b;
            $b = $a + $b;
        }

        global_var();
        echo $b;



        

        ?>
    
</body>
</html>