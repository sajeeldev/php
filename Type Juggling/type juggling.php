<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Type Juggling</title>
</head>
<body>
        <h1>Type Juggling</h1>
        <p>Type juggling in php refers to an automatic conversion of data types during operations or comparisons</p>

        <?php
            echo "<h1>Numeric and string Operations</h1>";
            echo "<p>PHP can automatically convert between numeric and string data types when performig operations, For example</p>";

            $a = 10;
            $b = "20";
            $sum = $a  + $b; // The result will be 30 - because the php has higher priority for integers it wil automatically detect string as integer because of +  and add those numbers, php has searate operators for math operations and separate for concatenation
            echo "The result of 10 and '20' is: " . $sum;

            echo "<br>";
            echo "<br>";

            // another example of string and boolean comparison

            $str = "0";
            $bool = false;
            if ( $str == $bool) {
                echo "This condition is True"; // this condition is true becuase 0 is loosely equal to false
            }

            echo "<br>";
            echo "<br>";

            // Null and string comparison

            $str = "0";
            $null = null;
            if($str == $null){
                echo "This condition is true: "; // This condition is not true 
            }

            // string and array comparison

            $arr = [1,2,3];
            $str = "123";
            if($arr == $str){
                echo "This condition is True";
            }

        ?>
</body>
</html>