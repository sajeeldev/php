<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String str_split & chunk_split</title>
</head>
<body>
    <h1>Str_split and chunk_split</h1>

    <?php

        echo "<h1>str_split</h1>";
        // str_split function split string into an array, we can define length in second parameter it's optional
        $str1 = "This is a string";
        print_r(str_split($str1, 5));
        
        echo "<h1>Chunk_split</h1>";
        
        // chunk_split - this function will also make pieces of the string, three parmeters - one required two optional
        $str2 = "This is another string";
        echo(chunk_split($str2,2));
    ?>
</body>
</html>