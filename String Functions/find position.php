<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find position function</title>
</head>
<body>
    <h1>String find position function</h1>

    <?php

        // strpos() - function find the position [return the position in number] of first word, specified in second parameter - case sensitive
        echo strpos("Hello, This is php and i am learning php and php is a scripting language","php");
        
        echo "<br>";
        // strrpos - find position of last occurrance of a string - case sensitive
        echo strrpos("Hello, This is php and i am learning php and php is a scripting language","php");
        
        // stripos() - finds the position of first word 
        echo stripos("Hello, This is php and i am learning php and php is a scripting language","php");
        
        // strripos() - finds the 
        echo strripos("Hello, This is php and i am learning php and php is a scripting language","php");
    ?>
</body>
</html>