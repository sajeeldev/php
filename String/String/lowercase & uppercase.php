<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lowercase & uppercase</title>
</head>
<body>
        <h1>lowercase & uppercase</h1>

        <ul>
            <li>strtolower</li>
            <li>strtoupper</li>
            <li>lcfirst</li>
            <li>ucfirst</li>
            <li>ucwords</li>
        </ul>

        <?php

            // strtolower - Convert all the characters to lowercase

            $str = "THIS IS A STRING WILL ALL CHAR UPPERCASE CONVERTED TO LOWERCASE";
            echo strtolower($str);

            echo "<br>";
            echo "<br>";

            // strtoupper - Convert all the characters to uppercase

            $str = "this is a string with all char lowercase converted to uppercase";
            echo strtoupper($str);

            echo "<br>";
            echo "<br>";

            // lcfirst - convert the first character of the string to lowercase

            $str = "This is a string with first char of line uppercase converted to lowercase";
            echo lcfirst($str);

            echo "<br>";
            echo "<br>";

            // usfirst - this will convert the first char of the string to uppercase

            $str = "this is a string with first char of line lowercase converted to uppercase";
            echo lcfirst($str);

            echo "<br>";
            echo "<br>";

            // ucwords - this function will convert the first letter of the words to uppercase in the string

            $str = "this is a string will all the first letter lowercase converted to uppercase";
            echo ucwords($str);

        ?>
</body>
</html>