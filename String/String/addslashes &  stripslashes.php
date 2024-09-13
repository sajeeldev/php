<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>addslashes & stripslashes</title>
</head>
<body>

        <h1>addslashes & stripslashes</h1>

        <?php

            // addslashes - add slashes at the front of each double quote (")

            echo addslashes('This is "a" string');

            echo "<br>";
            echo "<br>";

            // addcslashes - add backslash before each character specified in the second parameter

            echo addcslashes("This is a new string", "i");

            echo "<br>";
            echo "<br>";

            // stripslashes - Remove backslash

            echo stripslashes("He\llo World!");

            echo "<br>";
            echo "<br>";

            // stripcslashes - Remove backslash

            echo  stripslashes("He\l\l\o \World!");

            echo "<br>";

        ?>

</body>
</html>