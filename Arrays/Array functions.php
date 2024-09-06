<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Functions</title>
</head>
<body>
        <h1>Array Functions</h1>

        <?php

            echo "<h2>array_chunk</h2>";
            
            $arr1 = ['a','b','c','d','e','f','g'];
            print_r(array_chunk($arr1,7));
            
            echo "<br>";
            
            
            echo "<h2>array_column</h2>";
            echo "<p>array_column - Returns the values from the single column in the input array. And only works with multidimensional array</p>";
            
            
            
            $employee = [
                [
                    "id" => "001",
                    "first name" => "Carl",
                    "last name" => "Hampton",
                ],
                [
                    "id" => "002",
                    "first name" => "Morgan",
                    "last name" => "lee",
                ],
                [
                    "id" => "004",
                    "first name" => "Che",
                    "last name" => "Machado",
                ],
            ];

            
            $ans = array_column($employee,"last name");
            print_r($ans);
            
            echo "<h2>array_combine</h2>";

            // array_combine() - combine the values of 
            
            $name = [ 'Carl', 'Morgan', 'Che'];
            $age = [ '37', '41', '28'];
            
            $result = array_combine($name, $age);
            print_r($result);
            
            
            echo "<br>";

            echo "<h2>array_fill()</h2>";
            
            $a = array_fill(3, 4, "green");
            print_r($a);
            


            echo "<h2>array_filter()</h2>";
            
            
            ?>
</body>
</html>