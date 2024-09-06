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

            // <!-- -----------------[1]----------------------- -->
            
            echo "<h2>array_chunk</h2>";
            
            $arr1 = ['a','b','c','d','e','f','g'];
            print_r(array_chunk($arr1,7));
            
            echo "<br>";
            
            // <!-- -----------------[2]----------------------- -->
            
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


            
            // <!-- -----------------[2]----------------------- -->
            
            
            echo "<h2>array_combine</h2>";
            
            // array_combine() - combine two arrays one as key and one as value and return an array
            
            $name = [ 'Carl', 'Morgan', 'Che'];
            $age = [ '37', '41', '28'];
            
            $result = array_combine($age, $name);
            print_r($result);

            echo "<br>";
            
            
            // <!-- -----------------[3]----------------------- -->
            
            
            
            echo "<h2>array_fill()</h2>";
            
            // array_fill() - fill an array with values
            
            $a = array_fill(3, 4, "green");
            print_r($a);
            
            

            // <!-- -----------------[4]----------------------- -->
            
            
            
            echo "<h2>array_filter()</h2>";
            
            // Return an array with the filtered values  || Or Filter the values of an array using a call back function
            
            $arr = ["integer", 76, 'integer with single quote', Null, "integer 2", False, 0, 7.09];
            
            echo "<h4>Original Values</h4>";
            
            echo "<pre>";
            print_r($arr);
            echo "</pre>";
            
            echo "<h4>Filtered Values</h4>";
            
            $filtered = array_filter($arr);
            echo "<pre>";
            print_r($filtered);
            echo "</pre>";
            
            // Filter the values of an array using a callback function.
            
            
            // This function is used to check if the value is odd or even, The $var variable in the function is used to pass the values of the array. It uses bitwise AND & operator to check if the value is 1 or 0. If the value is 1, The function $var & 1 returns 1 if the value is 1, means odd number. And if the value is 0 it returns 0, even number.



            // <!-- -----------------[5]----------------------- -->
            
            
            
            function is_odd($var){
                return ($var & 1);
            }
            
            $arr = [1,2,3,4,5,6,7,8,9];
            
            echo "<pre>";
            print_r(array_filter($arr, "is_odd"));
            echo "</pre>";
            

            // <!-- -----------------[6]----------------------- -->
            
            
            echo "<h1>array_flip</h1>";
            
            $arr = ["key1" => "value1","key2" => "value2","key3" => "value3","key4" => "value4",];
            
            print_r(array_flip($arr));
            


            // <!-- -----------------[7]----------------------- -->
            
            
            
            echo "<h1>Array_map</h1>";
            
            echo "<p>Sends each value of an array to a user-defined function, Which returns new values</p>";
            
            // example 1
            
            function myFunction($m){
                return ($m + 5);
            }

            $arr2 = [1,2,3,4,5];
            print_r(array_map("myfunction", $arr2));
            
            // example 2
            
            function newFunction($x){
                return ($x * $x);
            }
            
            $arr3 = [2,2,2,2,2,2,2,2];
            echo "<pre>";
            print_r(array_map("newfunction", $arr3));
            echo "</pre>";

            
            
            

            // <!-- -----------------[8]----------------------- -->
            
            
            
            echo "<h1>Array merge()</h1>";
            
            echo "<p>array_merge() - function merge 2 or more arrays in to one array</p>";
            
            $array1 = [ "Red", "Blue","Black","Yellow","Green","Orange"];
            $array2 = [ 'Monday', 'Tuesday','Wednesday','Thursday','Friday','Saturday', 'Sunday' ];
            
            echo "<pre>";
            print_r(array_merge_recursive($array1, $array2));
            echo "</pre>";
            
            

            // <!-- -----------------[9]----------------------- -->
            
            
            
            
            
            echo "<h1>Array_merge_recursive</h1>";
            
            $asc = ["R" => "Red", "B" => "Blue","O" => "Orange","B" => "Black","W" => "White"];
            $asc1 = ["reg" => "chun", "comp" => "xhio","pary" => "pat","olty" => "noi","Watty" => "koad"];
            
            echo "<pre>";
            print_r(array_merge_recursive($asc, $asc1));
            echo "</pre>";
            
            
            // <!-- -----------------[10]----------------------- -->
            
            
            echo "<h1>array_multisort()</h1>";
            echo "<p>Sort multiple arrays or multidimensional arrays</p>";
            
            $a = ["Dog", "Cat", "Horse", "Bear", "Monkey", "Zebara" ];
            $b = ["Dog", "Cat", "Horse", "Bear", "Monkey", "Zebara" ];
            array_multisort($a,$b);
            print_r($a);
            print_r($b);
            
            // <!-- -----------------[11]----------------------- -->
            // -------------------------------------  //  11
            
            echo "<h1>Array pad</h1>";
            echo "<p>Inserts a specified number of items to an array with a specified value</p>";
            
            $x = ["January", "February","March","April","May", "June", "July", "August"];
            
            $v = array_pad($x, 9, "September");
            print_r($v);
            

            // <!-- -----------------[12]----------------------- -->
            // -------------------------------------  //  12
            
            
            echo "<h1>Array pop</h1>";
            echo "<p>Remove the last element of an array</p>";
            
            
            $pop = [ "Lemon", "Carrot", "Radish", "Onion", "Potato", "Mango" ];
            print_r($pop);
            echo "<br>";
            echo "<br>";
            print_r(array_pop($pop));
            echo "<br>";
            echo "<br>";
            print_r($pop);
            


            // <!-- -----------------[12]----------------------- -->
            
            
            
            echo "<h1>Array push<h1>";
            echo "<p>Array push function adds items to the end of an array</p>";
            
            $push = [ "Lemon", "Carrot", "Radish", "Onion", "Potato" ];
            array_push($push, "new", "garlic");
            print_r($push);
            

            // <!-- -----------------[12]----------------------- -->
            // -------------------------------------  //
            
            
            echo "<h1>Array reduce<h1>";
            
            // array_reduce is used to print the values as a string with user-defined function
            
            function reduceFunction($v1, $v2){
                return $v1 . " | "  . $v2;
            }
            
            $a = ["Apple", "Orange","Banana",];
            
            print_r(array_reduce($a, "reduceFunction"));
            
            
            // <!-- -----------------[13]----------------------- -->
            // -------------------------------------  //
            
            echo "<h1>Array replace<h1>";
            
            // replace the value of the first array with the values of second array 
            
            $color = [ "Red", "Yellow", "Black"];
            $colour = [ "Green", "Blue", "White"];
            
            print_r(array_replace($color, $colour));
            
            // <!-- -----------------[14]----------------------- -->
            // -------------------------------------  //
            
            echo "<h1>Array Search<h1>";
            
            // Search for the specified value from an array and return the key of that value;
            
            $col = [ "Red", "Yellow", "Black", "Green", "Blue", "White"];
            
            print_r(array_search("Blue", $col));
            
            
            // <!-- -----------------[15]----------------------- -->
            // -------------------------------------  //
            
            echo "<h1>Array Slice<h1>";
            
            // returns the selected part of an array 
            
            $var = [ "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
            
            print_r(array_slice($var, 10));
            
            // <!-- -----------------[16]----------------------- -->
            // -------------------------------------  //
            
            echo "<h1>Array Splice<h1>";
            
            // syntax  |  array_splice(array1,start,length, array2)
            // array_splice replace the specified elements of an array 
            
            $var = [ "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
            $col = [   "Black"];
            
            array_splice($var, 7, 1, $col);
            print_r($var);
            
            
            // <!-- -----------------[17]----------------------- -->
            // -------------------------------------  //
            
            echo "<h1>Array Walk<h1>";
            
            // Array walk function run each array element in a user-defined function. 
            
            // syntax - array_walk(array, myfunction, parameter...)
            
            $vari = [ "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
            
            function wlkFunction($x, $y){
                echo "Month is $x of $y <br>";
            }
            
            array_walk($vari, "wlkFunction");
            
            
            
            // <!-- -----------------[18]----------------------- -->
            // -------------------------------------  //
            
            // import varialbes into the current symbol table from an array
            
            echo "<h1>extract()<h1>";
            $a = "original";
            $arr = ["a" => "one" , "b" => "two" ,"c" =>  "three" ,"d" =>  "four" ];
            extract($arr,);
            echo "\$a = $a; \$b = $b;  \$c = $c;  \$d = $d;";
            
            
            // <!-- -----------------[19]----------------------- -->
            // -------------------------------------  //
            
            
            echo "<h1>array_diff</h1>";
            
            $chr1 = ["Apple", "Orange" , "Banana"];
            $chr2 = ["Rose", "Orange" , "Sprinkle"];
            
            $result = array_diff($chr1, $chr2);
            print_r($result);
            
            
            // <!-- -----------------[20]----------------------- -->
            
            echo "<h1>array_diff_assoc</h1>";
            
            $fruits = ['A' => "Apple", 'B' => "Ball", 'C' => "Cat", 'D' => "duck", ];
            $fruit = ['a' => "apple", 'B' => "Ball", 'c' => "Cat", 'D' => "Duck", ];
            
            
            $result = array_diff($fruits, $fruit);
            print_r($result);
            
            
            
            // <!-- -----------------[20]----------------------- -->

            // Compare and return the matches - Compare only values
            
            
            echo "<h1>array_intersect</h1>";

            $fruits = ['A' => "Apple", 'B' => "Ball", 'C' => "Cat", 'D' => "duck", ];
            $fruit = ['a' => "apple", 'B' => "Ball", 'c' => "Cat", 'D' => "Duck", ];
            
            $result = array_intersect($fruits, $fruit);
            print_r($result);
            
            
            

            
            







            ?>
</body>
</html>