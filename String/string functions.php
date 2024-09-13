<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Functions</title>
</head>
<body>
        <h1>PHP string functions</h1>

        <?php

            //  1 - addcslashes functions add slashes before every character specified in the second parameter
            $str = addcslashes("This is a string", "a");
            echo $str;

            echo "<br>";
            echo "<br>";

            // 2 - addslashes add back slashes in front of each double quote

            $str = addslashes('This is "    " string');
            echo $str;

            echo "<br>";
            echo "<br>";

            // 3 - Convert binary to hexadecimal values

            $str = bin2hex("Hello World!");
            echo($str);
        
        ?>
</body>
</html>