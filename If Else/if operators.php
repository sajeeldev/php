<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP If Operators</title>
</head>
<body>
        <h1>PHP If Operators</h1>

        <p>Comparison Operators</p>

        <?php

            $x = 10;
            $y = 10;

            if($x > 10){
                echo "Answer is correct";
            } echo "<br>";

            if($x < 100){
                echo "X is less than hundred";
            } echo "<br>";

            // equal to operator

            if($x == 10){
                echo "X is Equal to 10";
            } echo "<br>";

            // identical operator

            if($x === $y){
                echo "The value and type of x and y are equal to each other";
            } echo "<br>";

            if($x !== $y){
                echo "The value and type of x and y are equal to each other";
            } echo "<br>";

            if($x != 10){
                echo "Not Equal";
            } echo "<br>";


        
        ?>
</body>
</html>