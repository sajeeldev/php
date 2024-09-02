<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String explode & implode</title>
</head>

        <h1>String explode and implode</h1>

        <?php

        echo "<h1>String explode function</h1>";
        echo "<h5> str1 = 'This is a string, and explode funciton will break this string into array';
        print_r( explode('' , str1));</h5>";
        // explode() function- must pass two arguments, First parameter is saparator, specifies where to break the string.
        $str1 = "This is a string, and explode funciton will break this string into array";
        print_r( explode(" ", $str1));


        echo "<br>";
        echo "<br>";

        echo "<h1>String implode function</h1>";

        // implode() function: implode function join array elements and return a string
        $arr = array('Hello', 'This', 'is', 'just', 'a', 'line', 'of', 'code');
        print_r(implode(' ', $arr));

        ?>
</body>
</html>