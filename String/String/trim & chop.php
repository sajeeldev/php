<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>trim & chop</title>
</head>
<body>
        <h1>PHP trim & chop Function</h1>

        <?php
        
            // trim - Remove characters from both side of the string

            echo trim("Hello World!", "H!d");

            echo "<br>";
            echo "<br>";

            // chop - Remove characters from the right side of a string

            echo chop("Hello World", "Hld");

        
        ?>
</body>
</html>