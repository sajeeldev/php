<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>strip_tags & wordwrap</title>
</head>
<body>
        <h1>strip_tags & wordwrap</h1>

        <?php

            // strip_tags - remove tags from the string if any 

            echo strip_tags("Hello <b>World</b>");

            echo "<br>";
            echo "<br>";

            // wordwrap - perform actions based on 3rd parameter when it reaches a specific length.

            $str = "This is a new string";
            echo wordwrap($str, 5, "<br>");
        
        ?>
</body>
</html>