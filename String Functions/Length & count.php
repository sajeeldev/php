<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Length and Count function</title>
</head>
<body>
        <h1>String Lenth and Count function</h1>

        <?php
            echo "<h1>strlen</h1>";
            // strlen function - Return the length of the character in a string
            $str1 = "Sajeel ur Rehman";
            echo strlen($str1);
            
            echo "<h1>str_word_count</h1>";
            // count function - Count the number of words found in the string
            $str2 = "Sajeel ur Rehman";
            echo str_word_count($str1);

            
        ?>
</body>
</html>