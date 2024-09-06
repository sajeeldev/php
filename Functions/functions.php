<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
        <h1>Functions</h1>

        <p>User-defined function starts with the keyword function followed by the name of the function</p>


        <?php
            // user-defined function example

            // Create and Call a function

            function func_Name(){   
                echo "Hello World";
            }
            func_name();

            echo "<br>";
            echo "<br>";

            echo "<h1>PHP Function Arguments</h1>";

            function iphone($model){
                echo "iPhone - $model . <br>";
            }
            iphone("8 plus");
            iphone("Xs Max");
            iphone("11 pro max");
            iphone("12 mini");
            iphone("13 pro max");
            

            echo "<h1>PHP Function with two Arguments</h1>";
            
            function Car($model , $year){
                echo "Honda - $model - $year <br>";
            }
            Car("Civic Rebirth", "2013");
            Car("Accord", "2021");
            Car("City Aspire", "2022");
            
            
            echo "<h1>PHP Function with returning values</h1>";
            
            function Sum($x, $y){
                $sum = $x + $y;
                return $sum;
            }
            echo Sum(5, 3);
            
            
            echo "<h1>PHP Function - passing arguments by reference</h1>";
            
            
            function add(&$value){
                $value =+ 5;
            }
            $num = 8;
            add($num);
            echo $num;
            
            
            echo "<h1>A function that do not know how many arguments it will get</h1>";
            
            echo "<p>By using ... Operator in the functions parameter. The function accepts the unknown number of arguments, This is also called vardiac function</p>";
            

            function sumMyNumber(...$x){
                $n = 0;  // to store the values of array
                $len = count($x);
                for($i = 0; $i < $len; $i++){
                    $n += $x[$i];
                }
                return $n;
            }

            $sum = sumMyNumber(5,2,3);
            echo $sum;

        ?>
</body>
</html>