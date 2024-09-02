<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Search Functions</title>
</head>
<body>
        <h1>String Search Functions</h1>

        <?php

            // strstr - find and return the first word, specified in the second parameter.
            $str = "Hello, I am learning php";
            echo strstr($str,'php');

            echo "<br>";
            echo "<br>";
            // strchr() - function same like strstr
            $str2 = "Hello, I am learning php";
            echo strchr($str2, "php");
            
            echo "<br>";
            // strrchr - function return the specified word and all words after the specified word in the string.
            echo strrchr("Hello, I am learning php", "learning");

            // strpbrk - function search for a specified 
            echo strpbrk( "Hello, I am learning php", "l");

            ?>
</body>
</html>