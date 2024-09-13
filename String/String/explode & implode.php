<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP String Functions - explode & implode</title>
</head>
<body>
        <h1>explode & implode</h1>

        <?php

            // explode - function convert the string into array - must specify the separator 

            $str = "This will convert string into array";
            print_r(explode(" ",$str));

            echo "<br>";
            echo "<br>";

            // implode - function convert the array into string - separator is optional

            $arr = ["This", "is", "an", "array" ];
            echo implode(" ", $arr);

            echo "<br>";
            echo "<br>";
        
        ?>
</body>
</html>