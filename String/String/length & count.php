<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP length & count functions</title>
</head>
<body>
        <h1>strlen & str_word_count</h1>

        <?php

            // str_len - return the numbers of characters in the string;
            
            echo strlen("Hello World");

            echo "<br>";
            echo "<br>";

            // str_word_count - return the number of words in the string

            echo str_word_count("This is a string");
        
        ?>
</body>
</html>