<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>str_split & chunk_split</title>
</head>
<body>
         <h1>str_split & chunk_split</h1>

         <?php
         
            // str_split - this function break string and return an array

            $str = "This is a string";
            print_r(str_split($str, 5));

            echo "<br>";
            echo "<br>";

            // chunk_split - this function break string and return a string

            $arr = "This is a string";
            echo chunk_split($arr, 2);
         
         ?>
</body>
</html>