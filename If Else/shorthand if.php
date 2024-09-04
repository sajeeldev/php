<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Short hand if - Statement</title>
</head>
<body>
        <h1>Shorthand if - statement</h1>

        <?php
            $z = 10;
            if ($z >= 10)  $b = "Hello";
            echo $b;
            
            echo "<br>";

            // ternary operator
            $a = 20;
            $ans = ($a > 10) ? "True" : "False";
            echo $ans;
        ?>
</body>
</html>