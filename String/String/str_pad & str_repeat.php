<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>str_pad & str_repeat</title>
</head>
<body>
        <h1>str_pad & str_repeat</h1>

        <?php

            // str_pad - add the number of characters to the right side of the string specified in the parameter
            echo str_pad("hello", 10, "to" );

            echo "<br>";
            echo "<br>";

            // str_repeat - repeat the string the number of times specified in the string
            echo str_repeat("wow . ", 10);
        
        ?>
</body>
</html>